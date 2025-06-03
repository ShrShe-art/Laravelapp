<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white   mx-auto sm:px-6 lg:px-8">
            <div class="  p-6">
    <h2 class="text-xl font-semibold mb-4">Sales Chart</h2>
    <canvas id="salesChart" width="400" height="200"></canvas>

    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');

        const salesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [{
                    label: 'Sales',
                    data: {!! json_encode($data) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
 </div>
    </div>
</x-app-layout>
