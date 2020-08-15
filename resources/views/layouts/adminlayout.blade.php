
<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{asset('web/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{asset('web/css/style.css')}}">
<link href="{{asset('web/css/style.css')}}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Graph CSS -->
<link href="{{asset('web/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<link href='{{asset('web/css/fonts.googleapis.com/css/family=Roboto:700,500,300,100italic,100,400')}}" rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="{{asset('web/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('web/js/amcharts.js')}}"></script>	
<script src="{{asset('web/js/serial.js')}}"></script>	
<script src="{{asset('web/js/light.js')}}"></script>	
<script src="{{asset('web/js/radar.js')}}"></script>	
<link href="{{asset('web/css/barChart.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('web/css/fabochart.css')}}" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="{{asset('web/js/css3clock.js')}}"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="{{asset('web/js/skycons.js')}}"></script>

<script src="{{asset('web/js/jquery.easydropdown.js')}}"></script>


<meta charset="UTF-8">
      
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="{{asset('chamb/css/font-awesome.min.css')}}">
      <!--bootstrap css-->
      <link rel="stylesheet" href="{{asset('chamb/css/bootstrap.min.css')}}">
      <!--animate css-->
      <link rel="stylesheet" href="{{asset('chamb/css//animate-wow.css')}}">
      <!--main css-->
      <link rel="stylesheet" href="{{asset('chamb/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('chamb/css/bootstrap-select.min.css')}}">
      <link rel="stylesheet" href={{asset('chamb/css/slick.min.css')}}">
      <!--responsive css-->
      <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">

<!--//skycons-icons-->


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head> 



<body background="milk.jpg">
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	 
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						      
								</div>
									
									
							<!--/profile_details-->
								<div class="profile_details_left">
									
											<li class="dropdown note dra-down">
											<a  href="/a1logout">Logout</a>   
													   <div id="dd" class="wrapper-dropdown-3" tabindex="1">
																			
																		</div>
																		
										    </li>
									       <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													
										</li>
										

							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
						
																
												
												@yield('content')
												


									
									 <!--footer section start-->
										<footer>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">NP dairy Ltd.</a></p>
										</footer>
									<!--footer section end-->
								
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>NP Dairy Ltd</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.html"><img src="user.jpg"></a>
									  <a href="index.html"><span class=" name-caret">Jasmin Leo</span></a>
									 <p>User</p>
									<ul>
									<li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="userindex"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										<li><a href="purchase"><i class="fa fa-tachometer"></i> <span>Purchase Milk</span></a></li>
										<li><a href="sales"><i class="fa fa-tachometer"></i> <span>Sell Milk</span></a></li>
										<li><a href="milkproduct"><i class="fa fa-tachometer"></i> <span>Buy milk products</span></a></li>
										
										</ul> 
<!--js -->
<link rel="stylesheet" href="{{asset('web/css/vroom.css')}}">
<script type="text/javascript" src="{{asset('web/js/vroom.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/TweenLite.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/js/CSSPlugin.min.js')}}"></script>
<script src="{{asset('web/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('web/js/scripts.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="{{asset('web/js/bootstrap.min.js')}}"></script>
</body>
</html>