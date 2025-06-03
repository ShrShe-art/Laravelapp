<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Items')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!--<h2 class="text-2xl font-bold mb-4">Item List</h2>-->

                <a href="<?php echo e(route('clients.create')); ?>" class="bg-blue-500 text-white bg-gray-800 px-4 py-2 rounded">
                    New Client
                </a>
				
				<!-- Button to open modal - ->
<button onclick="openModal()" class="bg-blue-600 text-white px-4 py-2 rounded">
    Add Item
</button>-->

                <?php if(session('success')): ?>
                    <div class="mt-4 p-3 bg-green-200 text-green-800 rounded">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

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
                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class=" px-4 py-2"><?php echo e($item->id); ?></td>
                            <td class=" px-4 py-2"><?php echo e($item->client_name); ?></td>
                            <td class=" px-4 py-2"><?php echo e($item->email); ?></td>
                            <td class=" px-4 py-2">$<?php echo e($item->balance); ?></td>
                            <td class="  px-4 py-2"><?php echo e($item->paid_date); ?></td>
                            <td class=" px-4 py-2"><?php echo e($item->created); ?></td>
                            <td class=" px-4 py-2"><?php echo e($item->website); ?></td>
                            <td class="px-4 py-2 text-right">
                        <div x-data="{ open: false }" class="relative inline-block text-left">
                            <button @click="open = !open" class="bg-blue-500 text-white px-3 py-1 rounded text-sm">
                                Actions ▾
                            </button>
                            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-32 bg-white border border-gray-200 rounded shadow-md z-10">
                                <a href="<?php echo e(route('clients.edit', $item->id)); ?>" class="block px-4 py-2 text-sm hover:bg-gray-100">Edit</a>
                                <form method="POST" action="<?php echo e(route('clients.destroy', $item->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                       <!--     <td class=" px-4 py-2">
                                <a href="<?php echo e(route('clients.show', $item->id)); ?>" class="text-blue-600  ">View</a>
                                <a href="<?php echo e(route('clients.edit', $item->id)); ?>" class="text-yellow-600 ml-2">Edit</a>
                                <form action="<?php echo e(route('clients.destroy', $item->id)); ?>" method="POST" class="inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-red-600 ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>-->
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
		<!-- Trigger Button - ->
<button onclick="openModal()" class="bg-blue-600 text-white px-4 py-2 rounded">Add Product</button>		-->
		<!-- Reusable Modal -->
<?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo $__env->make('partials.forms.product-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>		
				<!-- Modal -->
<div id="myModal" class="fixed inset-0 z-50 flex clients-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
        <h2 class="text-xl font-semibold mb-4">Add New Item</h2>
        
        <!-- Form inside modal -->
        <form action="<?php echo e(route('clients.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

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

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
``
<?php /**PATH C:\laravelapps\task-manager\resources\views/clients/index.blade.php ENDPATH**/ ?>