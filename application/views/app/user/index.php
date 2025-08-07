<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>
    <div class="container bg-white rounded shadow p-4 mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h4 mb-0"><i class="bi bi-table"></i> User Table</h2>
            <a href="<?= base_url("app/user/create") ?>" class="btn btn-primary"><i class="bi bi-plus"></i> Add New User</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-sm w-100" id="userTable" style="min-width:1100px;">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
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
                <tbody>
                    <?php $no = 1;
                    foreach ($users as $user): ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $user->full_name ?></td>
                            <td><?= $user->email ?></td>
                            <td><?= $user->phone_number ?></td>
                            <td><?= $user->city ?></td>
                            <td><?= $user->address ?></td>
                            <td><?= $user->postal_code ?></td>
                            <td><?= $user->created_at ?></td>
                            <td><?= $user->updated_at ?></td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="<?= base_url('app/user/edit/' . $user->id) ?>" class="btn btn-success" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                    <a href="<?= base_url('app/user/delete/' . $user->id) ?>" class="btn btn-danger" title="Delete" onclick="return confirm('Delete this user?')"><i class="bi bi-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                "autoWidth": false,
                "scrollX": true
            });
        });
    </script>
</body>

</html>