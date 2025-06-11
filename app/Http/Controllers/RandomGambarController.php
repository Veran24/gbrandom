<?php

namespace App\Http\Controllers;

use App\Models\Gambar;

class RandomGambarController extends Controller
{
    public function index()
    {
        $gambar = Gambar::inRandomOrder()->first();
        return view('welcome', ['gambar' => $gambar]);
    }
}
