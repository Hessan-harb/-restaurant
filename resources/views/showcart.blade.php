<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
    <!--
        
    TemplateMo 558 Klassy Cafe

    https://templatemo.com/tm-558-klassy-cafe

    -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    


<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                            <a class="menu-trigger">
                                <span>Menu</span>
                            </a>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            
                            <li class="scroll-to-section bg-gray-400 rounded-3">
                            @auth <a href="{{url('/showcart',Auth::user()->id)}}"> Cart[{{$count}}] </a> @endauth @guest Cart[0] @endguest

                                </a></li>

                            <li>
                                @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                    
                                    <li>
                                        <x-app-layout>
   
                                        </x-app-layout>
                                    </li>
                                    @else
                                    <li>
                                        <a href="{{ route('login') }}" class="font-semibold text-gray-600
                                         hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm
                                          focus:outline-red-500">Login</a>
                                     </li>

                                        @if (Route::has('register'))
                                        <li>
                                           <a href="{{ route('register') }}" class="ml-4 font-semibold
                                         text-gray-600 hover:text-gray-900 focus:outline focus:outline-2
                                          focus:rounded-sm focus:outline-red-500">Register</a>
                                        </li>
                                        @endif
                                    @endauth
                                </div>
                                @endif
                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span></span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
</header>

    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    
                </div>
                
            </div>
        </div>
    </section>

    <div class="container pt-11 m-8 py-7">
         <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Food Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{url('orderconfirm')}}" method="post">
                            @csrf
                            @foreach($data as $data)
                            <tr>
                            <td>
                                <input type="text" name="foodname[]" value="{{$data->title}}" hidden>
                                 {{$data->title}}
                            </td>

                            <td>
                                <input type="text" name="price[]" value="{{$data->price}}" hidden>
                                {{$data->price}}
                            </td>

                            <td>
                                <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden>
                                {{$data->quantity}}
                            </td>
                                            
                        </tr>
                        @endforeach
                                            
                        @foreach($data1 as $data1)
                        <tr>
                        <td style="position: relative; top: -130px; right: -1000px;">
                            <a href="{{url('/remove',$data1->id)}}" class="btn btn-primary">Remove</a>
                            </td></tr>
                        @endforeach
                        </tbody>
                </table>

                <div align="center" style="padding: 10px;">
                   <button class="btn btn-primary bg-primary" type="button" id="order">Order Now</button>
                </div>

                <div align="center" style="padding: 10px; display: none;" id="appear">
                     <div style="padding: 10px;">
                         <label for="">Name:</label>
                         <input type="text" name="name" placeholder="Name" required>
                     </div>

                    <div style="padding: 10px;">
                         <label for="">Phone:</label>
                         <input type="number" name="phone" placeholder="Phone Num" required>
                    </div>

                    <div style="padding: 10px;">
                        <label for="">Address:</label>
                        <input type="text" name="address" placeholder="Address" required>
                    </div>

                    <div style="padding: 10px;">
                        <input type="submit" value="Order Confirm" class="btn btn-primary bg-primary">
                         <button class="btn btn-danger bg-danger" type="button" id="close">Close</button>
                    </div>
                 </div>
                            
            </div>
        </form>
    </div>





     <!-- jQuery -->

     <script>
        $("#order").click(
            function(){
                $('#appear').show();
            }
        )

        $("#close").click(
            function(){
                $('#appear').hide();
            }
        )
     </script>
     <script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>
</body>
</html>