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
    </style>
</head>


<div class="bg-white rounded-xl shadow-lg p-6">
    <h2 class="text-2xl font-bold mb-4 flex items-center gap-2">
        <i class="bi bi-table"></i> Shipment Table
    </h2>
    <div class="overflow-x-auto">
        <table class="table-auto w-full border border-gray-300 text-sm">
            <thead class="bg-gray-200 text-gray-600">
                <tr>
                    <th class="p-2 border">#</th>
                    <th class="p-2 border">Sender</th>
                    <th class="p-2 border">Sender Address</th>
                    <th class="p-2 border">Sender Country</th>
                    <th class="p-2 border">Receiver</th>
                    <th class="p-2 border">Receiver Address</th>
                    <th class="p-2 border">Receiver Country</th>
                    <th class="p-2 border">Receipt Code</th>
                    <th class="p-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
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
                    <td class="p-2 border text-center">
                        <button data-id="1" class="btn-detail bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-xs">
                            <i class="bi bi-eye"></i> Detail
                        </button>
                    </td>
                </tr>

                <!-- Tambahkan baris lainnya seperti di atas -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div id="detailModal"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-red-500">
            <i class="bi bi-x-lg"></i>
        </button>
        <h3 class="text-xl font-semibold mb-4"><i class="bi bi-card-text"></i> Detail Pengiriman</h3>
        <p class="text-gray-700">Sebagai contoh</p>
    </div>
</div>

<script>
    const modal = document.getElementById("detailModal");

    document.querySelectorAll(".btn-detail").forEach(button => {
        button.addEventListener("click", function() {
            // nanti kamu bisa ambil detail berdasarkan data-id
            const id = this.dataset.id;
            modal.classList.remove("hidden");
        });
    });

    function closeModal() {
        modal.classList.add("hidden");
    }
</script>
</body>

</html>