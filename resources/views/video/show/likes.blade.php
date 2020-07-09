<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box">
        <div class="stui-pannel_hd">
            <div class="stui-pannel__head bottom-line active clearfix">
                <h3 class="title">
                    <svg class="iconm" aria-hidden="true"><use xlink:href="#icon-like"></use></svg>
                    猜你喜欢
                </h3>
            </div>
        </div>

        <div class="stui-pannel_bd">
            <ul class="stui-vodlist__bd clearfix">
                @foreach($video->likes as $like)
                    @include('video_particles.video_li',['video' => $like ])
                @endforeach

            </ul>
        </div>
    </div>
</div><!-- 猜你喜欢-->