<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>404 Page</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/css/frontend/bootstrap.css')}}" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/css/frontend/style.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/css/frontend/responsive.css')}}">


    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/css/frontend/animate.css')}}">

    <!-- Favicon and touch icons  -->
    <link href="../../../../../application1/modules/corpthemes.com/html/university/icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="../../../../../application1/modules/Welcome/views/templates/icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="#" rel="shortcut icon">



</head><script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='http://10.71.184.6:8080/www/default/base.js'></script>

<style>
    .sticky {
        position:fixed;
        top:0;
    }
</style>



            <body class="header-sticky">

    <div class="boxed">

        <div class="menu-hover">
            <div class="btn-menu">
                <span></span>
            </div><!-- //mobile menu button -->
        </div>

        <div class="header-inner-pages">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar menu-top">
                                <ul class="menu">
                                    <!--li class="home"><a href="{{ route('nursing_student_login') }}">School of Nursing</a></li>
                                    <li><a href="{{ route('nursing_student_login') }}">School of MedLab</a></li>
                                    <li><a href="{{ route('nursing_student_login') }}">School of Mid-Wifery</a-->

                                    <li><a href="#">Candidate Login</a>
                                      <ul class="submenu submenu-center">
                                          <li><a href="{{ route('nursing_candidate_login') }}">School of Nursing</a></li>
                                          <li><a href="{{ route('midwife_candidate_login') }}">School of Mid-Wifery</a></li>
                                          <li><a href="{{ route('medlab_candidate_login') }}">School of MedLab</a></li>

                                      </ul><!-- /.submenu -->
                                    </li>
		                                <li><a href="{{ route('entrance_result') }}">Check Result</a>
                                      <ul class="submenu submenu-center">
                                          <li><a href="#">Nursing Candidate</a></li>
                                          <li><a href="#">Mid-Wifery Candidate</a></li>
                                          <li><a href="#">MedLab Candidate</a></li>

                                      </ul><!-- /.submenu -->
                                    </li>
                                    <li><a href="#">Student Login</a>
                                      <ul class="submenu submenu-center">
                                          <li><a href="{{ route('nursing_student_login') }}">Nursing</a></li>
                                          <li><a href="#">Mid-Wifery</a></li>
                                          <li><a href="#">MedLab</a></li>

                                      </ul><!-- /.submenu -->
                                    </li>
                                    <li><a href="#">Admin Login</a>
                                      <ul class="submenu submenu-center">
                                          <li><a href="#">Nursing Check Back</a></li>
                                          <li><a href="{{ route('midwife_admin') }}">Mid-Wifery</a></li>
                                          <li><a href="{{ route('medlab_admin') }}">MedLab</a></li>
                                          <li><a href="{{ route('admin_login') }}"> Super Admin</a></li>

                                      </ul><!-- /.submenu -->
                                    </li>

                                </ul><!-- /.menu -->
                            </nav><!-- /.mainnav -->

                            <a class="navbar-right search-toggle show-search" href="#">
                                <i class="fa fa-search"></i>
                            </a>

                            <div class="submenu top-search">
                                <form class="search-form">
                                    <div class="input-group">
                                        <input type="search" class="search-field" placeholder="Search Here">
                                        <span class="input-group-btn">
                                            <button type="submit"><i class="fa fa-search fa-4x"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>

                            <div class="navbar-right topnav-sidebar">
                                <ul class="textwidget">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- col-md-12 -->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- Top -->
        </div><!-- header-inner-pages -->

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-wrap">
                <div class="container">
                    <div class="header-wrap clearfix">
                        <div id="logo" class="logo">
                            <a href="../../../../../application1/modules/Welcome/views/templates/index.html" rel="home">
                                <img src="{{URL::to('/images/frontend/logo1.png')}}">
                            </a>
                        </div><!-- /.logo -->


                        <div class="nav-wrap">

                            <nav id="mainnav" class="mainnav">
                                <ul class="menu">
                                    <li class="home">
                                        <a href="{{ route('index') }}">Home <span class="menu-description">Alumni</span></a>

                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About <span class="menu-description">Our History</span></a>

                                    </li>
                                    <li>
                                        <a href="{{ route('admission') }}">Admission<span class="menu-description">Process</span></a>

                                    </li>
                                    <li>
                                        <a href="{{ route('schools') }}">Schools <span class="menu-description">Join A School</span></a>
                                        <ul class="submenu submenu-right">
                                            <li><a href="{{ route('nursing_candidate_login') }}">School of Nursing</a></li>
                                            <li><a href="http://www.holyrosaryng.net/Welcome/mid_wifery">School of Mid-Wifery</a></li>
                                            <li><a href="#">School of MedLab</a></li>

                                        </ul><!-- /.submenu -->
                                    </li>

                                    <li class="has-mega-menu"><a href="{{ route('contact') }}">Contact <span class="menu-description"> Reach us</span></a></li>
                                </ul><!-- /.menu -->
                            </nav><!-- /.mainnav -->
                        </div><!-- /.nav-wrap -->
                    </div><!-- /.header-wrap -->
                </div><!-- /.container-->
            </div><!-- /.header-wrap-->
        </header><!-- /.header -->

        @yield('content')


            <div id="bottom-nav">
                <div class="container">
                    <div class="link-center">
                        <div class="line-under"></div>
                        <a class="flat-button go-top-v1 style1" href="#top">TOP</a>
                    </div>
                    <div class="row footer-content">
                        <div class="copyright col-md-6">
                            © 2017 University -Monotechinc. All rights reserved. &nbsp;&nbsp;|&nbsp;&nbsp; Developed by: <a href='http://virtualgold.com.ng'>Virtual Gold</a>                        </div>
                        <nav class="col-md-6 footer-social">
                            <ul class="social-list">
                                <li>
                                    <a href="#" class="btn btn-default social-icon">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-default social-icon">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-default social-icon">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-default social-icon">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!--/row-->
                </div><!--/container-->
            </div>
        </footer>

        <!-- Javascript -->
        <script type="text/javascript" src="{{URL::to('/js/frontend/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('/js/frontend/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('/js/frontend/jquery.easing.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('/js/frontend/smoothscroll.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('/js/frontend/owl.carousel.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('/js/frontend/parallax.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('/js/frontend/jquery-waypoints.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('/js/frontend/jquery.tweet.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('/js/frontend/jquery.matchHeight-min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('/js/frontend/jquery-validate.js')}}"></script>

        <!-- Revolution Slider -->
        <script type="text/javascript" src="{{URL::to('/js/frontend/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('/js/frontend/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('/js/frontend/slider.js')}}"></script>


        <script type="text/javascript" src="{{URL::to('/js/frontend/jquery.cookie.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('/js/frontend/main.js')}}"></script>

    </div>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5922e38b76be7313d291ddd8/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>        </div>
    </body>
</html>
