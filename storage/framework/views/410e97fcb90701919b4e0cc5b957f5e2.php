<header class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            <!-- Logo or App Name -->
            <div class="flex items-center">
                <a href="<?php echo e(route('dashboard')); ?>" class="text-xl font-semibold text-gray-800">
                    
                </a>
            </div>

            <!-- Search Bar -->
            <div class="flex-1 mx-4">
                <input type="text" placeholder="Search..." class="w-80 border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <!-- User Dropdown -->
            <div class="relative">
                <button class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 focus:outline-none">
                    <span><?php echo e(Auth::user()->name); ?></span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.084l3.71-3.854a.75.75 0 011.08 1.04l-4.25 4.417a.75.75 0 01-1.08 0L5.25 8.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>
                <!-- You can add dropdown content here if needed -->
                  
            </div>
        </div>
    </div>
</header><?php /**PATH C:\laravelapps\task-manager\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>