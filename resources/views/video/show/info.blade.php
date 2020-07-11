<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box">
        <div class="stui-pannel__head bottom-line active clearfix">
            <div class="stui-pannel__head clearfix">
                <h3 class="title">
                    <svg class="iconm" aria-hidden="true"><use xlink:href="#icon-jie"></use></svg>
                    剧情简介
                </h3>
            </div>
        </div>
    </div>
    <div class="stui-pannel-box">
        <div class="stui-content__thumb">
            <a class="stui-vodlist__thumb picture v-thumb" href="#" title="{{ $video->title }}">
                <img src="" data-original="{{ $video->pic }}" class="lazyload" alt="{{ $video->title }}" title="{{ $video->title }}" width="100%"/>
                <span class="pic-text text-right"></span>
            </a>
        </div>
        <div class="stui-content__detail">
            <h1 class="title" ><a href="" title="{{ $video->title }}"  id="video-title">{{ $video->title }}</a></h1>
            <p class="data">地区 ：{{ $video->area }}</p>
            <p class="data">年代 ：{{ $video->release_date }}</p>
            <p class="data">状态 ：{{ $video->status }}</p>
            <p class="data">类型 ：{{ $video->lang }}</p>
        </div>
        <div class="stui-pannel_bd">
            <p class="col-pd detail">
                <span class="detail-sketch">
                    {{ $video->description }}
                </span>
            </p>
        </div>
    </div>
</div>