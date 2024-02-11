{{-- <?php
// header("Access-Control-Allow-Origin: *");
// session_start();
// Check if last activity was set
// if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 900)) {
//     // last request was more than 15 minutes ago
//     session_unset();     // unset $_SESSION variable for the run-time 
//     session_destroy();   // destroy session data in storage
//     header("Location: login.php"); // redirect to login page
// }
// $_SESSION['last_activity'] = time(); // update last activity time stamp
?> --}}


<!DOCTYPE html>
<html>

<head>
    <title>NTA Lawaan</title>
    <link rel="stylesheet" href="{{ asset('css-libs/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css-libs/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css-libs/buttons.bootstrap4.min.css')}}">

    <script src="js-libs/jquery-2.2.4.min.js"></script>
    <link rel="stylesheet" href="third-party/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <script src="js-libs/jquery.dataTables.min.js"></script>
    <script src="js-libs/dataTables.buttons.min.js"></script>
    <script src="js-libs/jszip.min.js"></script>
    <script src="js-libs/pdfmake.min.js"></script> <!-- pdfmake 0.2.7 -->
    <script src="js-libs/vfs_fonts.js"></script>
    <script src="js-libs/buttons.html5.min.js"></script>
    <script src="js-libs/buttons.print.min.js"></script>
    <script src="js-libs/buttons.bootstrap4.min.js"></script>
    <script src="js-libs/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="css-libs/dataTables.bootstrap4.min.css">
    <script src="third-party/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
    <script src="js/jquery.tabledit.js"></script>

    <style>
        table.dataTable tbody th,
        table.dataTable tbody td {
            white-space: nowrap;
        }
    </style>
    
    <link rel="stylesheet" href="third-party/fontawesome-free-5.15.4-web/css/all.min.css"> <!-- fontawesome 5.15.4 web -->
    <script src="third-party/fontawesome-free-5.15.4-web/js/all.min.js"></script> <!-- fontawesome 5.15.4 web -->

    <script src="js-libs/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="css-libs/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/main_content.css">
    <link rel="stylesheet" href="css/threed.css">
    <link rel="stylesheet" href="css/pass_validation.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    
    
{{$slot}}


</div><!-- Main Col END -->
</div><!-- body-row END -->

<script src="js/main.js"></script>
<script src="js/pass_validation.js"></script>

</body>

</html>
<script src="js\filesubmit.js"></script>