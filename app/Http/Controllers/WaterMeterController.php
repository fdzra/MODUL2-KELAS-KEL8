<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\WaterUsage;  // Your Eloquent model

class WaterMeterController extends Controller
{
    public function fetchData()
    {
        $response = Http::get('http://127.0.0.1:5000/data_air');
        if ($response->successful()) {
            $data = $response->json()['data'];

            foreach ($data as $entry) {
                // Insert data into your database if it doesn't exist
                $timestamp = new \DateTime($entry['timestamp']);
                $formattedTimestamp = $timestamp->format('Y-m-d');
                WaterUsage::updateOrCreate(
                    ['id_perangkat' => $entry['id_perangkat'],
                    'timestamp' => $entry['timestamp']],  // Use unique key to prevent duplicates
                    [
                        'id_perangkat' => $entry['id_perangkat'],
                        'timestamp' => $formattedTimestamp,
                        'penggunaan' => $entry['penggunaan'],
                        'status' => $entry['status']
                    ]
                );
            }

            return response()->json(['message' => 'Data fetched and stored successfully']);
        }

        return response()->json(['message' => 'Failed to fetch data'], 500);
    }
}
