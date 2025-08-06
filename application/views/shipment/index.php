<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipment Table</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

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
    <h2 class="text-2xl font-bold mb-4 flex items-center gap-2"><i class="bi bi-table"></i> Shipment Table</h2>
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
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-50">
                    <td class="p-2 border text-center">1</td>
                    <td class="p-2 border">John Smith</td>
                    <td class="p-2 border">123 Elm St, New York</td>
                    <td class="p-2 border text-center">
                        <div class="flex flex-col items-center">
                            <img src="https://flagcdn.com/us.svg" alt="USA" class="flag">
                            <span class="text-xs mt-1">USA</span>
                        </div>
                    </td>
                    <td class="p-2 border">Maria Rossi</td>
                    <td class="p-2 border">Via Roma 22, Rome</td>
                    <td class="p-2 border text-center">
                        <div class="flex flex-col items-center">
                            <img src="https://flagcdn.com/it.svg" alt="Italy" class="flag">
                            <span class="text-xs mt-1">Italy</span>
                        </div>
                    </td>
                    <td class="p-2 border text-center">#RX239840</td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="p-2 border text-center">2</td>
                    <td class="p-2 border">Alice Nguyen</td>
                    <td class="p-2 border">15 Jalan Merdeka, Jakarta</td>
                    <td class="p-2 border text-center">
                        <div class="flex flex-col items-center">
                            <img src="https://flagcdn.com/id.svg" alt="Indonesia" class="flag">
                            <span class="text-xs mt-1">Indonesia</span>
                        </div>
                    </td>
                    <td class="p-2 border">Satoshi Tanaka</td>
                    <td class="p-2 border">3-4-5 Shibuya, Tokyo</td>
                    <td class="p-2 border text-center">
                        <div class="flex flex-col items-center">
                            <img src="https://flagcdn.com/jp.svg" alt="Japan" class="flag">
                            <span class="text-xs mt-1">Japan</span>
                        </div>
                    </td>
                    <td class="p-2 border text-center">#JP993211</td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="p-2 border text-center">3</td>
                    <td class="p-2 border">Emma Müller</td>
                    <td class="p-2 border">Hauptstrasse 17, Berlin</td>
                    <td class="p-2 border text-center">
                        <div class="flex flex-col items-center">
                            <img src="https://flagcdn.com/de.svg" alt="Germany" class="flag">
                            <span class="text-xs mt-1">Germany</span>
                        </div>
                    </td>
                    <td class="p-2 border">Liam O'Connor</td>
                    <td class="p-2 border">45 Green Rd, Dublin</td>
                    <td class="p-2 border text-center">
                        <div class="flex flex-col items-center">
                            <img src="https://flagcdn.com/ie.svg" alt="Ireland" class="flag">
                            <span class="text-xs mt-1">Ireland</span>
                        </div>
                    </td>
                    <td class="p-2 border text-center">#IR123990</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</html>