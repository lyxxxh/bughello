var stui = {
    "browser": {
        url: document.URL,
        domain: document.domain,
        title: document.title,
        language: (navigator.browserLanguage || navigator.language).toLowerCase(),
        canvas: function() {
            return !! document.createElement("canvas").getContext
        } (),
        useragent: function() {
            var a = navigator.userAgent;
            return {
                mobile: !!a.match(/AppleWebKit.*Mobile.*/),
                ios: !!a.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
                android: -1 < a.indexOf("Android") || -1 < a.indexOf("Linux"),
                iPhone: -1 < a.indexOf("iPhone") || -1 < a.indexOf("Mac"),
                iPad: -1 < a.indexOf("iPad"),
                trident: -1 < a.indexOf("Trident"),
                presto: -1 < a.indexOf("Presto"),
                webKit: -1 < a.indexOf("AppleWebKit"),
                gecko: -1 < a.indexOf("Gecko") && -1 == a.indexOf("KHTML"),
                weixin: -1 < a.indexOf("MicroMessenger")
            }
        } ()
    },
    "mobile": {
        "popup": function() {
            $popblock = $(".popup");
            $(".open-popup").click(function() {
                $popblock.addClass("popup-visible");
                $("body").append('<div class="mask"></div>');
                $(".close-popup").click(function() {
                    $popblock.removeClass("popup-visible");
                    $(".mask").remove();
                    $("body").removeClass("modal-open")
                });
                $(".mask").click(function() {
                    $popblock.removeClass("popup-visible");
                    $(this).remove();
                    $("body").removeClass("modal-open")
                })
            })
        },
        "slide": function() {
            $(".type-slide").each(function(a) {
                $index = $(this).find(".active").index() * 1;
                if ($index > 3) {
                    $index = $index - 3
                } else {
                    $index = 0
                }
                $(this).flickity({
                    cellAlign: "left",
                    freeScroll: true,
                    contain: true,
                    prevNextButtons: false,
                    pageDots: false,
                    initialIndex: $index
                })
            })
        },
        "mshare": function() {
            $(".open-share").click(function() {
                stui.browser.useragent.weixin ? $("body").append('<div class="mobile-share share-weixin"></div>') : $("body").append('<div class="mobile-share share-other"></div>');
                $(".mobile-share").click(function() {
                    $(".mobile-share").remove();
                    $("body").removeClass("modal-open")
                })
            })
        }
    },
    "images": {
        "lazyload": function() {
            $(".lazyload").lazyload({
                effect: "fadeIn",
                threshold: 200,
                failurelimit: 15,
                skip_invisible: false
            })
        },
        "carousel": function() {
            $(".carousel_default").flickity({
                cellAlign: "left",
                contain: true,
                wrapAround: true,
                autoPlay: true,
                prevNextButtons: false
            });
            $(".carousel_wide").flickity({
                cellAlign: "center",
                contain: true,
                wrapAround: true,
                autoPlay: true
            });
            $(".carousel_center").flickity({
                cellAlign: "center",
                contain: true,
                wrapAround: true,
                autoPlay: true,
                prevNextButtons: false
            });
            $(".carousel_right").flickity({
                cellAlign: "left",
                wrapAround: true,
                contain: true,
                pageDots: false
            })
        },
        "qrcode": function() {
            $("img.qrcode").attr("src", "http://www.hez70.com/qrcode/qr.php?url=" + encodeURIComponent(stui.browser.url) + "")
        }
    },
    "common": {
        "bootstrap": function() {
            $('a[data-toggle="tab"]').on("shown.bs.tab",
                function(a) {
                    var b = $(a.target).text();
                    $(a.relatedTarget).text();
                    $("span.active-tab").html(b)
                })
        },
        "headroom": function() {
            var header = document.querySelector("#header-top");
            var headroom = new Headroom(header, {
                tolerance: 5,
                offset: 205,
                classes: {
                    initial: "top-fixed",
                    pinned: "top-fixed-up",
                    unpinned: "top-fixed-down"
                }
            });
            headroom.init()
        },
        "history": function() {
            let history = getHistory();
            let history_str = '';
            history.forEach((item,index)=>{
                history_str += "<li class='top-line'><a href='" + item.url + "' title='" + item.title + "'><span class='pull-right text-red'>" + item.part + "</span>" + item.title + "</a></li>"
            })

            if( history_str == '')
            history_str = "<p style='padding: 80px 0; text-align: center'>您还没有看过影片哦</p>";
            $("#stui_history").append( history_str)

            $(".historyclean").on("click",
                function() {
                delHistory()
           })
        },
        "collapse": function() {
            $("a.detail-more").on("click",
                function() {
                    $(this).parent().find(".detail-sketch").addClass("hide");
                    $(this).parent().find(".detail-content").css("display", "");
                    $(this).remove()
                })
        },
        "scrolltop": function() {
            var a = $(window);
            $scrollTopLink = $("a.backtop");
            a.scroll(function() {
                500 < $(this).scrollTop() ? $scrollTopLink.css("display", "") : $scrollTopLink.css("display", "none")
            });
            $scrollTopLink.on("click",
                function() {
                    $("html, body").animate({
                            scrollTop: 0
                        },
                        400);
                    return ! 1
                })
        },
    }
};
$(document).ready(function() {
    if (stui.browser.useragent.mobile) {
        stui.mobile.slide();
        stui.mobile.popup();
        stui.mobile.mshare()
    }
    stui.images.lazyload();
    stui.images.carousel();
    stui.images.qrcode();
    stui.common.bootstrap();
    stui.common.headroom();
    stui.common.history();
    stui.common.collapse();
    stui.common.scrolltop()
});