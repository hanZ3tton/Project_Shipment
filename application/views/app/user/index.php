<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables user</h1>
    <p class="mb-4">
    </p>
    <a href="<?= base_url("app/user/create") ?>" class="btn btn-primary mb-3">Add New User</a>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                DataTables User
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Postal Code</th>
                            <th>Create At</th>
                            <th>Update At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Postal Code</th>
                            <th>Create At</th>
                            <th>Update At</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user->full_name ?> </td>
                                <td><?= $user->email ?> </td>
                                <td><?= $user->phone_number ?> </td>
                                <td><?= $user->city ?> </td>
                                <td><?= $user->address ?> </td>
                                <td><?= $user->postal_code ?> </td>
                                <td><?= $user->created_at ?> </td>
                                <td><?= $user->updated_at ?> </td>
                                <td>
                                    <a href="<?= base_url('app/user/edit/' . $user->id) ?>" class="btn btn-success">Edit</a>
                                    <a href="<?= base_url('app/user/delete/' . $user->id) ?>" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>