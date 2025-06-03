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
            <?php echo e(__('Sales')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!--<h2 class="text-2xl font-bold mb-4">Item List</h2>-->

                <a href="<?php echo e(route('sales.create')); ?>" class="bg-blue-500 text-white bg-gray-800 px-4 py-2 rounded">
                    Create New Sale
                </a>

                <?php if(session('success')): ?>
                    <div class="mt-4 p-3 bg-green-200 text-green-800 rounded">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <table class="table-auto w-full mt-4 border-collapse border border-gray-300 display" id="pagination-table">
                    <thead>
                        <tr class="bg-gray-100">
                              
                            <th>
                <span class="flex items-center">
                    ID
                </span>
            </th>
                            <th class="border border-gray-300 px-4 py-2">Product Name</th>
                            <th class="border border-gray-300 px-4 py-2">Amount </th>
                            <th class="border border-gray-300 px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saleprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2"><?php echo e($saleprod->id); ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?php echo e($saleprod->product_name); ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?php echo e($saleprod->amount); ?></td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="<?php echo e(route('sales.show', $saleprod->id)); ?>" class="text-blue-600 ">View</a>
                                <a href="<?php echo e(route('sales.edit', $saleprod->id)); ?>" class="text-yellow-600 ml-2">Edit</a>
                                <form action="<?php echo e(route('sales.destroy', $saleprod->id)); ?>" method="POST" class="inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-red-600 ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
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
 
<?php /**PATH C:\laravelapps\task-manager\resources\views/sales/index.blade.php ENDPATH**/ ?>