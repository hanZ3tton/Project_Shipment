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
        <div class="bg-white p-4 rounded shadow">

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