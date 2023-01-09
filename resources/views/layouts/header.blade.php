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
                                @foreach($trend as $trend)
                                @if($trend->views > 100)
                                <li class="news-item">
                                    <p><a href="single_page/{{$trend->slug}}">{{$trend->title}}</a></p>
                                </li>
                                @endif
                                @endforeach
                            
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
                        <a title="#" href="/"><img alt="maro-news" src=""></a>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="ad">
                        <a href="#" title="Maro News"><img  alt="maro-news" src=""></a>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post8.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post9.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post10.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post11.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post12.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post13.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post14.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post15.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post16.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post17.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post18.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post19.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post20.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post21.jpg" alt="maro-news" /></a></div>
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
                                                <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post22.jpg" alt="maro-news" /></a></div>
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
                                            <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post1.jpg" alt="maro-news" /></a></div>
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
                                                        <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post2.jpg" alt="maro-news" /></a></div>
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
                                                        <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post3.jpg" alt="maro-news" /></a></div>
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
                                                        <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post4.jpg" alt="maro-news" /></a></div>
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
                                                        <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post5.jpg" alt="maro-news" /></a></div>
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
                                                        <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post6.jpg" alt="maro-news" /></a></div>
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
                                                        <div class="post-thumb3"><a href="single-post-default.html" title="Maro News" class="img-link"><img src="https://elmanawy.info/demo/maro-news/images/uploads/megamenu-post7.jpg" alt="maro-news" /></a></div>
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

