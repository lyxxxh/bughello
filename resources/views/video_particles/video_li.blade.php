<li class='col-md-7 col-sm-4 col-xs-3 hidden-xs'>
    <div class='stui-vodlist__box'>
        <a class='stui-vodlist__thumb lazyload' href='{{ url('/video',$video->id) }}' title='' data-original='{{ $video->pic }}'>
            <span class='play hidden-xs'></span>
            <span class='pic-tag pic-tag-h'>HOT</span>
            <span class='pic-tag pic-tag-b'>{{ $video->status }}</span>
        </a>
        <div class='stui-vodlist__detail'>
            <h4 class='title text-overflow'>
                <a href='{{ url('/video',$video->id) }}' title='f'>{{ $video->title }}</a>
            </h4>
            <p class='text text-overflow text-muted hidden-xs'>
                {{ $video->description }}
        </p></div></div></li>
