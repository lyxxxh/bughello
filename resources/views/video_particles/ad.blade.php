
<div id="ad-content" style="display: none">
    <div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">
        <h2 style="color: #FF00FF;">公告</h2>
        <br />
        <br />
        <br />
        二次元资源QQ群： “<a href="https://jq.qq.com/?_wv=1027&k=xDH6SjsB" target="_blank"><font color=" #FF9900">643102589(点我加入)</font></a> ” 本站网址： “
        <a href="http://bughello.com/video" target="_blank"><font color=" #FF9900">bughello.com</font></a> ”
        <br />
        源码： "<a href="https://github.com/lyxxg/bughello" target="_blank"><font color=" #FF9900">github</font></a> "
    </div>
</div>

<script type="text/javascript">
    window.onload = function() {
        var s = document.cookie;
       if (s.indexOf('myad=1') != -1)
       return; //存在cookie退出下面代码的执行
        var d = new Date();
        d.setMinutes(d.getMinutes() + 360); //有效期24小时  分钟：getMinutes 时：getHours
        document.cookie = 'myad=1;expires=' + d.toUTCString(); //设置cookie   toUTCString toGMTString
        //自己弹窗代码
        layui.use('layer',
            function() {
                var ad = document.getElementById('ad-content').innerHTML
                ayer = layui.layer; //独立版的layer无需执行这一句
                //示范一个公告层
                layer.open({
                    type: 1,
                    title: false,
                    closeBtn: true,
                    area: document.body.clientWidth * .7 + 'px',
                    shade: 0.8,
                    id: 'LAY_layuipro',
                    //设定一个id，防止重复弹出
                    btn: ['加入q群', '残忍拒绝'],
                    btnAlign: 'c',
                    moveType: 1,
                    //拖拽模式，0或者1
                    content: ad,
                    success: function(layero) {
                        var btn = layero.find('.layui-layer-btn');
                        btn.find('.layui-layer-btn0').attr({
                            href: 'https://jq.qq.com/?_wv=1027&k=xDH6SjsB',
                            target: '_blank'
                        });
                    }
                });
            });

    }
</script>
