<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\WaterMeterController;

class FetchWaterData extends Command
{
    protected $signature = 'fetch:water-data';
    protected $description = 'Fetch water data from Flask API';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $controller = new WaterMeterController();
        $controller->fetchData();
    }
}
