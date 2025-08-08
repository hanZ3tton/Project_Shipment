   <script>
       document.getElementById("userForm").addEventListener("submit", function(e) {
           // e.preventDefault(); // Uncomment if you want to prevent real submit
           // alert("User data has been submitted!");
       });
   </script>

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

   <!-- Page level plugins -->
   <script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

   <!-- Page level custom scripts -->
   <script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>