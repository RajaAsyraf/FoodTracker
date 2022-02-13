<?php

namespace App\Http\Controllers;

use App\Service\ItemService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(ItemService $item)
    {
        $items = $item->all();
        return view('dashboard', compact('items'));
    }
}
