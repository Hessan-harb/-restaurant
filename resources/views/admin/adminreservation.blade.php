

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

            <div class="page-content row justify-content-center">

            <label class="d-flex d-fixed justify-content-center  align-items-center mt-n6 py-7 
            mb-n7 font-bold text-2xl d-inline-block">All Reservation</label>
            <div class="container col-auto mt-n7 py-7 left-4 right-7 flex-wrap grid-margin">
                <table class="table table-striped table-dark table-bordered ">
                <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Message</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                            <tr>
                            <th scope="row">{{$data->name}}</th>
                            <td>{{$data->email}}</td>
                            
                            <td>{{$data->phone}}</td>
                            <th>{{$data->date}}</th>
                            <td>{{$data->time}}</td>
                            <th>{{$data->message}}</th>
                           
                            </tr>
                            @endforeach
                           
                            
                        
                        </tbody>
                </table>

		
		</div>
	</div>

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