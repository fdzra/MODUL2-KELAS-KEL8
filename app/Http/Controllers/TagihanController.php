<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagihanController
{
    public function index(Request $request): View
    {
        return view('Tagihan.index');
    }
}
