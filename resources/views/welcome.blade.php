
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Gesture Blogger</title>
        <link rel="shortcut icon"  href="images/favicon.png" />
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
        <style>
            div#social-links {
                margin: 0 auto;
                max-width: 500px;
            }
            div#social-links ul li {
                display: inline-block;
            }          
            div#social-links ul li a  {
                display: inline-block;
                height: 24px;
               line-height: 24px;
               text-align: center;
               width: 27px;
               border-radius: 2px;
               margin-right: 3px;
}

 
            }
        </style>
    </head>
    <body itemscope onLoad="goforit()">
        <div class="theme-layout">
            <!--START HEADER-->
            @include('/layouts/header')
            <!--/END HEADER-->

            <!--START RESPONSIVE HEADER-->
            <div class="responsive-header">
                <div class="res-logo-area">
                    <div class="col-sm-9 col-xs-8">
                        <a href="index.html" title="Maro News"><img src="https://elmanawy.info/demo/maro-news/images/logo.png" alt="Image"></a>
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
                    <a href="#" title="Maro News"><img src="https://elmanawy.info/demo/maro-news/images/logo.png" alt="maro-news"></a>
                    <ul>
                        <li><a href="index.html" title="Maro News">Home</a></li>
                        <li class="menu-item-has-children"><a href="#" title="Maro News">Blog Category</a>
                            <ul class="sub-menu">
                                <li><a href="category-style-1.html" title="Maro News">Blog Category Style-1</a></li>
                                <li><a href="category-style-2.html" title="Maro News">Blog Category Style-2</a></li>
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

            <!-- START TOP FEATURED POSTS-->
            <section class="space">
                <div class="space-res">
                    <div class="container">
                        <div class="row merged">
                            <div class="col-md-5">
                                <div class="featured-post">
                                    <div class="featured-avatar">
                                        <a class="post-cat cat-1" href="category.html">Travel</a>
                                        <a href="#" data-showsocial="false" class="html5lightbox post-video" title="maro news">
                                            <i class="ti-control-play"></i>
                                        </a>
                                        <img src="https://elmanawy.info/demo/maro-news/images/uploads/featured-post-1.gif" alt="maro news">
                                    </div>
                                    <div class="featured-meta">
                                        <h2><a href="single-post-default.html" title="maro news">New York Fashion Week the shape of things to come 2017</a></h2>
                                        <ul class="post-info">
                                            <li><a href="#" title="maro news"><i class="ti-user"></i>Marwa</a></li>
                                            <li><a href="#" title="maro news"><i class="fa fa-heart"></i>16</a></li>
                                            <li><a href="#" title="maro news"><i class="fa fa-comments"></i>45</a></li>
                                            <li><a href="#" title="maro news"><i class="fa fa-fire"></i>56</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="row">
                                    @foreach ($articles as $item)
                                    @if ($item->p_status == '1')
                                    <div class="col-sm-6">
                                        <div class="featured-post">
                                            <div class="featured-avatar">
                                                @if($item->tags == 'Programming') 
                                                    <a class="post-cat cat-5" href="category.html">{{$item->tags}}</a>
                                                @elseif($item->tags == 'Tech')
                                                  <a class="post-cat cat-1" href="category.html">{{$item->tags}}</a>
                                                @endif  
                                                
                                                <img src="/uploads/image/{{$item->image}}" alt="maro news" style="height: 300px">
                                            </div>
                                            <div class="featured-meta small">
                                                <h2><a href="single_page/{{$item->slug}}" title="{{$item->title}}">{{$item->title}}</a></h2>
                                                <ul class="post-info">
                                                    <li><a href="#" title="maro news"><i class="ti-user"></i>{{$item->name}}</a></li>
                                                    <li><a href="#" title="maro news"><i class="fa fa-heart"></i>{{$item->thumb}}</a></li>
                                                    <li><a href="#" title="maro news"><i class="fa fa-comments"></i>45</a></li>
                                                    <li><a href="#" title="maro news"><i class="fa fa-fire"></i>{{$item->views}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach 
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
            <!-- /END TOP FEATURED POSTS-->

            <!--START FIRST SECTION BLOCK-->
            <section>
                <div class="space">
                    <div class="container">
                        <div class="row">
                            <!--START Left Section-->
                            <div class="col-md-8">
                                <div class="home-news-block">
                                    <div class="tab-base-post">
                                        <div class="home-posts-head">
                                            <h4 class="home-posts-cat-title"><a class="cat-1" href="#">Weekly News</a></h4>
                                            <ul class="nav nav-tabs branches pull-right">
                                                <li class="active"><a href="#cat1" aria-controls="cat1" data-toggle="tab" aria-expanded="true">Sport</a></li>
                                                <li class=""><a href="#cat2" aria-controls="cat2" data-toggle="tab" aria-expanded="false">Health</a></li>
                                                <li class=""><a href="#cat3" aria-controls="cat3" data-toggle="tab" aria-expanded="false">Tech</a></li>
                                                <li class=""><a href="#cat4" aria-controls="cat4" data-toggle="tab" aria-expanded="false">Travel</a></li>
                                            </ul>
                                        </div>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="row tab-pane fade active in remove-ext" id="cat1">
                                                @if ($item->p_status == '1')
                                                @foreach($trending as $trending)
                                                @if($trending->views > 50)
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="post-grid-style">
                                                        <a href="" title="maro news"><img src="/uploads/image/{{$trending->image}}" alt="maro news" style="width: 370px; height:235px"></a>
                                                        <div class="post-detail">
                                                            <a class="category cat-1" href="category.html" title="maro news">{{$trending->tags}}</a>
                                                            <ul class="stars-rank">
                                                                @if($trending->views < '20')
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 @elseif($trending->views < '40')
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 @elseif($trending->views <'60')
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 @elseif($trending->views > '80')
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 @elseif($trending->views < '100')
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 <li><i class="fa fa-star"></i></li>
                                                                 <li><i class="fa fa-star"></i></li>
                                                                @else
                                                                @endif
                                                            </ul>
                                                            <h2><a href="single_page/{{$trending->slug}}" title="maro news">{{$trending->title}}</a></h2>
                                                            <ul class="post-meta3">
                                                                <li><i class="ti-time"></i><a href="#" title="maro news">{{ \Carbon\Carbon::parse($trending->created_at)->format( 'd F,Y')}}<span class="mx-1"></a></li>
                                                                <li class="po-views"><a href="#" title="maro news"><i class="fa fa-fire"></i> {{$trending->views}}</a></li>
                                                            </ul>
                                                            <p>{!! substr($trending->content, 0, 200) !!}...</p>
                                                            <a href="single_page/{{$trending->slug}}" class="readmore"><i class="ti-more-alt"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                                @endif
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <div class="home-news-block">
                                    <div class="home-posts-head">
                                        <h4 class="home-posts-cat-title"><a class="cat-2" href="category.html">Health</a></h4>
                                    </div>
                                    <div class="progress-posts-slide">
                                        <div class="progress-unit">
                                            <div class="row">
                                                @foreach ($articles as $item)
                                                @if ($item->p_status == '1')
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="list-small-post">
                                                        <a href="#" title="maro news"><img src="/uploads/image/{{$item->image}}" alt="maro news" style="width: 155px;height: 152px;"></a>
                                                        <div class="list-small-meta">
                                                            <ul class="post-meta2">
                                                                <li><i class="ti-user"></i><a href="#" title="maro news">{{$item->name}}</a></li>
                                                                <li><i class="fa fa-heart"></i><a href="#" title="maro news">{{$item->thumb}}</a></li>
                                                                <li><i class="fa fa-comments"></i><a href="#" title="maro news">7</a></li>
                                                            </ul>
                                                            <h2><a href="single_page/{{$item->slug}}" title="{{$item->title}}">{{$item->title}}.</a></h2>
                                                            <ul class="socials">
                                                                <li><a href="#" title="maro news" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" title="maro news" class="google"><i class="fa fa-google"></i></a></li>
                                                                <li><a href="#" title="maro news" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" title="maro news" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                                                                <li><a href="#" title="maro news" class="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>   
                                                </div>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/END Left Section-->

                            <!--START Right Side Widget-->
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

                                    <!--START POPULAR CATEGORIES-->
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>
                                                <i class="ti-folder"></i>
                                                Popular Categories
                                            </h4>
                                        </div>
                                        <ul class="widget-popular-cat">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>
                                                    Travel
                                                    <span class="cat-count-1">15</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>
                                                    Fashion
                                                    <span class="cat-count-2">15</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>
                                                    Food & Drinks
                                                    <span class="cat-count-3">15</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>
                                                    Travel
                                                    <span class="cat-count-4">15</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>
                                                    Technology
                                                    <span class="cat-count-5">15</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>
                                                    Community
                                                    <span class="cat-count-6">15</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>
                                                    Life Style
                                                    <span class="cat-count-7">15</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>
                                                    World
                                                    <span class="cat-count-8">15</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--/END POPULAR CATEGORIES-->

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
                                            @foreach($Articles as $Articles)
                                            <li><a href="#" title="maro news">{{$Articles->tags}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!--/END TAGS-->
                                </aside>
                            </div>
                            <!--/END Right Side Widget-->
                        </div>
                    </div>
                </div>
            </section>
            <!--/END FIRST SECTION BLOCK-->

            <section>
                <div class="posts-with-carousel">
                    <div class="pp-featured-caro">
                        @foreach($comment as $comment)
                        <div class="pp-caro-unit">
                            <img src="/uploads/image/{{$comment->image}}" alt="maro news" style="height:320px; width:800px">
                            <div class="entrance">
                                <div class="post-detail">
                                    <h2><a href="single-post-default.html" title="maro news">{{$comment->comment}}</a></h2>
                                    <ul class="post-meta3 pull-left">
                                        <li><i class="ti-time"></i><a href="#" title="maro news">{{ \Carbon\Carbon::parse($comment->created_at)->format( 'd F , Y')}}</a></li>
                                        <li class="admin"><a href="single-post-default.html" title="maro news"><i class="ti-user"></i> {{$comment->name}}</a></li>
                                    </ul>
                                    <ul class="post-meta3 pull-right">
                                        <li><i class="fa fa-heart"></i><a href="#" title="maro news">{{$comment->thumb}}</a></li>
                                        <li><a href="#" title="maro news"><i class="fa fa-comments"></i> 70</a></li>
                                        <li class="po-views"><a href="single-post-default.html" title="maro news"><i class="fa fa-fire"></i> {{$comment->views}}</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>	
            </section>

            <!--START SECOND SECTION BLOCK-->
            <section>
                <div class="space">
                    <div class="container">
                        <div class="row">
                            <!--START Left Section-->
                            @if ($item->p_status == '1')
                            <div class="col-md-8">
                                <div class="home-news-block block-no-space">
                                    <div class="home-posts-head">
                                        <h4 class="home-posts-cat-title"><a class="cat-3" href="">What's New</a></h4>
                                    </div>
                                    <div class="row postgrid-horiz grid-style-2">
                                        @foreach($recent as $recent)
                                        <div class="col-sm-6">
                                            <div class="post-grid-style">
                                                <div class='post-grid-image'>
                                                    <a class="post-cat cat-1" href="#">{{$recent->tags}}</a>
                                                    <a class="grid-image" href="single-post-default.html" title="maro news"><img src="/uploads/image/{{$recent->image}}" alt="maro news" style="width: 384px; height:244px"></a>
                                                </div>

                                                <div class="post-detail">
                                                    <h2><a href="single_page/{{$recent->slug}}" title="maro news">{{$recent->title}}..</a></h2>
                                                    <ul class="post-meta3 pull-left">
                                                        <li><i class="ti-time"></i><a href="#" title="maro news">{{ \Carbon\Carbon::parse($recent->created_at)->format( 'd F , Y')}}</a></li>
                                                        <li class="admin"><a href="#" title="maro news"><i class="ti-user"></i>{{$recent->name}} </a></li>
                                                    </ul>
                                                    <ul class="post-meta3 pull-right">
                                                        <li><i class="fa fa-heart"></i><a href="#" title="maro news">{{$recent->thumb}}</a></li>
                                                        <li><a href="#" title="maro news"><i class="fa fa-comments"></i> 70</a></li>
                                                    </ul>
                                                    <p>{!! substr($recent->content, 0, 200) !!}...</p>
                                                    <a href="single_page/{{$recent->slug}}" class="readmore" title="maro news"><i class="ti-more-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                         @endforeach
                                    </div>
                                </div>
                                <div class="home-news-block">
                                    <div class="home-posts-head">
                                        <h4 class="home-posts-cat-title"><a class="cat-4" href="">Videos</a></h4>
                                    </div>
                                    <div class="video-sec">
                                        <div class="merged">
                                            <div class="col-sm-3">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="feature-video">
                                                            <a href="single-video.html" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-sec-1.jpg" alt="maro news"></a>
                                                            <span><a href="https://palyer.vimeo.com/78183348" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news"><i class="ti-control-play"></i></a></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="feature-video">
                                                            <a href="single-video.html" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-sec-2.jpg" alt="maro news"></a>
                                                            <span><a href="https://player.vimeo.com/video/78183348" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news"><i class="ti-control-play"></i></a></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="feature-video">
                                                            <a href="single-video.html" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-sec-3.jpeg" alt="maro news"></a>
                                                            <span><a href="https://player.vimeo.com/video/78183348" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news"><i class="ti-control-play"></i></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="feature-video">
                                                    <a href="single-video.html" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-sec-big.jpg" alt="maro news"></a>
                                                    <span><a href="https://player.vimeo.com/video/78183348" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news"><i class="ti-control-play"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="feature-video">
                                                            <a href="single-video.html" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-sec-4.jpg" alt="maro news"></a>
                                                            <span><a href="https://player.vimeo.com/video/78183348" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news"><i class="ti-control-play"></i></a></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="feature-video">
                                                            <a href="single-video.html" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-sec-5.jpg" alt="maro news"></a>
                                                            <span><a href="https://player.vimeo.com/video/78183348" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news"><i class="ti-control-play"></i></a></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="feature-video">
                                                            <a href="single-video.html" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-sec-6.jpg" alt="maro news"></a>
                                                            <span><a href="https://player.vimeo.com/video/78183348" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news"><i class="ti-control-play"></i></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <!--/END Left Section-->

                            <!--START Right Side Widget-->
                            <div class="col-md-4">
                                <aside>
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>
                                                <i class="fa fa-fire"></i>
                                                Most Viewed
                                            </h4>
                                        </div>
                                        <div class="progress-posts-slide">
                                            @foreach($popular as $popular)
                                            @if($popular->views > 100)
                                            <div class="progress-unit remove-ext">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pp-trending-grid">
                                                        <i class="fa fa-fire"></i>
                                                        <img src="/uploads/image/{{$popular->image}}" alt="maro news" style="width: 270px;height:166px">
                                                        <div class="pp-trend-meta">
                                                            <ul class="post-meta3">
                                                                <li><a href="#" title="maro news"><i class="fa fa-heart"></i>{{$popular->thumb}}</a></li>
                                                                <li><a href="#" title="maro news"><i class="fa fa-comments"></i>45</a></li>
                                                                <li class="po-views"><a href="#" title="maro news"><i class="fa fa-fire"></i>{{$popular->views}}</a></li>
                                                            </ul>
                                                            <h5><a href="single_page/{{$popular->slug}}" title="{{$popular->title}}">{{$popular->title}}</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                             @endforeach
                                        </div>
                                    </div>
                                    <!-- START ADS. -->
                                    <div class="widget">
                                        <div class="ad-widget">
                                            <img src="https://elmanawy.info/demo/maro-news/images/uploads/ad-widget.jpg" alt="maro news">
                                        </div>
                                    </div>
                                    <!-- /END ADS. -->

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
                                                <a class="social-meta facebook" href="#" title="maro news">
                                                    <i class="fa fa-facebook"></i>
                                                    <span>104, 725
                                                        <small>Facebook</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="col-sm-6">
                                                <a class="social-meta google" href="#" title="maro news">
                                                    <i class="fa fa-google-plus"></i>
                                                    <span>
                                                        5, 932
                                                        <small>google+</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="col-sm-6">
                                                <a class="social-meta twitter" href="#" title="maro news">
                                                    <i class="fa fa-twitter"></i>
                                                    <span>
                                                        43, 239
                                                        <small>twitter</small>
                                                    </span>

                                                </a>
                                            </li>
                                            <li class="col-sm-6">
                                                <a class="social-meta flickr" href="#" title="maro news">
                                                    <i class="fa fa-flickr"></i>
                                                    <span>
                                                        1, 009
                                                        <small>flickr</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="col-sm-6">
                                                <a class="social-meta pinterest" href="#" title="maro news">
                                                    <i class="fa fa-pinterest-p"></i>
                                                    <span>
                                                        78, 294
                                                        <small>pinterest</small>
                                                    </span>

                                                </a>
                                            </li>
                                            <li class="col-sm-6">
                                                <a class="social-meta rss" href="#" title="maro news">
                                                    <i class="fa fa-rss"></i>
                                                    <span>
                                                        78, 294
                                                        <small>RSS</small>
                                                    </span>

                                                </a>
                                            </li>
                                            <li class="col-sm-6">
                                                <a class="social-meta youtube" href="#" title="maro news">
                                                    <i class="fa fa-youtube"></i>
                                                    <span>
                                                        78, 294
                                                        <small>Youtube</small>
                                                    </span>

                                                </a>
                                            </li>
                                            <li class="col-sm-6">
                                                <a class="social-meta tumblr" href="#" title="maro news">
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
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>
                                                <i class="ti-image"></i>
                                                Flickr Feed
                                            </h4>
                                        </div>
                                        <ul class="flickr-widget flickr-side">
                                            <li><a data-flickr-embed="true" href="https://www.flickr.com/photos/geekulcha/albums/72157674632019808" title="TADHackJHB - Teams"><img src="https://live.staticflickr.com/1951/45409989591_a7d7c08f0c_z.jpg" width="640" height="480" alt="TADHackJHB - Teams"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script></li>
                                            <li><a data-flickr-embed="true"  href="https://www.flickr.com/photos/geekulcha/albums/72157702740752281" title="#SummerDevDays: Opening Ceremony at UNISA"><img src="https://live.staticflickr.com/4855/44325889240_216306cdb6_z.jpg" width="640" height="480" alt="#SummerDevDays: Opening Ceremony at UNISA"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script></li>
                                            <li><a data-flickr-embed="true" href="https://www.flickr.com/photos/geekulcha/albums/72177720303120809" title="Power To Act Hack - Special Build"><img src="https://live.staticflickr.com/65535/52449372200_10140b6a11_z.jpg" width="640" height="480" alt="Power To Act Hack - Special Build"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script></li>
                                            <li><a data-flickr-embed="true" href="https://www.flickr.com/photos/geekulcha/albums/72177720302621212" title="Digital Literacy For Development"><img src="https://live.staticflickr.com/65535/52404245138_1c2ba3d73c_z.jpg" width="640" height="480" alt="Digital Literacy For Development"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script></li>
                                            <li><a data-flickr-embed="true" href="https://www.flickr.com/photos/geekulcha/albums/72177720301833532" title="MTN Business App Academy-2022"><img src="https://live.staticflickr.com/65535/52333411148_8ca2296271_z.jpg" width="640" height="480" alt="MTN Business App Academy-2022"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script></li>
                                            <li><a data-flickr-embed="true" href="https://www.flickr.com/photos/geekulcha/albums/72177720299985718" title="Mthatha 4IR Youth EXPO"><img src="https://live.staticflickr.com/65535/52164018040_6511f82036_z.jpg" width="640" height="480" alt="Mthatha 4IR Youth EXPO"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script></li>
                                        </ul>
                                    </div><!-- flickr widger -->
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>
                                                <i class="ti-video-camera"></i>
                                                Popular Videos
                                            </h4>
                                        </div>
                                        <div class="popular-video">
                                            <div class="video-carousel" data-hash="tab1">
                                                <div class="video-meta">
                                                    <img src="https://elmanawy.info/demo/maro-news/images/uploads/video-widget-1.jpg" alt="maro news">
                                                    <a href="https://youtu.be/ErB9HJU2vOk" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news" picture-in-picture ><i class="ti-control-play"></i></a>
                                                </div>
                                            </div>
                                            <div class="video-carousel" data-hash="tab2">
                                                <div class="video-meta">
                                                    <img src="https://elmanawy.info/demo/maro-news/images/uploads/video-widget-2.jpg" alt="maro news">
                                                    <a href="https://player.vimeo.com/video/78183348" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news"><i class="ti-control-play"></i></a>
                                                </div>
                                            </div>
                                            <div class="video-carousel" data-hash="tab3">
                                                <div class="video-meta">
                                                    <img src="https://elmanawy.info/demo/maro-news/images/uploads/video-widget-3.jpg" alt="maro news">
                                                    <a href="https://player.vimeo.com/video/78183348" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news"><i class="ti-control-play"></i></a>
                                                </div>
                                            </div>
                                            <div class="video-carousel" data-hash="tab4">
                                                <div class="video-meta">
                                                    <img src="https://elmanawy.info/demo/maro-news/images/uploads/video-widget-4.jpg" alt="maro news">
                                                    <a href="https://player.vimeo.com/video/78183348" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news"><i class="ti-control-play"></i></a>
                                                </div>
                                            </div>
                                            <div class="video-carousel" data-hash="tab5">
                                                <div class="video-meta">
                                                    <img src="https://elmanawy.info/demo/maro-news/images/uploads/video-widget-5.jpg" alt="maro news">
                                                    <a href="https://player.vimeo.com/video/78183348" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news"><i class="ti-control-play"></i></a>
                                                </div>
                                            </div>
                                            <div class="video-carousel" data-hash="tab6">
                                                <div class="video-meta">
                                                    <img src="https://elmanawy.info/demo/maro-news/images/uploads/video-widget-6.jpg" alt="maro news">
                                                    <a href="https://player.vimeo.com/video/78183348" data-showsocial="false" class="html5lightbox" data-group="set2" title="maro news"><i class="ti-control-play"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-btn">
                                            <a href="#tab1" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-widget-btn-1.jpg" alt="maro news"><i class="ti-control-play"></i></a>
                                            <a href="#tab2" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-widget-btn-2.jpg" alt="maro news"><i class="ti-control-play"></i></a>
                                            <a href="#tab3" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-widget-btn-3.jpg" alt="maro news"><i class="ti-control-play"></i></a>
                                            <a href="#tab4" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-widget-btn-4.jpg" alt="maro news"><i class="ti-control-play"></i></a>
                                            <a href="#tab5" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-widget-btn-5.jpg" alt="maro news"><i class="ti-control-play"></i></a>
                                            <a href="#tab6" title="maro news"><img src="https://elmanawy.info/demo/maro-news/images/uploads/video-widget-btn-6.jpg" alt="maro news"><i class="ti-control-play"></i></a>
                                        </div>
                                    </div><!-- popular video widger -->
                                </aside>
                            </div>
                            <!--/END Right Side Widget-->
                        </div>
                    </div>
                </div>
            </section>
            <!--/END SECOND SECTION BLOCK-->




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
                                                            <span>{{ \Carbon\Carbon::parse($recent->created_at)->format( 'F d , Y')}}</span></span>
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
                                            <li><a href="single-post-default.html" title="Maro News"><img src="https://elmanawy.info/demo/maro-news/images/uploads/footer-carousel-1.jpg" alt="maro-news"></a>
                                                <div class="over-meta">
                                                    <h5><a href="single-post-default.html" title="Maro News">sydney trafic block</a></h5>
                                                </div>
                                            </li>
                                            <li><a href="single-post-default.html" title="Maro News"><img src="https://elmanawy.info/demo/maro-news/images/uploads/footer-carousel-2.jpg" alt="maro-news"></a>
                                                <div class="over-meta">
                                                    <h5><a href="single-post-default.html" title="Maro News">sydney trafic block</a></h5>
                                                </div>
                                            </li>
                                            <li><a href="single-post-default.html" title="Maro News"><img src="https://elmanawy.info/demo/maro-news/images/uploads/footer-carousel-3.jpg" alt="maro-news"></a>
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
                            <p class="copyright">BY <a href="https://elmanawy.info">Marwa El-Manawy</a></p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <div class="footer-imp-links">
                                <a href="index.html">Home</a>
                                <a href="about.html">About us</a>
                                <a href="contact.html">Contact</a>
                                <a href="faqs.html">Faqs</a>
                                <a href="register.html">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END BOTTOM BAR-->
        </div>

        <!-- Scripts Files -->
        <script type="text/javascript" src="https://elmanawy.info/demo/maro-news/https://elmanawy.info/demo/maro-news/js/jquery.js"></script>
        <script type="text/javascript" src="https://elmanawy.info/demo/maro-news/js/jquery.js"></script>
        <script type="text/javascript" src="https://elmanawy.info/demo/maro-news/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="https://elmanawy.info/demo/maro-news/js/html5lightbox.js"></script>
        <script type="text/javascript" src="https://elmanawy.info/demo/maro-news/js/clock.js"></script>
        <script type="text/javascript" src="https://elmanawy.info/demo/maro-news/js/jquery.bootstrap.newsbox.min.js"></script>
        <script src="https://elmanawy.info/demo/maro-news/js/script.js"></script>
    </body>
</html>