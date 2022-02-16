<?php

namespace App\Service;

class ItemService
{
    public function all()
    {
        return auth()->user()->inventory->items ?? [];
    }

    public function add($name, $quantity, $unit, $expiredAt, $location)
    {
        return auth()->user()->inventory->items()->create([
            'name' => $name,
            'quantity' => $quantity,
            'unit' => $unit,
            'expired_at' => $expiredAt,
            'location' => $location,
        ]);
    }

    public function consume(Item $item, $quantity)
    {
        // add into consume item table
        // $item->consumes->create();
        return $item;
    }
}