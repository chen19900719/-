<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <link rel="stylesheet" type="text/css" media="all" href="/Public/msj/css/ss_base.css-v=1517.css"
          tppabs="http://css.meishij.net/n/css/ss_base.css?v=1517"/>
    <link rel="stylesheet" type="text/css" media="all" href="/Public/msj/css/main.css-v=1039.css"
          tppabs="http://css.meishij.net/n/css/main.css?v=1039"/>
    <link rel="stylesheet" type="text/css" media="all" href="/Public/msj/css/index.css-v=2133.css"
          tppabs="http://css.meishij.net/n/css/index.css?v=2133"/>
    <script type="text/javascript" src="/Public/msj/js/j.m.js" tppabs="http://css.meishij.net/n/js/j.m.js"></script>
    <script type="text/javascript" src="/Public/msj/js/list.js-v=1108.js"
            tppabs="http://css.meishij.net/n/js/list.js?v=1108"></script>
    <script type="text/javascript" src="/Public/msj/js/main.js-v=1507.js"
            tppabs="http://css.meishij.net/n/js/main.js?v=1507"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=100">
    <meta http-equiv="Expires" content="Tue, 15 Nov 2016 04:10:04 GMT">
    <script type="text/javascript" src="m.js" tppabs="http://cbjs.baidu.com/js/m.js"></script>
</head>
<body>
<div class="adinheader">
    <div class="adinheader_w">
        <script type="text/javascript">BAIDU_CLB_fillSlot("206520");</script>
    </div>
</div>
<div class="header">
    <div class="header_c">
        <a href="index.htm" tppabs="http://www.meishij.net/" class="logo pngFix"></a>
        <div class="main_search_top_w">
            <div class="suggestionsBox" id="suggestions" style="display:none;">
                <ul class="suggestionList" id="autoSuggestionsList"></ul>
            </div>
            <form class="search" action="http://so.meishi.cc/">
                <input type="text" class="text" name="q" defaultval="请输入菜谱/食材/菜单/作者" x-webkit-speech=""
                       value="请输入菜谱/食材/菜单/作者" autocomplete="off"
                       onfocus="if(this.value=='请输入菜谱/食材/菜单/作者'){this.value='';}$(this).css('color','#333');"
                       onblur="if(this.value==''){this.value='请输入菜谱/食材/菜单/作者';$(this).css('color','#999');}"
                       href="javascript:if(confirm(%27http://www.meishij.net/ajax/ajaxtitle.php  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/ajax/ajaxtitle.php%27"
                       tppabs="http://www.meishij.net/ajax/ajaxtitle.php" id="inputString"><input type="submit"
                                                                                                  class="submit"
                                                                                                  value="搜 索">
            </form>
        </div>
        <div class="loginitem_h">
            <script src="loginheader_n2.php-_=1479181204.js"
                    tppabs="http://reply.meishij.net/ajax/loginheader_n2.php?_=1479181204"></script>
        </div>
    </div>
</div>
<div class="nav">
    <ul id="main_nav">
        <li class=""><a href="http://hard.app/Home/Index/index.html" class="link pngFix"><strong>首页</strong></a>
        </li>
        <?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><li class="hasmore ">
                <a href="<?php echo ($category["link"]); ?>" class="link pngFix"><strong><?php echo ($category["name"]); ?></strong></a>
                <div class="dw clearfix">
                    <div class="dww clearfix dww_cpdq">
                        <div class="dwitem clearfix pngFix">
                            <dl class="clearfix">
                                <?php if(is_array($category["children"])): $i = 0; $__LIST__ = $category["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo ($c["link"]); ?>"><?php echo ($c["name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                            </dl>
                        </div>
                        <div class="bgitem"></div>
                    </div>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        <li class=""><a href="<?php echo U('chat');?>" class="link pngFix"><strong>聊天室</strong></a>
        </li>
    </ul>
</div>
<div>
    
    
    <div class="main_search main_search_slideUp pngFix" slideUp="1" style="_display:none;" id="main_search">
        <div class="main_search_w">
            <div class="searchform_div">
                <form action="http://so.meishi.cc/" target="_blank"><input type="text" class="text" name="q"
                                                                           x-webkit-speech="" autocomplete="off"
                                                                           id="inputString"
                                                                           placeholder="输入菜谱、食材、作者"><input
                        type="submit" class="submit" value="搜 索"></form>
            </div>
            <span id="searchslideup_btn" class="pngFix" style="background-position:0px -48px;">自动收缩</span>
            <!--        <a href="http://www.meishij.net" class="bottomlogo_60"><img src="/Public/msj/images/http://static.meishij.net/images/bottomlogo_60.png"></a>-->
            <!--		--><!--<span id="searchslideup_btn" class="pngFix"--><!-->自动收缩</span>-->
        </div>
    </div>
    <div class="bottom_back_top_top bottom_back_top_top_slideUp" id="bottom_back_top_top"><a href="#"
                                                                                             class="backtotop pngFix">回到顶部</a>
    </div>
    <div class="main_w clearfix">
        <div class="main clearfix">
            <div class="index_zzw" id="index_zzw">
                <div class="index_zzw_main" id="index_zzw_main">
                    <div class="zzw_item zzw_item_3" po="3" c="2">
                        <h3 class="bbtitles bbtitles_zzw">今日午餐推荐：超简单的3道懒人蒸菜做法</h3>
                        <ul class="clearfix">
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/zhenglinqiezi.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/zhenglinqiezi.html%27"
                                   tppabs="http://www.meishij.net/zuofa/zhenglinqiezi.html" title="美味蒸茄子"
                                   class="img"><img
                                        alt="美味蒸茄子" src="/Public/msj/images/ea4c72dee84c8418aefdde2a6eb22fa5.jpg"
                                        tppabs="http://images.meishij.net/p/20161114/ea4c72dee84c8418aefdde2a6eb22fa5.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/zhenglinqiezi.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/zhenglinqiezi.html%27"
                                           tppabs="http://www.meishij.net/zuofa/zhenglinqiezi.html"
                                           title="美味蒸茄子">美味蒸茄子</a>
                                    </h2>
                                    <strong>用蒸的方法，完美解决了茄子爱吸油的困扰</strong>
                                    <span><a href="####">降胆固醇</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/duojiaojinzhengu_15.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/duojiaojinzhengu_15.html%27"
                                   tppabs="http://www.meishij.net/zuofa/duojiaojinzhengu_15.html" title="剁椒金针菇"
                                   class="img"><img
                                        alt="剁椒金针菇" src="/Public/msj/images/6757579be35954b7036d22aea6a9f3eb.jpg"
                                        tppabs="http://images.meishij.net/p/20161110/6757579be35954b7036d22aea6a9f3eb.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/duojiaojinzhengu_15.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/duojiaojinzhengu_15.html%27"
                                           tppabs="http://www.meishij.net/zuofa/duojiaojinzhengu_15.html" title="剁椒金针菇">剁椒金针菇</a>
                                    </h2>
                                    <strong>这样做，金针菇鲜嫩的口感体现的更加淋漓尽致</strong>
                                    <span><a href="####">降血脂</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/fenzhengpaigu_24.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/fenzhengpaigu_24.html%27"
                                   tppabs="http://www.meishij.net/zuofa/fenzhengpaigu_24.html" title="家庭版粉蒸排骨"
                                   class="img"><img alt="家庭版粉蒸排骨"
                                                    src="/Public/msj/images/70cdce62a04b4d1fa806e4d147fe0786.jpg"
                                                    tppabs="http://images.meishij.net/p/20161110/70cdce62a04b4d1fa806e4d147fe0786.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/fenzhengpaigu_24.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/fenzhengpaigu_24.html%27"
                                           tppabs="http://www.meishij.net/zuofa/fenzhengpaigu_24.html" title="家庭版粉蒸排骨">家庭版粉蒸排骨</a>
                                    </h2>
                                    <strong>酱香浓郁、酥烂脱骨是这道菜的最佳形容词</strong>
                                    <span><a href="####">抵抗力</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="zzw_item zzw_item_2" po="2" c="1">
                        <h3 class="bbtitles bbtitles_zzw">今日早餐推荐：早起来碗面，精神一整天</h3>
                        <ul class="clearfix">
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/jiandan_3.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/jiandan_3.html%27"
                                   tppabs="http://www.meishij.net/zuofa/jiandan_3.html" title="完美溏心蛋怎么做"
                                   class="img"><img
                                        alt="完美溏心蛋怎么做" src="/Public/msj/images/2f34efad9331d705f161335b94ece668.jpg"
                                        tppabs="http://images.meishij.net/p/20161114/2f34efad9331d705f161335b94ece668.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/jiandan_3.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/jiandan_3.html%27"
                                           tppabs="http://www.meishij.net/zuofa/jiandan_3.html"
                                           title="完美溏心蛋怎么做">完美溏心蛋怎么做</a></h2>
                                    <strong>只需六步，教你做出完美的溏心荷包蛋</strong>
                                    <span><a href="####">增强记忆</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/zhacairousimian_1.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/zhacairousimian_1.html%27"
                                   tppabs="http://www.meishij.net/zuofa/zhacairousimian_1.html" title="十分钟快手汤面"
                                   class="img"><img
                                        alt="十分钟快手汤面" src="/Public/msj/images/9b1501b95bb7ac4dcde9df857dbdc95e.jpg"
                                        tppabs="http://images.meishij.net/p/20161110/9b1501b95bb7ac4dcde9df857dbdc95e.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/zhacairousimian_1.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/zhacairousimian_1.html%27"
                                           tppabs="http://www.meishij.net/zuofa/zhacairousimian_1.html" title="十分钟快手汤面">十分钟快手汤面</a>
                                    </h2>
                                    <strong>今天不需要给做早餐预留太多时间，10分钟就搞定</strong>
                                    <span><a href="####">暖身生津</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/xiangsuqiancengbing.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/xiangsuqiancengbing.html%27"
                                   tppabs="http://www.meishij.net/zuofa/xiangsuqiancengbing.html" title="香酥千层饼"
                                   class="img"><img
                                        alt="香酥千层饼" src="/Public/msj/images/f6951bf19ead0f31f617d3a8eda5309e.jpg"
                                        tppabs="http://images.meishij.net/p/20161114/f6951bf19ead0f31f617d3a8eda5309e.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/xiangsuqiancengbing.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/xiangsuqiancengbing.html%27"
                                           tppabs="http://www.meishij.net/zuofa/xiangsuqiancengbing.html" title="香酥千层饼">香酥千层饼</a>
                                    </h2>
                                    <strong>层层叠叠香酥千层饼，成为你起床的新动力</strong>
                                    <span><a href="####">补充能量</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="zzw_item zzw_item_4" po="4" c="3">
                        <h3 class="bbtitles bbtitles_zzw">今日下午茶推荐：教你做酥到掉渣的曲奇</h3>
                        <ul class="clearfix">
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/sudaodiaozhadequqishuangpin.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/sudaodiaozhadequqishuangpin.html%27"
                                   tppabs="http://www.meishij.net/zuofa/sudaodiaozhadequqishuangpin.html"
                                   title="零基础学做曲奇"
                                   class="img"><img alt="零基础学做曲奇"
                                                    src="/Public/msj/images/dc129d99dc623186e7b85f91d1e0e03c.jpg"
                                                    tppabs="http://images.meishij.net/p/20161110/dc129d99dc623186e7b85f91d1e0e03c.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/sudaodiaozhadequqishuangpin.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/sudaodiaozhadequqishuangpin.html%27"
                                           tppabs="http://www.meishij.net/zuofa/sudaodiaozhadequqishuangpin.html"
                                           title="零基础学做曲奇">零基础学做曲奇</a></h2>
                                    <strong>试过很多配方，终于找到这一版会酥到掉渣的</strong>
                                    <span><a href="####">健脑益智</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/kekequqibinggan_1.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/kekequqibinggan_1.html%27"
                                   tppabs="http://www.meishij.net/zuofa/kekequqibinggan_1.html" title="可可曲奇饼干"
                                   class="img"><img alt="可可曲奇饼干"
                                                    src="/Public/msj/images/eae8ba8b8143b199f32dd5268a342923.jpg"
                                                    tppabs="http://images.meishij.net/p/20161110/eae8ba8b8143b199f32dd5268a342923.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/kekequqibinggan_1.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/kekequqibinggan_1.html%27"
                                           tppabs="http://www.meishij.net/zuofa/kekequqibinggan_1.html" title="可可曲奇饼干">可可曲奇饼干</a>
                                    </h2>
                                    <strong>比原味曲奇口感更丰富，拿来做下午茶很合适</strong>
                                    <span><a href="####">缓解疲劳</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/yuanweiquqilingshibaipeifang.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/yuanweiquqilingshibaipeifang.html%27"
                                   tppabs="http://www.meishij.net/zuofa/yuanweiquqilingshibaipeifang.html"
                                   title="零失败原味曲奇"
                                   class="img"><img alt="零失败原味曲奇"
                                                    src="/Public/msj/images/26a6e9aa29a0dbf43b4c425657c1596f.jpg"
                                                    tppabs="http://images.meishij.net/p/20161110/26a6e9aa29a0dbf43b4c425657c1596f.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/yuanweiquqilingshibaipeifang.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/yuanweiquqilingshibaipeifang.html%27"
                                           tppabs="http://www.meishij.net/zuofa/yuanweiquqilingshibaipeifang.html"
                                           title="零失败原味曲奇">零失败原味曲奇</a></h2>
                                    <strong>标榜零失败的曲奇做法，口感不腻值得一试</strong>
                                    <span><a href="####">美容养颜</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="zzw_item zzw_item_1" po="1" c="5">
                        <h3 class="bbtitles bbtitles_zzw">今日夜宵推荐：各色主食的好伴侣，自己做才够味</h3>
                        <ul class="clearfix">
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/wuxiangluobogan_2.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/wuxiangluobogan_2.html%27"
                                   tppabs="http://www.meishij.net/zuofa/wuxiangluobogan_2.html" title="这样腌的萝卜嘎嘣脆"
                                   class="img"><img alt="这样腌的萝卜嘎嘣脆"
                                                    src="/Public/msj/images/c10f6077f502c866b239a7e04abe558b.jpg"
                                                    tppabs="http://images.meishij.net/p/20161110/c10f6077f502c866b239a7e04abe558b.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/wuxiangluobogan_2.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/wuxiangluobogan_2.html%27"
                                           tppabs="http://www.meishij.net/zuofa/wuxiangluobogan_2.html"
                                           title="这样腌的萝卜嘎嘣脆">这样腌的萝卜嘎嘣脆</a>
                                    </h2>
                                    <strong>轻轻松松将萝卜最好吃的味道留下来</strong>
                                    <span><a href="####">清热解毒</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/baidajidanjiang.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/baidajidanjiang.html%27"
                                   tppabs="http://www.meishij.net/zuofa/baidajidanjiang.html" title="百搭鸡蛋酱" class="img"><img
                                        alt="百搭鸡蛋酱" src="/Public/msj/images/c9dbd4d77369d2be713a55e89dc02204.jpg"
                                        tppabs="http://images.meishij.net/p/20161110/c9dbd4d77369d2be713a55e89dc02204.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/baidajidanjiang.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/baidajidanjiang.html%27"
                                           tppabs="http://www.meishij.net/zuofa/baidajidanjiang.html"
                                           title="百搭鸡蛋酱">百搭鸡蛋酱</a></h2>
                                    <strong>原来这样做就能让拌饭酱的香味更浓郁</strong>
                                    <span><a href="####">开胃</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/jianghuanggua_12.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/jianghuanggua_12.html%27"
                                   tppabs="http://www.meishij.net/zuofa/jianghuanggua_12.html" title="酱黄瓜"
                                   class="img"><img
                                        alt="酱黄瓜" src="/Public/msj/images/ee0fbfb43a4e58c0cee61125a4431171.jpg"
                                        tppabs="http://images.meishij.net/p/20161110/ee0fbfb43a4e58c0cee61125a4431171.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/jianghuanggua_12.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/jianghuanggua_12.html%27"
                                           tppabs="http://www.meishij.net/zuofa/jianghuanggua_12.html"
                                           title="酱黄瓜">酱黄瓜</a>
                                    </h2>
                                    <strong>餐桌上必不可少的一道小菜，独家秘方大公开</strong>
                                    <span><a href="####">瘦身</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="zzw_item zzw_item_5" po="5" c="4">
                        <h3 class="bbtitles bbtitles_zzw">今日晚餐推荐：国民家常菜大盘点，哪款才是你的最爱</h3>
                        <ul class="clearfix">
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/chufang/diy/jiangchangcaipu/58974.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/chufang/diy/jiangchangcaipu/58974.html%27"
                                   tppabs="http://www.meishij.net/chufang/diy/jiangchangcaipu/58974.html"
                                   title="酸辣土豆丝轻松做"
                                   class="img"><img alt="酸辣土豆丝轻松做"
                                                    src="/Public/msj/images/02e5b32d808d4e11372e122d10944970.jpg"
                                                    tppabs="http://images.meishij.net/p/20161114/02e5b32d808d4e11372e122d10944970.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/chufang/diy/jiangchangcaipu/58974.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/chufang/diy/jiangchangcaipu/58974.html%27"
                                           tppabs="http://www.meishij.net/chufang/diy/jiangchangcaipu/58974.html"
                                           title="酸辣土豆丝轻松做">酸辣土豆丝轻松做</a></h2>
                                    <strong>想把土豆丝做好吃，只需掌握这几个小技巧</strong>
                                    <span><a href="####">开胃下饭</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/fanqiechaodan_52.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/fanqiechaodan_52.html%27"
                                   tppabs="http://www.meishij.net/zuofa/fanqiechaodan_52.html" title="番茄炒蛋" class="img"><img
                                        alt="番茄炒蛋" src="/Public/msj/images/28771644a3fcb9749f405430a406ce27.jpg"
                                        tppabs="http://images.meishij.net/p/20161110/28771644a3fcb9749f405430a406ce27.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/fanqiechaodan_52.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/fanqiechaodan_52.html%27"
                                           tppabs="http://www.meishij.net/zuofa/fanqiechaodan_52.html"
                                           title="番茄炒蛋">番茄炒蛋</a>
                                    </h2>
                                    <strong>让番茄炒蛋更入味更好吃的方法，你一定感兴趣</strong>
                                    <span><a href="####">均衡营养</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                            <li>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/zuofa/yuxiangrousi_101.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/yuxiangrousi_101.html%27"
                                   tppabs="http://www.meishij.net/zuofa/yuxiangrousi_101.html" title="鱼香肉丝" class="img"><img
                                        alt="鱼香肉丝" src="/Public/msj/images/b9f4fc42c0cc761038ea9acdf087f321.jpg"
                                        tppabs="http://images.meishij.net/p/20161114/b9f4fc42c0cc761038ea9acdf087f321.jpg"/></a>
                                <div class="c pngFix">
                                    <h2><a target="_blank"
                                           href="javascript:if(confirm(%27http://www.meishij.net/zuofa/yuxiangrousi_101.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/yuxiangrousi_101.html%27"
                                           tppabs="http://www.meishij.net/zuofa/yuxiangrousi_101.html"
                                           title="鱼香肉丝">鱼香肉丝</a>
                                    </h2>
                                    <strong>调一碗神奇的鱼香汁，下饭菜其实也可以很简单</strong>
                                    <span><a href="####">开胃健脾</a><em class="arrow pngFix"></em></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="maskleft" id="maskleft"></div>
                <div class="maskright" id="maskright"></div>
                <div class="prev_btn prev_btn_1 pngFix" id="zzw_prev_btn"></div>
                <div class="next_btn next_btn_1 pngFix" id="zzw_next_btn"></div>
                <div class="index_3meal_tab" id="index_timelinebox">
                    <div class="index_3meal_tab_w">
                        <span class="timex timex_0" id="i_time4"><span>早餐时间</span></span><span
                            class="timex timex_1 timex_current" id="i_time10"><span>午餐时间</span></span><span
                            class="timex timex_2" id="i_time14"><span>下午茶时间</span></span><span class="timex timex_3"
                                                                                               id="i_time16"><span>晚餐时间</span></span><span
                            class="timex timex_4" id="i_time21"><span>夜宵时间</span></span>
                    </div>
                    <div class="timeline_left"></div>
                    <div class="timeline_right"></div>
                    <span class="time time4" id="i_time4">4:00</span><span class="time time10"
                                                                           id="i_time10">10:00</span><span
                        class="time time14" id="i_time14">14:00</span><span class="time time16"
                                                                            id="i_time16">16:00</span><span
                        class="time time21" id="i_time21">21:00</span><span class="time time4_"
                                                                            id="i_time4_">4:00</span>
                </div>
            </div>
            <h3 class="bbtitles">11月，饮食应清补<span class="paixu"><a target="_blank"
                                                                 href="javascript:if(confirm(%27http://i.meishi.cc/recipe_list/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/recipe_list/%27"
                                                                 tppabs="http://i.meishi.cc/recipe_list/">更多菜单 ></a></span>
            </h3>
            <div class="ztlist_style1 clearfix" id="ztlist_style1_index">
                <div id="index_cd_leftarrow"></div>
                <div id="index_cd_leftarrow_mask"></div>
                <div id="index_cd_rightarrow"></div>
                <div id="index_cd_rightarrow_mask"></div>
                <div class="ztlist_style1_item_w" id="ztlist_style1_item_w">
                    <div class="ztlist_style1_item_ww" id="ztlist_style1_item_ww">
                        <div class="ztlist_style1_item_w1">
                            <div class="ztlist_style1_item">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/daren_task/article_detail.php?id=1568&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/daren_task/article_detail.php?id=1568&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/daren_task/article_detail.php?id=1568&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/df828701194a3997aab96242a36ca181.jpg"
                                                    tppabs="http://images.meishij.net/p/20161111/df828701194a3997aab96242a36ca181.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/daren_task/article_detail.php?id=1568&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/daren_task/article_detail.php?id=1568&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/daren_task/article_detail.php?id=1568&from_s=home2">每个拉面馆都能点的这道菜</a></strong>
                                                <p>新疆大盘鸡的最美味做法</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=317&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=317&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=317&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/47a874a0483edcd43ff8be3cc4ba4a64.jpg"
                                                    tppabs="http://images.meishij.net/p/20161106/47a874a0483edcd43ff8be3cc4ba4a64.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=317&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=317&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=317&from_s=home2">立冬勤补冬</a></strong>
                                                <p>你不可不知的饺子小秘诀</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mr0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=294&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=294&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=294&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/d49be13d75d5633e17926e751bc5fc14.jpg"
                                                    tppabs="http://images.meishij.net/p/20161027/d49be13d75d5633e17926e751bc5fc14.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=294&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=294&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=294&from_s=home2">幸福食光里的晨时之美</a></strong>
                                                <p>超省时早餐搭配，不用早起也能丰盛美味</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=290&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=290&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=290&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/160cd74ff81208ec9c5ce48984d2ce97.jpg"
                                                    tppabs="http://images.meishij.net/p/20161026/160cd74ff81208ec9c5ce48984d2ce97.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=290&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=290&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=290&from_s=home2">葱姜蒜那些事儿</a></strong>
                                                <p>你需要掌握的葱姜蒜科普贴</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=311&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=311&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=311&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/dbf1e6ca45e4d70192ff7ce3b6733bb7.jpg"
                                                    tppabs="http://images.meishij.net/p/20161101/dbf1e6ca45e4d70192ff7ce3b6733bb7.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=311&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=311&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=311&from_s=home2">不闻烟火气
                                                    但有生活香</a></strong>
                                                <p>她的食物没有保质期</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mr0 mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=326&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=326&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=326&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/e0f39082366186a80a75df21847efeee.jpg"
                                                    tppabs="http://images.meishij.net/p/20161110/e0f39082366186a80a75df21847efeee.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=326&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=326&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=326&from_s=home2">以美食之名</a></strong>
                                                <p>温暖TA的心房</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ztlist_style1_item_w1">
                            <div class="ztlist_style1_item">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=283&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=283&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=283&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/233bf9b316db1319189b2a318f69edf1.jpg"
                                                    tppabs="http://images.meishij.net/p/20161024/233bf9b316db1319189b2a318f69edf1.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=283&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=283&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=283&from_s=home2">鸡蛋之看我七十二变</a></strong>
                                                <p>满足你对鸡蛋的一切幻想</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=312&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=312&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=312&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/191a33a778e707ee8d9141cf3ecedaf8.jpg"
                                                    tppabs="http://images.meishij.net/p/20161104/191a33a778e707ee8d9141cf3ecedaf8.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=312&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=312&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=312&from_s=home2">小编亲测：巧切洋葱不流泪</a></strong>
                                                <p>为你挑选真正的不辣眼切法</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mr0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=306&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=306&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=306&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/733df8ef29fa9bdca648842cf0d2ab1f.jpg"
                                                    tppabs="http://images.meishij.net/p/20161028/733df8ef29fa9bdca648842cf0d2ab1f.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=306&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=306&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=306&from_s=home2">麻辣诱惑——水煮肉</a></strong>
                                                <p>美食杰芬芳厨男子为你解密水煮肉</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/daren_task/article_detail.php?id=379&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/daren_task/article_detail.php?id=379&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/daren_task/article_detail.php?id=379&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/2ffefdb18f835696b1ce6626455eef8b.jpg"
                                                    tppabs="http://images.meishij.net/p/20161020/2ffefdb18f835696b1ce6626455eef8b.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/daren_task/article_detail.php?id=379&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/daren_task/article_detail.php?id=379&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/daren_task/article_detail.php?id=379&from_s=home2">美食达人版块全新改版</a></strong>
                                                <p>更多好文好友好福利如期而至</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/huodong/20161024_midea.php?from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/20161024_midea.php?from_s=home2%27"
                                               tppabs="http://i.meishi.cc/huodong/20161024_midea.php?from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/184b3b5c7762823bd6afb9b6acdf0215.jpg"
                                                    tppabs="http://images.meishij.net/p/20161026/184b3b5c7762823bd6afb9b6acdf0215.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/huodong/20161024_midea.php?from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/20161024_midea.php?from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/huodong/20161024_midea.php?from_s=home2">麦饭石胆·自然饭香</a></strong>
                                                <p>美的原生态AH煲新品试用火热进行中</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mr0 mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/daren_task/article_detail.php?id=1230&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/daren_task/article_detail.php?id=1230&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/daren_task/article_detail.php?id=1230&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/d131625848ff2f1f102f62e5daa2790c.jpg"
                                                    tppabs="http://images.meishij.net/p/20161107/d131625848ff2f1f102f62e5daa2790c.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/daren_task/article_detail.php?id=1230&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/daren_task/article_detail.php?id=1230&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/daren_task/article_detail.php?id=1230&from_s=home2">蔡澜死前必食之物</a></strong>
                                                <p>捞饭配猪油</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ztlist_style1_item_w1">
                            <div class="ztlist_style1_item">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=329&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=329&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=329&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/80049efee79266020489a605b4bd90ca.jpg"
                                                    tppabs="http://images.meishij.net/p/20161114/80049efee79266020489a605b4bd90ca.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=329&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=329&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=329&from_s=home2">猪肉这么做</a></strong>
                                                <p>鼻子都香掉</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/huodong/20161019_supor_jidusai3.php?from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/20161019_supor_jidusai3.php?from_s=home2%27"
                                               tppabs="http://i.meishi.cc/huodong/20161019_supor_jidusai3.php?from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/2ece7a37b74772de7ae1bdae02c185a0.jpg"
                                                    tppabs="http://images.meishij.net/p/20161020/2ece7a37b74772de7ae1bdae02c185a0.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/huodong/20161019_supor_jidusai3.php?from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/20161019_supor_jidusai3.php?from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/huodong/20161019_supor_jidusai3.php?from_s=home2">让食材相遇
                                                    用火候交手</a></strong>
                                                <p>苏泊尔《我是大厨师》第三季火热开赛！</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mr0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/daren_task/article_detail.php?id=543&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/daren_task/article_detail.php?id=543&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/daren_task/article_detail.php?id=543&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/0aae6cc6956a3f768d81f59cd687d474.jpg"
                                                    tppabs="http://images.meishij.net/p/20161021/0aae6cc6956a3f768d81f59cd687d474.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/daren_task/article_detail.php?id=543&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/daren_task/article_detail.php?id=543&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/daren_task/article_detail.php?id=543&from_s=home2">超超超简单的3款红豆点心</a></strong>
                                                <p>甜香软糯最相思</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/daren_task/article_detail.php?id=593&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/daren_task/article_detail.php?id=593&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/daren_task/article_detail.php?id=593&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/b1b96e3b60450a0e6a726639932676f0.jpg"
                                                    tppabs="http://images.meishij.net/p/20161021/b1b96e3b60450a0e6a726639932676f0.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/daren_task/article_detail.php?id=593&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/daren_task/article_detail.php?id=593&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/daren_task/article_detail.php?id=593&from_s=home2">享誉大江南北的家常主食</a></strong>
                                                <p>一种安慰 关于胃和思念</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=187&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=187&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=187&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/b2f281a1db5a4fc3914fdbfe259d4fc3.jpg"
                                                    tppabs="http://images.meishij.net/p/20160719/b2f281a1db5a4fc3914fdbfe259d4fc3.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/huodong/zt.php?zt_id=187&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/huodong/zt.php?zt_id=187&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/huodong/zt.php?zt_id=187&from_s=home2">明星主厨叶一茜热力直播</a></strong>
                                                <p>森蝶妈妈的烹饪秘籍！</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ztlist_style1_item mr0 mb0">
                                <ul class="ztlist_style1_item_list clearfix">
                                    <li class="current clearfix">
                                        <div class="topzt">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://i.meishi.cc/daren_task/article_detail.php?id=864&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/daren_task/article_detail.php?id=864&from_s=home2%27"
                                               tppabs="http://i.meishi.cc/daren_task/article_detail.php?id=864&from_s=home2"
                                               class="img"><img
                                                    src="/Public/msj/images/325c7e9e9d352278111262dc0d3e0d8a.jpg"
                                                    tppabs="http://images.meishij.net/p/20161020/325c7e9e9d352278111262dc0d3e0d8a.jpg"><span
                                                    class="fixer"></span></a>
                                            <div class="c">
                                                <strong class="title"><a target="_blank"
                                                                         href="javascript:if(confirm(%27http://i.meishi.cc/daren_task/article_detail.php?id=864&from_s=home2  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://i.meishi.cc/daren_task/article_detail.php?id=864&from_s=home2%27"
                                                                         tppabs="http://i.meishi.cc/daren_task/article_detail.php?id=864&from_s=home2">为了美食走江湖</a></strong>
                                                <p>九座城，九段旅程，九种气息</p></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ztlist_cur" id="ztlist_cur"><span></span><span class="current"></span><span></span></div>
            <h3 class="bbtitles">11月，初冬养肾气<span class="paixu"><a
                    href="javascript:if(confirm(%27http://www.meishij.net/shicai/  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/shicai/%27"
                    tppabs="http://www.meishij.net/shicai/">更多食材 ></a></span></h3>
            <div class="index_sc_w">
                <dl class="clearfix">
                    <dd class="index_sc_dd index_sc_dd_current"><a href="####" class="link">水果</a>
                        <div class="index_sc_con">
                            <div class="c">
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/柚子  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/柚子%27"
                                   tppabs="http://www.meishij.net/柚子"><img
                                        src="/Public/msj/images/a5bac715b862d69ad25fd405c7c40bbe_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20150303/a5bac715b862d69ad25fd405c7c40bbe_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>柚子</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/猕猴桃  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/猕猴桃%27"
                                   tppabs="http://www.meishij.net/猕猴桃"><img
                                        src="/Public/msj/images/6a89f9eeb6eeec4427e5807b4ed0cb02_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20110822/6a89f9eeb6eeec4427e5807b4ed0cb02_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>猕猴桃</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/梨  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/梨%27"
                                   tppabs="http://www.meishij.net/梨"><img
                                        src="/Public/msj/images/8d143e7c57b3be917cdbe44ad06534d7_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20150130/8d143e7c57b3be917cdbe44ad06534d7_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>梨</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/柿子  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/柿子%27"
                                   tppabs="http://www.meishij.net/柿子"><img
                                        src="/Public/msj/images/b3bc092f622b66ed8d3c0d8595eb5d76_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20111130/b3bc092f622b66ed8d3c0d8595eb5d76_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>柿子</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/甘蔗  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/甘蔗%27"
                                   tppabs="http://www.meishij.net/甘蔗"><img
                                        src="/Public/msj/images/5983d7bb993c2eb812d4a91a4e6fb272_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20110923/5983d7bb993c2eb812d4a91a4e6fb272_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>甘蔗</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/火龙果  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/火龙果%27"
                                   tppabs="http://www.meishij.net/火龙果"><img
                                        src="/Public/msj/images/de2e19c25348fe9784c98878738596a3_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20110714/de2e19c25348fe9784c98878738596a3_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>火龙果</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/橘子  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/橘子%27"
                                   tppabs="http://www.meishij.net/橘子"><img
                                        src="/Public/msj/images/43e3a4d8a7744116d1eb421cd0878e1e_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20110831/43e3a4d8a7744116d1eb421cd0878e1e_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>橘子</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/山楂  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/山楂%27"
                                   tppabs="http://www.meishij.net/山楂"><img
                                        src="/Public/msj/images/7ac01650dce76ad66a233c20650fbb8a_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20111130/7ac01650dce76ad66a233c20650fbb8a_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>山楂</strong></span></a>
                            </div>
                        </div>
                    </dd>
                    <dd class="index_sc_dd"><a href="####" class="link">蔬菜</a>
                        <div class="index_sc_con">
                            <div class="c">
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/藕  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/藕%27"
                                   tppabs="http://www.meishij.net/藕"><img
                                        src="/Public/msj/images/178a690ae91144a465fcea6b48640784_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20140521/178a690ae91144a465fcea6b48640784_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>藕</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/白萝卜  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/白萝卜%27"
                                   tppabs="http://www.meishij.net/白萝卜"><img
                                        src="/Public/msj/images/ea5fc8dda79f787318ffaef67e7b25f3_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20140521/ea5fc8dda79f787318ffaef67e7b25f3_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>白萝卜</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/土豆  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/土豆%27"
                                   tppabs="http://www.meishij.net/土豆"><img
                                        src="/Public/msj/images/08abdd119c866debcb03c6ea961540a4_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20111214/08abdd119c866debcb03c6ea961540a4_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>土豆</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/南瓜  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/南瓜%27"
                                   tppabs="http://www.meishij.net/南瓜"><img
                                        src="/Public/msj/images/62c149c64a4c9a7a02911650cc50b256_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20111202/62c149c64a4c9a7a02911650cc50b256_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>南瓜</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/四季豆  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/四季豆%27"
                                   tppabs="http://www.meishij.net/四季豆"><img
                                        src="/Public/msj/images/8be959de0500cb3effcab1719dc93d29_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20150123/8be959de0500cb3effcab1719dc93d29_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>四季豆</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/山药  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/山药%27"
                                   tppabs="http://www.meishij.net/山药"><img
                                        src="/Public/msj/images/848a2cc41cb2d09d5210e52066e116ec_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20110707/848a2cc41cb2d09d5210e52066e116ec_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>山药</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/大白菜  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/大白菜%27"
                                   tppabs="http://www.meishij.net/大白菜"><img
                                        src="/Public/msj/images/6dd92c4b47676798bc3d9a05cee13838_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20111130/6dd92c4b47676798bc3d9a05cee13838_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>大白菜</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/尖椒  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/尖椒%27"
                                   tppabs="http://www.meishij.net/尖椒"><img
                                        src="/Public/msj/images/94753d9e00352dfbc728480d65ecd28f_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20110728/94753d9e00352dfbc728480d65ecd28f_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>尖椒</strong></span></a>
                            </div>
                        </div>
                    </dd>
                    <dd class="index_sc_dd"><a href="####" class="link">五谷</a>
                        <div class="index_sc_con">
                            <div class="c">
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/板栗  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/板栗%27"
                                   tppabs="http://www.meishij.net/板栗"><img
                                        src="/Public/msj/images/638aa109b78183ae2faeb738ebfce1b8_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20111019/638aa109b78183ae2faeb738ebfce1b8_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>板栗</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/核桃(鲜)  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/核桃(鲜)%27"
                                   tppabs="http://www.meishij.net/核桃(鲜)"><img
                                        src="/Public/msj/images/shicai633_150x150.jpg"
                                        tppabs="http://site.meishij.net/shicaiimg/133/shicai633_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>核桃(鲜)</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/毛豆  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/毛豆%27"
                                   tppabs="http://www.meishij.net/毛豆"><img
                                        src="/Public/msj/images/064ee845c82df1cfd19e00b8e5aeaa0c_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20140729/064ee845c82df1cfd19e00b8e5aeaa0c_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>毛豆</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/花生  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/花生%27"
                                   tppabs="http://www.meishij.net/花生"><img
                                        src="/Public/msj/images/069f1a97d3b5ca8dd359dd81be379997_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20111214/069f1a97d3b5ca8dd359dd81be379997_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>花生</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/玉米(鲜)  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/玉米(鲜)%27"
                                   tppabs="http://www.meishij.net/玉米(鲜)"><img
                                        src="/Public/msj/images/3eb346efc8d0a9fca2d26ae0a6715d8d_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20111125/3eb346efc8d0a9fca2d26ae0a6715d8d_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>玉米(鲜)</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/冬枣  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/冬枣%27"
                                   tppabs="http://www.meishij.net/冬枣"><img
                                        src="/Public/msj/images/f22c038c8dbec35f4e8b79daa4234e5b_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20110829/f22c038c8dbec35f4e8b79daa4234e5b_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>冬枣</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/薏米  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/薏米%27"
                                   tppabs="http://www.meishij.net/薏米"><img
                                        src="/Public/msj/images/1fc5bb018fadda5c7083d61e1a27ab2a_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20110715/1fc5bb018fadda5c7083d61e1a27ab2a_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>薏米</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/燕麦  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/燕麦%27"
                                   tppabs="http://www.meishij.net/燕麦"><img
                                        src="/Public/msj/images/5bb1dda5bfa20c2772d81781c4a23f31_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20150228/5bb1dda5bfa20c2772d81781c4a23f31_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>燕麦</strong></span></a>
                            </div>
                        </div>
                    </dd>
                    <dd class="index_sc_dd"><a href="####" class="link">生鲜</a>
                        <div class="index_sc_con">
                            <div class="c">
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/大闸蟹  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/大闸蟹%27"
                                   tppabs="http://www.meishij.net/大闸蟹"><img
                                        src="/Public/msj/images/1caad250e69a65e95f619e07eb55da46_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20130115/1caad250e69a65e95f619e07eb55da46_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>大闸蟹</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/鲈鱼  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/鲈鱼%27"
                                   tppabs="http://www.meishij.net/鲈鱼"><img
                                        src="/Public/msj/images/ea9433aea0d9e2634f1f6ec593b9589d_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20111130/ea9433aea0d9e2634f1f6ec593b9589d_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>鲈鱼</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/皮皮虾  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/皮皮虾%27"
                                   tppabs="http://www.meishij.net/皮皮虾"><img
                                        src="/Public/msj/images/a33af27d0cb180dfb0762fc1f5386819_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20111208/a33af27d0cb180dfb0762fc1f5386819_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>皮皮虾</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/鸭  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/鸭%27"
                                   tppabs="http://www.meishij.net/鸭"><img
                                        src="/Public/msj/images/1af59099f56158ef054e6ee5888acedf_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20120703/1af59099f56158ef054e6ee5888acedf_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>鸭</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/虾  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/虾%27"
                                   tppabs="http://www.meishij.net/虾"><img
                                        src="/Public/msj/images/517b9dbdc361b04e8eab0e527b7e8b68_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20120130/517b9dbdc361b04e8eab0e527b7e8b68_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>虾</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/扇贝  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/扇贝%27"
                                   tppabs="http://www.meishij.net/扇贝"><img
                                        src="/Public/msj/images/f07d734a3e755193ae59f25ce1a03e93_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20150820/f07d734a3e755193ae59f25ce1a03e93_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>扇贝</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/海参  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/海参%27"
                                   tppabs="http://www.meishij.net/海参"><img
                                        src="/Public/msj/images/29113b2d636c6e6cb6b1308a674463f7_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20111213/29113b2d636c6e6cb6b1308a674463f7_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>海参</strong></span></a>
                                <a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/牛肉  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/牛肉%27"
                                   tppabs="http://www.meishij.net/牛肉"><img
                                        src="/Public/msj/images/a72016598763ceb63763b2f0efb75434_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20111019/a72016598763ceb63763b2f0efb75434_150x150.jpg"/><span
                                        class="name pngFix"><em class="notz"></em><strong>牛肉</strong></span></a>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>
            <div class="index_pxw_ww">
                <div id="index_cp_leftarrow"></div>
                <div id="index_cp_leftarrow_mask"></div>
                <div id="index_cp_rightarrow"></div>
                <div id="index_cp_rightarrow_mask"></div>
                <div class="index_pxw_w" id="index_pxw_w">
                    <div class="index_pxw clearfix" id="index_pxw">
                        <div class="index_pxi">
                            <h3 class="bbtitles">每小时最热菜谱</h3>
                            <div class="listtyle2_w clearfix" id="listtyle1_w">
                                <div class="listtyle1_list clearfix" id="listtyle1_list">
                                    <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><div class="listtyle1 ml0">
                                            <a target="_blank"
                                               href="javascript:if(confirm(%27http://www.meishij.net/zuofa/hongshaoroumenfanmeideyuanshengtaiahbao.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/zuofa/hongshaoroumenfanmeideyuanshengtaiahbao.html%27"
                                               tppabs="http://www.meishij.net/zuofa/hongshaoroumenfanmeideyuanshengtaiahbao.html"
                                               title="红烧肉焖饭#美的原生态AH煲#" class="big">
                                                <img class="img" alt="红烧肉焖饭#美的原生态AH煲#" src="<?php echo ($a["thumb"]); ?>"
                                                     tppabs="http://site.meishij.net/r/150/78/3394650/a3394650_147833182754332.jpg">
                                                <div class="i_w">
                                                    <div class="i" style="margin-top: 0px;">
                                                        <div class="c1">
                                                            <strong><?php echo ($a["title"]); ?></strong><span>15 评论  449 人气</span><em>豆帝煮</em>
                                                        </div>
                                                        <div class="c2">
                                                            <ul>
                                                                <li class="li1">8步 / 大概60分钟</li>
                                                                <li class="li2">煮 / 咸鲜味</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <div class="listtyle1 ">
                                        <div class="index_cplist_more">
                                            <h3>热门栏目推荐</h3>
                                            <ul>
                                                <li><a href="index-1.htm"
                                                       tppabs="http://www.meishij.net/chufang/diy/">最新菜谱</a></li>
                                                <li><a href="index-2.htm"
                                                       tppabs="http://www.meishij.net/chufang/diy/jiangchangcaipu/">家常菜</a>
                                                </li>
                                                <li><a href="index-3.htm"
                                                       tppabs="http://www.meishij.net/chufang/diy/langcaipu/">凉菜</a>
                                                </li>
                                                <li><a href="index-4.htm"
                                                       tppabs="http://www.meishij.net/chufang/diy/sushi/">素食</a>
                                                </li>
                                                <li><a href="index-10.htm"
                                                       tppabs="http://www.meishij.net/chufang/diy/zaocan/">早餐</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:if(confirm(%27http://www.meishij.net/yaoshanshiliao/gongnengxing/wufa/  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/yaoshanshiliao/gongnengxing/wufa/%27"
                                                       tppabs="http://www.meishij.net/yaoshanshiliao/gongnengxing/wufa/">乌发</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:if(confirm(%27http://www.meishij.net/yaoshanshiliao/jibingtiaoli/gaoxueya/  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/yaoshanshiliao/jibingtiaoli/gaoxueya/%27"
                                                       tppabs="http://www.meishij.net/yaoshanshiliao/jibingtiaoli/gaoxueya/">高血压</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:if(confirm(%27http://www.meishij.net/hongpei/  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/hongpei/%27"
                                                       tppabs="http://www.meishij.net/hongpei/">烘焙</a></li>
                                                <li>
                                                    <a href="javascript:if(confirm(%27http://www.meishij.net/chufang/diy/guowaicaipu1/hanguo/  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/chufang/diy/guowaicaipu1/hanguo/%27"
                                                       tppabs="http://www.meishij.net/chufang/diy/guowaicaipu1/hanguo/">韩国料理</a>
                                                </li>
                                                <li><a href="index-18.htm"
                                                       tppabs="http://www.meishij.net/china-food/caixi/chuancai/">川菜</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:if(confirm(%27http://www.meishij.net/china-food/caixi/yuecai/  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/china-food/caixi/yuecai/%27"
                                                       tppabs="http://www.meishij.net/china-food/caixi/yuecai/">粤菜</a>
                                                </li>
                                                <li><a href="index-21.htm"
                                                       tppabs="http://www.meishij.net/china-food/caixi/xiangcai/">湘菜</a>
                                                </li>
                                                <li><a href="index-12.htm"
                                                       tppabs="http://www.meishij.net/chufang/diy/tianpindianxin/">甜点</a>
                                                </li>
                                                <li><a href="index-1.htm"
                                                       tppabs="http://www.meishij.net/chufang/diy/"
                                                       class="hot">进入菜谱大全 >></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="paixu"><a class="l_n l_n_5" po="5"
                                           href="javascript:refresh_inews(5)">最新</a><span> | 最热：</span><a
                            class="l_n l_n_1 current" po="1" href="javascript:refresh_inews(1)">一小时</a>  <a
                            class="l_n l_n_2" po="2" href="javascript:refresh_inews(2)">今日</a>  <a class="l_n l_n_4"
                                                                                                   po="4"
                                                                                                   href="javascript:refresh_inews(4)">七天</a>  <a
                            target="_blank" href="index-1.htm"
                            tppabs="http://www.meishij.net/chufang/diy/">更多菜谱 &gt;</a></span>
                </div>
            </div>
            <h3 class="bbtitles">健康新闻<span class="paixu"><a target="_blank"
                                                            href="javascript:if(confirm(%27http://www.meishij.net/jiankang/  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/jiankang/%27"
                                                            tppabs="http://www.meishij.net/jiankang/">更多健康资讯 ></a></span>
            </h3>
            <div class="index_health clearfix">
                <div class="left">
                    <div class="div1 mb20">
                        <h2><a target="_blank" target="_blank"
                               href="javascript:if(confirm(%27http://www.meishij.net/jiankang/shipinanquan/  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/jiankang/shipinanquan/%27"
                               tppabs="http://www.meishij.net/jiankang/shipinanquan/">食品安全</a><em
                                class="arrow"></em>
                        </h2>
                        <?php if(is_array($children)): $i = 0; $__LIST__ = $children;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><ul class="index_healthitem">
                                <li class="current"><a target="_blank"
                                                       href="javascript:if(confirm(%27http://www.meishij.net/changshi/biyaomoguqiezitongshihuizhongdu.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/changshi/biyaomoguqiezitongshihuizhongdu.html%27"
                                                       tppabs="http://www.meishij.net/changshi/biyaomoguqiezitongshihuizhongdu.html"
                                                       class="img"><img
                                        src="/Public/msj/images/0ff2b10febaed9eaca2bdf12968c2ff7_150x150.jpg"
                                        tppabs="http://images.meishij.net/p/20161111/0ff2b10febaed9eaca2bdf12968c2ff7_150x150.jpg"/></a>
                                    <h3><a href="<?php echo U('article',array('id'=>$a[id]));?>"><?php echo ($c["name"]); ?></a>
                                    </h3></li>
                            </ul><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="div1 mb20 mr0">
                        <h2><a target="_blank" target="_blank"
                               href="javascript:if(confirm(%27http://www.meishij.net/wenhua/  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/wenhua/%27"
                               tppabs="http://www.meishij.net/wenhua/">文化典故</a><em class="arrow"></em></h2>
                        <ul class="index_healthitem">
                            <li class="current"><a target="_blank"
                                                   href="javascript:if(confirm(%27http://www.meishij.net/diangu/zuijudaibiaoxingdeqingzhencai.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/diangu/zuijudaibiaoxingdeqingzhencai.html%27"
                                                   tppabs="http://www.meishij.net/diangu/zuijudaibiaoxingdeqingzhencai.html"
                                                   class="img"><img
                                    src="/Public/msj/images/cdba9aa506bee280f1b1f6503e2cea55_150x150.jpg"
                                    tppabs="http://images.meishij.net/p/20161110/cdba9aa506bee280f1b1f6503e2cea55_150x150.jpg"/></a>
                                <h3><a target="_blank"
                                       href="javascript:if(confirm(%27http://www.meishij.net/diangu/zuijudaibiaoxingdeqingzhencai.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/diangu/zuijudaibiaoxingdeqingzhencai.html%27"
                                       tppabs="http://www.meishij.net/diangu/zuijudaibiaoxingdeqingzhencai.html">最具代表性的清真菜</a>
                                </h3></li>
                            <li><a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/kafei/shandongrendehejiuguiju_2.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/kafei/shandongrendehejiuguiju_2.html%27"
                                   tppabs="http://www.meishij.net/kafei/shandongrendehejiuguiju_2.html" class="img"><img
                                    src="/Public/msj/images/ea4795072096e73b48a820f391caf1cf_150x150.jpg"
                                    tppabs="http://images.meishij.net/p/20161107/ea4795072096e73b48a820f391caf1cf_150x150.jpg"/></a>
                                <h3><a target="_blank"
                                       href="javascript:if(confirm(%27http://www.meishij.net/kafei/shandongrendehejiuguiju_2.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/kafei/shandongrendehejiuguiju_2.html%27"
                                       tppabs="http://www.meishij.net/kafei/shandongrendehejiuguiju_2.html">山东人的喝酒规矩</a>
                                </h3></li>
                            <li><a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/liyi/shangwucandeliyi_1.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/liyi/shangwucandeliyi_1.html%27"
                                   tppabs="http://www.meishij.net/liyi/shangwucandeliyi_1.html" class="img"><img
                                    src="/Public/msj/images/9b493b820e999a4f775be26055f16d6a_150x150.jpg"
                                    tppabs="http://images.meishij.net/p/20161102/9b493b820e999a4f775be26055f16d6a_150x150.jpg"/></a>
                                <h3><a target="_blank"
                                       href="javascript:if(confirm(%27http://www.meishij.net/liyi/shangwucandeliyi_1.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/liyi/shangwucandeliyi_1.html%27"
                                       tppabs="http://www.meishij.net/liyi/shangwucandeliyi_1.html">商务餐的礼仪</a></h3></li>
                        </ul>
                    </div>
                    <div class="div1 mb0">
                        <h2><a target="_blank" target="_blank"
                               href="javascript:if(confirm(%27http://www.meishij.net/jiankang/  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/jiankang/%27"
                               tppabs="http://www.meishij.net/jiankang/">健康指南</a><em class="arrow"></em></h2>
                        <ul class="index_healthitem">
                            <li class="current"><a target="_blank"
                                                   href="javascript:if(confirm(%27http://www.meishij.net/changshi/nvxingbuchongheermengchi5zhongshiwu.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/changshi/nvxingbuchongheermengchi5zhongshiwu.html%27"
                                                   tppabs="http://www.meishij.net/changshi/nvxingbuchongheermengchi5zhongshiwu.html"
                                                   class="img"><img
                                    src="/Public/msj/images/1a395461048aa2f1b76ad65e41daba1a_150x150.jpg"
                                    tppabs="http://images.meishij.net/p/20161114/1a395461048aa2f1b76ad65e41daba1a_150x150.jpg"/></a>
                                <h3><a target="_blank"
                                       href="javascript:if(confirm(%27http://www.meishij.net/changshi/nvxingbuchongheermengchi5zhongshiwu.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/changshi/nvxingbuchongheermengchi5zhongshiwu.html%27"
                                       tppabs="http://www.meishij.net/changshi/nvxingbuchongheermengchi5zhongshiwu.html">女性补充荷尔蒙吃5种食物</a>
                                </h3></li>
                            <li><a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/changshi/6zhongjiangyouzenmechigengyingyang.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/changshi/6zhongjiangyouzenmechigengyingyang.html%27"
                                   tppabs="http://www.meishij.net/changshi/6zhongjiangyouzenmechigengyingyang.html"
                                   class="img"><img
                                    src="/Public/msj/images/ab5f6fd21a967620e1aaa8c7e3ed67ab_150x150.jpg"
                                    tppabs="http://images.meishij.net/p/20161109/ab5f6fd21a967620e1aaa8c7e3ed67ab_150x150.jpg"/></a>
                                <h3><a target="_blank"
                                       href="javascript:if(confirm(%27http://www.meishij.net/changshi/6zhongjiangyouzenmechigengyingyang.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/changshi/6zhongjiangyouzenmechigengyingyang.html%27"
                                       tppabs="http://www.meishij.net/changshi/6zhongjiangyouzenmechigengyingyang.html">6种酱油怎么吃更营养？</a>
                                </h3></li>
                            <li><a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/changshi/weiheyoudeyuciduoyoudeshao.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/changshi/weiheyoudeyuciduoyoudeshao.html%27"
                                   tppabs="http://www.meishij.net/changshi/weiheyoudeyuciduoyoudeshao.html" class="img"><img
                                    src="/Public/msj/images/f086ef360d9be9475566dd8e83fdc857_150x150.jpg"
                                    tppabs="http://images.meishij.net/p/20161104/f086ef360d9be9475566dd8e83fdc857_150x150.jpg"/></a>
                                <h3><a target="_blank"
                                       href="javascript:if(confirm(%27http://www.meishij.net/changshi/weiheyoudeyuciduoyoudeshao.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/changshi/weiheyoudeyuciduoyoudeshao.html%27"
                                       tppabs="http://www.meishij.net/changshi/weiheyoudeyuciduoyoudeshao.html">为何有的鱼刺多有的少？</a>
                                </h3></li>
                        </ul>
                    </div>
                    <div class="div1 mr0 mb0">
                        <h2><a target="_blank" target="_blank"
                               href="javascript:if(confirm(%27http://www.meishij.net/xinxianzixun/  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/xinxianzixun/%27"
                               tppabs="http://www.meishij.net/xinxianzixun/">新鲜资讯</a><em class="arrow"></em></h2>
                        <ul class="index_healthitem">
                            <li class="current"><a target="_blank"
                                                   href="javascript:if(confirm(%27http://www.meishij.net/xinwencaifang/waimeizhuerduozhutigengshouhuanying.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/xinwencaifang/waimeizhuerduozhutigengshouhuanying.html%27"
                                                   tppabs="http://www.meishij.net/xinwencaifang/waimeizhuerduozhutigengshouhuanying.html"
                                                   class="img"><img
                                    src="/Public/msj/images/998da90ee1f5871479b3fafe8a0bea2c_150x150.jpg"
                                    tppabs="http://images.meishij.net/p/20161111/998da90ee1f5871479b3fafe8a0bea2c_150x150.jpg"/></a>
                                <h3><a target="_blank"
                                       href="javascript:if(confirm(%27http://www.meishij.net/xinwencaifang/waimeizhuerduozhutigengshouhuanying.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/xinwencaifang/waimeizhuerduozhutigengshouhuanying.html%27"
                                       tppabs="http://www.meishij.net/xinwencaifang/waimeizhuerduozhutigengshouhuanying.html">中国给奥地利猪肉开绿灯</a>
                                </h3></li>
                            <li><a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/reyimeishi/shaguomeishidundundunganzouqiurideliangyi.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/reyimeishi/shaguomeishidundundunganzouqiurideliangyi.html%27"
                                   tppabs="http://www.meishij.net/reyimeishi/shaguomeishidundundunganzouqiurideliangyi.html"
                                   class="img"><img
                                    src="/Public/msj/images/36c0138b235498418dd0495ccbcbd382_150x150.jpg"
                                    tppabs="http://images.meishij.net/p/20161011/36c0138b235498418dd0495ccbcbd382_150x150.jpg"/></a>
                                <h3><a target="_blank"
                                       href="javascript:if(confirm(%27http://www.meishij.net/reyimeishi/shaguomeishidundundunganzouqiurideliangyi.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/reyimeishi/shaguomeishidundundunganzouqiurideliangyi.html%27"
                                       tppabs="http://www.meishij.net/reyimeishi/shaguomeishidundundunganzouqiurideliangyi.html">砂锅美食炖炖炖，赶走秋日的凉意</a>
                                </h3></li>
                            <li><a target="_blank"
                                   href="javascript:if(confirm(%27http://www.meishij.net/reyimeishi/rangnipaishoujiaojuedechufangquyouwuxiaoqiaomen.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/reyimeishi/rangnipaishoujiaojuedechufangquyouwuxiaoqiaomen.html%27"
                                   tppabs="http://www.meishij.net/reyimeishi/rangnipaishoujiaojuedechufangquyouwuxiaoqiaomen.html"
                                   class="img"><img
                                    src="/Public/msj/images/47a19f85863f22a8daa305ab5f778d57_150x150.jpg"
                                    tppabs="http://images.meishij.net/p/20160923/47a19f85863f22a8daa305ab5f778d57_150x150.jpg"/></a>
                                <h3><a target="_blank"
                                       href="javascript:if(confirm(%27http://www.meishij.net/reyimeishi/rangnipaishoujiaojuedechufangquyouwuxiaoqiaomen.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/reyimeishi/rangnipaishoujiaojuedechufangquyouwuxiaoqiaomen.html%27"
                                       tppabs="http://www.meishij.net/reyimeishi/rangnipaishoujiaojuedechufangquyouwuxiaoqiaomen.html">让你拍手叫绝的厨房去油污小窍门</a>
                                </h3></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_footer pngFix">
        <div class="footer_con1 clearfix">
            <p class="text pngFix"><a href="index.htm" tppabs="http://www.meishij.net/" class="footer_homelink"></a>
                中国，最大的菜谱库<strong> 800,000 篇</strong><br/>每月，用户访问数量<strong> 20,000,000 次</strong><br/>
                每年，菜谱被浏览量<strong> 36,000,000,000 次</strong><br/>
                现在，这些数字还在不断的增长着，欢迎您来一起使用美食杰</p>
            <div class="links">
                <ul class="cleearfix">
                    <li class="sina"><a class="img" target="_blank"
                                        href="javascript:if(confirm(%27http://e.weibo.com/meishij  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://e.weibo.com/meishij%27"
                                        tppabs="http://e.weibo.com/meishij"><span>关注：81万</span></a>
                        <p><a target="_blank"
                              href="javascript:if(confirm(%27http://e.weibo.com/meishij  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://e.weibo.com/meishij%27"
                              tppabs="http://e.weibo.com/meishij">点击进入<br/>美食杰官方微博</a></p></li>
                    <li class="tengxun"><a class="img" target="_blank"
                                           href="javascript:if(confirm(%27http://user.qzone.qq.com/613171717  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://user.qzone.qq.com/613171717%27"
                                           tppabs="http://user.qzone.qq.com/613171717"><span>关注：10.3万</span></a>
                        <p><a target="_blank"
                              href="javascript:if(confirm(%27http://user.qzone.qq.com/613171717  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://user.qzone.qq.com/613171717%27"
                              tppabs="http://user.qzone.qq.com/613171717">点击进入<br/>美食杰QQ空间</a></p></li>
                    <li class="weixin"><a target="_blank"
                                          href="javascript:if(confirm(%27http://sj.meishi.cc/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://sj.meishi.cc/%27"
                                          tppabs="http://sj.meishi.cc/" class="img"></a>
                        <p><a target="_blank"
                              href="javascript:if(confirm(%27http://sj.meishi.cc/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://sj.meishi.cc/%27"
                              tppabs="http://sj.meishi.cc/">扫描二维码添加<br/>美食杰为微信好友</a></p></li>
                    <li class="download"><a target="_blank"
                                            href="javascript:if(confirm(%27http://sj.meishi.cc/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://sj.meishi.cc/%27"
                                            tppabs="http://sj.meishi.cc/" class="img"></a>
                        <p><a target="_blank"
                              href="javascript:if(confirm(%27http://sj.meishi.cc/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://sj.meishi.cc/%27"
                              tppabs="http://sj.meishi.cc/">扫描二维码下载<br/>美食杰手机客户端</a></p></li>
                </ul>
            </div>
        </div>
        <div class="footer_con2">
            <dl class="friend_link clearfix">
                <dt>友情链接</dt>
                <dd><a target="_blank" href="index.htm" tppabs="http://www.meishij.net/" title="美食">美食</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://tizhi.meishi.cc/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://tizhi.meishi.cc/%27"
                       tppabs="http://tizhi.meishi.cc/" title="体质测试">体质测试</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://sj.meishi.cc/app.php?to=guanjia  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://sj.meishi.cc/app.php?to=guanjia%27"
                       tppabs="http://sj.meishi.cc/app.php?to=guanjia" title="伊特">伊特</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://gd.qq.com/food/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://gd.qq.com/food/%27"
                       tppabs="http://gd.qq.com/food/" title="大粤网美食">大粤网美食</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://www.9ku.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.9ku.com/%27"
                       tppabs="http://www.9ku.com/" title="9酷音乐网">9酷音乐网</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://baike.hao123.cn/caipu/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://baike.hao123.cn/caipu/%27"
                       tppabs="http://baike.hao123.cn/caipu/" title="123菜谱大全">123菜谱大全</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://life.iqiyi.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://life.iqiyi.com/%27"
                       tppabs="http://life.iqiyi.com/" title="爱奇艺生活">爱奇艺生活</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://www.yue365.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.yue365.com/%27"
                       tppabs="http://www.yue365.com/" title="365音乐网">365音乐网</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://www.mapbar.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.mapbar.com/%27"
                       tppabs="http://www.mapbar.com/" title="图吧">图吧</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://baa.bitauto.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://baa.bitauto.com/%27"
                       tppabs="http://baa.bitauto.com/" title="汽车论坛">汽车论坛</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://food.39.net/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://food.39.net/%27"
                       tppabs="http://food.39.net/" title="39健康饮食">39健康饮食</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://www.qqtn.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.qqtn.com/%27"
                       tppabs="http://www.qqtn.com/" title="QQ下载 ">QQ下载</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://www.meilele.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meilele.com/%27"
                       tppabs="http://www.meilele.com/" title="家具网">家具网</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://chihe.sohu.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://chihe.sohu.com/%27"
                       tppabs="http://chihe.sohu.com/" title="搜狐美食">搜狐美食</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://www.meishichina.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishichina.com/%27"
                       tppabs="http://www.meishichina.com/" title="美食天下">美食天下</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://www.tesecai.cn/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.tesecai.cn/%27"
                       tppabs="http://www.tesecai.cn/" title="特色菜网">特色菜网</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://food.poco.cn/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://food.poco.cn/%27"
                       tppabs="http://food.poco.cn/" title="poco美食网">poco美食网</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://www.zhms.cn/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.zhms.cn/%27"
                       tppabs="http://www.zhms.cn/" title="中华美食网">中华美食网</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://hefei.8684.cn/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://hefei.8684.cn/%27"
                       tppabs="http://hefei.8684.cn/" title="合肥公交网">合肥公交网</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://www.app111.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.app111.com/%27"
                       tppabs="http://www.app111.com/" title="苹果园">苹果园</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://www.canyin88.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.canyin88.com/%27"
                       tppabs="http://www.canyin88.com/" title="红餐微杂志">红餐微杂志</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://bj.fang.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://bj.fang.com/%27"
                       tppabs="http://bj.fang.com/" title="北京搜房网">北京搜房网</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://dg.ganji.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://dg.ganji.com/%27"
                       tppabs="http://dg.ganji.com/" title="东莞赶集网">东莞赶集网</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://www.13914.com/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.13914.com/%27"
                       tppabs="http://www.13914.com/" title="厨师网">厨师网</a></dd>
                <dd><a target="_blank"
                       href="javascript:if(confirm(%27http://www.meishij.net/friendLinks.html  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/friendLinks.html%27"
                       tppabs="http://www.meishij.net/friendLinks.html" title="更多友情链接">更多友情链接</a></dd>
            </dl>
        </div>
        <div class="footer_con3">
            <ul class="clearfix">
                <li><a target="_blank"
                       href="javascript:if(confirm(%27http://www.meishij.net/siteinfo/index.php  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/siteinfo/index.php%27"
                       tppabs="http://www.meishij.net/siteinfo/index.php" title="公司简介">公司简介</a></li>
                <li><a target="_blank"
                       href="javascript:if(confirm(%27http://www.meishij.net/siteinfo/index.php  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/siteinfo/index.php#qywh%27"
                       tppabs="http://www.meishij.net/siteinfo/index.php#qywh" title="企业文化">企业文化</a></li>
                <li><a target="_blank"
                       href="javascript:if(confirm(%27http://www.meishij.net/siteinfo/index.php  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/siteinfo/index.php#gsdt%27"
                       tppabs="http://www.meishij.net/siteinfo/index.php#gsdt" title="公司动态">公司动态</a></li>
                <li><a target="_blank"
                       href="javascript:if(confirm(%27http://www.meishij.net/siteinfo/index.php  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/siteinfo/index.php#mzsm%27"
                       tppabs="http://www.meishij.net/siteinfo/index.php#mzsm" title="免责声明">免责声明</a></li>
                <li><a target="_blank"
                       href="javascript:if(confirm(%27http://www.meishij.net/siteinfo/contact.php  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/siteinfo/contact.php%27"
                       tppabs="http://www.meishij.net/siteinfo/contact.php" title="联系我们">联系我们</a></li>
                <li><a target="_blank"
                       href="javascript:if(confirm(%27http://www.meishij.net/siteinfo/hr.php  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/siteinfo/hr.php%27"
                       tppabs="http://www.meishij.net/siteinfo/hr.php" title="招贤纳士">招贤纳士</a></li>
                <li><a target="_blank"
                       href="javascript:if(confirm(%27http://www.meishij.net/siteinfo/bd.php  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/siteinfo/bd.php%27"
                       tppabs="http://www.meishij.net/siteinfo/bd.php" title="商务合作">商务合作</a></li>
                <li><a target="_blank"
                       href="javascript:if(confirm(%27http://www.meishij.net/siteinfo/maps.php  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/siteinfo/maps.php%27"
                       tppabs="http://www.meishij.net/siteinfo/maps.php" title="网站地图">网站地图</a></li>
                <li><a target="_blank"
                       href="javascript:if(confirm(%27http://www.meishij.net/siteinfo/links.php  \n\nThis file was not retrieved by Teleport Pro, because it was unavailable, or its retrieval was aborted, or the project was stopped too soon.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.meishij.net/siteinfo/links.php%27"
                       tppabs="http://www.meishij.net/siteinfo/links.php" title="友情链接">友情链接</a></li>
                <li><a target="_blank"
                       href="javascript:if(confirm(%27http://sj.meishi.cc/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://sj.meishi.cc/%27"
                       tppabs="http://sj.meishi.cc/" title="美食杰移动APP">美食杰移动APP</a></li>
            </ul>
            <p><a target="_blank"
                  href="javascript:if(confirm(%27http://www.miibeian.gov.cn/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.miibeian.gov.cn/%27"
                  tppabs="http://www.miibeian.gov.cn/" class="gray_a">京ICP证150335号</a>/京公网安备11010802009977 Copyright ©
                2003-2016 MEISHIJ CO.,LTD.</p>
        </div>
    </div>

</div>
<div style="display:none;">
    <script src="/Public/msj/js/jquery.min.js"></script>
    <script>
        $(function () {
            $('.nav ul li').click(function () {
                $(this).addClass('current').siblings().removeClass('current');
            })
            $('.nav ul li').hover(function () {
                $(this).children('.clearfix').show();
            }, function () {
                $(this).children('.clearfix').hide();
            })
        })
    </script>
    
    <script src="/Public/msj/js/jquery.min.js"></script>

</div>
</body>
</html>