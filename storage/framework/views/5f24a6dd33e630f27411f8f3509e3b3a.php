<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
	    <link rel="stylesheet" href="<?php echo e(asset('css/mainapp.css')); ?>">
       <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.3.1/css/dataTables.bootstrap5.css" rel="stylesheet">-->
<script src="https://cdn.tailwindcss.com/3.4.1"></script>

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="font-sans antialiased">
        <div class="flex min-h-screen bg-gray-100">
            
           <?php echo $__env->make('layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>  
			   <!-- Sidebar goes here -->
           

            <!-- Page Content -->
            <main class="flex-1 bg-white px-6">
           <!-- <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 border-b shadow" style="background-color: rgb(255, 255, 255);">
            <div class="flex-1 px-4 xl:px-8 flex items-center" data-cy="topNavbar">
                <div class="flex flex-1 items-center space-x-4"><h2 class="text-sm md:text-lg whitespace-nowrap" style="color: rgb(42, 48, 61);">Products</h2>
</div></div></div> -->

<?php echo $__env->make('layouts.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>  
			<?php echo e($slot); ?>

                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
		
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
<?php /**PATH C:\laravelapps\task-manager\resources\views/layouts/app.blade.php ENDPATH**/ ?>