<x-app-layout>
    <!--<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>-->
    <div class=" ">
        <div class="max-w-full mx-auto sm:px-8 lg:px-12">
            <div class="  overflow-hidden shadow-sm sm:rounded-lg"> 
			<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6 xl:grid-cols-4 py-4">
			  <!-- Metric Item Start -->
			  <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] border-4 border-l-blue-500">
				<p class="text-theme-sm text-blue-500 dark:text-gray-400"> Total Orders </p>
				<span class="rounded-full bg-blue-600 p-5 float-right">
				<i class="fa fa-shopping-cart fa-2x float-right text-white"></i></span>
				<div class="mt-1 ">
				  <div>
					<h4 class="text-2xl py-1 font-bold text-blue-600 dark:text-white/90">4805 </h4>
				  </div>

				  <div class="flex items-center gap-1">
					<span class="flex items-center gap-1 rounded-full bg-success-50   text-theme-xs font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500"> +2.5% </span>
					<span class="text-theme-xs text-gray-500 dark:text-gray-400"> from last month </span>
				  </div>
				</div>
			  </div>
			  <!-- Metric Item End -->

			  <!-- Metric Item Start -->
			  <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] border-4 border-l-lime-500">
				<p class="text-theme-sm text-gray-500 dark:text-gray-400"> Total Revenue </p>
				<span class="rounded-full bg-lime-600 p-5 float-right">
				<i class="fas fa-file-invoice-dollar fa-2x float-right text-white"></i></span>
				<div class="mt-1 ">
				  <div>
					<h4 class="text-2xl py-1 font-bold text-lime-600 dark:text-white/90">$84,245 </h4>
				  </div>

				  <div class="flex items-center gap-1">
					<span class="flex items-center gap-1 rounded-full bg-success-50  text-theme-xs font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500"> +4% </span>

					<span class="text-theme-xs text-gray-500 dark:text-gray-400"> Vs last month </span>
				  </div>
				</div>
			  </div>
			  <!-- Metric Item End -->

			  <!-- Metric Item Start -->
			  <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]  border-4 border-l-rose-500">
				<p class="text-theme-sm text-gray-500 dark:text-gray-400">Bounce Rate</p>
				<span class="rounded-full bg-rose-600 p-5 float-right">
				<i class="fa fa-bar-chart fa-2x float-right text-white"></i></span>
				<div class="mt-1 ">
				  <div>
					<h4 class="text-2xl py-1 font-bold text-rose-600 dark:text-white/90">34.6%</h4>
				  </div>

				  <div class="flex items-center gap-1">
					<span class="flex items-center gap-1 rounded-full bg-error-50   text-theme-xs font-medium text-error-600 dark:bg-error-500/15 dark:text-error-500">  -1.59% </span>

					<span class="text-theme-xs text-gray-500 dark:text-gray-400">  Vs last month </span>
				  </div>
				</div>
			  </div>
			  <!-- Metric Item End -->

			  <!-- Metric Item Start -->
			  <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]  border-4 border-l-purple-500">
				<p class="text-theme-sm text-gray-500 dark:text-gray-400">Total Customers</p>
				<span class="rounded-full bg-purple-600 p-5 float-right">
				<i class="fa fa-users fa-2x float-right text-white"></i></span>
				<div class="mt-1 ">
				  <div>
					<h4 class="text-2xl py-1 font-bold text-purple-600 dark:text-white/90"> 8.4K </h4>
				  </div>

				  <div class="flex items-center gap-1">
					<span class="flex items-center gap-1 rounded-full bg-success-50  text-theme-xs font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500"> +7% </span>

					<span class="text-theme-xs text-gray-500 dark:text-gray-400"> Vs last month </span>
				  </div>
				</div>
			  </div>
				<!-- Metric Item End -->
			</div>
                
				<!--<div class="grid grid-cols-4 gap-4">
				  <div class="container flex h-auto flex-col rounded-lg bg-gray-600 p-2 text-white shadow">01</div>
				  <div class="container flex h-auto flex-col rounded-lg bg-gray-600 p-2 text-white shadow">02</div>
				  <div class="container flex h-auto flex-col rounded-lg bg-gray-600 p-2 text-white shadow">03</div> 
				</div>-->
				 
				 <div class="grid grid-cols-3 gap-4 p-4">
                    <div class="col-span-1 container flex h-auto flex-col bg-white p-4   rounded shadow">
                        <div class="card-header pb-0">  
                            <h2 class="text-lg font-semibold mb-2 border-b-2 border-gray-500">Recent Orders</h2>
                        </div> 
                        <p class="fs-12 mb-0 text-muted">An order is an investor's instructions to a broker or brokerage firm to purchase or sell</p>
                            <div class="card-body sales-info pb-0 pt-0"> 
                                <div id="chart" class="ht-150" style="min-height: 156.9px;"><div id="apexchartso6id4lyl" class="apexcharts-canvas apexchartso6id4lyl apexcharts-theme-light" style="width: 200px; height: 156.9px;"><svg id="SvgjsSvg4806" width="200" height="156.89999999999998" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="200" height="156.89999999999998"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG4808" class="apexcharts-inner apexcharts-graphical" transform="translate(10.5, 0)"><defs id="SvgjsDefs4807"><clipPath id="gridRectMasko6id4lyl"><rect id="SvgjsRect4809" width="187" height="205" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasko6id4lyl"></clipPath><clipPath id="nonForecastMasko6id4lyl"></clipPath><clipPath id="gridRectMarkerMasko6id4lyl"><rect id="SvgjsRect4810" width="185" height="207" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient4815" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop4816" stop-opacity="1" stop-color="rgba(1,98,232,1)" offset="0"></stop><stop id="SvgjsStop4817" stop-opacity="1" stop-color="rgba(236,240,250,1)" offset="1"></stop><stop id="SvgjsStop4818" stop-opacity="1" stop-color="rgba(236,240,250,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient4826" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop4827" stop-opacity="1" stop-color="rgba(1,98,232,1)" offset="0"></stop><stop id="SvgjsStop4828" stop-opacity="1" stop-color="rgba(13,178,222,1)" offset="1"></stop><stop id="SvgjsStop4829" stop-opacity="1" stop-color="rgba(13,178,222,1)" offset="1"></stop></linearGradient></defs><g id="SvgjsG4811" class="apexcharts-radialbar"><g id="SvgjsG4812"><g id="SvgjsG4813" class="apexcharts-tracks"><g id="SvgjsG4814" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 52.3636617097865 128.6363382902135 A 53.9329268292683 53.9329268292683 0 1 1 128.6363382902135 128.6363382902135" fill="none" fill-opacity="1" stroke="rgba(236,240,250,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="12.458536585365856" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 52.3636617097865 128.6363382902135 A 53.9329268292683 53.9329268292683 0 1 1 128.6363382902135 128.6363382902135"></path></g></g><g id="SvgjsG4820"><g id="SvgjsG4825" class="apexcharts-series apexcharts-radial-series" seriesName="" rel="1" data:realIndex="0"><path id="SvgjsPath4830" d="M 52.3636617097865 128.6363382902135 A 53.9329268292683 53.9329268292683 0 1 1 144.4247125832822 89.55874064062334" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient4826)" stroke-opacity="1" stroke-linecap="butt" stroke-width="15.573170731707318" stroke-dasharray="4" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="224" data:value="83" index="0" j="0" data:pathOrig="M 52.3636617097865 128.6363382902135 A 53.9329268292683 53.9329268292683 0 1 1 144.4247125832822 89.55874064062334"></path></g><circle id="SvgjsCircle4821" r="42.703658536585365" cx="90.5" cy="90.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG4822" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText4823" font-family="Helvetica, Arial, sans-serif" x="90.5" y="120.5" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="600" fill="#0db2de" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;"></text><text id="SvgjsText4824" font-family="Helvetica, Arial, sans-serif" x="90.5" y="96.5" text-anchor="middle" dominant-baseline="auto" font-size="22px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">83%</text></g></g></g></g><line id="SvgjsLine4831" x1="0" y1="0" x2="181" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4832" x1="0" y1="0" x2="181" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div> 
                                    <div class="grid grid-cols-2"> 
                                    <div class="col-md-6 col"> <p class="mb-0  flex"><span class="legend bg-primary brround"></span>Delivered</p><h3 class="mb-1">5238</h3> <div class="d-flex"> <p class="text-gray-500 ">Last 6 months</p></div> </div>
                                     <div class="col-md-6 col"> <p class="mb-0  flex"><span class="legend bg-info brround"></span>Cancelled</p><h3 class="mb-1">3467</h3> <div class="d-flex"> <p class="text-gray-500">Last 6 months</p></div> </div> </div> </div> </div> 
                                    
                                    
					<div class="col-span-2 container flex h-auto flex-col bg-white p-4   rounded shadow">						
						<h2 class="text-lg font-semibold mb-2 border-b-2 border-gray-500">Daily Revenue</h2>
						<canvas id="barChart" height="300"></canvas>
					</div>
				</div>
				<div class="grid grid-cols-2 gap-4">
					<div class="container flex h-auto flex-col bg-white p-4   rounded shadow">
                        <h2 class="text-lg font-semibold mb-2 border-b-2 border-gray-500">Daily Revenue</h2>
						<canvas id="doubleLineChart" height="300"></canvas>
					</div>
					<!-- Sales Bar Chart -->
					<div class="container flex h-auto flex-col bg-white p-4   rounded shadow">
						<h2 class="text-lg font-semibold mb-2 border-b-2 border-gray-500">Sales by Product</h2>
						<canvas id="salesChart"></canvas>
					</div>


                    <div class="container flex h-auto flex-col bg-white p-4   rounded shadow"> <div class="card"> <div class="card-header pb-1"> <h3 class="card-title mb-2">Sales Activity</h3> 
                    <p class="fs-12 mb-0 text-gray-500">Sales activities are the tactics that salespeople use to achieve their goals and objective</p></div> <div class="product-timeline card-body pt-2 mt-1"> 
                        <ul class="timeline-1 m-0"> 
                            <li class="my-3"> <i class="fa fa-pie-chart bg-gradient-to-r from-blue-500 to-purple-400 text-white product-icon"></i> 
                            <span class="fw-medium m-12 fs-14">Total Products</span> <a href="javascript:void(0);" class="float-end fs-11 text-gray-500">3 days ago</a> <p class="mx-12 text-gray-500 text-sm">1.3k New Products</p></li> 

                            <li class="my-3"> <i class="fa fa-shopping-cart bg-gradient-to-r from-red-500 to-rose-400 text-white product-icon"></i> <span class="fw-medium m-12 fs-14">Total Sales</span> <a href="javascript:void(0);" class="float-end fs-11 text-gray-500">35 mins ago</a> <p class="mx-12 text-gray-500 text-sm">1k New Sales</p></li> 

                            <li class="my-3"> <i class="fa fa-bar-chart bg-gradient-to-r from-green-500 to-lime-400 text-white product-icon"></i> <span class="fw-medium m-12 fs-14">Total Revenue</span> <a href="javascript:void(0);" class="float-end fs-11 text-gray-500">50 mins ago</a> <p class="mx-12 text-gray-500 text-sm">23.5K New Revenue</p></li> 
                            
                            <li class="my-3"> <i class="fa fa-box bg-gradient-to-r from-orange-500 to-amber-400 text-white product-icon"></i> <span class="fw-medium m-12 fs-14">Total Profit</span> <a href="javascript:void(0);" class="float-end fs-11 text-gray-500">1 hour ago</a> <p class="mx-12 text-gray-500 text-sm">3k New profit</p></li> 
                            
                            <li class="my-3"> <i class="fa fa-eye bg-gradient-to-r from-purple-500 to-violet-400 text-white product-icon"></i> <span class="fw-medium m-12 fs-14">Customer Visits</span> <a href="javascript:void(0);" class="float-end fs-11 text-gray-500">1 day ago</a> <p class="mx-12 text-gray-500 text-sm">15% increased</p></li> 
                            
                            <li class="my-3"> <i class="fa fa-edit bg-gradient-to-r from-pink-500 to-fuchsia-400 text-white product-icon"></i> <span class="fw-medium m-12 fs-14">Customer Reviews</span> <a href="javascript:void(0);" class="float-end fs-11 text-gray-500">1 day ago</a> <p class="mx-12 text-gray-500 text-sm">1.5k reviews</p></li> 
                        </ul> </div> </div> </div>
					<!-- Revenue Line Chart -->
					<div class="container flex h-auto flex-col bg-white p-4   rounded shadow">
						<h2 class="text-lg font-semibold mb-2 border-b-2 border-gray-500">Daily Revenue</h2>
						<canvas id="revenueChart"></canvas>
					</div>
					
					</div>
					
				</div>
				
				<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const salesCtx = document.getElementById('salesChart').getContext('2d');
    new Chart(salesCtx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($salesLabels) !!},
            datasets: [{
                label: 'Sales',
                data: {!! json_encode($salesData) !!},
                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        }
    });

    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'line',
        data: {
            labels: {!! json_encode($revenueLabels) !!},
            datasets: [{
                label: 'Revenue',
                data: {!! json_encode($revenueData) !!},
                borderColor: 'rgba(153, 102, 255, 1)',
                backgroundColor: 'rgba(153, 102, 255, 0.3)',
                fill: true,
                tension: 0.3
            }]
        }
    });
	
	const ctx = document.getElementById('doubleLineChart').getContext('2d');
    
    const lineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($labels),
            datasets: [
                {
                    label: 'Revenue',
                    data: @json($revenueData),
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    fill: true,
                    tension: 0.4,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                },
                {
                    label: 'Expenses',
                    data: @json($salesData),
                    borderColor: '#ef4444',
                    backgroundColor: 'rgba(239, 68, 68, 0.1)',
                    fill: true,
                    tension: 0.4,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                }
            ]
        },
        options: {
            responsive: true,
            interaction: {
                mode: 'index',
                intersect: false,
            },
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let value = context.raw;
                            return `${context.dataset.label}: ₹${value.toLocaleString()}`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return '₹' + value.toLocaleString();
                        }
                    }
                }
            },
            animation: {
                duration: 1500,
                easing: 'easeOutBounce'
            }
        }
    });
	
	const barctx = document.getElementById('barChart').getContext('2d');
    
    const barChart = new Chart(barctx, {
        type: 'bar',
        data: {
            labels: @json($labels),
            datasets: [
                {
                    label: 'Revenue',
                    data: @json($revenueData),
                    backgroundColor: '#6366f1', // Indigo
                    borderRadius: 5
                },
                {
                    label: 'Expenses',
                    data: @json($salesData),
                    backgroundColor: '#84cc16', // lime
                    borderRadius: 5
                }
            ]
        },
        options: {
            responsive: true,
            interaction: {
                mode: 'index',
                intersect: false
            },
            plugins: {
                legend: {
                    position: 'top'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let value = context.raw;
                            return `${context.dataset.label}: ₹${value.toLocaleString()}`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return '₹' + value.toLocaleString();
                        }
                    }
                },
                x: {
                    stacked: false,
                    ticks: {
                        color: '#374151'
                    }
                }
            },
            animation: {
                duration: 1000,
                easing: 'easeOutBounce'
            }
        }
    });
	
</script>

            </div>
        </div>
    </div>
</x-app-layout>
