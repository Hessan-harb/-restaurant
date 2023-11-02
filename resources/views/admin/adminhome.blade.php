

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="admin/assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="admin/assets/vendors/flatpickr/flatpickr.min.css">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="admin/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="admin/assets/css/demo2/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
	@include('admin.navbar')
   
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
            <li class="nav-item dropdown"></li>
				
				
                    <x-app-layout>
    
                    </x-app-layout>

			</nav>
			<!-- partial -->

			<div class="page-content">

				<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
				<div>
					<h4 class="mb-3 mb-md-0">Welcome to Admin Dashboard</h4>
				</div>
				<div class="d-flex align-items-center flex-wrap text-nowrap">
					<div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
					<span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
					<input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
					</div>
					<button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
					<i class="btn-icon-prepend" data-feather="printer"></i>
					Print
					</button>
					<button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
					<i class="btn-icon-prepend" data-feather="download-cloud"></i>
					Download Report
					</button>
				</div>
			</div>
			

		<div class="row">

          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Our Customers</h6>
                      <div class="dropdown mb-2">
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h2 class="mb-2">{{$total_customers}}</h2>
                        
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



			  <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">All Foods</h6>
                      <div class="dropdown mb-2">
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h2 class="mb-2">{{$total_food}}</h2>
                        
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

			  


              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Total Orders</h6>
                      <div class="dropdown mb-2">
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h2 class="mb-2">{{$total_order}}</h2>
                        
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


			  <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Our Chefs</h6>
                      <div class="dropdown mb-2">
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h2 class="mb-2">{{$total_chef}}</h2>
                        
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Reservations </h6>
                      <div class="dropdown mb-2">
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h2 class="mb-2">{{$total_reservations}}</h2>
                        
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- row -->

		<!-- core:js -->
			<script src="admin/assets/vendors/core/core.js"></script>
			<!-- endinject -->

			<!-- Plugin js for this page -->
		<script src="admin/assets/vendors/flatpickr/flatpickr.min.js"></script>
		<script src="admin/assets/vendors/apexcharts/apexcharts.min.js"></script>
			<!-- End plugin js for this page -->

			<!-- inject:js -->
			<script src="admin/assets/vendors/feather-icons/feather.min.js"></script>
			<script src="admin/assets/js/template.js"></script>
			<!-- endinject -->

			<!-- Custom js for this page -->
		<script src="admin/assets/js/dashboard-dark.js"></script>
		<!-- End custom js for this page -->

</body>
</html>    