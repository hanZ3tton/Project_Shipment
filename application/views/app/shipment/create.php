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

            <form id="shippingForm" method="post" action="<?= site_url('app/shipment/create') ?>">

                <!-- Sender Details -->
                <div class="mb-4">
                    <h4 class="mb-3 d-flex align-items-center text-secondary">
                        <i class="bi bi-person-fill mr-2"></i> Sender Details
                    </h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Sender Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" name="senderName">
                            <?= form_error('senderName', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender Email</label>
                            <input type="email" class="form-control" placeholder="email@example.com" name="senderEmail">
                            <?= form_error('senderEmail', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Sender Address</label>
                            <input type="text" class="form-control" placeholder="123 Example Street" name="senderAddress">
                            <?= form_error('senderAddress', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender Country</label>
                            <input type="text" class="form-control" placeholder="Indonesia" name="senderCountry">
                            <?= form_error('senderCountry', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender City</label>
                            <input type="text" class="form-control" placeholder="Jakarta" name="senderCity">
                            <?= form_error('senderCity', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender Postal Code</label>
                            <input type="text" class="form-control" placeholder="54321" name="senderPostalCode">
                            <?= form_error('senderPostalCode', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender Phone Number</label>
                            <input type="tel" class="form-control" placeholder="+62 812 3456 7890" name="senderPhone">
                            <?= form_error('senderPhone', '<small class="text-danger pl-3">', '</small>') ?>
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
                            <input type="text" class="form-control" placeholder="Full Name" name="receiverName">
                            <?= form_error('receiverName', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient Email</label>
                            <input type="email" class="form-control" placeholder="email@example.com" name="receiverEmail">
                            <?= form_error('receiverEmail', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Recipient Address</label>
                            <input type="text" class="form-control" placeholder="456 Sample Road" name="receiverAddress">
                            <?= form_error('receiverAddress', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient Country</label>
                            <input type="text" class="form-control" placeholder="Malaysia" name="receiverCountry">
                            <?= form_error('receiverCountry', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient City</label>
                            <input type="text" class="form-control" placeholder="Kuala Lumpur" name="receiverCity">
                            <?= form_error('receiverCity', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient Postal Code</label>
                            <input type="text" class="form-control" placeholder="12345" name="receiverPostalCode">
                            <?= form_error('receiverPostalCode', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient Phone Number</label>
                            <input type="tel" class="form-control" placeholder="+60 812 3456 7890" name="receiverPhone">
                            <?= form_error('receiverPhone', '<small class="text-danger pl-3">', '</small>') ?>
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
                            <textarea class="form-control" rows="3" placeholder="Example: Black Asus laptop with charger and bag." name="itemDescription"></textarea>
                            <?= form_error('itemDescription', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Item Category</label>
                            <select class="form-control" name="itemCategory">
                                <option value="">-- Select Category --</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Clothing">Clothing</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Books">Books</option>
                            </select>
                            <?= form_error('itemCategory', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Weight (kg)</label>
                            <input type="number" step="0.01" class="form-control" placeholder="1.5" name="itemWeight">
                            <?= form_error('itemWeight', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Length (cm)</label>
                            <input type="number" class="form-control" placeholder="50" name="itemLength">
                            <?= form_error('itemLength', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Width (cm)</label>
                            <input type="number" class="form-control" placeholder="30" name="itemWidth">
                            <?= form_error('itemWidth', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Height (cm)</label>
                            <input type="number" class="form-control" placeholder="10" name="itemHeight">
                            <?= form_error('itemHeight', '<small class="text-danger pl-3">', '</small>') ?>
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

</body>

</html>