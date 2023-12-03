<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script>
    $(document).ready(function () {
        // When the "Edit" button is clicked
        $('.btn-editAdmin').click(function () {
            // Get the data from the button's data attributes
            var level = $(this).data('level');
            var email = $(this).data('email');
            var username = $(this).data('username');
            var password = $(this).data('password');

            // Set the values in the form
            $('#editedLevel').val(level); // Menyimpan username yang akan diubah
            $('#editedEmail').val(email); // Menyimpan username yang akan diubah
            $('#editedUsername').val(username);
            $('#editedPassword').val(password);

            // Show the modal
            $('#editAdmin').modal('show');
        });
    });
</script>
<script>
    $(document).ready(function(){
        // Your other scripts

        // Show modals if needed
        $("#newSuccessModal").modal("show");
        $("#newErrorModal").modal("show");
        $("#updateSuccessModal").modal("show");
        $("#updateErrorModal").modal("show");
        // Add more modal show scripts if necessary
    });
</script>



