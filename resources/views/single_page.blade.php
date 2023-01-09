
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Gesture Blogge</title>
        <link rel="shortcut icon"  href="images/favicon.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!-- CSS Files -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="https://elmanawy.info/demo/maro-news/css/font-awesome.min.css">					
        <link rel="stylesheet" href="https://elmanawy.info/demo/maro-news/css/themify-icons.css">					
        <link rel="stylesheet" href="https://elmanawy.info/demo/maro-news/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://elmanawy.info/demo/maro-news/css/owl.carousel.css">	
        <link rel="stylesheet" href="https://elmanawy.info/demo/maro-news/css/animate.css">
        <link rel="stylesheet" href="https://elmanawy.info/demo/maro-news/css/normalize.css">
        <link rel="stylesheet" href="https://elmanawy.info/demo/maro-news/css/style.css" type="text/css" />			
        <link rel="stylesheet" href="https://elmanawy.info/demo/maro-news/css/responsive.css" type="text/css" />
        <script src="https://elmanawy.info/demo/maro-news/js/modernizr.min.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <style>
            div#social-links {
                margin: 0 auto;
                max-width: 500px;
            }
            div#social-links ul li {
                display: inline-block;
            }          
              div#social-links ul li a {
                font-size: 20px;
                color: #222;
                display: inline-block;
                height: 48px;
               line-height: 48px;
               width: 27px;
               border-radius: 4px;
               }

 
            }
        </style>
    </head>
    <body itemscope onLoad="goforit()">
        <div class="theme-layout">
            <!--START HEADER-->
            <header class="header-menu">
                <!--START TOP BAR-->
                <div class="top-bar">
                    <div class="container">
                        <div class="sub-top-bar">
                            <div class="current-time">
                                <span id="clock"></span>
                            </div>
                            <div class="tracking-news">
                                <div class="panel panel-default">
                                    <span class="breaking-title"> <span class="fa fa-bolt" aria-hidden="true"></span> <span class="breaking-title-text">Trending News</span> </span>
                                    <div class="panel-body">
                                        <ul class="demo1">
                                            <li class="news-item">
                                                <p><a href="single-post-default.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit sit amet...</a></p>
                                            </li>
                                            <li class="news-item">
                                                <p><a href="single-post-default.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit sit amet...</a></p>
                                            </li>
                                            <li class="news-item">
                                                <p><a href="single-post-default.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit sit amet...</a></p>
                                            </li>
                                            <li class="news-item">
                                                <p><a href="single-post-default.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit sit amet...</a></p>
                                            </li>
                                            <li class="news-item">
                                                <p><a href="single-post-default.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit sit amet...</a></p>
                                            </li>
                                            <li class="news-item">
                                                <p><a href="single-post-default.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit sit amet...</a></p>
                                            </li>
                                            <li class="news-item">
                                                <p><a href="single-post-default.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit sit amet...</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="panel-footer"> </div>
                                </div>
                            </div>
                            @if(Auth::user())
                                <div class="login-register">
                                    <a href="/" title="Maro News"><span><i class="fa fa-user"></i>  {{Auth::user()->name}}</span></a>
                                    <ul class="social-btns">
                                        <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    
                                </div>
                            
                            @else
                            <div class="login-register">
                                <a href="#" title="Maro News"><span><i class="fa fa-user"></i> Login / Register</span></a>
                                <ul class="social-btns">
                                    <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <div class="login-wraper">
                                    <div class="login-popup">
                                        <span class="close"><i class="fa fa-close"></i></span>
                                        <p class="login-icon">
                                            <i class="fa fa-user-circle"></i>
                                            Welcome, Login to your account.
                                        </p>
                                        <div class="social-login-buttons clearfix">
                                            <ul class="items-login-buttons">
                                                <li class="item-1"><a class="btn social-login-btn social-login-btn-facebook"><i class="bf-icon fa fa-facebook"></i>Login with Facebook </a></li>
                                                <li class="item-2"><a class="btn social-login-btn social-login-btn-google"><i class="bf-icon fa fa-google-plus"></i>Google </a></li>
                                                <li class="item-3"><a class="btn social-login-btn social-login-btn-twitter"><i class="bf-icon fa fa-twitter"></i>Twitter </a></li>
                                            </ul>
                                            <div class="or-wrapper"><span class="or-text">Or</span> </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <div class="icon-addon addon-md">
                                                            <input type="text" placeholder="Email" class="form-control" id="email">
                                                            <label for="email" class="icon-input ti-email" title="Email"></label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="icon-addon addon-md">
                                                            <input type="password" placeholder="Password" class="form-control" id="password">
                                                            <label for="password" class="icon-input ti-lock" title="Password"></label>
                                                        </div>
                                                    </div>
                                                    <div class="login-box-footer">
                                                        <p>
                                                            <input type="checkbox" id="rememberme" />
                                                            <label for="rememberme">Remember Me</label>
                                                        </p>
                                                    </div>
                                                    <button class="submit-login"><i class="fa fa-sign-in"></i>SIGN IN</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="box-creat-account">
                                            <p>New Here ?</p>
                                            <a href="/register" ><i class="fa fa-user-plus" aria-hidden="true"></i> Create an Account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                        </div>
                    </div>
                </div>
                <!--/END TOP BAR-->

                <!--START BOTTOM HEADER-->
                <div class="logo-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="logo">
                                    <a title="#" href="index.html"><img alt="maro-news" src="images/logo.png"></a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="ad">
                                    <a href="#" title="Maro News"><img  alt="maro-news" src="images/uploads/ad.jpg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Logo Bar -->
                <div class="menu-bar light">
                    <div class="container">
                        <nav>
                            <ul>
                                <li class="menu-item-has-children"><a href="#" title="Maro News">Home <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html" title="title">Home Layout-1</a></li>
                                        <li><a href="index-1.html" title="title">Home Layout-2</a></li>
                                        <li><a href="index-2.html" title="title">Home Layout-3 <i class="soon">(SOON)</i></a></li>
                                        <li><a href="index-3.html" title="title">Home Layout-4 <i class="soon">(SOON)</i></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="Maro News">Pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="#" title="Maro News">blog Category <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="category-style-1.html" title="Maro News">Blog Category Style-1</a></li>
                                                <li><a href="category-style-2.html" title="Maro News">Blog Category Style-2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title="Maro News">Blog Single Post <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="single-post-default.html" title="Maro News">Single Post Default</a></li>
                                                <li><a href="single-post-with-left-sidebar.html" title="Maro News">Single Post With Left Sidebar</a></li>
                                                <li><a href="single-post-with-right-sidebar.html" title="Maro News">Single Post With Right Sidebar</a></li>
                                                <li><a href="single-post-without-sidebar.html" title="Maro News">Single Post Without Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title="Maro News">pages <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="404.html" title="Maro News">404 Error page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html" title="Maro News">About US</a></li>
                                        <li><a href="contact.html" title="Maro News">Contact US</a></li>
                                        <li><a href="faqs.html" title="Maro News">Faqs </a></li>
                                        <li><a href="register.html" title="Maro News">Registration Page </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="Maro News">Sports <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-menu1">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#megamenu-tab1" data-toggle="tab">Football <i class="fa fa-angle-right"></i></a></li>
                                            <li><a href="#megamenu-tab2" data-toggle="tab">Racing <i class="fa fa-angle-right"></i></a></li>
                                            <li><a href="#megamenu-tab3" data-toggle="tab">swimming <i class="fa fa-angle-right"></i></a></li>
                                            <li><a href="#megamenu-tab4" data-toggle="tab">Basketball <i class="fa fa-angle-right"></i></a></li>
                                            <li><a href="#megamenu-tab5" data-toggle="tab">Handball <i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="megamenu-tab1">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post8.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>    
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post9.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post10.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="megamenu-tab2">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post11.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post12.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post13.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="megamenu-tab3">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post14.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post15.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post16.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="megamenu-tab4">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post17.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post18.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post19.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="megamenu-tab5">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post20.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post21.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="post-style3">
                                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post22.jpg" alt="maro-news" /></a></div>
                                                            <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                            <ul class="post-meta">
                                                                <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                            </ul>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="Maro News">Travels <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-menu1">
                                        <div class="tab-content tab-content2">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="post-style3">
                                                        <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post1.jpg" alt="maro-news" /></a></div>
                                                        <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly to you on envato studio</a></h2>
                                                        <ul class="post-meta">
                                                            <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                            <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                            <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                        </ul>
                                                    </div> 
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="post-style3 custom-post-menu">
                                                                <div class="col-sm-5">
                                                                    <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post2.jpg" alt="maro-news" /></a></div>
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly</a></h2>
                                                                    <ul class="post-meta">
                                                                        <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                        <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                        <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div> 
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="post-style3 custom-post-menu">
                                                                <div class="col-sm-5">
                                                                    <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post3.jpg" alt="maro-news" /></a></div>
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly</a></h2>
                                                                    <ul class="post-meta">
                                                                        <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                        <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                        <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div> 
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="post-style3 custom-post-menu">
                                                                <div class="col-sm-5">
                                                                    <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post4.jpg" alt="maro-news" /></a></div>
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly</a></h2>
                                                                    <ul class="post-meta">
                                                                        <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                        <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                        <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="post-style3 custom-post-menu">
                                                                <div class="col-sm-5">
                                                                    <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post5.jpg" alt="maro-news" /></a></div>
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly</a></h2>
                                                                    <ul class="post-meta">
                                                                        <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                        <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                        <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div> 
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="post-style3 custom-post-menu">
                                                                <div class="col-sm-5">
                                                                    <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post6.jpg" alt="maro-news" /></a></div>
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly</a></h2>
                                                                    <ul class="post-meta">
                                                                        <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                        <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                        <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div> 
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="post-style3 custom-post-menu">
                                                                <div class="col-sm-5">
                                                                    <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="images/uploads/megamenu-post7.jpg" alt="maro-news" /></a></div>
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <h2><a href="single-post-default.html" title="Maro News">Designers matched perfectly</a></h2>
                                                                    <ul class="post-meta">
                                                                        <li><i class="ti-time"></i><a href="#" title="Maro News">May 30,2017</a></li>
                                                                        <li><i class="ti-heart"></i><a href="#" title="Maro News">40k</a></li>
                                                                        <li><i class="fa fa-fire"></i><a href="#" title="Maro News">70k</a></li>
                                                                    </ul>
                                                                </div>

                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="about.html" title="Maro News">Community</a></li>
                                <li><a href="contact.html" title="Maro News">World</a></li>
                                <li><a href="contact.html" title="Maro News">Fashion</a></li>
                                <li><a href="contact.html" title="Maro News">Life Style</a></li>
                            </ul>
                            <div class="header-search">
                                <a href="#" title="Maro News"><i class="fa fa-search"></i></a>
                            </div>
                        </nav>
                    </div>
                </div><!-- Menu Bar -->
                <form class="search-here">
                    <input type="text" placeholder="search your keyword" />
                    <i class="fa fa-close"></i>
                </form><!-- Search keyword -->
                <!--?END BOTTOM HEADER-->
            </header>
            <!--/END HEADER-->

            <!--START RESPONSIVE HEADER-->
            <div class="responsive-header">
                <div class="res-logo-area">
                    <div class="col-sm-9 col-xs-8">
                        <a href="index.html" title="Maro News"><img src="images/logo.png" alt="Image"></a>
                    </div>
                    <div class="col-sm-3 col-xs-4">
                        <div id="nav-icons-head">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="responsive-menu">
                    <a href="#" title="Maro News"><img src="images/logo.png" alt="maro-news"></a>
                    <ul>
                        <li><a href="index.html" title="Maro News">Home</a></li>
                        <li class="menu-item-has-children"><a href="#" title="Maro News">Blog Category</a>
                            <ul class="sub-menu">
                                <li><a href="category.html" title="Maro News">Blog Category Style-1</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#" title="Maro News">Blog Single Post</a>
                            <ul class="sub-menu">
                                <li><a href="single-post-default.html" title="Maro News">Single Post Default</a></li>
                                <li><a href="single-post-with-left-sidebar.html" title="Maro News">Single Post With Left Sidebar</a></li>
                                <li><a href="single-post-with-right-sidebar.html" title="Maro News">Single Post With Right Sidebar</a></li>
                                <li><a href="single-post-without-sidebar.html" title="Maro News">Single Post Without Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#" title="Maro News">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html" title="Maro News">About US</a></li>
                                <li><a href="contact.html" title="Maro News">Contact US</a></li>
                                <li><a href="faqs.html" title="Maro News">Faqs </a></li>
                            </ul>
                        </li>
                        <li><a href="register.html" title="Maro News"><span><i class="fa fa-user"></i> Register</span></a></li>
                    </ul>
                    <div class="res-social">
                        Follow US: 
                        <br>
                        <ul class="social-btns">
                            <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank" title="Maro News"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <a href="#" title="Maro News" class="res-search"><i class="fa fa-search"></i> Quick Search</a>
                    <form class="search-insite" method="post">
                        <i class="fa fa-close"></i>
                        <input type="text" placeholder="search here">
                        <button type="submit"></button>
                    </form>
                </div>
            </div>
            <!--/END RESPONSIVE HEADER-->
            <!--START SINGLE POST BLOCK-->
            <div class="inner-page">
                <section class="category-page">
                    <div class="space">
                        <div class="container">
                            <div class="row">
                                <!--START First Section-->
                                <div class="col-md-8">
                                    <div class="blog-single">
                                        <div class="post-head">
                                            <div class="crumb">
                                                <ul>
                                                    <li><i class="ti-home"></i><a href="#">Home</a> / </li>
                                                    <li><a href="category.html">{{$article->tags}}</a> / </li>
                                                    <li><a href="#">{{$article->title}}</a></li>
                                                </ul>
                                            </div>
                                             
                                            <h1>{{$article->title}}</h1>
                                            <p>Some people believe that showing tough love</p>
                                            <div class="single-post-info">
                                                <div class="pull-left post-author">
                                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($article->name)}}"> By <a href="#" title="">{{$article->name}}</a> 
                                                    <span class="spliator">ــ</span>
                                                    Last Update <a href="#">{{ \Carbon\Carbon::parse($article->created_at)->format( 'M d , Y')}}</a>
                                                </div>

                                                <ul class="views-comments pull-right">
                                                    <li class="po-views"><i class="fa fa-fire"></i>{{$article->views}}</li>
                                                    <li><i class="fa fa-heart"></i>{{$article->thumb}}</li>
                                                    <li><i class="fa fa-comments"></i>{{$count}}</li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        {!! $shareComponent !!}
                                        <ul class="share-links">
                                            
                                            <li>@if(Auth::user())
                                                            <form action="/single_page/{{$article->id}}" method="post">
                                                               @csrf
                                                                  <input type="hidden" name="id" value="{{$article->id}}">
                                                                  <input type="hidden" name="like" value="{{$article->thumb}}">
                                                                  <button id="btn" type="submit" style="background-color: #3b5998; color:white;border-color: #3b5998; border-style:solid; border-radius:14%;font-weight:bold;cursor:pointer,"><i class="fa fa-thumbs-up" style="font-size:15"></i> Like</button> &nbsp;  {{$article->thumb}} Likes
                                                            </form>
                                                          @else
                                                              You have to login
                                                          @endif
                                                    </li>
                                        </ul>
                                        <div class="single-avatar">
                                            <img src="/uploads/image/{{$article->image}}" alt="maro news" style="height: 485px">
                                        </div>
                                        <div class="single-post-detail">
                                            <a href="#" title="" class="category">{{$article->tags}}</a>
                                            <p>{!! $article->content !!}</p>
                                            <ul class="tag">
                                                <li><span><i class="fa fa-tags" aria-hidden="true"></i></span></li>
                                                <li><a href="#" title="">{{$article->tags}}</a></li>
                                            </ul>
                                            <div class="author">
                                                <div class="author-avatar">
                                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($article->name)}}" alt="maro news">
                                                </div>
                                                <div class="author-about">
                                                    <h4>{{$article->name}}</h4>
                                                    <p>The Most wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                                                        with my whole heart. I am alone, and feel the charm of existence in this spot</p>
                                                    <ul>
                                                        <li><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" title="" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" title="" class="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                                                        <li><a href="#" title="" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#" title="" class="flickr"><i class="fa fa-flickr"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-related">
                                        <div class="single-title">
                                            <h4><i class="fa fa-thumbs-up"></i> You May Also Like</h4>
                                        </div>
                                        <div class="category-recent-post">
                                            <div class="progress-unit">
                                                @foreach($also as $also)
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="pp-trending-grid">
                                                        <img src="/uploads/image/{{$also->image}}" alt="maro news" style="width: 270px;height:166px">
                                                        <div class="pp-trend-meta">
                                                            <h5><a href="/single_page/{{$also->slug }}" title="">{{$also->title}}</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    @if(Auth::user())
                                    <div class="space no-top comments-sec">
                                        <div class="single-title">
                                            <h4><i class="fa fa-comments"></i> {{$count}} Comments.</h4>
                                        </div>
                                        <ul>
                                             @foreach($comments as $comment)
                                             @if($comment->comment_no == '1')
                                            <li>
                                                <div class="comment">
                                                    <img alt="maro news" src="https://ui-avatars.com/api/?name={{ urlencode($comment->name)}}">
                                                    <div class="comment-detail">
                                                        <h4><a title="" href="#">{{$comment->name}}</a></h4><span>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</span>
                                                        <p>{{$comment->comment}} </p>
                                                        @if(Auth::user())
                                                        <a id="reply" title="" class="reply"><i class="fa fa-reply"></i>Reply</a>
                                                        <br>
                                                        <br>
                                                        <div id="form"></div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <ul> 
                                                    @if(count($reply) > 0)
                                                    @if($reply->reply_id == $comment->id)
                                                    <li>
                                                        <div class="comment">
                                                            <img alt="maro news" src="https://ui-avatars.com/api/?name={{ urlencode($reply->name)}}">
                                                            <div class="comment-detail">
                                                                <h4><a title="" href="#">{{$reply->name}}</a></h4><span>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</span>
                                                                <p>{{$reply->comment}} </p>
                                                                @if(Auth::user())
                                                                <a id="reply" title="" class="reply"><i class="fa fa-reply"></i>Reply</a>
                                                                <br>
                                                                <br>
                                                               <div id="form"></div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </li>
                                                     @endif
                                                     @endif
                                                </ul>											
                                            </li>
                                            @endif 
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="contact-form">
                                        <div class="single-title">
                                            <h4>leave a comment</h4>
                                        </div>
                                         @if(Auth::user())
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                            </div>
                                            <form action="{{ route('comment') }}" method="post" >
                                             @csrf
                                                
                                               <input type="hidden" class="form-control" name="name" value="{{Auth::user()->name}}">
                                               <input type="hidden" name="slug" value="{{$article->slug}}"/>
                                                <div class="col-sm-12">
                                                    <label>Comment <span class="required">*</span></label>
                                                    <textarea name="comment" cols="30" rows="10" required></textarea>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button type="submit">Post Comment <i class="fa fa-angle-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        @else
                                          You need to login to comment
                                        @endif
                                    </div>
                                </div>
                                <!--/END First Section-->

                                <!--START Second Side Widget-->
                                <div class="col-md-4">
                                    <aside>
                                        <!--START WEATHER-->
                                        <div class="widget weather">
                                            <a class="weatherwidget-io" href="https://forecast7.com/en/n25d4828d11/soshanguve/" data-label_1="SOSHANGUVE" data-label_2="WEATHER" data-days="3" data-theme="clear" >SOSHANGUVE WEATHER</a>
                                            <script>
                                                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                                            </script>
                                        </div>
                                        <!--/END WEATHER-->

                                        <!--START NEWSLETTER-->
                                        <div class="widget newsletter">
                                            <div class="widget-title">
                                                <h4>
                                                    <i class="ti-email"></i>
                                                    NEWSLETTER
                                                </h4>
                                            </div>
                                            <div class="subscribe-image">
                                                <img src="https://elmanawy.info/demo/maro-news/images/newsletter.png" alt="Newsletter">
                                                <p>Subscribe our newsletter to stay updated.</p>
                                            </div>
                                            <form action="#">
                                                <input type="email" class="newsletter-email" placeholder="Enter Your Email" required>
                                                <button class="newsletter-subscribe" name="subscribe" type="submit">Subscribe</button>
                                            </form>
                                        </div>
                                        <!--/END NEWSLETTER-->

                                        <!--START TAGS-->
                                        <div class="widget">
                                            <div class="widget-title">
                                                <h4>
                                                    <i class="ti-tag"></i>
                                                    Tags
                                                </h4>
                                            </div>
                                            <?php $Articles = App\Models\Article::select(['tags'])->get(); ?>
                                            <ul class="tags-cloud">
                                                @foreach ($Articles as $item)
                                               <li><a href="#" title="Maro News">{{$item->tags}}</a></li>
                                                @endforeach 
                                                
                                            </ul>
                                        </div>
                                        <!--/END TAGS-->

                                        <!-- START SOCIAL NET. -->
                                        <div class="widget">
                                            <div class="widget-title">
                                                <h4>
                                                    <i class="fa fa-thumbs-o-up"></i>
                                                    Stay with us
                                                </h4>
                                            </div>
                                            <ul class="social-widget row">
                                                <li class="col-sm-6">
                                                    <a class="social-meta facebook" href="#" title="">
                                                        <i class="fa fa-facebook"></i>
                                                        <span>104, 725
                                                            <small>Facebook</small>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="col-sm-6">
                                                    <a class="social-meta google" href="#" title="">
                                                        <i class="fa fa-google-plus"></i>
                                                        <span>
                                                            5, 932
                                                            <small>google+</small>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="col-sm-6">
                                                    <a class="social-meta twitter" href="#" title="">
                                                        <i class="fa fa-twitter"></i>
                                                        <span>
                                                            43, 239
                                                            <small>twitter</small>
                                                        </span>

                                                    </a>
                                                </li>
                                                <li class="col-sm-6">
                                                    <a class="social-meta flickr" href="#" title="">
                                                        <i class="fa fa-flickr"></i>
                                                        <span>
                                                            1, 009
                                                            <small>flickr</small>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="col-sm-6">
                                                    <a class="social-meta pinterest" href="#" title="">
                                                        <i class="fa fa-pinterest-p"></i>
                                                        <span>
                                                            78, 294
                                                            <small>pinterest</small>
                                                        </span>

                                                    </a>
                                                </li>
                                                <li class="col-sm-6">
                                                    <a class="social-meta rss" href="#" title="">
                                                        <i class="fa fa-rss"></i>
                                                        <span>
                                                            78, 294
                                                            <small>RSS</small>
                                                        </span>

                                                    </a>
                                                </li>
                                                <li class="col-sm-6">
                                                    <a class="social-meta youtube" href="#" title="">
                                                        <i class="fa fa-youtube"></i>
                                                        <span>
                                                            78, 294
                                                            <small>Youtube</small>
                                                        </span>

                                                    </a>
                                                </li>
                                                <li class="col-sm-6">
                                                    <a class="social-meta tumblr" href="#" title="">
                                                        <i class="fa fa-tumblr"></i>
                                                        <span>
                                                            78, 294
                                                            <small>Tumblr</small>
                                                        </span>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /END SOCIAL NET. -->

                                    </aside>
                                </div>
                                <!--/END Second Side Widget-->
                            </div>
                        </div>
                    </div>
                </section>
            </div> 
            <!--/END SINGLE POST BLOCK-->

            <!--START FOOTER-->
            <footer>
                <div class="gap nogap">
                    <div class="container">
                        <div class="row">
                            <div class="footer-widget">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>Most Viewed Posts</h4>
                                        </div>
                                        <div class="timeline-widget">
                                            <ul class="posts-list-items"> 
                                                @foreach($viewed as $viewed)
                                                 @if($viewed->views > 100)
                                                <li>
                                                    <a href="single_page/{{$viewed->slug}}">
                                                        <span class="date meta-item">
                                                            <span class="fa fa-clock-o" aria-hidden="true"></span>
                                                            <span>{{ \Carbon\Carbon::parse($viewed->created_at)->format( 'F d , Y')}}</span></span>
                                                        <h3>{{$viewed->title}}</h3>
                                                    </a>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>Last Modified Posts</h4>
                                        </div>
                                        <ul class="footer-popu-posts">
                                            <li><a href="single-post-default.html" title="Maro News"><img src="images/uploads/footer-carousel-1.jpg" alt="maro-news"></a>
                                                <div class="over-meta">
                                                    <h5><a href="single-post-default.html" title="Maro News">sydney trafic block</a></h5>
                                                </div>
                                            </li>
                                            <li><a href="single-post-default.html" title="Maro News"><img src="images/uploads/footer-carousel-2.jpg" alt="maro-news"></a>
                                                <div class="over-meta">
                                                    <h5><a href="single-post-default.html" title="Maro News">sydney trafic block</a></h5>
                                                </div>
                                            </li>
                                            <li><a href="single-post-default.html" title="Maro News"><img src="images/uploads/footer-carousel-3.jpg" alt="maro-news"></a>
                                                <div class="over-meta">
                                                    <h5><a href="single-post-default.html" title="Maro News">sydney trafic block</a></h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>Tags</h4>
                                        </div>
                                        <?php $Articles = App\Models\Article::select(['tags'])->get(); ?>

                                        <ul class="ftr-popu-tags">
                                            @foreach ($Articles as $item)
                                            <li><a href="#" title="Maro News">{{$item->tags}}</a></li>
                                            @endforeach 
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>Recent Posts</h4>
                                        </div>
                                        <ul class="footer-recent-posts">
                                            @foreach($recents as $recents)
                                            <li>
                                                <a href="single_page/{{$recents->slug}}" title="Maro News"><img src="/uploads/image/{{$recents->image}}" alt="maro-news" style="height: 50px"></a>
                                                <div class="recent-meta">
                                                    <h2><a href="single_page/{{$recents->slug}}" title="Maro News">{{$recents->title}}</a></h2>
                                                    <span> <span class="fa fa-clock-o"></span>{{ \Carbon\Carbon::parse($recents->created_at)->format( 'd F , Y')}}</span>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>	
            <!--/END FOOTER-->

            <!--START BOTTOM BAR-->
            <div class="bottom-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right"> 
                        </div>
                    </div>
                </div>
            </div>
            <!--END BOTTOM BAR-->
        </div>

        <!-- Scripts Files -->
        <script>
           const reply = document.querySelector('#reply');
            const form = document.querySelector('#form');

            reply.style.cursor = 'pointer';

             reply.addEventListener('click', function() {
             reply.style.cursor = 'pointer';  
             form.innerHTML ='@if(Auth::user())<br><form action="" method="post" > @csrf<input type="hidden" name="name" value="{{Auth::user()->name}}"/><input type="hidden" name="reply_id" value="1"/><input type="hidden" name="slug" value="{{$article->slug}}"/><br><label>Reply <span class="required">*</span></label><br><textarea name="comment" cols="60" rows="5" required></textarea><br><button type="submit" style="background: #007bbd; color: #fff; border: none; text-transform: uppercase; font: 500 13px/45px "Roboto"; letter-spacing: 1.2px;margin-top: 32px;min-width: 118px;margin-bottom: 30px;padding: 0 20px;">Reply</button></form>@endif';
             
            })


            /*var reply = document.querySelectorAll('#reply');
            
             for (let i = 0; i < reply.length; i++) {
                reply[i].addEventListener('click', function() {
                this.innerHTML =' <br><form action="" method="post" > @csrf<input placeholder="name"/><br><button type="submit">Send</button></form>';
            })
             }*/
        </script>
        <script type="text/javascript" src="https://elmanawy.info/demo/maro-news/https://elmanawy.info/demo/maro-news/js/jquery.js"></script>
        <script type="text/javascript" src="https://elmanawy.info/demo/maro-news/js/jquery.js"></script>
        <script type="text/javascript" src="https://elmanawy.info/demo/maro-news/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="https://elmanawy.info/demo/maro-news/js/html5lightbox.js"></script>
        <script type="text/javascript" src="https://elmanawy.info/demo/maro-news/js/clock.js"></script>
        <script type="text/javascript" src="https://elmanawy.info/demo/maro-news/js/jquery.bootstrap.newsbox.min.js"></script>
        <script src="https://elmanawy.info/demo/maro-news/js/script.js"></script>
    </body>
</html>