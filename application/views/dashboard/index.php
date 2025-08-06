<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipment Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        success: '#10b981',
                        warning: '#f59e0b',
                        danger: '#ef4444',
                        light: '#f9fafb',
                        dark: '#111827',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-light text-dark font-sans">
    <main class="p-6 space-y-6">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold flex items-center gap-2"><i class="bi bi-truck"></i> Shipment Track</h1>
        </div>
        <div class="grid grid-cols-3 gap-6">
            <div class="bg-white shadow-md rounded-xl p-4 flex items-center space-x-4">
                <i class="bi bi-credit-card text-3xl text-blue-500"></i>
                <div>
                    <p class="text-sm font-semibold text-gray-500">Credit</p>
                    <h2 class="text-2xl font-bold text-blue-600">$4,500</h2>
                    <p class="text-green-500 text-sm">+12% from last month</p>
                </div>
            </div>
        </div>

        <!-- Stats and Charts -->
        <div class="grid grid-cols-3 gap-6">
            <!-- This month order -->
            <div class="bg-white shadow-md rounded-xl p-4 ">
                <div class="flex items-center space-x-2 mb-2">
                    <i class="bi bi-bar-chart-fill text-blue-500"></i>
                    <h3 class="text-md font-semibold">This Month Order</h3>
                </div>
                <canvas id="orderChart"></canvas>
            </div>

            <!-- Shipment Success -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="font-semibold flex items-center gap-2"><i class="fa fa-check-circle text-green-500" aria-hidden="true"></i> </i> Shipment Success</h2>
                <canvas id="shipmentSuccessChart" height="150" class="mt-4"></canvas>
            </div>
        </div>

        <!-- Revenue -->
        <div class="grid grid-cols-2 gap-6">
            <div class="bg-white p-4 rounded shadow">
                <h2 class="font-semibold flex items-center gap-2"><i class="bi bi-cash-stack"></i> Daily Revenue</h2>
                <p class="text-3xl font-bold text-green-600 mt-2">$850</p>
                <p class="text-sm text-gray-500">Today’s income</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h2 class="font-semibold flex items-center gap-2"><i class="bi bi-wallet2"></i> Monthly Revenue</h2>
                <p class="text-3xl font-bold text-green-600 mt-2">$18,450</p>
                <p class="text-sm text-gray-500">August Total</p>
            </div>
        </div>
    </main>

    <script>
        const orderChart = new Chart(document.getElementById('orderChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                datasets: [{
                    label: 'Orders',
                    data: [80, 90, 95, 100, 115, 130, 140, 145],
                    fill: true,
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59,130,246,0.1)',
                    tension: 0.4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Custom plugin for center text
        Chart.register({
            id: 'doughnutCenterText',
            beforeDraw(chart) {
                if (chart.config.type !== 'doughnut') return;

                const width = chart.width;
                const height = chart.height;
                const ctx = chart.ctx;
                ctx.restore();
                const fontSize = (height / 114).toFixed(2);
                ctx.font = `${fontSize}em sans-serif`;
                ctx.textBaseline = "middle";
                ctx.fillStyle = "#10b981";

                const text = '65%';
                const textX = Math.round((width - ctx.measureText(text).width) / 2);
                const textY = height / 2.2;
                ctx.fillText(text, textX, textY);
                ctx.save();
            }
        });

        const ctx2 = document.getElementById('shipmentSuccessChart').getContext('2d');
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Success', 'Not Yet'],
                datasets: [{
                    data: [65, 35],
                    backgroundColor: ['rgba(16, 185, 129, 0.7)', 'rgba(229, 231, 235, 1)'],
                    borderColor: ['rgba(16, 185, 129, 1)', 'rgba(229, 231, 235, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>
</body>

</html>