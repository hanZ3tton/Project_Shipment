<div class="container-fluid ">
    <div class="bg-white rounded shadow p-4 h-100 d-flex flex-column justify-content-between">

        <!-- Header and Search -->
        <div>
            <form action="<?php echo base_url('app/shipment/index'); ?>" method="GET">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h4 font-weight-bold d-flex align-items-center">
                        <i class="bi bi-table mr-2"></i> Inbound Table
                    </h2>
                    <div class="input-group" style="width: 250px;">
                        <input type="text" id="searchInput" name="search" class="form-control form-control-sm" placeholder="Search by username..." value="<?php echo html_escape($this->input->get('search')); ?>">
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-sm" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-bordered table-sm text-center">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Sender Name</th>
                            <th>Sender Phone Number</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>UpdateON</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="userTable">
                        <?php foreach ($user as $key => $value): ?>
                            <tr>
                                <td><?php echo $value->id; ?></td>
                                <td><?php echo $value->status_id; ?></td>
                                <td><?php echo $value->created_at; ?></td>
                                <td><?php echo $value->sender_name; ?></td>
                                <td><?php echo $value->sender_phone_number; ?></td>
                                <td><?php echo $value->category_id; ?></td>
                                <td><?php echo $value->item_description; ?></td>
                                <td><?php echo $value->updated_at; ?></td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <a href="" class="btn btn-warning btn-sm text-white">
                                        <i class="bi bi-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        <?php if (empty($user)): ?>
                            <tr>
                                <td colspan="3">No data available</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- Pagination -->
        <div class="d-flex justify-content-end mt-4">
            <?php echo $pagination_links; ?>
        </div>
    </div>
</div>