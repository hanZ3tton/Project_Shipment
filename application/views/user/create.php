<div class="container-fluid vh-100">
    <form class="bg-white p-4" method="post" action="#">
        <h3 class="mb-4">Add New User</h3>

        <div class="form-row">
            <div class=" form-group col-md-3">
                <label for=" fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName">
            </div>
            <div class="form-group col-md-3">
                <label for="phoneNum">Phone Number</label>
                <input type="text" class="form-control" id="phoneNum" name="phoneNum">
            </div>
        </div>
        <div class="form-row">
            <div class=" form-group col-md-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group col-md-3">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="form-group col-md-6 p-0">
            <label for="address">Address</label>
            <textarea class="form-control" style="resize: none;" rows="3" id="address" name="address"></textarea>
        </div>
        <div class="form-row mb-4">
            <div class="form-group col-md-4">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>
            <div class="form-group col-md-2">
                <label for="postalCode">Postal Code</label>
                <input type="text" class="form-control" id="postalCode" name="postalCode">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add New User</button>
    </form>
</div>