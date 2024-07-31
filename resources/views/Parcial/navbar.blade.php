<div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logo1.png" alt="Marino"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
               <li >
                        <a href="#">Introduction</a>
                    </li>
                    <li><a href="about.html">Conférence</a></li>
                    <li >
                        <a href="shop.html">Chiffres clés</a>
                    </li>
                    <li >
                        <a href="service.html">Communication</a>
                    </li>
                   
                    <li >
                        <a href="blog.html">Participation</a>
                    </li> 
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner text-center">
            <img src="assets/img/logo.svg" alt="Marino">
            <span class="loader"></span>
        </div>
    </div>
    <!--==============================
    Sidemenu
    ============================== -->
    <div class="sidemenu-wrapper d-none d-lg-block">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="vs-widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img src="assets/img/logo1.png" alt="Marino"></a>
                    </div>
                    <p class="footer-text">Ut tellus dolor, dapibus eget, elementum ifend cursus eleifend, elit. Aenea
                        ifen dn tor wisi Aliquam er at volutpat. Dui ac tui end cursus eleifendrpis.</p>
                    <div class="info-social style3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Recent Articles</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fal fa-calendar-alt"></i>December 15, 2022</a>
                            </div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Expanding The Solar
                                    Supply Chain Finance</a></h4>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fal fa-calendar-alt"></i>March 13, 2022</a>
                            </div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Surviving
                                    sustainably solar energy 2022</a></h4>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.jpg"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fal fa-calendar-alt"></i>Augest 23, 2022</a>
                            </div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Future Solar Energy
                                    Innovation Challenges</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
  
    Header Area
    ==============================-->
    <header class="vs-header header-layout5">
        
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="vs-container2">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-auto align-self-stretch">
                            <div class="vs-logo style2">
                                <a href="index.html" class="d-none d-xl-block"><img src="assets/img/logo.png" alt="logo"></a>
                                <a href="index.html" class="d-block d-xl-none"><img src="assets/img/logo1.png" alt="logo"></a>
                                <a href="index.html" class="sticky-logo"><img src="assets/img/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col mx-0">
                                <div class="row gx-50 align-items-center ">
                                    <div class="col d-flex align-items-center justify-content-between">
                                        <nav class="main-menu d-none d-lg-block">
                                            <ul>
                                            <li><a href="index.html">{{ __('messages.Introduction') }}</a></li>
                                           
                                            <li><a href="shop.html">{{ __('messages.key_figures') }}</a></li>
                                            <li><a href="service.html">{{ __('messages.communication') }}</a></li>
                                            <li><a href="blog.html">{{ __('messages.participation') }}</a></li>
                                            <li ><a  href="contact.html">{{ __('messages.contact') }}</a></li>
                                            </ul>
                                             
                                        </nav>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-globe"></i> {{ strtoupper(app()->getLocale()) }}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="margin: 0px;">
            <li><a class="dropdown-item" href="{{ route('switch.language', ['lang' => 'fr']) }}">Français</a></li>
            <li><a class="dropdown-item" href="{{ route('switch.language', ['lang' => 'en']) }}">English</a></li>
            <li><a class="dropdown-item" href="{{ route('switch.language', ['lang' => 'ar']) }}">العربية</a></li>
        </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto d-lg-none">
                                        <button class="vs-menu-toggle d-inline-block">
                                            <i class="fal fa-bars"></i>                                           
                                       </button>
                                    </div>
                                </div>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="row align-items-center">
                                <div class="col-auto bar-area">
                                    <button class="bar-btn ">
                                    Participation
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==============================