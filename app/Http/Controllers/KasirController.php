<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function dashboard()
    {
        $user = User::all();
        return view('Kasir.kasirdashboard', compact(['user']));
    }

}
