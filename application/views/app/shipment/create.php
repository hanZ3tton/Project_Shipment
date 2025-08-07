<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Shipping Form</title>

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<div class="container">
    <div class="card shadow-lg">
        <div class="card-body">
            <h2 class="text-primary mb-4 d-flex align-items-center">
                <i class="bi bi-box-fill mr-2"></i> Shipment Form
            </h2>

            <form id="shippingForm">

                <!-- Sender Details -->
                <div class="mb-4">
                    <h4 class="mb-3 d-flex align-items-center text-secondary">
                        <i class="bi bi-person-fill mr-2"></i> Sender Details
                    </h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Sender Name</label>
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender Email</label>
                            <input type="email" class="form-control" placeholder="email@example.com">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Sender Address</label>
                            <input type="text" class="form-control" placeholder="123 Example Street">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender Country</label>
                            <input type="text" class="form-control" placeholder="Indonesia">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender City</label>
                            <input type="text" class="form-control" placeholder="Jakarta">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender Postal Code</label>
                            <input type="text" class="form-control" placeholder="54321">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender Phone Number</label>
                            <input type="tel" class="form-control" placeholder="+62 812 3456 7890">
                        </div>
                    </div>
                </div>

                <!-- Recipient Details -->
                <div class="mb-4">
                    <h4 class="mb-3 d-flex align-items-center text-secondary">
                        <i class="bi bi-person-check-fill mr-2"></i> Recipient Details
                    </h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Recipient Name</label>
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient Email</label>
                            <input type="email" class="form-control" placeholder="email@example.com">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Recipient Address</label>
                            <input type="text" class="form-control" placeholder="456 Sample Road">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient Country</label>
                            <input type="text" class="form-control" placeholder="Malaysia">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient City</label>
                            <input type="text" class="form-control" placeholder="Kuala Lumpur">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient Postal Code</label>
                            <input type="text" class="form-control" placeholder="12345">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient Phone Number</label>
                            <input type="tel" class="form-control" placeholder="+60 812 3456 7890">
                        </div>
                    </div>
                </div>

                <!-- Package Details -->
                <div class="mb-4">
                    <h4 class="mb-3 d-flex align-items-center text-secondary">
                        <i class="bi bi-archive-fill mr-2"></i> Package Details
                    </h4>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Item Description</label>
                            <textarea class="form-control" rows="3" placeholder="Example: Black Asus laptop with charger and bag."></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Item Category</label>
                            <select class="form-control">
                                <option value="">-- Select Category --</option>
                                <option value="electronics">Electronics</option>
                                <option value="clothing">Clothing</option>
                                <option value="furniture">Furniture</option>
                                <option value="books">Books</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Weight (kg)</label>
                            <input type="number" step="0.01" class="form-control" placeholder="1.5">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Length (cm)</label>
                            <input type="number" class="form-control" placeholder="50">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Width (cm)</label>
                            <input type="number" class="form-control" placeholder="30">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Height (cm)</label>
                            <input type="number" class="form-control" placeholder="10">
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit" class="btn btn-primary d-flex align-items-center">
                        <i class="bi bi-send mr-2"></i> Submit Shipment
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Bootstrap 4 JS + dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    document.getElementById("shippingForm").addEventListener("submit", function(e) {
        e.preventDefault();
        alert("Shipment data has been submitted!");
    });
</script>

</body>

</html>