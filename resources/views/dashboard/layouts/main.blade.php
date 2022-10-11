<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIPPJAFUNG | Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets_login/img/favicon.png" rel="icon">
  <link href="assets_login/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets_login/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets_login/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets_login/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets_login/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets_login/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets_login/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets_login/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets_login/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('dashboard.partials.navbar')

  <!-- ======= Sidebar ======= -->
  @include('dashboard.partials.sidebar')
  
  @yield('content')

  @include('dashboard.partials.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets_login/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets_login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets_login/vendor/chart.js/chart.min.js"></script>
  <script src="assets_login/vendor/echarts/echarts.min.js"></script>
  <script src="assets_login/vendor/quill/quill.min.js"></script>
  <script src="assets_login/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets_login/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets_login/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets_login/js/main.js"></script>

</body>

</html>