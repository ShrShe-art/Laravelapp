<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $sale = Sale::all();
        return view('sales.index', compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sales.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'amount' => 'required'
        ]);

        Sale::create($request->all());
        return redirect()->route('sales.index')->with('success', 'Sale created successfully.');
    }

    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        return view('sales.edit', compact('sale'));
    }

    public function update(Request $request, Sale $sale)
    { 
        $request->validate([
            'product_name' => 'required',
            'amount' => 'required'
        ]);

        $updated = $sale->update($request->all());
        //return redirect()->route('sales.index')->with('success', 'Sale updated successfully.');
		if ($updated) {
			 return redirect()->route('sales.index')->with('success', 'Sale updated successfully.');
		} else {
			return redirect()->back()->with('error', 'Update failed. Please try again.');
		}
    }

    public function destroy(Sale $Sale)
    {
        $Sale->delete();
        return redirect()->route('sales.index')->with('success', 'Sale deleted successfully.');
    }
}