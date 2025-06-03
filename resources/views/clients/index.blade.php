<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Items') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!--<h2 class="text-2xl font-bold mb-4">Item List</h2>-->

                <a href="{{ route('clients.create') }}" class="bg-blue-500 text-white bg-gray-800 px-4 py-2 rounded">
                    New Client
                </a>
				
				<!-- Button to open modal - ->
<button onclick="openModal()" class="bg-blue-600 text-white px-4 py-2 rounded">
    Add Item
</button>-->

                @if(session('success'))
                    <div class="mt-4 p-3 bg-green-200 text-green-800 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table-auto w-full mt-4 text-left border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-white-300 bg-blue-400 text-white  px-4 py-2">ID</th>
                            <th class="border border-white-300 bg-blue-400 text-white  px-4 py-2">Client Name</th>
                            <th class="border border-white-300 bg-blue-400 text-white  px-4 py-2">Email</th>
                            <th class="border border-white-300 bg-blue-400 text-white  px-4 py-2">Balance</th>
                            <th class="border border-white-300 bg-blue-400 text-white  px-4 py-2">Paid Date</th>
                            <th class="border border-white-300 bg-blue-400 text-white  px-4 py-2">created</th>
                            <th class="border border-white-300 bg-blue-400 text-white  px-4 py-2">Website</th>
                            <th class="border border-white-300 bg-blue-400 text-white  px-4 py-2"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $item)
                        <tr>
                            <td class=" px-4 py-2">{{ $item->id }}</td>
                            <td class=" px-4 py-2">{{ $item->client_name }}</td>
                            <td class=" px-4 py-2">{{ $item->email }}</td>
                            <td class=" px-4 py-2">${{ $item->balance }}</td>
                            <td class="  px-4 py-2">{{ $item->paid_date }}</td>
                            <td class=" px-4 py-2">{{ $item->created }}</td>
                            <td class=" px-4 py-2">{{ $item->website }}</td>
                            <td class="px-4 py-2 text-right">
                        <div x-data="{ open: false }" class="relative inline-block text-left">
                            <button @click="open = !open" class="bg-blue-500 text-white px-3 py-1 rounded text-sm">
                                Actions ▾
                            </button>
                            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-32 bg-white border border-gray-200 rounded shadow-md z-10">
                                <a href="{{ route('clients.edit', $item->id) }}" class="block px-4 py-2 text-sm hover:bg-gray-100">Edit</a>
                                <form method="POST" action="{{ route('clients.destroy', $item->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                       <!--     <td class=" px-4 py-2">
                                <a href="{{ route('clients.show', $item->id) }}" class="text-blue-600  ">View</a>
                                <a href="{{ route('clients.edit', $item->id) }}" class="text-yellow-600 ml-2">Edit</a>
                                <form action="{{ route('clients.destroy', $item->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>-->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
		<!-- Trigger Button - ->
<button onclick="openModal()" class="bg-blue-600 text-white px-4 py-2 rounded">Add Product</button>		-->
		<!-- Reusable Modal -->
<x-modal>
    @include('partials.forms.product-form')
</x-modal>		
				<!-- Modal -->
<div id="myModal" class="fixed inset-0 z-50 flex clients-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
        <h2 class="text-xl font-semibold mb-4">Add New Item</h2>
        
        <!-- Form inside modal -->
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold">Item Name</label>
                <input type="text" name="name" id="name" required
                       class="mt-1 w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-semibold">Description</label>
                <input type="text" name="description" id="description" required step="0.01"
                       class="mt-1 w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex justify-end space-x-2">
                <button type="button" onclick="closeModal()" class="bg-gray-300 px-4 py-2 rounded">
                    Cancel
                </button>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Reusable Modal -->
 

				
            </div>
        </div>
    </div>
	<script>
    function openModal() {
        document.getElementById('myModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('myModal').classList.add('hidden');
    }
</script>

</x-app-layout>
``
