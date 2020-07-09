<script>
    $(function () {
        $.each($('.dianshijua'), function () { // bind class
            var al = $('.stui-content__playlist a');
            al.attr('class', 'btn-play-source am-btn am-btn-default lipbtn');
        });

        $.each($('.lipbtn'), function () { // bind event
            var url = $(this).attr('href');
            $(this).attr('data-href', url);
            $(this).attr('href', 'javascript:;');
            $(this).attr('onclick', 'play(this)');
        });

        $('#xlus').children('a:eq(0)').addClass('jkbtn0');
        var autourl = $('.lipbtn:eq(0)').attr('data-href');
        $('.lipbtn:eq(0)').attr('id', 'ys');
        var text = $('.lipbtn:eq(0)').text();
        $('.js').text('-' + text + '');
        if (autourl != '' || autourl != null)
            playUrl(autourl)

        // 上一集
        $("#btn-pre").click(function () {
            $("#ys.btn-play-source").prev().click();
        });

        // 下一集
        $("#btn-next").click(function () {
            $("#ys.btn-play-source").next().click();
        });


        $(function () {
            $('#btn-prev').click(function () {
                $('#ys').parent().prev().children('a:eq(0)').click();
            })//上一集
            $('#btn-next').click(function () {
                $('#ys').parent().next().children('a:eq(0)').click();
            })//上一集
        })


        //rank
        $('.hot-cate-title li').hover(function () {
            var index = $(this).data('index'),
                cate_list = $('.hot-cate-list[data-pid=' + index + ']');
            if ($('.hot-cate-title.activee').data('index') === index)
                return true;

            //移除已经选中的class
            $('.hot-cate-title li').removeClass('activee');
            $('.hot-cate-list').removeClass('activee');
            $(this).addClass('activee');
            cate_list.addClass('activee');
        }, function () {

        });
});

function play(obj) {
    let href = $(obj).attr('data-href');
    let text = $(obj).text();
    $('.js').text('-' + text + '');
    $.each($('.lipbtn'), function () {
        $(this).attr('id', '');
    });
    $(obj).attr('id', 'ys');
    if (href)
        playUrl(href)
}

function playUrl(url) {
    setTimeout(() => {
        $('#video').attr('src', url);
    }, 0)
}


</script>
<script type="text/javascript" src="/video/js/history.js"></script>

