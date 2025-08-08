<div class="container">
    <div class="card shadow-lg mt-5 mb-5">
        <div class="card-body">
            <h2 class="text-primary mb-4 d-flex align-items-center">
                <i class="bi bi-person-plus-fill mr-2"></i> Add New User
            </h2>
            <form id="userForm" method="post">
                <!-- User Details -->
                <div class="mb-4">
                    <h4 class="mb-3 d-flex align-items-center text-secondary">
                        <i class="bi bi-person-fill mr-2"></i> User Details
                    </h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name">
                            <?= form_error('fullName', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phoneNum">Phone Number</label>
                            <input type="text" class="form-control" id="phoneNum" name="phoneNum" placeholder="+62 812 3456 7890">
                            <?= form_error('phoneNum', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password2">Confirm Password</label>
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                </div>
                <!-- Address Details -->
                <div class="mb-4">
                    <h4 class="mb-3 d-flex align-items-center text-secondary">
                        <i class="bi bi-geo-alt-fill mr-2"></i> Address Details
                    </h4>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="address">Address</label>
                            <textarea class="form-control" style="resize: none;" rows="3" id="address" name="address" placeholder="Street, District, etc"></textarea>
                            <?= form_error('address', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                            <?= form_error('city', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="postalCode">Postal Code</label>
                            <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="Postal Code">
                            <?= form_error('postalCode', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit" class="btn btn-primary d-flex align-items-center">
                        <i class="bi bi-person-plus mr-2"></i> Create User
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>