<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Invoice;
use Illuminate\Http\Request;
DB::enableQueryLog();

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoices.create');
    }

    public function stores(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Invoice::create($request->all());
        return redirect()->route('invoices.index')->with('success', 'Invoice created successfully.');
    }
	public function store(Request $request)
	{
		$request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Invoice::create($request->all());
        return redirect()->route('invoices.index')->with('success', 'Invoice created successfully.');
		/* $validated = $request->validate([
			'name' => 'required|string|max:255',
			'description' => 'required|string|max:255'//'price' => 'required|numeric|min:0',
		]);

		Item::create($validated);

		return redirect()->route('invoices.index')->with('success', 'Item created successfully.'); */
		//return redirect()->back()->with('success', 'Item added successfully!');
	}

    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    public function edit( Invoice $invoice)
    { 
		$id = $invoice->id;
		  $getinvoice = DB::table('invoices')
			->join('clients', 'clients.id', '=', 'invoices.client')
			->select('*' )
			->where('invoices.id', $id)
			->first(); 
		 //dd(DB::getQueryLog());// dd($getinvoice->toSql());
		 // Return the view with the invoice data */
        return view('invoices.edit', compact('getinvoice'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $invoice->update($request->all());
        return redirect()->route('invoices.index')->with('success', 'Invoice updated successfully.');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoices.index')->with('success', 'Invoice deleted successfully.');
    }
}