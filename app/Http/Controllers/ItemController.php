<?php

namespace App\Http\Controllers;

use App\Service\ItemService;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function store(Request $request, ItemService $item)
    {
        return $item->add($request->name, $request->quantity, $request->unit, $request->expiredAt);
    }
}
