<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    public function stores(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Item::create($request->all());
        return redirect()->route('clients.index')->with('success', 'Item created successfully.');
    }
	public function store(Request $request)
	{
		$request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Item::create($request->all());
        return redirect()->route('clients.index')->with('success', 'Item created successfully.');
		/* $validated = $request->validate([
			'name' => 'required|string|max:255',
			'description' => 'required|string|max:255'//'price' => 'required|numeric|min:0',
		]);

		Item::create($validated);

		return redirect()->route('clients.index')->with('success', 'Item created successfully.'); */
		//return redirect()->back()->with('success', 'Item added successfully!');
	}

    public function show(Item $item)
    {
        return view('clients.show', compact('item'));
    }

    public function edit(Item $item)
    {
        return view('clients.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $item->update($request->all());
        return redirect()->route('clients.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('clients.index')->with('success', 'Item deleted successfully.');
    }
}