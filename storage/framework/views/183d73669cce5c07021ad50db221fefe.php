
 

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chart.js with Laravel 9</title>

</head>
<body>


<div style="width: 600px; margin: auto;"> <h3> CHART JS </h3>
    <canvas id="myChart"></canvas>
</div>

<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
 

</body>
</html><?php /**PATH C:\laravelapps\task-manager\resources\views/chartjs.blade.php ENDPATH**/ ?>