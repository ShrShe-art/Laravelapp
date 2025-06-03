<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;


/* Route::get('/', function () {
    return view('welcome');
}); */

// Root page logic
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
});

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar'); //
/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
});
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});  

Route::middleware('auth')->group(function () {
    Route::delete('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::patch('/tasks', [TaskController::class, 'create'])->name('tasks.create');
}); 

Route::get('/reports', [ReportsController::class, 'index'])->name('reports')->middleware('auth');

Route::resource('items', ItemController::class);

Route::get('/chart', function () {
    return view('chart');
})->middleware(['auth', 'verified'])->name('chart');

 Route::get('/dynachart', [ChartController::class, 'chart'])->name('dynachart');
 
 Route::resource('sales',  SaleController::class);
 Route::resource('invoices',  InvoiceController::class);
 //Route::get('/invoices/{id}/edit', [InvoiceController::class, 'edit'])->name('invoices.edit');
 Route::resource('clients',  ClientController::class);
 
Route::get('/chatbot', [ChatbotController::class, 'index']);
Route::post('/chat', [ChatbotController::class, 'chat']);
Route::post('/items', [ItemController::class, 'store'])->name('items.store');
 

Route::get('/events', [EventController::class, 'index']);
Route::post('/events', [EventController::class, 'store']);
Route::put('/events/{event}', [EventController::class, 'update']);

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

/* Route::get('/', function () {
    return redirect()->route('tasks.index');
}); */

/* Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
}); */

require __DIR__.'/auth.php'; 
