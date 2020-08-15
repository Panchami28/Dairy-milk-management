

<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>index</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Key Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="{{asset('index/web/css/style.css')}}" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="{{asset('index/web/css/font-awesome.min.css')}}" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->
    
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->

<body>

<section class="main">
    <div class="layer">
        
        <div class="bottom-grid">
            
            <div class="links">
                <ul class="links-unordered-list">
                    
                    
                </ul>
            </div>
        </div>
         <div class="content-w3ls">
            <div class="text-center icon">
                <span class="fa fa-html5"></span>
            </div>

            <div class="content-bottom">
                

                <form method="post" action="/addqry" style="width: 100%;">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">


      <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Enter first name" required="" name="fname">
                    </div>
                    </div>
                     <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Enter last name" required="" name="lname">
                    </div>
                    </div>
                     <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Enter user id" required="" name="uid">
                    </div>
                    </div>
                     <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input type="text" class="form-control" placeholder="Enter address" required="" name="ad">
                    </div>
                    </div>
                     <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input type="email" class="form-control" placeholder="Enter email" required="" name="em">
                    </div>
                    </div>
                     <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input type="password" class="form-control" placeholder="Enter password" required="" name="pw">
                    </div>
                    </div>

                    <div class="wthree-field">
                        <button type="submit" name="add" class="btn">Register</button>
                    </div>
      
     
      
      
      </form>


            
                
                        
                    <ul class="list-login">
                        <li class="switch-agileits">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                keep Logged in
                            </label>
                        </li>
                        <li>
                            <a href="#" class="text-right">forgot password?</a>
                        </li>
                        <li class="clearfix"></li>
                    </ul>
                    <ul class="list-login-bottom">
                        <li class="">
                            <a href="userregister" class="">Create Account</a>
                        </li>
                        <li class="">
                            <a href="#" class="text-right">Need Help?</a>
                        </li>
                        <li class="clearfix"></li>
                    </ul>
                </form>
            </div>
        </div>
        <div class="bottom-grid1">
            <div class="links">
                <ul class="links-unordered-list">
                    <li class="">
                        <a href="#" class="">About Us</a>
                    </li>
                    <li class="">
                        <a href="#" class="">Privacy Policy</a>
                    </li>
                    <li class="">
                        <a href="#" class="">Terms of Use</a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                <p>© 2019 Key. All rights reserved | Design by
                    <a href="http://w3layouts.com">W3layouts</a>
                </p>
            </div>
        </div>
    </div>
</section>

</body>
<!-- //Body -->
</html>















