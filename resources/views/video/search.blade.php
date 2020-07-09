@extends('layouts.video_app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-lg-wide-75 col-xs-1 padding-0">
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box">
                        <div class="stui-pannel_bd">
                            <div class="stui-pannel_hd">
                                <div class="stui-pannel__head active bottom-line clearfix">
                                    <span class="more text-muted pull-right hidden-xs"></span>
                                    <h3 class="title">
                                        <span style="color: #FF00FF;">搜索：</span>
                                        <a href="/search?worlds={{ $keyworlds }}" title="{{ $keyworlds }}">
                                            <span style="color: red">{{ $keyworlds }}
                                        </span>
                                        </a>
                                        (共{{ $videos->count() }}部)

                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_hd">
                                <ul class="stui-vodlist__media col-pd clearfix">

                                    @foreach($videos as $video)
                                   <li class ="activeclearfix" >
                                        <div class="thumb">
                                            <a class="v-thumb stui-vodlist__thumb lazyload" href="{{ url('/video',$video->id) }}" title="{{ $video->title }}"  data-original="{{ $video->pic }}"><span class="play hidden-xs"></span>
                                                <span class="pic-text text-right"></span></a>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title"><a href="{{ url('/video',$video->id) }}" >{{ $video->title }}</a></h3>
                                            <p class="margin-0 hidden-smss hidden-xss">
                                            <div class="m-description">
                                                <span class="text-muted">简介：</span><span style="font-size:16px;">
                                                <span style="color: rgb(17, 17, 17); font-family: Helvetica, Arial, sans-serif;">
                                                    {{ $video->description }}
                                                </span>
                                            <p class="margin-0 hidden-smss hidden-xss"><a  class="text-muted" href="{{ url('/video',$video->id) }}" title="{{ $video->title }}">查看详情</a></p>
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
    </div>
@endsection