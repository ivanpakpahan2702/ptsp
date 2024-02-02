<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>PTSP || {{ $title }}</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/images/logos/icons8-law-96.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="assets/sneat/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/sneat/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/sneat/assets/vendor/css/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/sneat/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/sneat/assets/vendor/libs/apex-charts/apex-charts.css" />
  <link rel="stylesheet" href="assets/sneat/assets/vendor/libs/spinkit/spinkit.css" />

  {{-- Font Awesome --}}
  <link rel="stylesheet" href="assets/fontawesome@6.3.0/css/all.min.css" />

  <!-- Page CSS -->
  <link rel="stylesheet" href={{ URL::asset('assets/w3schools/w3.css') }}>
  <!-- Helpers -->
  <script src="assets/sneat/assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/sneat/assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar w3-animate-left">
    <div class="layout-container">
      <!-- Menu -->
      @include('user.partials.navbar')
      <!-- Menu -->
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Nav -->
        @include('user.partials.nav')
        <!-- / Nav -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        @yield('content')
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / Content -->
          <!-- Footer -->
          @include('user.partials.footer')
          <!-- Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <div class="buy-now">
    <a href="/room-chat" target="" class="btn btn-danger btn-buy-now">Ruang Chat</a>
  </div>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="assets/sneat/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/sneat/assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/sneat/assets/vendor/js/bootstrap.js"></script>
  <script src="assets/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/sneat/assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/sneat/assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="assets/sneat/assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="assets/sneat/assets/js/dashboards-analytics.js"></script>
  <script src="assets/sneat/assets/js/extended-ui-perfect-scrollbar.js"></script>
  <script src="assets/sneat/assets/js/form-basic-input.js"></script>
  <script src="assets/sneat/assets/js/pages-account-settings-account.js"></script>
  <script src="assets/sneat/assets/js/ui-modals.js"></script>
  <script src="assets/sneat/assets/js/ui-popover.js"></script>
  <script src="assets/sneat/assets/js/ui-toasts.js"></script>


  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
