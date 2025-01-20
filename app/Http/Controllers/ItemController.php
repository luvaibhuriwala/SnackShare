<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class ItemController extends Controller
{
    public function create() {
        return view('items.create');
    }

    public function store(Request $request) {
        $request->validate([
            'menu' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'expires_at' => 'required|date|after:now',
        ]);

        Item::create([
            'giver_id' => auth()->id(),
            'menu' => $request->menu,
            'quantity' => $request->quantity,
            'expires_at' => $request->expires_at,
        ]);

        return redirect()->route('items.create')->with('success', 'Item added successfully!');
    }

}
