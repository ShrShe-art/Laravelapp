<?php 
namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

//public function chart() 
class ChartController extends Controller
{
	public function chart() {
		$sales = Sale::select('product_name', 'amount')->get();

		// Separate labels and data
		$labels = $sales->pluck('product_name');
		$data = $sales->pluck('amount');

		return view('dynachart', compact('labels', 'data'));
	}
}
