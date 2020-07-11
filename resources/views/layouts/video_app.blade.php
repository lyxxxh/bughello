@include('video_particles.head')


<title>
    二次元资源|动漫| - @yield('title')
</title>

<meta name="keywords" content="二次元资源,动漫,二次元,二次元图片,动漫排行,日本动漫,新番动漫,美图,图片站,死宅,hentai">
<meta name="description" content="二次元资源 多种你想要的资源 动漫涩应有尽有">
</head>
<body style="padding: 0;">

@include('video_particles.header')
<div class="content-container">
@yield('content')
</div>
@include('video_particles.foot')
@include('video.show.js')
</body>

