<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shipment Table</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />

    <style>
        .flag {
            width: 30px;
            height: 30px;
            object-fit: cover;
            border-radius: 9999px;
        }

        .truck-icon {
            animation: moveTruck 2s linear infinite;
        }

        @keyframes moveTruck {
            0% {
                transform: translateX(-5px);
            }

            50% {
                transform: translateX(5px);
            }

            100% {
                transform: translateX(-5px);
            }
        }
    </style>
</head>

<div class="bg-white rounded-xl shadow-lg p-6">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-bold flex items-center gap-2">
            <i class="bi bi-table"></i> Shipment Table
        </h2>
        <div class="relative">
            <input type="text" id="searchInput" class="border px-3 py-1 rounded text-sm" placeholder="Search...">
            <i class="bi bi-search absolute right-2 top-2 text-gray-400"></i>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border border-gray-300 text-sm">
            <thead class="bg-gray-200 text-gray-600">
                <tr>
                    <th class="p-2 border cursor-pointer">#</th>
                    <th class="p-2 border cursor-pointer">Sender</th>
                    <th class="p-2 border cursor-pointer">Sender Address</th>
                    <th class="p-2 border cursor-pointer">Sender Country</th>
                    <th class="p-2 border cursor-pointer">Receiver</th>
                    <th class="p-2 border cursor-pointer">Receiver Address</th>
                    <th class="p-2 border cursor-pointer">Receiver Country</th>
                    <th class="p-2 border cursor-pointer">Receipt Code</th>
                    <th class="p-2 border cursor-pointer">Status</th>
                    <th class="p-2 border cursor-pointer">Action</th>
                </tr>
            </thead>
            <tbody id="shipmentTable">
                <tr class="hover:bg-gray-50">
                    <td class="p-2 border text-center">1</td>
                    <td class="p-2 border">John Smith</td>
                    <td class="p-2 border">123 Elm St, New York</td>
                    <td class="p-2 border text-center">
                        <div class="flex flex-col items-center">
                            <img src="https://flagcdn.com/us.svg" alt="USA" class="flag" />
                            <span class="text-xs mt-1">USA</span>
                        </div>
                    </td>
                    <td class="p-2 border">Maria Rossi</td>
                    <td class="p-2 border">Via Roma 22, Rome</td>
                    <td class="p-2 border text-center">
                        <div class="flex flex-col items-center">
                            <img src="https://flagcdn.com/it.svg" alt="Italy" class="flag" />
                            <span class="text-xs mt-1">Italy</span>
                        </div>
                    </td>
                    <td class="p-2 border text-center">#RX239840</td>
                    <td class="p-2 border text-center text-green-600 font-semibold">Complete</td>
                    <td class="p-2 border text-center space-x-2">
                        <button data-id="1" class="btn-detail bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-xs">
                            <i class="bi bi-eye"></i> Detail
                        </button>
                        <button data-id="1" class="btn-tracking bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-xs">
                            <i class="bi bi-truck"></i> Tracking
                        </button>
                    </td>
                </tr>
                <!-- More rows -->
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="flex justify-end items-center mt-4 space-x-2">
        <button class="px-3 py-1 border rounded hover:bg-gray-200">&laquo;</button>
        <button class="px-3 py-1 border rounded bg-blue-500 text-white">1</button>
        <button class="px-3 py-1 border rounded hover:bg-gray-200">2</button>
        <button class="px-3 py-1 border rounded hover:bg-gray-200">3</button>
        <button class="px-3 py-1 border rounded hover:bg-gray-200">&raquo;</button>
    </div>
</div>

<!-- Modal Detail -->
<div id="detailModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg relative">
        <button onclick="closeModal('detailModal')" class="absolute top-2 right-2 text-gray-500 hover:text-red-500">
            <i class="bi bi-x-lg"></i>
        </button>
        <h3 class="text-xl font-semibold mb-4"><i class="bi bi-card-text"></i> Detail Pengiriman</h3>
        <div class="space-y-2 text-sm">
            <div><strong>Nama Penerima:</strong> Maria Rossi</div>
            <div><strong>Negara:</strong> Italy</div>
            <div><strong>Item Name:</strong> Shoes</div>
            <div><strong>Sender Email:</strong> john@example.com</div>
            <div><strong>Sender Postal Code:</strong> 10001</div>
            <div><strong>Receiver Email:</strong> maria@example.it</div>
            <div><strong>Receiver Postal Code:</strong> 00185</div>
            <div><strong>Receiver Phone:</strong> +39 334 5678</div>
            <div><strong>Price:</strong> $39.99</div>
            <div><strong>Weight:</strong> 2.5 kg</div>
            <div><strong>Length x Width x Height:</strong> 40 x 30 x 10 cm</div>
            <div><strong>Created At:</strong> 2025-08-01</div>
        </div>
    </div>
</div>

<!-- Modal Tracking -->
<div id="trackingModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-xl relative">
        <button onclick="closeModal('trackingModal')" class="absolute top-2 right-2 text-gray-500 hover:text-red-500">
            <i class="bi bi-x-lg"></i>
        </button>
        <h3 class="text-xl font-semibold mb-6"><i class="bi bi-truck"></i> Tracking</h3>

        <!-- Horizontal Route Line -->
        <div class="flex items-center justify-between relative mb-10">
            <span class="text-sm">New York</span>
            <div class="z-10 bg-blue-500 rounded-full w-10 h-10 flex items-center justify-center text-white text-xl truck-icon">
                <i class="bi bi-truck"></i>
            </div>
            <span class="text-sm">Rome</span>
        </div>

        <!-- Vertical Status Timeline -->
        <div class="ml-4 border-l-2 border-gray-300 pl-4 space-y-4">
            <div class="text-sm">2025-08-01: Shipment created</div>
            <div class="text-sm">2025-08-02: Picked up by courier</div>
            <div class="text-sm">2025-08-03: In transit</div>
            <div class="text-sm">2025-08-04: Arrived at destination</div>
            <div class="text-sm">2025-08-05: Delivered</div>
        </div>
    </div>
</div>


<script>
    function closeModal(modalId) {
        document.getElementById(modalId).classList.add("hidden");
    }

    document.querySelectorAll(".btn-detail").forEach(btn => {
        btn.addEventListener("click", () => {
            document.getElementById("detailModal").classList.remove("hidden");
        });
    });

    document.querySelectorAll(".btn-tracking").forEach(btn => {
        btn.addEventListener("click", () => {
            document.getElementById("trackingModal").classList.remove("hidden");
        });
    });
</script>

</body>

</html>