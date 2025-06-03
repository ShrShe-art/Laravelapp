<div id="modal" class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
        <button onclick="closeModal()" class="absolute top-2 right-3 text-gray-600 hover:text-black text-xl">&times;</button>

        
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH C:\laravelapps\task-manager\resources\views/components/modal.blade.php ENDPATH**/ ?>