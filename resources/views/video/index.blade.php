@extends('layouts.video_app')
@section('content')

{{--
@include("video_particles.banner",[
    'banners' => $banners
])

--}}
<div class="container">
    <div class="row">

        <div class="stui-pannel stui-pannel-bg clearfix">
            <div class="stui-pannel-box">
                <!-- start 筛选 -->
                <ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">

                    <li><span class="text-muted">语言</span></li>
                    <li><a href="/video">全部</a></li>
                    <li><a href="?lang=国语">国语</a></li></li>
                    <li><a href='?lang=日语'>日语</a></li>
                    <li><a href='?lang=英语'>英语</a></li>
                    <li><a href='?lang=四川方言'>四川方言</a></li>
                    <li><a href='?lang=闽南语'>闽南语</a></li>
                    <li><a href='?lang=其它'>其它</a></li>
                    <li><a href='?lang=日本'>日本</a></li>
                    <li><a href='?lang=粤语'>粤语</a></li>
                    <li><a href='?lang=韩语'>韩语</a></li>

                </ul>
                <ul class="stui-screen__list type-slide clearfix up-ul2">
                    <li><span class="text-muted">上映日期</span></li>
                    <li><a href="/video">全部</a></li>
                    <li><a href='?release_date=2020'>2020</a></li>
                    <li><a href='?release_date=2019'>2019</a></li>
                    <li><a href='?release_date=2018'>2018</a></li>
                    <li><a href='?release_date=2017'>2017</a></li>
                    <li><a href='?release_date=2016'>2016</a></li>
                    <li><a href='?release_date=2015'>2015</a></li>
                    <li><a href='?release_date=2014'>2014</a></li>
                    <li><a href='?release_date=2013'>2013</a></li>
                    <li><a href='?release_date=2012'>2012</a></li>
                    <li><a href='?release_date=2011'>2011</a></li>
                    <li><a href='?release_date=2010'>2010</a></li>
                    <li><a href='?release_date=2009'>2009</a></li>
                    <li><a href='?release_date=2008'>2008</a></li>
                    <li><a href='?release_date=2007'>2007</a></li>
                    <li><a href='?release_date=2006'>2006</a></li>
                    <li><a href='?release_date=2005'>2005</a></li>
                    <li><a href='?release_date=2004'>2004</a></li>
                    <li><a href='?release_date=2003'>2003</a></li>
                    <li><a href='?release_date=2002'>2002</a></li>
                    <li><a href='?release_date=2001'>2001</a></li>
                    <li><a href='?release_date=2000'>2000</a></li>

                </ul>
                <ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul3">
                    <li><span class="text-muted">地区</span></li>
                    <li><a href="/video">全部</a></li>
                    <li><a href='?area=大陆'>大陆</a></li>
                    <li><a href='?area=日本'>日本</a></li>
                    <li><a href='?area=欧美'>欧美</a></li>
                    <li><a href='?area=台湾'>台湾</a></li>
                    <li><a href='?area=其它'>其它</a></li>
                    <li><a href='?area=美国'>美国</a></li>
                    <li><a href='?area=香港'>香港</a></li>
                    <li><a href='?area=韩国'>韩国</a></li>
                </ul>
                <!-- end 筛选 -->
            </div>

            <div class="stui-pannel_bd">
                <ul class="stui-vodlist clearfix">
                    @foreach ($videos as $key => $video)
                        @include('video_particles.video_li',['video' => $video ])
                    @endforeach
                </ul>

                @include("video_particles.paginate",['paginator' => $videos,'prefix' => '/video' ])
            </div>
        </div>
    </div>
</div>



</body>
</html>

@endsection

