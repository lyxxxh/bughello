<!-- 幻灯片 -->
<div id="banner" data-ride="carousel" class="stui-banner carousel slide">
    <a class="carousel-control left" href="#banner" data-slide="prev"><i class="icon iconfont icon-back"></i></a>
    <a class="carousel-control right" href="#banner" data-slide="next"><i class="icon iconfont icon-more"></i></a>
    <div class="carousel-inner">

        @foreach($banners as $index => $banner)
            <div class="item stui-banner__item {{ $index?:'active' }}">
                <a class="stui-banner__pic" href="s" alt="s"
                   style="background: url('{{ $banner->pic }}') rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;"
                   title="{{ $banner->title }}">
                    <div class="am-slider-desc">
                        <div class="am-slider-content">
                            <h2 class="am-slider-title">{{ $banner->title }}</h2>
                            <p></p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

<style type="text/css">
    .stui-banner__pic{ padding-top: 29%; background-position: center center !important;}
    @media (max-width:1023px){.stui-banner__pic{ padding-top: 40%; background-position: 50% 50% !important; background-size: cover !important;}}
</style><!-- 幻灯片 -->