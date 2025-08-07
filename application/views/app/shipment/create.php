<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Shipping Form</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
    <h2 class="text-2xl font-bold mb-6 text-blue-600 flex items-center gap-2">
        <i class="bi bi-box-fill"></i> Shipment Form
    </h2>

    <form id="shippingForm" class="space-y-6">

        <!-- Sender Details -->
        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-3 flex items-center gap-2">
                <i class="bi bi-person-fill"></i> Sender Details
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label>Sender Name</label>
                    <input type="text" class="w-full p-2 border rounded-md" placeholder="Full Name">
                </div>
                <div>
                    <label>Sender Email</label>
                    <input type="email" class="w-full p-2 border rounded-md" placeholder="email@example.com">
                </div>
                <div class="md:col-span-2">
                    <label>Sender Address</label>
                    <input type="text" class="w-full p-2 border rounded-md" placeholder="123 Example Street">
                </div>
                <div>
                    <label>Sender Country</label>
                    <input type="text" class="w-full p-2 border rounded-md" placeholder="Indonesia">
                </div>
                <div>
                    <label>Sender City</label>
                    <input type="text" class="w-full p-2 border rounded-md" placeholder="Jakarta">
                </div>
                <div>
                    <label>Sender Postal Code</label>
                    <input type="text" class="w-full p-2 border rounded-md" placeholder="54321">
                </div>
                <div>
                    <label>Sender Phone Number</label>
                    <input type="tel" class="w-full p-2 border rounded-md" placeholder="+62 812 3456 7890">
                </div>
            </div>
        </div>

        <!-- Recipient Details -->
        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-3 flex items-center gap-2">
                <i class="bi bi-person-check-fill"></i> Recipient Details
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label>Recipient Name</label>
                    <input type="text" class="w-full p-2 border rounded-md" placeholder="Full Name">
                </div>
                <div>
                    <label>Recipient Email</label>
                    <input type="email" class="w-full p-2 border rounded-md" placeholder="email@example.com">
                </div>
                <div class="md:col-span-2">
                    <label>Recipient Address</label>
                    <input type="text" class="w-full p-2 border rounded-md" placeholder="456 Sample Road">
                </div>
                <div>
                    <label>Recipient Country</label>
                    <input type="text" class="w-full p-2 border rounded-md" placeholder="Malaysia">
                </div>
                <div>
                    <label>Recipient City</label>
                    <input type="text" class="w-full p-2 border rounded-md" placeholder="Kuala Lumpur">
                </div>
                <div>
                    <label>Recipient Postal Code</label>
                    <input type="text" class="w-full p-2 border rounded-md" placeholder="12345">
                </div>
                <div>
                    <label>Recipient Phone Number</label>
                    <input type="tel" class="w-full p-2 border rounded-md" placeholder="+60 812 3456 7890">
                </div>
            </div>
        </div>

        <!-- Package Details -->
        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-3 flex items-center gap-2">
                <i class="bi bi-archive-fill"></i> Package Details
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="md:col-span-2">
                    <label>Item Description</label>
                    <textarea class="w-full p-2 border rounded-md" rows="3" placeholder="Example: Black Asus laptop with charger and bag."></textarea>
                </div>
                <div>
                    <label>Item Category</label>
                    <select class="w-full p-2 border rounded-md">
                        <option value="">-- Select Category --</option>
                        <option value="electronics">Electronics</option>
                        <option value="clothing">Clothing</option>
                        <option value="furniture">Furniture</option>
                        <option value="books">Books</option>
                    </select>
                </div>
                <div>
                    <label>Weight (kg)</label>
                    <input type="number" step="0.01" class="w-full p-2 border rounded-md" placeholder="1.5">
                </div>
                <div>
                    <label>Length (cm)</label>
                    <input type="number" class="w-full p-2 border rounded-md" placeholder="50">
                </div>
                <div>
                    <label>Width (cm)</label>
                    <input type="number" class="w-full p-2 border rounded-md" placeholder="30">
                </div>
                <div>
                    <label>Height (cm)</label>
                    <input type="number" class="w-full p-2 border rounded-md" placeholder="10">
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-right mt-6">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition flex items-center gap-2 justify-center">
                <i class="bi bi-send"></i> Submit Shipment
            </button>
        </div>
    </form>
</div>

<script>
    document.getElementById("shippingForm").addEventListener("submit", function(e) {
        e.preventDefault();
        alert("Shipment data has been submitted!");
    });
</script>

</body>

</html>