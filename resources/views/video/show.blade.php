@extends('layouts.video_app')
@section('content')

    @section('title',$video->title)
    <div class="container">
        <div class="row">

            <div class="col-lg-wide-75 col-xs-1">

                <div class="stui-player__item myui-player__item clearfix" style="background-color: #fff;">
                    <div id="player-left" class="stui-player__video embed-responsive embed-responsive-16by9 clearfix">
                        <div class="myui-player__box player-fixed">
                            <a class="player-fixed-off" href="javascript:;" style="display: none;"><i class="icon iconfont icon-close"></i></a>
                            <iframe src="" id="video" allowfullscreen="true"></iframe>
                        </div></div>
                    <div class="stui-player__detail detail" id="dianshijuid">
                        <ul class="more-btn">
                        <li><a href="javascript:void(0)" onclick="location.reload()" class="btn btn-sm btn-default" title="刷新">刷新</a></li>
                        <li><a href="javascript:scroll(0,0)" class="btn btn-default" id="btn-prev" title="上一集"><i class="icon iconfont icon-back hidden-xs"></i> 上一集</a></li>
                        <li><a href="javascript:scroll(0,0)" class="btn btn-default" id="btn-next" title="下一集">下一集 <i class="icon iconfont icon-more hidden-xs"></i></a></li>
                        </ul>
                        <h1 class="title"><a href="{{ url('/video',$video->id) }}" title="{{ $video->title }}">{{ $video->title }}</a><span class="js"></span></h1>
                        <span class="text-muted">地区：</span>{{ $video->area }}<span class="split-line"></span>
                        <span class="text-muted">年份：</span>{{ $video->release_date }}
                        <span class="split-line"></span><span class="text-muted">状态：{{ $video->status }}</div>
                </div>
                @include('video.show.pages')
                @include('video.show.info')
                @include('video.show.likes')
            </div>
               @include('video.show.right')
        </div>
    </div>
    </div>


@endsection