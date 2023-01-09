@extends('/blogger/layout/app')

    
    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/meranda/A.fonts,,_icomoon,,_style.css+css,,_bootstrap.min.css+css,,_jquery-ui.css+css,,_owl.carousel.min.css+css,,_owl.theme.default.min.css+css,,_owl.theme.default.min.css+css,,_jquery.fancybox.min.css+css,,_bootstrap-datepicker.css+fonts,,_flaticon,,_font,,_flaticon.css+css,,_aos.css,Mcc._zZuf9ykLm.css.pagespeed.cf.8n4Yv1tYnY.css" />
    <link href="https://preview.colorlib.com/theme/meranda/css/A.jquery.mb.YTPlayer.min.css.pagespeed.cf.N2G3N4O1x5.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/meranda/css/A.style.css.pagespeed.cf.2yPk2cBvMB.css">

@section('content')
<main>
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
  <div class="container-fluid px-4">
      <div class="page-header-content">
          <div class="row align-items-center justify-content-between pt-3">
              <div class="col-auto mb-3">
                  <h1 class="page-header-title">
                      <div class="page-header-icon"><i class="fa-solid fa-eye"></i></i></div>
                        View
                  </h1>
              </div>
              <div class="col-12 col-xl-auto mb-3">
                  <a href="/blogger/manage_articles" class="btn btn-sm btn-light text-primary" >
                      <i class="fa fa-list"></i>
                      &nbsp; Manage Articles
                  </a>

                  <a href="/blogger?a=edit&rid={{$article->id}}" class="btn btn-sm btn-light text-primary" >
                    <i class="fa-solid fa-pen-to-square"></i>
                    &nbsp; Edit Article
                  </a>
              </div>
          </div>
      </div>
  </div>
</header>

<div class="site-section py-0">
    
      <div class="site-section">
        <div class="container">
        <div class="half-post-entry d-block d-lg-flex bg-light">
        <div  style="background-image:url(/uploads/image/{{$article->image}})"></div>
        <div class="contents">
        <span class="caption">Editor's Pick</span>
        <h2>{{$article->title}}</h2>
        <p class="mb-3">{!! $article->content !!}</p>
        <div class="post-meta">
        <span class="d-block"><a href="#">{{$article->name}}</a> in <a href="#">{{$article->tags}}</a></span>
        <span class="date-read">{{ \Carbon\Carbon::parse($article->created_at)->format( 'M d')}}<span class="mx-1">&bullet;</span>{{ \Carbon\Carbon::parse($article->created_at)->diffForHumans()}} <span class="icon-star2"></span></span>
        @if ($article->p_status == '1')
            <span class="mx-4" style="color:green;font-size:15">Pulished</span>
        @else
        <span class="mx-4" style="color:red;font-size:15">Not Pulished</span>
        @endif
        </div>
        </div>
        </div>
        </div>
        </div> 
    </div>

    <script src="https://preview.colorlib.com/theme/meranda/js/jquery-3.3.1.min.js"></script>
<script src="https://preview.colorlib.com/theme/meranda/js/jquery-migrate-3.0.1.min.js+jquery-ui.js+popper.min.js.pagespeed.jc.g3D2aJuc8_.js"></script><script>eval(mod_pagespeed_Hsg70AQ3Jq);</script>
<script src="https://preview.colorlib.com/theme/meranda/js/bootstrap.min.js"></script>
<script src="https://preview.colorlib.com/theme/meranda/js/owl.carousel.min.js+jquery.stellar.min.js+jquery.countdown.min.js.pagespeed.jc.ZWnZYRwxEp.js"></script><script>eval(mod_pagespeed_SVFd1d_DJi);</script>
<script>eval(mod_pagespeed_EFJUD9kbFL);</script>
<script>eval(mod_pagespeed_NtWsKPNSnZ);</script>
<script src="https://preview.colorlib.com/theme/meranda/js/bootstrap-datepicker.min.js+jquery.easing.1.3.js+aos.js.pagespeed.jc.N-zqvBnqxg.js"></script><script>eval(mod_pagespeed_mNWvLuNBZJ);</script>
<script>eval(mod_pagespeed_o3B38oCEk_);</script>
<script>eval(mod_pagespeed_MuIxKGdxP7);</script>
<script src="https://preview.colorlib.com/theme/meranda/js/jquery.fancybox.min.js+jquery.sticky.js.pagespeed.jc.opxTMbg1Qa.js"></script><script>eval(mod_pagespeed_wxcTEcDtyL);</script>
<script>eval(mod_pagespeed_5uEZ5mKeBm);</script>
<script src="https://preview.colorlib.com/theme/meranda/js/jquery.mb.YTPlayer.min.js+main.js.pagespeed.jc.EVWM4_VEPC.js"></script><script>eval(mod_pagespeed_Uzr_TEWEY4);</script>
<script>eval(mod_pagespeed_gbSFcv3hRK);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"759776e8cc329cc0","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.1","si":100}' crossorigin="anonymous"></script>

</main>
@endsection
