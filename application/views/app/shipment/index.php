<div class="container-fluid vh-100">
    <div class="bg-white rounded shadow p-4 h-100 d-flex flex-column justify-content-between">

        <!-- Header and Search -->
        <div>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h4 font-weight-bold d-flex align-items-center">
                    <i class="bi bi-table mr-2"></i> Shipment Table
                </h2>
                <div class="position-relative">
                    <input type="text" id="searchInput" class="form-control form-control-sm pr-4" placeholder="Search...">
                    <i class="bi bi-search position-absolute" style="top: 8px; right: 10px; color: #ccc;"></i>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-bordered table-sm text-center">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Sender</th>
                            <th>Sender Address</th>
                            <th>Sender Country</th>
                            <th>Receiver</th>
                            <th>Receiver Address</th>
                            <th>Receiver Country</th>
                            <th>Receipt Code</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="shipmentTable">
                        <tr>
                            <td>1</td>
                            <td>John Smith</td>
                            <td>123 Elm St, New York</td>
                            <td>
                                <img src="https://flagcdn.com/us.svg" alt="USA" width="20"><br><small>USA</small>
                            </td>
                            <td>Maria Rossi</td>
                            <td>Via Roma 22, Rome</td>
                            <td>
                                <img src="https://flagcdn.com/it.svg" alt="Italy" width="20"><br><small>Italy</small>
                            </td>
                            <td>#RX239840</td>
                            <td class="text-success font-weight-bold">Complete</td>
                            <td>
                                <button data-id="1" class="btn btn-primary btn-sm mb-1">
                                    <i class="bi bi-eye"></i> Detail
                                </button>
                                <button data-id="1" class="btn btn-warning btn-sm text-white">
                                    <i class="bi bi-truck"></i> Tracking
                                </button>
                            </td>
                        </tr>
                        <!-- Duplicate row removed for brevity -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-end mt-4">
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Detail Modal -->
    <div id="detailModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-card-text"></i> Detail Pengiriman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body small">
                    <p><strong>Nama Penerima:</strong> Maria Rossi</p>
                    <p><strong>Negara:</strong> Italy</p>
                    <p><strong>Item Name:</strong> Shoes</p>
                    <p><strong>Sender Email:</strong> john@example.com</p>
                    <p><strong>Sender Postal Code:</strong> 10001</p>
                    <p><strong>Receiver Email:</strong> maria@example.it</p>
                    <p><strong>Receiver Postal Code:</strong> 00185</p>
                    <p><strong>Receiver Phone:</strong> +39 334 5678</p>
                    <p><strong>Price:</strong> $39.99</p>
                    <p><strong>Weight:</strong> 2.5 kg</p>
                    <p><strong>Length x Width x Height:</strong> 40 x 30 x 10 cm</p>
                    <p><strong>Created At:</strong> 2025-08-01</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tracking Modal -->
    <div id="trackingModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-truck"></i> Tracking</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- Horizontal Route -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="small">New York</span>
                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-truck"></i>
                        </div>
                        <span class="small">Rome</span>
                    </div>

                    <!-- Vertical Timeline -->
                    <div class="border-left pl-3 ml-3">
                        <p class="small mb-2">2025-08-01: Shipment created</p>
                        <p class="small mb-2">2025-08-02: Picked up by courier</p>
                        <p class="small mb-2">2025-08-03: In transit</p>
                        <p class="small mb-2">2025-08-04: Arrived at destination</p>
                        <p class="small mb-2">2025-08-05: Delivered</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>