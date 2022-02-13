<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $items = auth()->user()->inventory->items ?? [];
        return view('dashboard', compact('items'));
    }
}
