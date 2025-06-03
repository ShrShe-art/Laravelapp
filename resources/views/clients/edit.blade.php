<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                 

<form action="{{ route('items.update', $item->id) }}" method="POST" class="mt-6 space-y-6">
    @csrf
    @method('PUT')
	
	 
	
    <div class="mb-3">
        <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
        <input type="text" name="name" class="mb-12 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" value="{{ $item->name }}" required>
		
    </div> 
    <div class="mb-3">
        <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
        <textarea name="description" class="mb-12 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required>{{ $item->description }}</textarea>
    </div>
	<div class="flex items-center gap-4">
		<button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Update</button>
	</div>
</form>

    </div>
</x-app-layout>
