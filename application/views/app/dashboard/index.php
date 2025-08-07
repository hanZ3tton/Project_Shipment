<main class="container py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 font-weight-bold d-flex align-items-center">
            <i class="bi bi-truck mr-2"></i> Shipment Track
        </h1>
    </div>

    <!-- Credit Card Info -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <i class="bi bi-credit-card text-primary mr-3" style="font-size: 2rem;"></i>
                    <div>
                        <p class="mb-1 text-muted small font-weight-semibold">Credit</p>
                        <h2 class="h4 text-primary font-weight-bold mb-0">$4,500</h2>
                        <p class="text-success small">+12% from last month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats and Charts -->
    <div class="row mb-4">
        <!-- This Month Order Chart -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-bar-chart-fill text-primary mr-2"></i>
                        <h5 class="mb-0 font-weight-semibold">This Month Order</h5>
                    </div>
                    <canvas id="orderChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Shipment Success Chart -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="mb-3 font-weight-semibold d-flex align-items-center">
                        <i class="fa fa-check-circle text-success mr-2" aria-hidden="true"></i> Shipment Success
                    </h5>
                    <canvas id="shipmentSuccessChart" height="150"></canvas>
                </div>
            </div>
        </div>

        <!-- Empty Placeholder (can be filled later) -->
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <!-- You can insert more widgets here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Revenue Section -->
    <div class="row">
        <!-- Daily Revenue -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="d-flex align-items-center mb-2 font-weight-semibold">
                        <i class="bi bi-cash-stack mr-2"></i> Daily Revenue
                    </h5>
                    <p class="display-4 text-success mb-1">$850</p>
                    <p class="text-muted small">Today’s income</p>
                </div>
            </div>
        </div>

        <!-- Monthly Revenue -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="d-flex align-items-center mb-2 font-weight-semibold">
                        <i class="bi bi-wallet2 mr-2"></i> Monthly Revenue
                    </h5>
                    <p class="display-4 text-success mb-1">$18,450</p>
                    <p class="text-muted small">August Total</p>
                </div>
            </div>
        </div>
    </div>
</main>