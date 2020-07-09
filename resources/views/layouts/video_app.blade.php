@include('video_particles.head')


<title>二次元资源|动漫|二次元图片</title>

<meta name="keywords" content="二次元资源,动漫,二次元,二次元图片,动漫排行,日本动漫,新番动漫,美图,图片站,死宅,hentai">
<meta name="description" content="二次元资源 多种你想要的资源 动漫涩应有尽有">
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

