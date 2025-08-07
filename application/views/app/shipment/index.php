<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipment Table</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        .flag {
            width: 30px;
            height: 30px;
            object-fit: cover;
            border-radius: 9999px;
        }

        .truck-icon {
            animation: moveTruck 2s linear infinite;
        }

        @keyframes moveTruck {
            0% {
                transform: translateX(-5px);
            }

            50% {
                transform: translateX(5px);
            }

            100% {
                transform: translateX(-5px);
            }
        }
    </style>
</head>

<div class="container bg-white rounded shadow p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h4 mb-0"><i class="bi bi-table"></i> Shipment Table</h2>
        <div class="position-relative">
            <input type="text" id="searchInput" class="form-control form-control-sm pr-4" placeholder="Search...">
            <i class="bi bi-search position-absolute" style="top: 8px; right: 10px; color: #aaa;"></i>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm w-100" id="shipmentTable" style="min-width:1200px;">
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
                    <th>Item Name</th> <!-- Tambahkan kolom ini -->
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>John Smith</td>
                    <td>123 Elm St, New York</td>
                    <td class="text-center">
                        <img src="https://flagcdn.com/us.svg" alt="USA" class="flag"><br>
                        <small>USA</small>
                    </td>
                    <td>Maria Rossi</td>
                    <td>Via Roma 22, Rome</td>
                    <td class="text-center">
                        <img src="https://flagcdn.com/it.svg" alt="Italy" class="flag"><br>
                        <small>Italy</small>
                    </td>
                    <td class="text-center">#RX239840</td>
                    <td>Shoes</td> <!-- Data item -->
                    <td class="text-center">
                        <span class="badge badge-success">Complete</span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-info btn-detail" data-id="1" title="Detail"><i class="bi bi-eye"></i>
                            </button>
                            <button class="btn btn-warning btn-tracking text-white" data-id="1" title="Tracking"><i
                                    class="bi bi-truck"></i></button>
                            <button class="btn btn-secondary btn-edit" data-id="1" title="Edit"><i
                                    class="bi bi-pencil-square"></i></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>Linda Tan</td>
                    <td>Jl. Sudirman 10, Jakarta</td>
                    <td class="text-center">
                        <img src="https://flagcdn.com/id.svg" alt="Indonesia" class="flag"><br>
                        <small>Indonesia</small>
                    </td>
                    <td>Tom Lee</td>
                    <td>123 Orchard Rd, Singapore</td>
                    <td class="text-center">
                        <img src="https://flagcdn.com/sg.svg" alt="Singapore" class="flag"><br>
                        <small>Singapore</small>
                    </td>
                    <td class="text-center">#SG123456</td>
                    <td>Electronics</td> <!-- Data item -->
                    <td class="text-center">
                        <span class="badge badge-warning text-white">On Process</span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-info btn-detail" data-id="2" title="Detail"><i class="bi bi-eye"></i>
                            </button>
                            <button class="btn btn-warning btn-tracking text-white" data-id="2" title="Tracking"><i
                                    class="bi bi-truck"></i></button>
                            <button class="btn btn-secondary btn-edit" data-id="2" title="Edit"><i
                                    class="bi bi-pencil-square"></i></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td>Akira Sato</td>
                    <td>2-1-1 Nihonbashi, Tokyo</td>
                    <td class="text-center">
                        <img src="https://flagcdn.com/jp.svg" alt="Japan" class="flag"><br>
                        <small>Japan</small>
                    </td>
                    <td>Emily Brown</td>
                    <td>221B Baker St, London</td>
                    <td class="text-center">
                        <img src="https://flagcdn.com/gb.svg" alt="UK" class="flag"><br>
                        <small>UK</small>
                    </td>
                    <td class="text-center">#JP998877</td>
                    <td>Book</td> <!-- Data item -->
                    <td class="text-center">
                        <span class="badge badge-danger">Pending</span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-info btn-detail" data-id="3" title="Detail"><i class="bi bi-eye"></i>
                            </button>
                            <button class="btn btn-warning btn-tracking text-white" data-id="3" title="Tracking"><i
                                    class="bi bi-truck"></i></button>
                            <button class="btn btn-secondary btn-edit" data-id="3" title="Edit"><i
                                    class="bi bi-pencil-square"></i></button>
                        </div>
                    </td>
                </tr>
                <!-- Tambahkan data lain jika perlu -->
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-end">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
    </nav>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-card-text"></i> Detail Pengiriman</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <ul class="list-unstyled small">
                    <li><strong>Nama Penerima:</strong> Maria Rossi</li>
                    <li><strong>Negara:</strong> Italy</li>
                    <li><strong>Item Name:</strong> Shoes</li>
                    <li><strong>Sender Email:</strong> john@example.com</li>
                    <li><strong>Sender Postal Code:</strong> 10001</li>
                    <li><strong>Receiver Email:</strong> maria@example.it</li>
                    <li><strong>Receiver Postal Code:</strong> 00185</li>
                    <li><strong>Receiver Phone:</strong> +39 334 5678</li>
                    <li><strong>Price:</strong> $39.99</li>
                    <li><strong>Weight:</strong> 2.5 kg</li>
                    <li><strong>Length x Width x Height:</strong> 40 x 30 x 10 cm</li>
                    <li><strong>Created At:</strong> 2025-08-01</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tracking -->
<div class="modal fade" id="trackingModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-truck"></i> Tracking</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <span>New York</span>
                    <div class="bg-secondary flex-fill mx-2" style="height: 4px; position: relative;">
                        <div class="truck-icon text-white bg-primary rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 40px; height: 40px; position: absolute; left: 50%; top: -18px; transform: translateX(-50%);">
                            <i class="bi bi-truck"></i>
                        </div>
                    </div>
                    <span>Rome</span>
                </div>

                <ul class="list-unstyled border-left pl-3">
                    <li>2025-08-01: Shipment created</li>
                    <li>2025-08-02: Picked up by courier</li>
                    <li>2025-08-03: In transit</li>
                    <li>2025-08-04: Arrived at destination</li>
                    <li>2025-08-05: Delivered</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    document.querySelectorAll('.btn-detail').forEach(btn => {
        btn.addEventListener('click', () => {
            $('#detailModal').modal('show');
        });
    });

    document.querySelectorAll('.btn-tracking').forEach(btn => {
        btn.addEventListener('click', () => {
            $('#trackingModal').modal('show');
        });
    });

    // Sorting logic could be added here using JS or DataTables.js if needed
</script>
<!-- jQuery sudah ada -->
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#shipmentTable').DataTable({
            "autoWidth": false,
            "scrollX": true
        });
    });
</script>

</body>

</html>