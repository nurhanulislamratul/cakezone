<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu()
    {
        $cakes = Service::all();

        return view('front.pages.menu', ['cake' => $cakes]);
    }
}
