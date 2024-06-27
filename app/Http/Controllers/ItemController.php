<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('dashboard', compact('items'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Item::create($request->only('name', 'description'));

        return redirect()->route('dashboard')
            ->with('success', 'Item created successfully.');
    }

    public function edit(Item $item)
    {
        return view('edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $item->update($request->only('name', 'description'));

        return redirect()->route('dashboard')
            ->with('success', 'Item updated successfully.');
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Item deleted successfully.');
    }
}
