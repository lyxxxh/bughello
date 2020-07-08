@extends('layouts.video_app')
@section('content')

@include("video_particles.banner",[
    'banners' => $banners
])



<div class="container">
    <div class="row">

        <div class="stui-pannel stui-pannel-bg clearfix">
            <div class="stui-pannel-box">

                <!-- start 筛选 -->
                <ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">
                    <li><span class="text-muted">按类型</span></li>
                    <li><a href="dongman_all_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html" >全部</a></li></li>
                    <li><a href='dongman_100_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>热血</a></li>
                    <li><a href='dongman_101_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>恋爱</a></li>
                    <li><a href='dongman_102_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>美少女</a></li>
                    <li><a href='dongman_103_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>运动</a></li>
                    <li><a href='dongman_104_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>校园</a></li>
                    <li><a href='dongman_105_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>搞笑</a></li>
                    <li><a href='dongman_106_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>幻想</a></li>
                    <li><a href='dongman_107_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>冒险</a></li>
                    <li><a href='dongman_108_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>悬疑</a></li>
                    <li><a href='dongman_109_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>魔幻</a></li>
                    <li><a href='dongman_110_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>动物</a></li>
                    <li><a href='dongman_111_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>少儿</a></li>
                    <li><a href='dongman_131_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>亲子</a></li>
                    <li><a href='dongman_112_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>机战</a></li>
                    <li><a href='dongman_113_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>怪物</a></li>
                    <li><a href='dongman_114_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>益智</a></li>
                    <li><a href='dongman_115_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>战争</a></li>
                    <li><a href='dongman_116_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>社会</a></li>
                    <li><a href='dongman_117_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>友情</a></li>
                    <li><a href='dongman_118_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>成人</a></li>
                    <li><a href='dongman_119_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>竞技</a></li>
                    <li><a href='dongman_120_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>耽美</a></li>
                    <li><a href='dongman_121_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>童话</a></li>
                    <li><a href='dongman_122_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>LOLI</a></li>
                    <li><a href='dongman_123_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>青春</a></li>
                    <li><a href='dongman_124_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>男性向</a></li>
                    <li><a href='dongman_125_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>女性向</a></li>
                    <li><a href='dongman_126_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>动作</a></li>
                    <li><a href='dongman_127_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>真人版</a></li>
                    <li><a href='dongman_128_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>OVA版</a></li>
                    <li><a href='dongman_129_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>TV版</a></li>
                    <li><a href='dongman_130_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>电影版</a></li>
                    <li><a href='dongman_132_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>新番动画</a></li>
                    <li><a href='dongman_133_<?php echo $cs1 ?>_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>完结动画</a></li>
                </ul>
                <ul class="stui-screen__list type-slide clearfix up-ul2">
                    <li><span class="text-muted">按年份</span></li>
                    <li><a href="dongman_<?php echo $cs0 ?>_all_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html">全部</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2020_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2020</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2019_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2019</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2018_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2018</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2017_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2017</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2016_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2016</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2015_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2015</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2014_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2014</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2013_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2013</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2012_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2012</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2011_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2011</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2010_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2010</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2009_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2009</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2008_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2008</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_2007_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>2007</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_other_<?php echo $cs2 ?>_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>更早</a></li>
                </ul>
                <ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul3">
                    <li><span class="text-muted">按地区</span></li>
                    <li><a href="dongman_<?php echo $cs0 ?>_<?php echo $cs1 ?>_all_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html">全部</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_<?php echo $cs1 ?>_11_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>日本</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_<?php echo $cs1 ?>_12_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>美国</a></li>
                    <li><a href='dongman_<?php echo $cs0 ?>_<?php echo $cs1 ?>_10_<?php echo $cs3 ?>_<?php echo $cs4 ?>.html'>大陆</a></li>
                </ul>
                <!-- end 筛选 -->
            </div>
            <div class="stui-pannel_hd">
                <div class="stui-pannel__head active bottom-line clearfix">
                    <span class="more text-muted pull-right hidden-xs">千万部VIP视频免费等你观看</span>
                    <ul class="nav nav-head">
                        <li <?php if ($cs3=="rankhot"){echo 'class="active"';}elseif($cs3=="createtime"){}else{ echo 'class="active"';};?>><a href="dongman_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_rankhot_<?php echo $cs4 ?>.html">最近热映</a></li>
                        <li <?php if ($cs3=="createtime"){echo 'class="active"';}else{};?>><a href="dongman_<?php echo $cs0 ?>_<?php echo $cs1 ?>_<?php echo $cs2 ?>_createtime_<?php echo $cs4 ?>.html">最新上映</a></li>
                    </ul>
                </div>
            </div>
            <div class="stui-pannel_bd">
                <ul class="stui-vodlist clearfix">
                    @foreach ($videos as $key => $video)
                        <li class='col-md-7 col-sm-4 col-xs-3 hidden-xs'>
                        <div class='stui-vodlist__box'>
                         <a class='stui-vodlist__thumb lazyload' href='' title='' data-original='{{ $video->pic }}'>
                         <span class='play hidden-xs'></span>
                         <span class='pic-tag pic-tag-h'>HOT</span>
                         <span class='pic-tag pic-tag-b'>feafwf</span>
                        </a>
                    <div class='stui-vodlist__detail'>
                    <h4 class='title text-overflow'>
                    <a href='dsfsf' title='f'>{{ $video->title }}</a>
                    </h4>
                    <p class='text text-overflow text-muted hidden-xs'>
                        {{ $video->description }}
                    </p></div></div></li>";
                    @endforeach
                </ul>

                @include("video_particles.paginate",['paginator' => $videos ])
            </div>
        </div>
    </div>
</div>








<div class="stui-foot clearfix">
    <div class="container">
        <div class="row">
            <div class="col-pd text-center masked">
                <p><?php echo $mkcms_copyright;?></p>
                <p class="text-center"><?php echo $mkcms_tongji;?></p>
            </div>
        </div>
    </div>
</div>
</div>
<div id="footer" class="border-t hidden-lg hidden-md" >
    <ul class="flex-wrap" style="font-weight:bold">
        <a class="flex-con paiban <?php echo $index;?>" href="/index.html"><li onclick="randomSwitchBtn(this);">首页</li></a>
        <a class="flex-con paiban <?php echo $cx;?>" href="/cx.html"><li onclick="randomSwitchBtn(this);">抢先</li></a>
        <a class="flex-con paiban <?php echo $dt;?>" href="/hall.html"><li onclick="randomSwitchBtn(this);">大厅</li></a>
        <a class="flex-con paiban <?php echo $fl;?>" href="/fuli.html"><li onclick="randomSwitchBtn(this);">福利</li></a>
        <a class="flex-con paiban <?php echo $hy;?>" href="/ucenter"><li onclick="randomSwitchBtn(this);">我的</li></a>
    </ul>
</div>
<ul class="stui-extra clearfix">
    <li class="hidden-xs"><a class="backtop" href="javascript:scroll(0,0)" style="display: block;"><i class="icon iconfont icon-less"></i></a></li>
    <li class="visible-xs"><a class="open-share" href="javascript:;"><i class="icon iconfont icon-share"></i></a></li>
    <li class="hidden-xs"><span><i class="icon iconfont icon-qrcode"></i></span>
        <div class="sideslip">
            <div class="col-pd  text-center">
                <img width="150" height="150" class="qrcode">
                <p class="text-center font-12">扫码用手机访问</p>
            </div>
        </div>
    </li>
    <li title="会员中心"><a class="open-share" href="/ucenter"><i class="icon iconfont icon-smile"></i></a></li>
    <li><a href="/book.html"><i class="icon iconfont icon-comments"></i></a></li>
</ul>
</div>
</body>
</html>

@endsection

