<?php

namespace App\Http\Controllers;

use App\Service\ItemService;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        return view('item.create');
    }

    public function store(Request $request, ItemService $item)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'string', 'max:255'],
            'unit' => ['required', 'string', 'max:255'],
            'expiredAt' => ['nullable'],
            'location' => ['nullable'],
        ]);
        try {
            $item->add($request->name, $request->quantity, $request->unit, $request->expiredAt);
        } catch (\Exception $e) {
            dd($e);
        }
        return redirect()->route('dashboard');
    }
}
