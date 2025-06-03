<?php 
namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Revenue;
use Illuminate\Http\Request;
use Carbon\Carbon;

//public function chart() 
class DashboardController extends Controller
{
	public function dashboard()
	{
		// Bar Chart: Product sales
		$sales = Sale::select('product_name', 'amount', 'quantity')->get();
		$salesLabels = $sales->pluck('product_name');
		 //$salesData = $sales->pluck('amount') * $sales->pluck('quantity');
		// Multiply amount * quantity for each row
		$salesData = $sales->map(function ($item) {
			return $item->amount * $item->quantity;
		});
		//Revenue::select('date')->orderBy('date')->get();//['January', 'February', 'March', 'April'];

		// Line Chart: Daily revenue
		$revenues = Revenue::select('date', 'total')->orderBy('date')->get();		
		$labels = $revenues->pluck('date')->map(fn($d) => Carbon::parse($d)->format('F'));
		//$revenueLabels = $revenues->pluck('date')->map(fn($d) => $d->format('Y-m-d'));
		$revenueLabels = $revenues->pluck('date')->map(fn($d) => Carbon::parse($d)->format('Y-m-d'));
		$revenueData = $revenues->pluck('total');

		return view('dashboard', compact('labels',
			'salesLabels', 'salesData',
			'revenueLabels', 'revenueData'
		));
	}
}
