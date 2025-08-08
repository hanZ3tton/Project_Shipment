<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<div class="container">
    <div class="card shadow-lg">
        <div class="card-body">
            <h2 class="text-primary mb-4 d-flex align-items-center">
                <i class="bi bi-box-fill mr-2"></i> Shipment Form Edit
            </h2>

            <form id="shippingForm" method="post">

                <!-- Sender Details -->
                <div class="mb-4">
                    <h4 class="mb-3 d-flex align-items-center text-secondary">
                        <i class="bi bi-person-fill mr-2"></i> Sender Details
                    </h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Sender Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" name="senderName" value="<?= $shipment['sender_name'] ?? '' ?>">
                            <?= form_error('senderName', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender Email</label>
                            <input type="email" class="form-control" placeholder="email@example.com" name="senderEmail" value="<?= $shipment['sender_email'] ?? '' ?>">
                            <?= form_error('senderEmail', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Sender Address</label>
                            <input type="text" class="form-control" placeholder="123 Example Street" name="senderAddress" value="<?= $shipment['sender_address'] ?? '' ?>">
                            <?= form_error('senderAddress', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender Country</label>
                            <input type="text" class="form-control" placeholder="Indonesia" name="senderCountry" value="<?= $shipment['sender_country'] ?? '' ?>">
                            <?= form_error('senderCountry', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender City</label>
                            <input type="text" class="form-control" placeholder="Jakarta" name="senderCity" value="<?= $shipment['sender_city'] ?? '' ?>">
                            <?= form_error('senderCity', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender Postal Code</label>
                            <input type="text" class="form-control" placeholder="54321" name="senderPostalCode" value="<?= $shipment['sender_postal_code'] ?? '' ?>">
                            <?= form_error('senderPostalCode', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Sender Phone Number</label>
                            <input type="tel" class="form-control" placeholder="+62 812 3456 7890" name="senderPhone" value="<?= $shipment['sender_phone_number'] ?? '' ?>">
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
                            <input type="text" class="form-control" placeholder="Full Name" name="receiverName" value="<?= $shipment['receiver_name'] ?? '' ?>">
                            <?= form_error('receiverName', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient Email</label>
                            <input type="email" class="form-control" placeholder="email@example.com" name="receiverEmail" value="<?= $shipment['receiver_email'] ?? '' ?>">
                            <?= form_error('receiverEmail', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Recipient Address</label>
                            <input type="text" class="form-control" placeholder="456 Sample Road" name="receiverAddress" value="<?= $shipment['receiver_address'] ?? '' ?>">
                            <?= form_error('receiverAddress', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient Country</label>
                            <input type="text" class="form-control" placeholder="Malaysia" name="receiverCountry" value="<?= $shipment['receiver_country'] ?? '' ?>">
                            <?= form_error('receiverCountry', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient City</label>
                            <input type="text" class="form-control" placeholder="Kuala Lumpur" name="receiverCity" value="<?= $shipment['receiver_city'] ?? '' ?>">
                            <?= form_error('receiverCity', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient Postal Code</label>
                            <input type="text" class="form-control" placeholder="12345" name="receiverPostalCode" value="<?= $shipment['receiver_postal_code'] ?? '' ?>">
                            <?= form_error('receiverPostalCode', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Recipient Phone Number</label>
                            <input type="tel" class="form-control" placeholder="+60 812 3456 7890" name="receiverPhone" value="<?= $shipment['receiver_phone_number'] ?? '' ?>">
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
                            <label>Item Name</label>
                            <input type="text" class="form-control" placeholder="Laptop" name="itemName" value="<?= $shipment['item_name']  ?>">
                            <?= form_error('itemName', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Item Description</label>
                            <textarea class="form-control" rows="3" placeholder="Example: Black Asus laptop with charger and bag." name="itemDescription"> <?= $shipment['item_description'] ?></textarea>
                            <?= form_error('itemDescription', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Item Category</label>
                            <select class="form-control" name="itemCategory" value="<?= $shipment['item_category'] ?>">
                                <option value="">-- Select Category --</option>
                                <option value="1">Electronics</option>
                                <option value="2">Clothing</option>
                                <option value="3">Furniture</option>
                                <option value="4">Books</option>
                            </select>
                            <?= form_error('itemCategory', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Weight (kg)</label>
                            <input type="number" step="0.01" class="form-control" placeholder="1.5" name="itemWeight" value="<?= $shipment['weight'] ?>">
                            <?= form_error('itemWeight', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Length (cm)</label>
                            <input type="number" class="form-control" placeholder="50" name="itemLength" value="<?= $shipment['length'] ?>">
                            <?= form_error('itemLength', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Width (cm)</label>
                            <input type="number" class="form-control" placeholder="30" name="itemWidth" value="<?= $shipment['width'] ?>">
                            <?= form_error('itemWidth', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Height (cm)</label>
                            <input type="number" class="form-control" placeholder="10" name="itemHeight" value="<?= $shipment['height'] ?>">
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