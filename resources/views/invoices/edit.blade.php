<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                 

<form action="{{ route('invoices.update', $getinvoice->id) }}" method="POST" class="mt-6 space-y-6">
    @csrf
    @method('PUT')
	 
	 
	<div class="grid grid-cols-3 gap-4 p-4">
  <div class=" container flex h-auto flex-col bg-white p-4   rounded shadow">
	<div class="mb-3 sm:grid sm:gap-10 flex flex-col lg:flex-row undefined px-5 sm:px-6 py-4 sm:py-3 lg:items-center sm:grid-cols-3">
        <label for="status"  class="block font-medium text-sm text-gray-700">Status</label>
		<span class="text-xs px-2 py-1 rounded bg-green-500 text-white">Paid</span>
	</div>
	<div class="mb-3 sm:grid sm:gap-10 flex flex-col lg:flex-row undefined px-5 sm:px-6 py-4 sm:py-3 lg:items-center sm:grid-cols-3">
        <label for="status"  class="block font-medium text-sm text-gray-700">Client </label>
		<span class="  px-2 py-1  ">{{ $getinvoice->client_name }}</span>
	</div>
  </div>
  <div class="col-span-2 container flex h-auto flex-col bg-white p-4   rounded shadow">
    <div class="mb-3 sm:grid sm:gap-10 flex flex-col lg:flex-row undefined px-5 sm:px-6 py-4 sm:py-3 lg:items-center sm:grid-cols-3">
        <label for="status"  class="block font-medium text-sm text-gray-700">Status</label>
        <input type="text" name="status" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" value="{{ $getinvoice->status }}" required>
    </div>
	<div class="mb-3">
        <label for="invid"  class="block font-medium text-sm text-gray-700">Invoice Id</label>
        <input type="text" name="invid" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" value="{{ $getinvoice->invoice_id }}"  required>
    </div>
	<div class="mb-3">
        <label for="client"  class="block font-medium text-sm text-gray-700">Client</label>
        <input type="text" name="client" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" value="{{ $getinvoice->client_name }}"  required>
    </div>
	<div class="mb-3">
        <label for="amount"  class="block font-medium text-sm text-gray-700">Amount</label>
        <input type="text" name="amount" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" value="{{ $getinvoice->amount }}"  required>
    </div><div class="mb-3">
        <label for="balance"  class="block font-medium text-sm text-gray-700">Balance</label>
        <input type="text" name="balance" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" value="{{ $getinvoice->balance }}"  required>
    </div><div class="mb-3">
        <label for="date"  class="block font-medium text-sm text-gray-700">Date</label>
        <input type="text" name="date" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"  value="{{ $getinvoice->date }}" required>
    </div>
	<div class="mb-3">
        <label for="duedate"  class="block font-medium text-sm text-gray-700">Due Date</label>
        <input type="text" name="duedate" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" value="{{ $getinvoice->due_date }}"  required>
    </div>
	<div class="flex items-center gap-4">
		<button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Update</button>
	</div>
</form>

    </div>
</x-app-layout>
