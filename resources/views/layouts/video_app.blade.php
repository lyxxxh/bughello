@include('video_particles.head')


<title>追动漫<?php echo $yea3.$are3.$type3;?>-最新最好看的动漫-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="动漫排行,日本动漫,新番动漫,国产动漫,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
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
</style>

@include('video_particles.header')
@yield('content')

</body>