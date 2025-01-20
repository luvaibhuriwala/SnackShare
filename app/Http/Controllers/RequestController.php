<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Request as ItemRequest; // Alias the model

class RequestController extends Controller
{
    public function index()
    {
        $userInstitute = auth()->user()->institute;
        $items = Item::where('quantity', '>', 0)
                     ->where('expires_at', '>', now())
                     ->whereHas('giver', function ($query) use ($userInstitute) {
                        $query->where('institute', $userInstitute);
                        })
                     ->get();

        return view('requests.index', compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required|exists:items,id',
            'quantity' => 'required|integer|min:1', // Match the form field name
        ]);

        $item = Item::findOrFail($request->item_id);

        if ($item->quantity < $request->quantity) {
            return back()->withErrors('Not enough quantity available.');
        }

        // Deduct the requested quantity
        $item->decrement('quantity', $request->quantity);

        // Create an item request
        $itemRequest = ItemRequest::create([
            'item_id' => $item->id,
            'wanter_id' => auth()->id(),
            'quantity_requested' => $request->quantity, // Match database column
        ]);

        // Redirect to the show route with the newly created item request id
        return redirect()->route('requests.show', $itemRequest->id)->with(
            'success',
            'Request submitted! Contact the giver at: ' . $item->giver->phone_number
        );
    }
    public function show($id)
    {
        // Find the item request by ID
        $itemRequest = ItemRequest::findOrFail($id);

        // Get the associated giver's details
        $giver = $itemRequest->item->giver; // assuming the relationship exists

        return view('requests.show', compact('itemRequest', 'giver'));
    }

}
