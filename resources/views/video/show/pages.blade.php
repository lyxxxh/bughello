<div class="stui-pannel stui-pannel-bg clearfix">
    <div class="stui-pannel-box b playlist mb">

        @foreach($video->pages as $page)
            @if( $page->source != '来源:kkm3u8')
            <div class="stui-pannel_hd">
                <div class="stui-pannel__head bottom-line active clearfix">
                    <h3 class="title">
                        <svg class="iconm" aria-hidden="true">
                            <use xlink:href="#icon-play">
                            </use>
                        </svg>
                        {{ $page->source }}
                    </h3>
                </div>
            </div>
            <div class="stui-pannel_bd col-pd clearfix dianshijua" id="dianshijuid">
                <ul class="stui-content__playlist column10 clearfix" id="playlist">
                    @foreach($page->pages as $page_content)
                        <li class='active'>
                            <a data-num='1' data-href='{{ $page_content->url }}'
                               class='btn-play-source' title='{{ $video->title }}.{{ $page_content->title }}'>
                                {{ $page_content->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif
        @endforeach
    </div>
</div>
