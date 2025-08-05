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

        <!-- Stats and Charts -->
        <div class="grid grid-cols-3 gap-6">
            <!-- This month order -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="font-semibold flex items-center gap-2"><i class="bi bi-calendar3"></i> This Month Order</h2>
                <canvas id="monthOrderChart" height="150" class="mt-4"></canvas>
            </div>

            <!-- Shipment Success -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="font-semibold flex items-center gap-2"><i class="bi bi-bar-chart-line"></i> Shipment Success</h2>
                <canvas id="shipmentSuccessChart" height="150" class="mt-4"></canvas>
            </div>

            <!-- Credit -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="font-semibold flex items-center gap-2"><i class="bi bi-credit-card-2-back"></i> Credit</h2>
                <p class="text-3xl font-bold text-primary mt-2">$4,500</p>
                <p class="text-sm text-success mt-1">+12% from last month</p>
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
        const ctx1 = document.getElementById('monthOrderChart').getContext('2d');
        new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                datasets: [{
                    label: 'Orders',
                    data: [80, 90, 95, 100, 110, 125, 140, 155],
                    backgroundColor: 'rgba(99, 102, 241, 0.2)',
                    borderColor: 'rgba(99, 102, 241, 1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: 'white',
                    pointBorderColor: 'rgba(99, 102, 241, 1)'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
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