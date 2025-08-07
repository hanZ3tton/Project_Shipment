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
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-success" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                <a href="#" class="btn btn-danger" title="Delete" onclick="return confirm('Delete this user?')"><i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-success" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                <a href="#" class="btn btn-danger" title="Delete" onclick="return confirm('Delete this user?')"><i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-success" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                <a href="#" class="btn btn-danger" title="Delete" onclick="return confirm('Delete this user?')"><i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-success" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                <a href="#" class="btn btn-danger" title="Delete" onclick="return confirm('Delete this user?')"><i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>