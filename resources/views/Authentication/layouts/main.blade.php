<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>PTSP || {{ $title }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href={{ URL::asset("assets/images/logos/icons8-law-96.png") }} />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href={{ URL::asset("assets/sneat/assets/vendor/fonts/boxicons.css") }}>

    <!-- Core CSS -->
    <link rel="stylesheet" href={{ URL::asset("assets/sneat/assets/vendor/css/core.css") }} class="template-customizer-core-css" >
    <link rel="stylesheet" href={{ URL::asset("assets/sneat/assets/vendor/css/theme-default.css") }} class="template-customizer-theme-css" />
    <link rel="stylesheet" href={{ URL::asset("assets/sneat/assets/css/demo.css") }}>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href={{ URL::asset("assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css") }}>

    <!-- Page CSS -->
  	<link rel="stylesheet" href={{ URL::asset("assets/w3schools/w3.css") }}>

    <!-- Page -->
    <link rel="stylesheet" href={{ URL::asset("assets/sneat/assets/vendor/css/pages/page-auth.css") }}>

    <!-- Helpers -->
    <script src={{ URL::asset("assets/sneat/assets/vendor/js/helpers.js") }}></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src={{ URL::asset("assets/sneat/assets/js/config.js") }}></script>
  </head>

  <body class="w3-animate-opacity">
    <!-- Content -->

    @yield('content')

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src={{ URL::asset("assets/sneat/assets/vendor/libs/jquery/jquery.js") }}></script>
    <script src={{ URL::asset("assets/sneat/assets/vendor/libs/popper/popper.js") }}></script>
    <script src={{ URL::asset("assets/sneat/assets/vendor/js/bootstrap.js") }}></script>
    <script src={{ URL::asset("assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js") }}></script>
    <script src={{ URL::asset("assets/sneat/assets/vendor/js/menu.js") }}></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src={{ URL::asset("assets/sneat/assets/js/main.js") }}></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
