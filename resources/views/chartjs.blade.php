
 

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chart.js with Laravel 9</title>

</head>
<body>


<div style="width: 600px; margin: auto;"> <h3> CHART JS </h3>
    <canvas id="myChart"></canvas>
</div>

@vite('resources/js/app.js')
 

</body>
</html>