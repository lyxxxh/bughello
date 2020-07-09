@include('video_particles.head')


<title>sizhaidonman</title>
<meta name="keywords" content="动漫排行,日本动漫,新番动漫,国产动漫">
<meta name="description" content="keyworld">
</head>
<body style="padding: 0;">
<style type="text/css">
    .stui-header__top{ background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 100%);}
    .stui-header__top.headroom--not-top{ background: #292838;}
    .am-slider-desc {
        background-color: rgba(0,0,0,.7);
        width: 100%;
        color: #f8f8f8;
    }
    .am-slider-content {
        background-color: rgba(0,0,0,.7);
        position: absolute;
        bottom: 0;
        width: 100%;
        color: #e4dddd;
    }
    h3.am-slider-title {
        color: #fff;
        text-align: center;
    }
   .content-container{
       margin-top: 4%;
   }
</style>

@include('video_particles.header')
<div class="content-container">
@yield('content')
</div>
@include('video_particles.foot')
</body>