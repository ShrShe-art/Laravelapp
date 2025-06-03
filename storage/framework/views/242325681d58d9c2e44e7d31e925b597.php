<h2 class="text-xl font-semibold mb-4">Add New Product</h2>
<form action="<?php echo e(route('items.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-4">
        <input type="text" name="name" placeholder="Product Name"
               class="w-full border px-3 py-2 rounded" required>
    </div>
    <div class="mb-4">
        <input type="number" name="price" placeholder="Price"
               class="w-full border px-3 py-2 rounded" required>
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
</form>
<?php /**PATH C:\laravelapps\task-manager\resources\views/partials/forms/product-form.blade.php ENDPATH**/ ?>