<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:52:"F:\wamp64\www\tp5_1\home\index\view\index\index.html";i:1556902595;s:54:"F:\wamp64\www\tp5_1\home\index\view\public/header.html";i:1556899807;s:52:"F:\wamp64\www\tp5_1\home\index\view\public/foot.html";i:1556250569;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="baidu-site-verification" content="ZEXvy8Xkma" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>mall</title>
    <script>
        void function(g,f,j,c,h,d,b){g.alogObjectName=h,g[h]=g[h]||function(){(g[h].q=g[h].q||[]).push(arguments)},g[h].l=g[h].l||+new Date,d=f.createElement(j),d.async=!0,d.src=c,b=f.getElementsByTagName(j)[0],b.parentNode.insertBefore(d,b)}(window,document,"script","http://img.baidu.com/hunter/alog/alog.min.js","alog");void function(){function c(){return;}window.PDC={mark:function(a,b){alog("speed.set",a,b||+new Date);alog.fire&&alog.fire("mark")},init:function(a){alog("speed.set","options",a)},view_start:c,tti:c,page_ready:c}}();void function(n){var o=!1;n.onerror=function(n,e,t,c){var i=!0;return!e&&/^script error/i.test(n)&&(o?i=!1:o=!0),i&&alog("exception.send","exception",{msg:n,js:e,ln:t,col:c}),!1},alog("exception.on","catch",function(n){alog("exception.send","exception",{msg:n.msg,js:n.path,ln:n.ln,method:n.method,flag:"catch"})})}(window);
    </script>



    <script src="/tp5_1/public/static/index/js/core.js"></script>

    <script>
        require.config({
            'waitSeconds': 30,
            'baseUrl': 'http://mallcdn.baidu.com/static/2016033051016/js',
            'packages': [
                {
                    'name': 'echarts',
                    'location': '../dep/echarts/2.2.7/src',
                    'main': 'echarts'
                },
                {
                    'name': 'zrender',
                    'location': '../dep/zrender/2.1.1/src',
                    'main': 'zrender'
                }
            ]
        });
    </script>

    <link rel="stylesheet" href="/tp5_1/public/static/index/css/style.css">

    <script>
        var cr = Math.floor(Math.random() * 99999);
        var activityId = '';
        var pageId = '1' ? '1' : 0;
        var rtTag = $.stringifyJSON({
                "ecom_page": {
                    "page_type": "home"
                }
            }
        );

        // if (location.href.indexOf('mall.baidu.com') !== -1) {
        var _hmt = _hmt || [];
        var siteId = 'd64af1f3b8e241d56f0536501d4bfdd6';
        _hmt.push(['_setAccount', siteId]);
        _hmt.push(['_setAutoPageview', false]);

        if (rtTag) {
            _hmt.push(['_trackRTEvent', {
                data: $.parseJSON(rtTag)
            }]);
        }

        trackPageViewTJ(siteId, '1', '');
        if ('' !== '') {
            require(['common/md5'], function (md5) {
                var merchantSiteId = md5('');
                _hmt.push(['_setAccount', merchantSiteId]);
                _hmt.push(['_setAutoPageview', true]);
                deployBaiduTJ(merchantSiteId);
            });
            // }
        }

    </script>
</head>
<script>
    alog('speed.set', 'ht', +new Date);
</script>
<body>
<script>
    var GLOBAL_CONF = {"debug":false,"passport":{"host":"passport.baidu.com","tpl":"bdmall"},"site":{"siteId":7202944,"ucId":10914574}};
</script>

<div class="home-container">

    <div id="common-header" class="normal-header0">
        <div class="mini-header-search">
            <div class="container">
                <div class="user-info">
                    <a href="/" target="_self" data-position-id="1000002">欢迎光临MALL</a><span class="separate">|</span>
                    <span class="common-login-info">
                <a href="javascript:;" class="J_loginBtn" data-position-id="1000007">请登录</a><span class="separate">|</span>
                <a href="javascript:;" class="J_regBtn" data-position-id="1000008">免费注册</a><span class="separate">|</span>
                </span>
                    <a href="/home" target="_blank" data-position-id="1000005">个人中心</a><span class="separate">|</span>
                    <a href="/home/order/list" target="_blank" data-position-id="1000043">我的订单</a><span class="separate">|</span>
                    <a href="/cart/list" target="_blank" data-position-id="1000006"><i class="bag-icon f-icon"></i>购物车（<span class="num">0</span>）</a>
                </div>
            </div>
        </div>
        <div id="header">


            <div class="search-box">
                <input type="text" class="search-text" placeholder="搜索你想要的" value="">
                <button class="search-btn">搜索</button>
                <ul class="search-suggest">
                </ul>
            </div>

            <dl class="widget-service-guarantee">
                <dd>
                    <i class="icon-guarantee22"></i>
                    <p>正品保障</p>
                </dd>
                <dd>
                    <i class="icon-certified"></i>
                    <p>品牌验真</p>
                </dd>
                <dd>
                    <i class="icon-compensation"></i>
                    <p>假一赔五</p>
                </dd>
            </dl>
        </div>


<div class="nav-container">
    <div id="nav">
        <ul class="main-menu">
            <li class="main-menu-item all-category with-sub-menu">
                <a href="javascript:"><i class="ui-icon-category icon-category"></i>全部商品分类</a>
                <div class="sub-menu-container">
                    <ul class="">
                        <?php foreach($type as $data): ?>
                        <li class="sub-menu-item">
                            <h3><?php echo $data['name']; ?></h3>
                            <div class="second-menu-wapper">
                                <?php foreach($data['child'] as $data2): ?>
                                <a href="#" target="_blank" data-position-id="1000012"><?php echo $data2['name']; ?></a>

                                <?php endforeach; ?>

                            </div>
                            <div class="third-menu-container">
                                <?php foreach($data['child'] as $data2): ?>
                                <ul>
                                    <li>


                                        <h3 class="second-title"><a href="index/index/index/lists?id=<?php echo $data2['id']; ?>" target="_blank" data-position-id="1000012"><?php echo $data2['name']; ?></a></h3>


                                        <div class="sub-item">
                                            <?php foreach($data2['child2'] as $data3): ?>
                                            <a href="index/index/index/lists?id=<?php echo $data3['id']; ?>" target="_blank" data-position-id="1000012"><?php echo $data3['name']; ?></a>
                                            <?php endforeach; ?>

                                        </div>

                                    </li>



                                </ul>
                                <?php endforeach; ?>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </li>
            <li class="main-menu-item"><a href="/" class="active" data-position-id="1000010">首页</a></li>
            <!--                 <li class="main-menu-item"><a href="/" class="">臻选</a></li> -->
            <!--                 <li class="main-menu-item"><a href="/flpurchase" class="" target="_blank">闪购</a></li> -->
            <li class="main-menu-item"><a href="/brandStreet" class="" data-position-id="1000011">品牌街</a></li>
        </ul>

    </div>
</div>
</div>
<script>

    $(document).ready(function(){
        require(['widget/header'], function (cart) {
            cart.init();
        });
    });

</script>
    <div class="currentTime" data-time="1460904652379"></div>

    <div class="slide-banner-container">
        <div class="row show-grid slide-banner clearfix">
            <div class="col-lg-2">
            </div>

            <div class="col-lg-8 slider-controller">
                <i class="swiper-button-prev icon-arrow-left" ></i>
                <i class="swiper-button-next icon-arrow-right"></i>
                <div class="swiper-pagination swiper-pagination-white">
                        <span class="swiper-pagination-switch"></span>
                        <span class="swiper-pagination-switch"></span>
                        <span class="swiper-pagination-switch"></span>
                        <span class="swiper-pagination-switch"></span>
                </div>
            </div>

            <div class="col-lg-2 banner-small-img">

                <div class="banner-recomment" data-position-id="1000014">
                    <img src="/tp5_1/public/static/index/img/3de97f5becb06d1e2cf85673c352256c.png@q_90,f_png">
                    <dl class="content">
                        <dd>
                            <a class="" href="#" target="_blank" alt="爆品热卖 限时抢" title="爆品热卖 限时抢">
                                爆品热卖 限时抢
                            </a>
                        </dd>
                        <dd>
                            <a class="" href="#" target="_blank" alt="欧莱雅新春钜惠 旅行装特卖" title="欧莱雅新春钜惠 旅行装特卖">
                                欧莱雅新春钜惠 旅行装特卖
                            </a>
                        </dd>
                        <dd>
                            <a class="" href="#" target="_blank" alt="汇源果汁低至19.9包邮特惠" title="汇源果汁低至19.9包邮特惠">
                                汇源果汁低至19.9包邮特惠
                            </a>
                        </dd>
                        <dd>
                            <a class="" href="#" target="_blank" alt="惠普星战系列游戏本8折优惠" title="惠普星战系列游戏本8折优惠">
                                惠普星战系列游戏本8折优惠
                            </a>
                        </dd>
                        <dd>
                            <a class="" href="#" target="_blank" alt="才子满1件送袜子2件送领带" title="才子满1件送袜子2件送领带">
                                才子满1件送袜子2件送领带
                            </a>
                        </dd>

                    </dl>
                </div>
                <a class="banner-recomment" href="http://mall.baidu.com/activity/latest" target="_blank">
                    <img src="/tp5_1/public/static/index/img/2730d9b8850f6d45f46a4b4d4df96259.jpg@q_90,f_webp">
                </a>

            </div>
        </div>

        <div class="main-slider">
                <div class="slider-item-container" style="background-color: #f6dbee">
                        <div class="slider-img-container" data-color="#f6dbee">
                                <a href="http://mall.baidu.com/shop?shopId=563" target="_blank"  data-position-id="1000013">
                                        <img src="/tp5_1/public/static/index/img/88bcf08d532b3fdd92f95305f2b04e19.jpg@q_90,f_webp">
                                </a>
                        </div>
                </div>

                <div class="slider-item-container" style="background-color: #e8fbfa">
                        <div class="slider-img-container" data-color="#e8fbfa">
                                <a href="http://mall.baidu.com/promote?pageCode=camel" target="_blank"  data-position-id="1000013">
                                        <img src="/tp5_1/public/static/index/img/e20d646b43ac8c8a9170af3cb67eda29.jpg@q_90,f_webp">
                                </a>
                        </div>
                </div>

                <div class="slider-item-container" style="background-color: #bf90b4">
                        <div class="slider-img-container" data-color="#bf90b4">
                                <a href="http://mall.baidu.com/shop?shopId=740" target="_blank"  data-position-id="1000013">
                                        <img src="/tp5_1/public/static/index/img/8402f3bb8af88204c7d8ed6eaef749d5.jpg@q_90,f_webp">
                                </a>
                        </div>
                </div>

                <div class="slider-item-container" style="background-color: #000000">
                        <div class="slider-img-container" data-color="#000000">
                                <a href="http://mall.baidu.com/shop?shopId=55&amp;tr=cp.32_pr.71157" target="_blank"  data-position-id="1000013">
                                        <img src="/tp5_1/public/static/index/img/efcafd25439d88fce22360e572a16603.jpg@q_90,f_webp">
                                </a>
                        </div>
                </div>

        </div>

    </div>
    <script>
        void function(e,t){for(var n=t.getElementsByTagName("img"),a=+new Date,i=[],o=function(){this.removeEventListener&&this.removeEventListener("load",o,!1),i.push({img:this,time:+new Date})},s=0;s<n.length;s++)!function(){var e=n[s];e.addEventListener?!e.complete&&e.addEventListener("load",o,!1):e.attachEvent&&e.attachEvent("onreadystatechange",function(){"complete"==e.readyState&&o.call(e,o)})}();alog("speed.set",{fsItems:i,fs:a})}(window,document);
    </script>
    <div class="main-container">

        <div id="major" class="today-major-suit module-container">
            <div class="module-title">
                <div class="row show-grid clearfix">
                    <div class="col-lg-2 title">
                        今日最大牌
                    </div>
                    <div class="col-lg-8 category">
                        <span data-type="major" class="swiper-pagination-switch swiper-active-switch">大牌</span>
                        <span data-type="hot" class="swiper-pagination-switch">人气</span>
                        <span data-type="preference" class="swiper-pagination-switch">优选</span>
                    </div>
                    <div class="more">
                        <a href="/brandStreet" target="_blank">更多</a><i class="icon-arrow-right2"></i>
                    </div>
                </div>
            </div>

            <div class="row show-grid content clearfix">

                <div class="col-lg-2 left-img">
                    <a href="http://mall.baidu.com/search?q=%E9%A3%9E%E4%BA%9A%E8%BE%BE&amp;tr=cp.1_pr.37586" target="_blank"><img src="/tp5_1/public/static/index/img/92a625eb551bde8f59ba7d527ed7926c.jpg@q_90,f_webp"></a>
                </div>

                <div class="col-lg-8 brand-slide">
                    <div class="brand-major brand-slide-item">
<div class="banner">
    <div class="swiper-container">

<div class="swiper-wrapper">

        <div class="swiper-slide">
                <a href="#" target="_blank">
                    <img data-origin="" src="/tp5_1/public/static/index/img/3ffa0c6e4c234231370b8af0180af6ac.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="#" target="_blank">
                    <img data-origin="" src="/tp5_1/public/static/index/img/3ffa0c6e4c234231370b8af0180af6ac.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="#" target="_blank">
                    <img data-origin="" src="/tp5_1/public/static/index/img/3ffa0c6e4c234231370b8af0180af6ac.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="#" target="_blank">
                <img data-origin="" src="/tp5_1/public/static/index/img/3ffa0c6e4c234231370b8af0180af6ac.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                 </a>
                <a href="#" target="_blank">
                <img data-origin="" src="/tp5_1/public/static/index/img/3ffa0c6e4c234231370b8af0180af6ac.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                 </a>
                <a href="#" target="_blank">
                <img data-origin="" src="/tp5_1/public/static/index/img/3ffa0c6e4c234231370b8af0180af6ac.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                  </a>
                <a href="#" target="_blank">
                <img data-origin="" src="/tp5_1/public/static/index/img/3ffa0c6e4c234231370b8af0180af6ac.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                 </a>
                <a href="#" target="_blank">
                <img data-origin="" src="/tp5_1/public/static/index/img/3ffa0c6e4c234231370b8af0180af6ac.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                  </a>
        </div>
</div>


    </div>

</div>
                    </div>
                    <div class="brand-hot brand-slide-item">
<div class="banner">
    <div class="swiper-container">

<div class="swiper-wrapper">
        <div class="swiper-slide">
                <a href="http://mall.baidu.com/shop?shopId=170&amp;tr=cp.31_pr.15208" target="_blank">
                    <img data-origin="" src="/static/index/img/f16c10fb80409d693586062855317215.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=306" target="_blank">
                    <img data-origin="" src="/static/index/img/5b25793d572d67479919073a38c6b25b.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=219" target="_blank">
                    <img data-origin="" src="/static/index/img/584fc63f3d007889d9a03836ddcf7b8d.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=212" target="_blank">
                    <img data-origin="" src="/static/index/img/8a71582925acf0d5b290806a95a0d951.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=48" target="_blank">
                    <img data-origin="" src="/static/index/img/9c43bfa84245520ef32ffc4eb754cc47.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=30" target="_blank">
                    <img data-origin="" src="/static/index/img/bbf1a1e99d0242f697034a368e9d2f01.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=133&amp;tr=cp.30_pr.18099" target="_blank">
                    <img data-origin="" src="/static/index/img/d68d80d74b4786182f79fa7097ce46ab.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=260" target="_blank">
                    <img data-origin="" src="/static/index/img/7a70ee4dc77871cf5ffac4b838db4bb2.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=152" target="_blank">
                    <img data-origin="" src="/static/index/img/c525f3f7da003f71036182232dfe99c4.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=175" target="_blank">
                    <img data-origin="" src="/static/index/img/84a677fcf21efbcf7dd96bebde9d8bd2.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=228" target="_blank">
                    <img data-origin="" src="/static/index/img/bd26afd6814af5a44f39507c67fc9138.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=266" target="_blank">
                    <img data-origin="" src="/static/index/img/56907a8ac94c90a179a9f71760336f29.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=248" target="_blank">
                    <img data-origin="" src="/static/index/img/bf28a28d87779276ee80da2a9a0243cc.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=215" target="_blank">
                    <img data-origin="" src="/static/index/img/c4850c69b0487b07aab2e4224335a0d7.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=312" target="_blank">
                    <img data-origin="" src="/static/index/img/41708e2f79de99ca6dcac701923c88fc.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=164" target="_blank">
                    <img data-origin="" src="/static/index/img/ea61cbf76bc5c8591d86659f431e3848.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=57" target="_blank">
                    <img data-origin="" src="/static/index/img/a94bb7d56a9094b56aaaa0a4cc92ec23.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=109" target="_blank">
                    <img data-origin="" src="/static/index/img/a6a0a60c9a3d63fe09864057d3154c2f.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=182" target="_blank">
                    <img data-origin="" src="/static/index/img/aa8c5e553d9977851da73f776e901802.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
                <a href="http://mall.baidu.com/shop?shopId=222" target="_blank">
                    <img data-origin="" src="/static/index/img/15903b79e098020854960f302b880646.png@q_90,f_png" class="swiper-lazy" alt="">
                </a>
        </div>
</div>


    </div>

</div>
                    </div>
                    <div class="brand-preference brand-slide-item">
<div class="banner">
    <div class="swiper-container">

<div class="swiper-wrapper">

        <div class="swiper-slide">
                <a href="#" target="_blank">
                    <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="#" target="_blank">
                    <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="#" target="_blank">
                    <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="#" target="_blank">
                    <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="#" target="_blank">
                    <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
                <a href="#" target="_blank">
                    <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
                </a>
        </div>
</div>


    </div>

</div>
                    </div>
                </div>

                <div class="col-lg-2 right-img">
<div class="banner">
    <div class="swiper-container">


<div class="swiper-wrapper">

    <div class="swiper-slide" data-color="">
        <a href="#" target="_blank">
            <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
        </a>
        <a href="#" target="_blank">
            <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
        </a>
        <a href="#" target="_blank">
            <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
        </a>
        <a href="#" target="_blank">
            <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
        </a>
        <a href="#" target="_blank">
            <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
        </a>
        <a href="#" target="_blank">
            <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
        </a>
        <a href="#" target="_blank">
            <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
        </a>
        <a href="#" target="_blank">
            <img data-origin="" src="/tp5_1/public/static/index/img/c39ce200c3121957d97ef925a4a4a5fa.jpg@q_90,f_webp" class="swiper-lazy" alt="">
        </a>
    </div>
</div>


    </div>

</div>
                </div>


            </div>
        </div>

        <div id="immediate" class="today-immediate-buy module-container">
            <div    class="module-title " >
                <div class="row show-grid clearfix">
                    <div class="col-lg-2 title">
                        每日精选<sub>SELECTED</sub>
                    </div>
<!--                     <div class="more">
                        <a href="/flpurchase" target="_blank">更多</a><i class="icon-arrow-right2"></i>
                    </div> -->
                </div>
            </div>
            <div class="row show-grid clearfix promote-product">

                <div class="col-lg-3 product-item first-row-product-item"    data-id="" style="background-color: #fcf5f1">
                    <a href="/product?itemId=107212&skuId=314445" target="_blank" data-position-id="1000020">
                        <div class="desc">
                            <div class="lables">
                            </div>

                            <div class="img-container">
                                <img class="logo-img" src="/tp5_1/public/static/index/img/1e79e2c40532bfc042c977cfe9c3e36d.png@q_90,f_png">
                                <img class="product-img" src="/tp5_1/public/static/index/img/1d59e7bc233720b60d5ee2790872e640.png@q_90,f_png" alt="CK EDT中性香水100ml">
                            </div>

                            <div class="content-container">
                                <p class="price">
                                ￥179.00
                                </p>
                                <p class="title">
                                    CK EDT中性香水100ml
                                </p>
                                <div class="remaining-time">
                                    <i class="icon-clock"></i><span class="ui-icon-clock" data-status="2" data-endtime="1461038400000">未开始</span>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>
                <div class="col-lg-3 product-item first-row-product-item"    data-id="" style="background-color: #FFF0F0">
                    <a href="/product?itemId=111246&skuId=346886" target="_blank" data-position-id="1000021">
                        <div class="desc">
                            <div class="lables">
                            </div>

                            <div class="img-container">
                                <img class="logo-img" src="/tp5_1/public/static/index/img/cd5f782f4193549cac85433e3e2da8c7.png@q_90,f_png">
                                <img class="product-img" src="/tp5_1/public/static/index/img/f412bae82fccf93b498a8ce2fdc01282.png@q_90,f_png" alt="特价 飞利浦电吹风">
                            </div>

                            <div class="content-container">
                                <p class="price">
                                ￥129.00
                                </p>
                                <p class="title">
                                    特价 飞利浦电吹风
                                </p>
                                <div class="remaining-time">
                                    <i class="icon-clock"></i><span class="ui-icon-clock" data-status="2" data-endtime="1460948400000">未开始</span>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>
                <div class="col-lg-3 product-item first-row-product-item"    data-id="" style="background-color: #f1f7ef">
                    <a href="/product?itemId=125094&skuId=446950" target="_blank" data-position-id="1000022">
                        <div class="desc">
                            <div class="lables">
                            </div>

                            <div class="img-container">
                                <img class="logo-img" src="/tp5_1/public/static/index/img/898d16b67b87c9bb3aad85fcf5c56b2c.png@q_90,f_png">
                                <img class="product-img" src="/tp5_1/public/static/index/img/b6624d074e4937465e241596559e58f3.png@q_90,f_png" alt="特价 好时香浓牛奶巧克力50g铁盒装">
                            </div>

                            <div class="content-container">
                                <p class="price">
                                ￥19.90
                                </p>
                                <p class="title">
                                    特价 好时香浓牛奶巧克力50g铁盒装
                                </p>
                                <div class="remaining-time">
                                    <i class="icon-clock"></i><span class="ui-icon-clock" data-status="2" data-endtime="1460948400000">未开始</span>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>
                <div class="col-lg-3 product-item first-row-product-item"    data-id="" style="background-color: #fef2ee">
                    <a href="/product?itemId=111118&skuId=346116" target="_blank" data-position-id="1000023">
                        <div class="desc">
                            <div class="lables">
                            </div>

                            <div class="img-container">
                                <img class="logo-img" src="/tp5_1/public/static/index/img/4b4f1bc8d3e84e93888a16be05f4dae1.png@q_90,f_png">
                                <img class="product-img" src="/tp5_1/public/static/index/img/55470403f5e6c81023b197a0cdb058b4.png@q_90,f_png" alt="贝德玛 多效洁肤卸妆水500ml">
                            </div>

                            <div class="content-container">
                                <p class="price">
                                ￥178.00
                                </p>
                                <p class="title">
                                    贝德玛 多效洁肤卸妆水500ml
                                </p>
                                <div class="remaining-time">
                                    <i class="icon-clock"></i><span class="ui-icon-clock" data-status="2" data-endtime="1460991600000">未开始</span>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>
            </div>

            <div class="row show-grid clearfix promote-brand">
                <div class="col-lg-4 second-row-product-item">
                    <a href="http://mall.baidu.com/shop?shopId=284" target="_blank" data-position-id="1000024">
                        <div>
                            <img class="cover-img" src="/tp5_1/public/static/index/img/939ede4b87fa6077fd9ba1765eb47a8c.jpg@q_90,f_webp" alt="踏青好选择 折起">
                            <div class="context">
                                <div class="right-part">
                                    <p class="discount">踏青好选择</p>
                                    <p class="desc">三月钜惠 全场特价</p>
                                </div>
                                <p    class="name"><img src="/tp5_1/public/static/index/img/506039971c210ddfe87190bc334d60fc.png@q_90,f_png"></p>
                            </div>
<!--                             <p class="remaining-time">
                                距离活动结束&nbsp;
                                <span class="ui-icon-clock" data-endtime=""></span>
                            </p> -->
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 second-row-product-item">
                    <a href="http://mall.baidu.com/shop?shopId=28" target="_blank" data-position-id="1000025">
                        <div>
                            <img class="cover-img" src="/tp5_1/public/static/index/img/b5b05adcb10f0d529a812d3a77bcf701.jpg@q_90,f_webp" alt="瑞士进口 源自1845 折起">
                            <div class="context">
                                <div class="right-part">
                                    <p class="discount">瑞士进口 源自1845</p>
                                    <p class="desc">瑞士莲 全场四折起</p>
                                </div>
                                <p    class="name"><img src="/tp5_1/public/static/index/img/016d9e3eb2154d6db9aded269ed2e249.png@q_90,f_png"></p>
                            </div>
<!--                             <p class="remaining-time">
                                距离活动结束&nbsp;
                                <span class="ui-icon-clock" data-endtime=""></span>
                            </p> -->
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 second-row-product-item">
                    <a href="http://mall.baidu.com/shop?shopId=735&amp;tr=cp.5_pr.48120_po.3000022" target="_blank" data-position-id="1000026">
                        <div>
                            <img class="cover-img" src="/tp5_1/public/static/index/img/b00cad3bb19605438724c4ce73871eab.png@q_90,f_png" alt="白出晶采 活出晶采 折起">
                            <div class="context">
                                <div class="right-part">
                                    <p class="discount">白出晶采 活出晶采</p>
                                    <p class="desc">呵护春季肌肤 热销套装五折起</p>
                                </div>
                                <p    class="name"><img src="/tp5_1/public/static/index/img/b784f29b26bad1bd2ddc72b6ae330776.png@q_90,f_png"></p>
                            </div>
<!--                             <p class="remaining-time">
                                距离活动结束&nbsp;
                                <span class="ui-icon-clock" data-endtime=""></span>
                            </p> -->
                        </div>
                    </a>
                </div>

            </div>
        </div>

<div id="clothing" class=" category-module module-container">
    <div class="module-title">
        <div class="row show-grid clearfix">
            <div class="col-lg-4 title">
                服装服饰<sub>CLOTHING</sub>
            </div>
            <div class="more">
                <a data-id="" href="#"    target="_blank" data-position-id="1000028">大牌精选</a>
                <a data-id="" href="#"    target="_blank" data-position-id="1000029">女士羽绒服</a>
                <a data-id="" href="#"    target="_blank" data-position-id="1000030">男士羽绒服</a>
                <a data-id="" href="#"    target="_blank" data-position-id="1000031">男士夹克</a>
<!--                 <a href="http://baidu.com">更多服装服饰</a>> -->
            </div>
        </div>
    </div>

    <div class="row show-grid content">
        <div class="col-lg-6 left-img" style="background-color: #22AAFF">
            <img class="background-img" src="/tp5_1/public/static/index/img/9f3c46ba5201ed8f7efe2ba32aaf83c4.jpg@q_90,f_webp">
            <a class="bg-link" href="http://mall.baidu.com/shop?shopId=254" target="_blank" data-position-id="1000032"></a>
            <div class="category">


                <h3>精选分类</h3>
                <div class="sub-list">

                    <a class="active" href="#" title="时尚女装" alt="时尚女装"  target="_blank" data-position-id="1000031">时尚女装</a>
                    <a class="active" href="#" title="大牌精选" alt="大牌精选"  target="_blank" data-position-id="1000031">大牌精选</a>
                    <a class="" href="#" title="品牌男装" alt="品牌男装"  target="_blank" data-position-id="1000031">品牌男装</a>
                    <a class="" href="#" title="精品内衣" alt="精品内衣"  target="_blank" data-position-id="1000031">精品内衣</a>
                    <a class="" href="#" title="女针织衫" alt="女针织衫"  target="_blank" data-position-id="1000031">女针织衫</a>
                    <a class="active" href="#" title="女呢大衣" alt="女呢大衣"  target="_blank" data-position-id="1000031">女呢大衣</a>
                    <a class="" href="#" title="男士衬衫" alt="男士衬衫"  target="_blank" data-position-id="1000031">男士衬衫</a>
                    <a class="" href="#" title="文胸" alt="文胸"  target="_blank" data-position-id="1000031">文胸</a>

                </div>

                <h3>时尚品牌</h3>
                <div class="sub-list">

                    <a class=""  href="#" title="红袖" alt="红袖" target="_blank" data-position-id="1000031">红袖</a>

                    <a class="active"  href="#" title="伊芙丽" alt="伊芙丽" target="_blank" data-position-id="1000031">伊芙丽</a>

                    <a class=""  href="#" title="伊芙心悦" alt="伊芙心悦" target="_blank" data-position-id="1000031">伊芙心悦</a>

                    <a class=""  href="#" title="曼妮芬" alt="曼妮芬" target="_blank" data-position-id="1000031">曼妮芬</a>

                    <a class=""  href="#" title="太子龙" alt="太子龙" target="_blank" data-position-id="1000031">太子龙</a>

                    <a class=""  href="#" title="菲妮迪" alt="菲妮迪" target="_blank" data-position-id="1000031">菲妮迪</a>

                    <a class=""  href="#" title="JEEP" alt="JEEP" target="_blank" data-position-id="1000031">JEEP</a>

                    <a class="active"  href="#" title="Lily" alt="Lily" target="_blank" data-position-id="1000031">Lily</a>

                </div>

                <div class="left-bottom-img">
                    <a href="#" target="_blank">
                        <img src="/tp5_1/public/static/index/img/3fba4d132e3de9b53605da76c36ffeba.png@q_90,f_png">
                    </a>
                    <a href="#" target="_blank">
                        <img src="/tp5_1/public/static/index/img/7f81beca122b31b70110e4c73e027db5.png@q_90,f_png">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 product-item">
            <a    href="/product?itemId=108581&skuId=323809" class="content-container clearfix" target="_blank" data-position-id="1000033">
        <!--          -->
                <h3>ASOBIO修身毛织开衫</h3>
                <p class="desc">多色可选 4.4折</p>
                <p class="price">
                    ¥169.00
                </p>
                <img class="cover-img" src="/tp5_1/public/static/index/img/e7ce2e2cfe0784bf2c59baa5ab2b27ae.jpg@q_90,f_webp" alt="ASOBIO修身毛织开衫 多色可选 4.4折">
            </a>

        </div>
        <div class="col-lg-2 product-item">
            <a    href="/product?itemId=112278&skuId=352468" class="content-container clearfix" target="_blank" data-position-id="1000034">
        <!--                 <div class="lables">
                    <span class="lable lable-type5">
                        库存紧张
                        <i class="icon-arrow-right2"></i>
                    </span>
                </div>
         -->
                <h3>ELLE女装露背连衣裙</h3>
                <p class="desc">三色可选1.5折包邮</p>
                <p class="price">
                    ¥219.00
                </p>
                <img class="cover-img" src="/tp5_1/public/static/index/img/534f682896dd2fb50a45f344337f983e.jpg@q_90,f_webp" alt="ELLE女装露背连衣裙 三色可选1.5折包邮">
            </a>

        </div>
        <div class="col-lg-2 product-item">
            <a    href="/product?itemId=112278&skuId=352468" class="content-container clearfix" target="_blank" data-position-id="1000034">
                <!--                 <div class="lables">
                            <span class="lable lable-type5">
                                库存紧张
                                <i class="icon-arrow-right2"></i>
                            </span>
                        </div>
                 -->
                <h3>ELLE女装露背连衣裙</h3>
                <p class="desc">三色可选1.5折包邮</p>
                <p class="price">
                    ¥219.00
                </p>
                <img class="cover-img" src="/tp5_1/public/static/index/img/534f682896dd2fb50a45f344337f983e.jpg@q_90,f_webp" alt="ELLE女装露背连衣裙 三色可选1.5折包邮">
            </a>

        </div>
        <div class="col-lg-2 product-item">
            <a    href="/product?itemId=112278&skuId=352468" class="content-container clearfix" target="_blank" data-position-id="1000034">
                <!--                 <div class="lables">
                            <span class="lable lable-type5">
                                库存紧张
                                <i class="icon-arrow-right2"></i>
                            </span>
                        </div>
                 -->
                <h3>ELLE女装露背连衣裙</h3>
                <p class="desc">三色可选1.5折包邮</p>
                <p class="price">
                    ¥219.00
                </p>
                <img class="cover-img" src="/tp5_1/public/static/index/img/534f682896dd2fb50a45f344337f983e.jpg@q_90,f_webp" alt="ELLE女装露背连衣裙 三色可选1.5折包邮">
            </a>
        </div>
        <div class="col-lg-2 product-item">
                <a    href="/product?itemId=112278&skuId=352468" class="content-container clearfix" target="_blank" data-position-id="1000034">
                    <!--                 <div class="lables">
                                <span class="lable lable-type5">
                                    库存紧张
                                    <i class="icon-arrow-right2"></i>
                                </span>
                            </div>
                     -->
                    <h3>ELLE女装露背连衣裙</h3>
                    <p class="desc">三色可选1.5折包邮</p>
                    <p class="price">
                        ¥219.00
                    </p>
                    <img class="cover-img" src="/tp5_1/public/static/index/img/534f682896dd2fb50a45f344337f983e.jpg@q_90,f_webp" alt="ELLE女装露背连衣裙 三色可选1.5折包邮">
                </a>
            </div>
    </div>
    </div>
        <div class="tool-bar">
            <ul>

                <li class="major tool-item icon-crown2" data-type="major">
                    <a href="#major" class="desc">今日<br>大牌</a>
                </li>

                <li class="immediate tool-item icon-star" data-type="immediate">
                    <a href="#immediate" class="desc">每日<br>精选</a>
                </li>

                <li class="clothing tool-item icon-clothes" data-type="clothing">
                    <a href="#clothing" class="desc">服装服饰</a>
                </li>
                <li class="bags tool-item icon-shoe" data-type="bags">
                    <a href="#bags" class="desc">鞋包运动</a>
                </li>
                <li class="beauty tool-item icon-mirror" data-type="beauty">
                    <a href="#beauty" class="desc">美妆珠宝</a>
                </li>
                <li class="domesitic tool-item icon-telephone" data-type="domesitic">
                    <a href="#domesitic" class="desc">数码家电</a>
                </li>
                <li class="house tool-item icon-sofa" data-type="house">
                    <a href="#house" class="desc">母婴家居</a>
                </li>
                <li class="food tool-item icon-plate" data-type="food">
                    <a href="#food" class="desc">食品特产</a>
                </li>
                <li class="top icon-arrow-up">
                    <a href="#header" class="desc">回到<br>顶部</a>
                </li>
            </ul>

        </div>

    </div>
</div>
<div id="footer">

    <ul class="helper">
        <li>
            <div class="helper-item">
                <i class="helper-icon icon-diamond"></i>
                <h3>臻选品牌 正品保障</h3>
            </div>
        </li>
        <li>
            <div class="helper-item">
                <i class="helper-icon icon-crown"></i>
                <h3>新款推荐 引领潮流</h3>
            </div>
        </li>
        <li>
            <div class="helper-item">
                <i class="helper-icon icon-lamp"></i>
                <h3>创意个性 特色特惠</h3>
            </div>
        </li>
        <li>
            <div class="helper-item">
                <i class="helper-icon icon-flower"></i>
                <h3>优质服务 无忧购物</h3>
            </div>
        </li>
    </ul>

    <div class="footer-link">
        <ul>
            <li>
                <h3 class="title">
                    <a >服务保障</a>
                </h3>
                <p><a href="#" data-potition-id="1000039" target="_blank">正品保障</a></p>
                <p><a href="#" data-potition-id="1000039" target="_blank">七天无理由退换货</a></p>
                <p><a href="#" ata-potition-id="1000039" target="_blank">退货政策</a></p>
                <p><a href="#" data-potition-id="1000039" target="_blank">退货流程</a></p>
            </li>
            <li>
                <h3 class="title">
                    <a >购物指南</a>
                </h3>
                <p><a class="register" href="javascript:" data-potition-id="1000040" target="_blank">免费注册</a></p>
                <p><a href="#" data-potition-id="1000040" target="_blank">购物流程</a></p>
                <p><a href="#" data-potition-id="1000040" target="_blank">账户管理</a></p>
                <p><a href="#" data-potition-id="1000040" target="_blank">配送方式</a></p>
                <p><a href="#" data-potition-id="1000040" target="_blank">用户帮助</a></p>
            </li>
            <li>
                <h3 class="title">
                    <a >支付方式</a>
                </h3>
                <p><a href="#" data-potition-id="1000041" target="_blank">在线支付</a></p>
                s
            </li>
            <li>
                <h3 class="title">
                    <a>商家服务</a>
                </h3>
                <p><a href="#" data-potition-id="1000042" target="_blank">商家入驻</a></p>
                <p><a href="#" data-potition-id="1000042" target="_blank">规则中心</a></p>
                <p><a href="#" data-potition-id="1000042" target="_blank">商家帮助</a></p>
            </li>
            <li class="footer-follow">
                <p class="slogan">为您提供值得信赖的品质服务</p>
                <div class="follow">
                    <span class="text">关注我们</span>
                    <i class="icon-weixin-logo icon-wechat">
                        <span class="two-dimension-code"></span>
                    </i>
                    <a  target="_blank"  href="#" class="icon-weibo-logo icon-micro-blog">
                    </a>
                    <a href="#" class="icon-weibo-logo icon-tieba" target="_blank">
                    </a>
                </div>
                <div class="feedback">
                    <span class="text">意见反馈</span>
                    <i class="icon-feedback btn-feedback"></i>
                </div>
            </li>
        </ul>
    </div>

    <div class="footer-copyright">
        <div>
            <a class="cop" href="#" target="_blank">京ICP证030173号</a>

        </div>
        <p>©2015-2016 baidu.com版权所有</p>
    </div>
</div>

<script type="text/javascript" src="/tp5_1/public/static/index/js/cookie.js"></script>
<script type="text/javascript" src="/tp5_1/public/static/index/js/header.js"></script>
<script type="text/javascript" src="/tp5_1/public/static/index/js/index.js"></script>
<script type="text/javascript" src="/tp5_1/public/static/index/js/etpl.js"></script>



<script>
    $(function () {
        require(['index']);
    })
</script>
<script>
    if ('' !== '') {
        require(['common/md5'], function (md5) {
            var merchantSiteId = md5('');
            clearBaiduTJ('', merchantSiteId);
        });
    }
</script>
<script>
    window.alogObjectConfig = {
        product: '682',
        page: 'MALL-index',
        speed: {
            sample: '1'
        },
        monkey: {
            sample: '1'
        },
        exception: {
            sample: '1'
        },
        feature: {
            sample: '1'
        }
    };
    void function(a,b,c,d,e,f){function g(b){a.attachEvent?a.attachEvent("onload",b,!1):a.addEventListener&&a.addEventListener("load",b)}function h(a,c,d){d=d||15;var e=new Date;e.setTime((new Date).getTime()+1e3*d),b.cookie=a+"="+escape(c)+";path=/;expires="+e.toGMTString()}function i(a){var c=b.cookie.match(new RegExp("(^| )"+a+"=([^;]*)(;|$)"));return null!=c?unescape(c[2]):null}function j(){var a=i("PMS_JT");if(a){h("PMS_JT","",-1);try{a=a.match(/{["']s["']:(\d+),["']r["']:["']([\s\S]+)["']}/),a=a&&a[1]&&a[2]?{s:parseInt(a[1]),r:a[2]}:{}}catch(c){a={}}a.r&&b.referrer.replace(/#.*/,"")!=a.r||alog("speed.set","wt",a.s)}}if(a.alogObjectConfig){var k=a.alogObjectConfig.sample,l=a.alogObjectConfig.rand;if("https:"===a.location.protocol){if(d="https://gss2.bdstatic.com/70cFsjip0QIZ8tyhnq"+d,!k||!l)return}else d="http://img.baidu.com"+d;k&&l&&l>k||(g(function(){alog("speed.set","lt",+new Date),e=b.createElement(c),e.async=!0,e.src=d+"?v="+~(new Date/864e5),f=b.getElementsByTagName(c)[0],f.parentNode.insertBefore(e,f)}),j())}}(window,document,"script","/hunter/alog/dp.min.js");
</script>
<script>
    alog('speed.set', 'drt', +new Date);
</script>
</body>
</html>
s