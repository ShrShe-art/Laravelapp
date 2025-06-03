

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Your Tasks</h2>
    <a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-primary">Add Task</a>
    <ul class="list-group mt-3">
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item">
                <strong><?php echo e($task->title); ?></strong> - <?php echo e($task->description); ?>

                <a href="<?php echo e(route('tasks.edit', $task)); ?>" class="btn btn-sm btn-warning">Edit</a>
                <form action="<?php echo e(route('tasks.destroy', $task)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravelapps\task-manager\resources\views/tasks/index.blade.php ENDPATH**/ ?>