<div id="wrap" class="flex-wrap flex-vertical">
    <div id="main" class="flex-con">
        <!--head-->
        <header class="stui-header__top clearfix" id="header-top">
            <div class="container">
                <div class="row">
                    <div class="stui-header_bd clearfix">
                        <div class="stui-header__logo">
                            <a class="logo" href="/index.html"></a>
                        </div>
                        <ul class="stui-header__menu">
                            <li class=""><a href="/index.html">首页</a></li>
                            <li class=" hidden-xs"><a href="/movie.html">电影</a></li>
                            <li class="hidden-xs"><a href="/tv.html">剧集</a></li>
                            <li class="hidden-xs"><a href="/dongman.html">动漫</a></li>
                            <li class="hidden-xs"><a href="/zongyi.html">综艺</a></li>
                            <li><a href="javascript:;">更多 <i class="icon iconfont icon-moreunfold"></i></a>
                                <ul class="dropdown">
                                    <li class=""><a href="/movie.html">电影</a></li>
                                    <li class=""><a href="/tv.html">剧集</a></li>
                                    <li class=""><a href="/dongman.html">动漫</a></li>
                                    <li class=""><a href="/zongyi.html">综艺</a></li>
                                    <li class=""><a href="/live.html">直播</a></li>

                                </ul>
                            </li>
                        </ul>
                        <script type="text/javascript" src="/video/js/jquery.autocomplete.js"></script>
                        <div class="stui-header__search">
                            <input type="text" id="wd" name="wd" class="mac_wd form-control" value="search" placeholder="输入明星、影片关键词" onkeydown='if(event.keyCode==13){submi.click()}'/>
                            <button class="submit" id="submi" type="submit" onclick="submit()"><i class="icon iconfont icon-search"></i></button>
                            <a class="search-close visible-xs" href="javascript:;"><i class="icon iconfont icon-close"></i></a>
                        </div>
                        <ul class="stui-header__user">
                            <li>

                            @if( false)
                                <a href="javascript:;"><i class="icon iconfont icon-account"></i></a>
                                <div class="userdown">
                                    <ul class="history clearfix">
                                        <li><a href="/ucenter/userinfo.php" title="个人设置">个人设置</a></li>
                                        <li class="top-line"><a href="/ucenter/index.php" title="账号中心">账号中心</a></li>
                                        <li class="top-line"><a href="/ucenter/exit.php" title="退出登录">退出登录</a></li>
                                    </ul>
                                </div>
                            @else
                                <a href="/ucenter/login.php" title="账户"><i class="icon iconfont icon-account"></i></a>
                            @endif

                            </li>
                            <li>
                                <a href="javascript:;"><i class="icon iconfont icon-clock"></i></a>
                                <div class="dropdown">
                                    <h5 class="margin-0 text-muted">
                                        <a class="historyclean text-muted pull-right" href="">清空</a>播放记录
                                    </h5>
                                    <ul class="history clearfix" id="stui_history"></ul>
                                </div>
                            </li>
                            <li class="hidden-xs">
                                <a href="/book.html" title="留言板"><i class="icon iconfont icon-comments"></i></a>
                            </li>
                            <li class="hidden-xs">
                                <a href="/app.html" title="APP下载"><i class="icon iconfont icon-icondownload"></i></a>
                            </li>
                            <li class="visible-xs">
                                <a class="open-search" href="javascript:;"><i class="icon iconfont icon-search"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <script type="text/javascript">
            $(".stui-header__user li,.stui-header__menu li").click(function(){
                $(this).find(".dropdown").toggle();
            });
            $(".open-search").click(function(){
                var Seacrh=$(".stui-header__search");
                Seacrh.addClass("active").siblings().hide();
                Seacrh.find(".form-control").focus();
                $(".search-close").click(function(){
                    Seacrh.removeClass("active").siblings().show();
                });
            });
        </script>
        <!--head-->
    </div>
</div>