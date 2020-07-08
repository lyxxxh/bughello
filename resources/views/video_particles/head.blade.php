<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/video/css/stui_block.css" type="text/css">
    <link rel="stylesheet" href="/video/css/stui_default.css" type="text/css">
    <link rel="stylesheet" href="/video/css/iconfont.css" type="text/css">
    <link rel="stylesheet" href="/video/css/aui.css" type="text/css">
    <script type="text/javascript" src="/video/js/jquery.min.js"></script>
    <script type="text/javascript" src="/video/js/stui_default.js"></script>
    <script type="text/javascript" src="/video/js/stui_block.js"></script>
    <script type="text/javascript" src="/video/js/submit_res.js"></script>
    <script type="text/javascript" src="//at.alicdn.com/t/font_1486157_6uw53bh8p6l.js"></script>
    <!-- tan chuang guang gao -->
    <script type="text/javascript" src="/video/js/layui/layui.js"></script>
    <?php
    //345px
    $meswidth = '765px;';
    ?>

    @if( false)
    <script type="text/javascript">
        window.onload = function() {
            var s = document.cookie;
            if (s.indexOf('myad=1') != -1) return; //存在cookie退出下面代码的执行
            var d = new Date();
            d.setMinutes(d.getMinutes() + 360); //有效期24小时  分钟：getMinutes 时：getHours
            document.cookie = 'myad=1;expires=' + d.toUTCString(); //设置cookie   toUTCString toGMTString
            //自己弹窗代码
            layui.use('layer',
                function() { //独立版的layer无需执行这一句
                    var $ = layui.jquery,
                        layer = layui.layer; //独立版的layer无需执行这一句
                    //示范一个公告层
                    layer.open({
                        type: 1,
                        title: false,
                        //不显示标题栏
                        closeBtn: true,
                        area: '<?php echo $meswidth;?>',
                        shade: 0.8,
                        id: 'LAY_layuipro',
                        //设定一个id，防止重复弹出
                        btn: ['火速围观', '残忍拒绝'],
                        btnAlign: 'c',
                        moveType: 1,
                        //拖拽模式，0或者1
                        content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;"><?php echo $mkcms_tancgonggao;?></div>',
                        success: function(layero) {
                            var btn = layero.find('.layui-layer-btn');
                            btn.find('.layui-layer-btn0').attr({
                                href: 'click_url',
                                target: '_blank'
                            });
                        }
                    });
                });

        }
    </script>
    @endif

<!--[if lt IE 9]>
    <script src="/video/style/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="/video/style/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        body{
            background-repeat:repeat;background-size:inherit;background-attachment:fixed;background-position:center center;
            background: url('bg');
        }
        .stui-header__logo .logo {
            display: block;
            width: 150px;
            height: 50px;
            background: url('sdf') no-repeat;
            background-position: 50% 50%;
            background-size: cover;
        }
        @media (max-width:767px){
            body:before{background: url() center 0 no-repeat; background-attachment: fixed;background-size: cover;}
            .stui-header__top{ min-height: 50px;}
            .stui-header__logo{ margin-top: 10px; margin-left: 10px;}
        }
        @media (max-width: 1023px){
            .stui-header__logo .logo {
                width: 90px;
                height: 30px;
                background: url('logo') no-repeat;
                background-position: 50% 50%;
                background-size: cover;
            }}
    </style>