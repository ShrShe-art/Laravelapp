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
            <?php echo e(__('Create Item')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
 

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('items.store')); ?>" method="POST" class="mt-6 space-y-6">
    <?php echo csrf_field(); ?>
	
	<div class="sm:grid sm:gap-10 flex flex-col lg:flex-row undefined px-5 sm:px-6 py-4 sm:py-3 lg:items-center sm:grid-cols-3" style="color: rgb(42, 48, 61); color-scheme: light;">
		<dt class="text-sm flex flex-col" style="color: rgb(42, 48, 61); color-scheme: light;">
		<span class="font-medium" style="color: rgb(42, 48, 61); color-scheme: light;">Invoice Date</span></dt>
		<dd class="mt-4 text-sm sm:mt-0 sm:col-span-2" style="color: rgb(42, 48, 61); color-scheme: light;">
			<section>
				<div class="relative">
					<input max="9999-12-31" autocomplete="new-password" type="date" class="w-full py-2 px-3 rounded-md text-sm disabled:opacity-75 disabled:cursor-not-allowed undefined border border-gray-300" placeholder="" rows="5" value="2025-04-21" style="background-color: rgb(255, 255, 255); border-color: rgb(209, 213, 219); color: rgb(42, 48, 61);">
				</div>
			</section>
		</dd>
	</div>
  <div class="grid grid-cols-3 gap-4 p-4">
  <div class=" container flex h-auto flex-col bg-white p-4   rounded shadow">
	<div class="mb-3 sm:grid sm:gap-10 flex flex-col lg:flex-row undefined px-5 sm:px-6 py-4 sm:py-3 lg:items-center sm:grid-cols-3">
        <label for="status"  class="block font-medium text-sm text-gray-700">Status</label>
		<span class="text-xs px-2 py-1 rounded bg-green-500 text-white">Paid</span>
	</div>
	<div class="mb-3 sm:grid sm:gap-10 flex flex-col lg:flex-row undefined px-5 sm:px-6 py-4 sm:py-3 lg:items-center sm:grid-cols-3">
        <label for="status"  class="block font-medium text-sm text-gray-700">Client </label>
		<span class="text-xs px-2 py-1 rounded bg-green-500 text-white">Paid</span>
	</div>
  </div>
  <div class="col-span-2 container flex h-auto flex-col bg-white p-4   rounded shadow">
    <div class="mb-3 sm:grid sm:gap-10 flex flex-col lg:flex-row undefined px-5 sm:px-6 py-4 sm:py-3 lg:items-center sm:grid-cols-3">
        <label for="status"  class="block font-medium text-sm text-gray-700">Status</label>
        <input type="text" name="status" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required>
    </div>
	<div class="mb-3">
        <label for="invid"  class="block font-medium text-sm text-gray-700">Invoice Id</label>
        <input type="text" name="invid" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required>
    </div>
	<div class="mb-3">
        <label for="client"  class="block font-medium text-sm text-gray-700">Client</label>
        <input type="text" name="client" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required>
    </div>
	<div class="mb-3">
        <label for="amount"  class="block font-medium text-sm text-gray-700">Amount</label>
        <input type="text" name="amount" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required>
    </div><div class="mb-3">
        <label for="balance"  class="block font-medium text-sm text-gray-700">Balance</label>
        <input type="text" name="balance" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required>
    </div><div class="mb-3">
        <label for="date"  class="block font-medium text-sm text-gray-700">Date</label>
        <input type="text" name="date" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required>
    </div>
	<div class="mb-3">
        <label for="duedate"  class="block font-medium text-sm text-gray-700">Due Date</label>
        <input type="text" name="duedate" class="mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required>
    </div>
    <div class="mb-3">
        <label for="description"  class="block font-medium text-sm text-gray-700">Description</label>
        <textarea name="description" class="mb-12 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required></textarea>
    </div>
	<div class="flex items-center gap-4">
		<button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Submit</button>
	</div>
	</div>
	</div>
	
</form>
</div>
        </div>
    </div>
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
<?php /**PATH C:\laravelapps\task-manager\resources\views/invoices/create.blade.php ENDPATH**/ ?>