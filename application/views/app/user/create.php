    <form class="bg-white p-4" method="post">
        <h3 class="mb-4">Add New User</h3>

        <div class="form-row">
            <div class=" form-group col-md-3">
                <label for=" fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName">
                <?= form_error('fullName', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group col-md-3">
                <label for="phoneNum">Phone Number</label>
                <input type="text" class="form-control" id="phoneNum" name="phoneNum">
                <?= form_error('phoneNum', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
        </div>
        <div class="form-row">
            <div class=" form-group col-md-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>

            </div>
            <div class="form-group col-md-3">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" id="email" name="email">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>

            </div>
        </div>
        <div class="form-row">
            <div class=" form-group col-md-3">
                <label for="password1">Password</label>
                <input type="text" class="form-control" id="password1" name="password1">
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>

            </div>
            <div class="form-group col-md-3">
                <label for="password2">Confrim Password</label>
                <input type="text" class="form-control" id="password2" name="password2">
            </div>
        </div>
        <div class="form-group col-md-6 p-0">
            <label for="address">Address</label>
            <textarea class="form-control" style="resize: none;" rows="3" id="address" name="address"></textarea>
            <?= form_error('address', '<small class="text-danger pl-3">', '</small>') ?>
        </div>
        <div class="form-row mb-4">
            <div class="form-group col-md-4">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city">
                <?= form_error('city', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group col-md-2">
                <label for="postalCode">Postal Code</label>
                <input type="text" class="form-control" id="postalCode" name="postalCode">
                <?= form_error('postalCode', '<small class="text-danger pl-3">', '</small>') ?>

            </div>
        </div>
        <button type="submit" class="btn btn-primary">Edit User</button>
    </form>