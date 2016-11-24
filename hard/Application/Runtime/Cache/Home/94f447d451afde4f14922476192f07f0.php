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
    
    
    <body style=""><!--[if IE 6]>
    <style>
        .ie6_warning {
            width: 100%;
            height: 50px;
            background: #f7efb1;
        }

        .ie6_warning_w {
            width: 990px;
            margin: 0px auto;
            text-align: center;
        }

        .ie6_warning p {
            color: #4a3e04;
            line-height: 32px;
            padding: 9px 0px;
            height: 32px;
        }

        .ie6_warning p span {
            display: inline;
            zoom: 1;
            line-height: 32px;
            height: 32px;
            vertical-align: top;
            padding-right: 10px;
        }

        .ie6_warning p a {
            display: inline;
            zoom: 1;
            height: 32px;
            width: 50px;
            vertical-align: top;
        }

        .ie6_warning p a img {
            display: inline;
            *zoom: 1;
            height: 32px;
            width: 50px;
        }
    </style>
    <![endif]-->
    <div class="adinheader">
        <div class="adinheader_w">
            <div id="_u5jw9vcixtiwvk58ym7ktke29"></div>
            <script charset="utf-8" src="/Public/msj/images/fcmm"></script>
        </div>
    </div>
    <div class="main_search main_search_slideUp pngFix" slideup="1" style="bottom: -56px; padding-top: 9px;"
         id="main_search">
        <div class="main_search_w">
            <div class="searchform_div">
                <form action="http://so.meishi.cc/" target="_blank"><input type="text" class="text" name="q"
                                                                           x-webkit-speech="" autocomplete="off"
                                                                           id="inputString"
                                                                           placeholder="苏式五香熏鱼的做法"><input
                        type="submit" class="submit" value="搜 索"></form>
            </div>
            <span id="searchslideup_btn" class="pngFix" style="background-position:0px -48px;">自动收缩</span>
            <!--        <a href="http://www.meishij.net" class="bottomlogo_60"><img src="http://static.meishij.net/images/bottomlogo_60.png"></a>-->
            <!--		--><!--<span id="searchslideup_btn" class="pngFix"--><!---->自动收缩--&gt;    </div>
    </div>
    <div class="bottom_back_top_top bottom_back_top_top_slideUp" id="bottom_back_top_top"
         style="left: 1169px; display: block; bottom: 20px;"><a
            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" title="返回苏式五香熏鱼的顶部"
            class="backtotop pngFix">回到顶部</a></div>
    <div class="main_w clearfix">
        <div class="main clearfix">
            <ul class="pathstlye1">
                <li><a id="tongji_shouye" href="http://hard.app/Home/Index/index.html">首页</a></li>
                <li> &gt; </li>
                <li><a id="tongji_caipudaquan" href="http://hard.app/Home/Index/lists/id/76.html">家常菜谱</a></li>
                <li> &gt; </li>
                <li>
                    <a id="tongji_toolbar_10270" class="curzt"
                       href="http://hard.app/Home/Index/lists/id/76.html">家常菜</a>
                </li>
            </ul>
            <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><div class="cp_header clearfix">
                    <div class="cp_headerimg_w"><img alt="苏式五香熏鱼的做法" src="<?php echo ($a["thumb"]); ?>"></div>
                    <div class="cp_main_info_w">
                        <div class="info1">
                            <h1 class="title"><a id="tongji_title" title="苏式五香熏鱼的做法"
                                                 href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html"><?php echo ($a["title"]); ?></a>
                            </h1>
                            <div class="erweima_t" id="erweima_t"></div>

                            <style>
                                .cp_main_info_w .info1 .title {
                                    max-width: 288px;
                                    height: 44px;
                                    padding: 28px 0px;
                                    line-height: 44px;
                                    transition: all ease 0.3s;
                                    -webkit-transition: all ease 0.3s;
                                }
                            </style>
                        </div>
                        <div class="info2">
                            <ul class="clearfix">
                                <li class="w127"><strong>工艺</strong><a id="tongji_gy" href="javascript:;"
                                                                       title="苏式五香熏鱼的工艺"
                                                                       class="big">煨</a></li>
                                <li class="w270"><strong>难度</strong>
                                    <div class="processing_w"><span class="icon icon_nd"></span><span
                                            class="processing processing_nd7"></span><a id="tongji_nd"
                                                                                        href="javascript:;"
                                                                                        title="苏式五香熏鱼的难度"
                                                                                        class="small">初中水平</a>
                                    </div>
                                </li>
                                <li class="w270 br0"><strong>人数</strong>
                                    <div class="processing_w"><span class="icon icon_rs"></span><span
                                            class="processing processing_nd12"></span><a id="tongji_rsh"
                                                                                         href="javascript:;"
                                                                                         title="苏式五香熏鱼的人数"
                                                                                         class="small">4人份</a>
                                    </div>
                                </li>
                                <li class="w127 bb0"><strong>口味</strong><a id="tongji_kw" href="javascript:;"
                                                                           title="苏式五香熏鱼的口味"
                                                                           class="big">五香味</a></li>
                                <li class="w270 bb0"><strong>准备时间</strong>
                                    <div class="processing_w"><span class="icon icon_zb"></span><span
                                            class="processing processing_nd13"></span><a id="tongji_zbsj"
                                                                                         href="javascript:;"
                                                                                         title="苏式五香熏鱼的准备时间"
                                                                                         class="small">数小时</a></div>
                                </li>
                                <li class="w270 bb0 br0"><strong>烹饪时间</strong>
                                    <div class="processing_w"><span class="icon icon_pr"></span><span
                                            class="processing processing_nd7"></span><a href="javascript:;"
                                                                                        id="tongji_prsj"
                                                                                        title="苏式五香熏鱼的烹饪时间"
                                                                                        class="small">
                                        &lt;30分钟</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="info3">
                            <div class="user">
                                <a target="_blank" id="tongji_author_img" href="http://i.meishi.cc/cook.php?id=2811207"
                                   class="img"><img
                                        src="/Public/msj/images/t2811207_146435735412769.jpg"><span
                                        class="masker pngFix"></span></a>
                                <div class="info">
                                    <h4>
                                        <a id="tongji_author" target="_blank"
                                           href="http://i.meishi.cc/cook.php?id=2811207">meggy跳舞的苹果</a>
                                        <a target="_blank" class="v_small" href="http://i.meishi.cc/expert/" title="达人"
                                           _hover-ignore="1"></a>
                                    </h4>
                                    <span>菜谱：375　/　关注：15　/　粉丝：6853</span>
                                    <strong>2016-11-14　/　<em id="viewclicknum"></em>人看过</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="cp_body clearfix">
                <div class="cp_body_left">
                    <div class="materials">
                        <p><strong>“</strong><?php echo ($a["content"]); ?><strong>”</strong>
                        </p>
                        <strong class="cpc_h2">用料</strong>
                        <div class="materials_box">
                            <div class="yl zl clearfix">
                                <h3><a href="javascript:;" title="苏式五香熏鱼的主料">主料</a></h3>
                                <ul class="clearfix">
                                    <li class=" bb0"><a target="_blank" href="http://www.meishij.net/%E8%8D%89%E9%B1%BC"
                                                        class="img"><img
                                            src="/Public/msj/images/e814be54ec6e3b870b4fbf7a33239896_60x60.jpg"></a>
                                        <div class="c"><h4><a target="_blank"
                                                              href="http://www.meishij.net/%E8%8D%89%E9%B1%BC">草鱼</a><span>1条</span>
                                        </h4><a href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#"
                                                class="fortb"
                                                data-type="2" biz-keyword="草鱼 鲜" biz-category="50016422" data-style="1"
                                                data-tmpl="290x380" target="_blank"></a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="yl fuliao clearfix">
                                <h3><a href="javascript:;" title="苏式五香熏鱼的辅料">辅料</a></h3>
                                <ul class="clearfix">
                                    <li class=""><h4><a href="javascript:;">腌鱼用生抽</a></h4><span>30克</span><a
                                            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="fortb"
                                            data-type="2" biz-keyword="腌鱼用生抽 鲜" biz-category="50016422" data-style="1"
                                            data-tmpl="290x380" target="_blank"></a></li>
                                    <li class="br0"><h4><a href="javascript:;">腌鱼用酱油</a></h4><span>30克</span><a
                                            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="fortb"
                                            data-type="2" biz-keyword="腌鱼用酱油 鲜" biz-category="50016422" data-style="1"
                                            data-tmpl="290x380" target="_blank"></a></li>
                                    <li class=""><h4><a href="javascript:;">腌鱼用盐</a></h4><span>1克</span><a
                                            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="fortb"
                                            data-type="2" biz-keyword="腌鱼用盐 鲜" biz-category="50016422" data-style="1"
                                            data-tmpl="290x380" target="_blank"></a></li>
                                    <li class="br0"><h4><a href="javascript:;">腌鱼用料酒</a></h4><span>20克</span><a
                                            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="fortb"
                                            data-type="2" biz-keyword="腌鱼用料酒 鲜" biz-category="50016422" data-style="1"
                                            data-tmpl="290x380" target="_blank"></a></li>
                                    <li class=""><h4><a href="javascript:;">腌鱼用生姜</a></h4><span>1块</span><a
                                            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="fortb"
                                            data-type="2" biz-keyword="腌鱼用生姜 鲜" biz-category="50016422" data-style="1"
                                            data-tmpl="290x380" target="_blank"></a></li>
                                    <li class="br0"><h4><a href="javascript:;">熏鱼用生抽</a></h4><span>30克</span><a
                                            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="fortb"
                                            data-type="2" biz-keyword="熏鱼用生抽 鲜" biz-category="50016422" data-style="1"
                                            data-tmpl="290x380" target="_blank"></a></li>
                                    <li class=""><h4><a href="javascript:;">熏鱼用酱油</a></h4><span>20克</span><a
                                            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="fortb"
                                            data-type="2" biz-keyword="熏鱼用酱油 鲜" biz-category="50016422" data-style="1"
                                            data-tmpl="290x380" target="_blank"></a></li>
                                    <li class="br0"><h4><a href="javascript:;">熏鱼用盐</a></h4><span>1克</span><a
                                            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="fortb"
                                            data-type="2" biz-keyword="熏鱼用盐 鲜" biz-category="50016422" data-style="1"
                                            data-tmpl="290x380" target="_blank"></a></li>
                                    <li class=""><h4><a href="javascript:;">熏鱼用冰糖</a></h4><span>15克</span><a
                                            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="fortb"
                                            data-type="2" biz-keyword="熏鱼用冰糖 鲜" biz-category="50016422" data-style="1"
                                            data-tmpl="290x380" target="_blank"></a></li>
                                    <li class="br0"><h4><a href="javascript:;">熏鱼用五香粉</a></h4><span>8克</span><a
                                            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="fortb"
                                            data-type="2" biz-keyword="熏鱼用五香粉 鲜" biz-category="50016422" data-style="1"
                                            data-tmpl="290x380" target="_blank"></a></li>
                                    <li class=""><h4><a href="javascript:;">熏鱼用黑胡椒粉</a></h4><span>2克</span><a
                                            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="fortb"
                                            data-type="2" biz-keyword="熏鱼用黑胡椒粉 鲜" biz-category="50016422" data-style="1"
                                            data-tmpl="290x380" target="_blank"></a></li>
                                    <li class="br0 bb0"><h4><a href="javascript:;">熏鱼用清水</a></h4><span>少许</span><a
                                            href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="fortb"
                                            data-type="2" biz-keyword="熏鱼用清水 鲜" biz-category="50016422" data-style="1"
                                            data-tmpl="290x380" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="measure">
                        <h2 class="cpc_h2">苏式五香熏鱼的做法</h2>
                        <div class="editnew edit">
                            <div class="content clearfix">
                                <em class="step">1.</em>
                                <div class="c">
                                    <p>草鱼去鳞、去鳃、去除内脏及腹内黑腹</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911676748390.jpg"
                                            alt=""></p></div>
                            </div>
                            <div class="content clearfix">
                                <em class="step">2.</em>
                                <div class="c">
                                    <p>头部向下一厘米的地方深切一刀，尾部10公分处切一刀，抽出“腥线”，另一侧也有一根，同样方法抽出</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911676943218.jpg"
                                            alt=""></p></div>
                            </div>
                            <div class="content clearfix">
                                <em class="step">3.</em>
                                <div class="c">
                                    <p>去头去尾，分成三段</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911677100647.jpg"
                                            alt=""></p></div>
                            </div>
                            <div class="content clearfix">
                                <em class="step">4.</em>
                                <div class="c">
                                    <p>将中段切成厚约2厘米的块儿</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911677267102.jpg"
                                            alt=""></p></div>
                            </div>
                            <div class="content clearfix">
                                <em class="step">5.</em>
                                <div class="c">
                                    <p>鱼块放入盆中，倒入生抽、酱油、料酒、盐、姜片</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911677303777.jpg"
                                            alt=""></p></div>
                            </div>
                            <div class="content clearfix">
                                <em class="step">6.</em>
                                <div class="c">
                                    <p>混合均匀，充分入味，腌3小时左右</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911677400259.jpg"
                                            alt=""></p></div>
                            </div>
                            <div class="content clearfix">
                                <em class="step">7.</em>
                                <div class="c">
                                    <p>腌鱼的时候，来做一下熏鱼汁：生抽30克，酱油20克，盐1克，冰糖15克，五香粉8克，黑胡椒粉2克，清水适量</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911677515050.jpg"
                                            alt=""></p></div>
                            </div>
                            <div class="content clearfix">
                                <em class="step">8.</em>
                                <div class="c">
                                    <p>混合后，倒入小锅中，小火煮开5分钟，然后晾凉备用</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911677671572.jpg"
                                            alt=""></p></div>
                            </div>
                            <div class="content clearfix">
                                <em class="step">9.</em>
                                <div class="c">
                                    <p>油锅中多放些油，待油温热至8成时，将腌好的鱼块用厨房用纸或者手布擦干后入油锅中，炸至边缘金黄</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911677729609.jpg"
                                            alt=""></p></div>
                            </div>
                            <div class="content clearfix">
                                <em class="step">10.</em>
                                <div class="c">
                                    <p>将所有的鱼块都炸好</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911677822437.jpg"
                                            alt=""></p></div>
                            </div>
                            <div class="content clearfix">
                                <em class="step">11.</em>
                                <div class="c">
                                    <p>鱼块全部入油锅中，复炸两分钟，鱼块焦香后，捞入大碗中</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911677978856.jpg"
                                            alt=""></p></div>
                            </div>
                            <div class="content clearfix">
                                <em class="step">12.</em>
                                <div class="c">
                                    <p>12. 将熏鱼汁均匀在浇在鱼块上，充分入味后便可食用</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911678004506.jpg"
                                            alt=""></p></div>
                            </div>
                            <div class="content clearfix">
                                <em class="step">13.</em>
                                <div class="c">
                                    <p>很香</p>
                                    <p><img class="conimg"
                                            src="/Public/msj/images/n2811207_147911702873253.jpg"
                                            alt=""></p></div>
                            </div>
                            <p><img style="margin:0 0 0 100px;" class="conimg" border="0"
                                    src="/Public/msj/images/n2811207_147911701728897.jpg">
                            </p>
                            <p><img style="margin:0 0 0 100px;" class="conimg" border="0"
                                    src="/Public/msj/images/n2811207_147911701958024.jpg">
                            </p>
                            <p><img style="margin:0 0 0 100px;" class="conimg" border="0"
                                    src="/Public/msj/images/n2811207_147911702047801.jpg">
                            </p>
                            <p><img style="margin:0 0 0 100px;" class="conimg" border="0"
                                    src="/Public/msj/images/n2811207_147911702159349.jpg">
                            </p>
                            <h2 class="cpc_h2">烹饪技巧</h2>
                            <p style="padding-left:100px;">鱼肉炸后易碎，所以要小心操作；<br>
                                熏鱼汁可以根据自己的口味进行调整，如果喜食辣的，可以放两个干红辣椒同煮；<br>
                                熏鱼汁可多可少，鱼吃完后，鱼汁还可以重新加热用来拌面吃；<br>
                            </p></div>
                        <span class="authors_copy_right"><strong>苏式五香熏鱼的版权归作者所有，没有作者本人的书面许可任何人不得转载或使用其中整体或任何部分内容。</strong><a
                                target="_blank" title="打印苏式五香熏鱼"
                                href="http://www.meishi.cc/print.php?id=1803039">打印菜谱</a></span>
                    </div>
                    <div class="cp_comment">
                        <script type="text/javascript">
                            document.domain = "meishij.net";
                            $(function () {
                                $("#addToFav_con").click(function () {
                                    Alert("", "iframe:http://i.meishi.cc/ajax/add_caidan_new.php?id=1803039&title=苏式五香熏鱼", "600", "415", "false", "", "true", "img");
                                });
                            });
                            function saveComment(obj) {
                                $(obj).ajaxSubmit(function (data) {
                                    alert(data);
                                });
                                return false;
                            }
                            function submit_reply(r_id) {
                                var saytext = $('#text_' + r_id).val();
                                var reply_id = $('#reply_id_' + r_id).val();
                                var news_id = $('#news_id').val();
                                if (saytext) {
                                    $('#text_' + r_id).val('');
                                    $.getScript('http://reply.meishij.net/pl/news.php?c=' + encodeURIComponent(saytext) + '&nid=' + news_id + '&rid=' + reply_id + '&_' + (new Date()).getTime(), function () {
                                    })
                                } else {
                                    alert('请输入内容~');
                                }
                            }
                            function submit_comment() {
                                var saytext = $('#cp_com_textarea').val();
                                var news_id = $('#news_id').val();
                                var cp_com_type = $('#cp_com_type').val();
                                if (saytext) {
                                    $('#cp_com_textarea').val('');
                                    $('#cp_com_textarea').keyup();
                                    $('#cp_com_type').val(0);
                                    $.getScript('http://reply.meishij.net/pl/news.php?c=' + encodeURIComponent(saytext) + '&nid=' + news_id + '&pt=' + cp_com_type + '&_' + (new Date()).getTime(), function () {
                                    })
                                } else {
                                    alert('请输入内容~');
                                }
                            }
                            function get_more_pl(id, page) {
                                $('#newspls').html("<p style=\"text-align:center;padding:30px 0;\"><img src=\"http://www.meishij.net/static/images/loading.gif\" border=0 /></p>");
                                location.href = '#newspls';
                                var orderby = $("#comment_order").val();
                                if (orderby != 'new' && orderby != 'hot') {
                                    orderby = 'new';
                                }

                                $.post('/ajax/get_more_pl_n.php?id=' + id + '&page=' + page, {'orderby': orderby},
                                        function (data) {
                                            if (data != '') {
                                                $('#newspls').html(data);
                                                bind_re();
                                            }
                                        })
                            }
                            function add_fav(id) {
                                $.getScript('http://i.meishi.cc/ajax/add_nfav.php?in=1&obj_id=' + id + '&_' + (new Date()).getTime(), function () {
                                })
                            }
                            function get_onclick(id, classid, from_search) {
                                var js = document.createElement("script");
                                js.language = "javascript";
                                js.src = "http://click.meishij.net/pl/click.php?from_search=" + from_search + "&classid=" + classid + "&id=" + id + "&addclick=1&nr=0&_" + (new Date()).getTime() + "&c=|10075|10270|10217|";
                                //    js.src = "http://click.meishij.net/pl/click.php?from_search="+from_search+"&classid=" + classid + "&id=" + id + "&addclick=1&nr=//";
                                document.body.appendChild(js)
                            }
                            function canshu_error() {
                                alert('参数不合法!');
                            }
                            $(function () {
                                $(".similar_cp img,#listtyle1_w img,.userupload_box img").lazyload({
                                    placeholder: "http://css.meishij.net/n/images/grey.gif",
                                    effect: "fadeIn"
                                });
                                get_onclick(1803039, 1, 0);
                                var h1 = $("#fixedad").offset().top;
                                var h2;
                                var eh = $("#fixedad").height();
                                var h4 = ($("#con_xscp").length > 0 && $("#con_xscp").offset().top) || $("#con_xscp2").offset().top;
                                $(window).scroll(function () {
                                    h2 = $(window).scrollTop();
                                    var h3 = h1 - h2;
                                    if (h3 < 0) {
                                        if ((h4 - h2) > eh) {
                                            $("#fixedad").css({"position": "fixed", "top": "0px"});
                                        } else if ((h4 - h2) < eh) {
                                            $("#fixedad").css({"position": "absolute", "top": "auto", "bottom": "0px"});
                                        }
                                    } else if (h3 > 0) {
                                        $("#fixedad").css({"position": "relative", "top": "0px"});
                                    }
                                });
                                $(".userupload_box li").mouseenter(function () {
                                    var _this = $(this);
                                    _this.find(".zan").show();
                                });
                                $(".userupload_box li").mouseleave(function () {
                                    var _this = $(this);
                                    _this.find(".zan").hide();
                                });
                                $(".userupload_box  .zan").click(function () {
                                    var _this = $(this);
                                    var cid = _this.attr('value');
                                    var flag = _this.hasClass("zaned");
                                    var zan;
                                    if (flag) {
                                        zan = "zaned";
                                    } else {
                                        zan = "zan";
                                    }
                                    var js = document.createElement("script");
                                    js.language = "javascript";
                                    js.src = "http://reply.meishij.net/ajax/dish_zan.php?act=" + zan + "&cid=" + cid + "&_" + (new Date()).getTime();
                                    document.body.appendChild(js)
                                });
                                $("#erweima_t").hover(function () {
                                    $(this).addClass("erweima_t_hover");
                                    $("#ewmbox").show();
                                }, function () {
                                    $(this).removeClass("erweima_t_hover");
                                    $("#ewmbox").hide();
                                });
                                $("#ewmbox").hover(function () {
                                    $(this).show();
                                    $("#erweima_t").addClass("erweima_t_hover");
                                }, function () {
                                    $(this).hide();
                                    $("#erweima_t").removeClass("erweima_t_hover");
                                });
                                var hl = $(".cp_body_left").height();
                                var hr = $(".cp_body_right").height();
                                if (hr > hl) {
                                    $(".cp_body_left").height(hr);
                                }
                                $(document).click(function (e) {
                                    var targetid = $(e.target).attr("id");
                                    if (targetid != undefined && targetid != '') {
                                        $.getScript('http://mcstat.meishij.net/stat.php?p=' + targetid + '&_' + (new Date()).getTime(), function () {
                                        })
                                    }
                                });
                            });
                            $(function () {
                                $("#cp_comlist_tab1").click(function () {
                                    $("#comment_order").val('new');
                                    $(this).siblings().removeClass("current");
                                    $(this).addClass("current");
                                    get_more_pl(1803039, 1);
                                });
                                $("#cp_comlist_tab2").click(function () {
                                    $("#comment_order").val('hot');
                                    $(this).siblings().removeClass("current");
                                    $(this).addClass("current");
                                    get_more_pl(1803039, 1);
                                });
                                $(".zzzzan").live("click", function () {
                                    var _this = $(this);
                                    var news_id = $("#news_id").val();
                                    var plid = _this.attr('plid');

                                    if (_this.children('em').attr("class") == 'con_comlist_zanbtn') {
                                        var zan = 0;
                                    } else if (_this.children('em').attr("class") == 'con_comlist_zanbtned') {
                                        var zan = 1;
                                    } else {
                                        alert('出错了^_^');
                                        return false;
                                    }
                                    var news_pl_zan_url = "http://reply.meishij.net/ajax/news_pl_zan.php";
                                    var cjs = document.createElement("script");
                                    cjs.language = "javascript";
                                    cjs.src = news_pl_zan_url + "?news_id=" + news_id + "&plid=" + plid + "&zan=" + zan;
                                    document.body.appendChild(cjs);
                                });
                            });
                        </script>
                        <a name="pl"></a>
                        <div class="cp_comments_list">
                            <div class="cp_com_form_w clearfix">
                                <a href="javascript:;" class="useravatar"><img
                                        src="/Public/msj/images/q_default.png"></a>

                                <div class="form_w">
                                    <div class="cp_pl_tag" id="cp_com_mask">
                                        <em>给内容一个标签：</em><span class="current" type="3">随意吐槽</span><span
                                            type="1">提问求解</span>
                                    </div>
                                    <form>
                                        <input name="id" type="hidden" id="news_id" value="1803039">
                                        <textarea id="cp_com_textarea" placeholder="想说点什么..."></textarea>
                                        <input type="submit" id="cp_com_submit" value="提交" onclick="submit_comment()"
                                               class="submit">
                                        <input type="hidden" id="cp_com_type">
                                    </form>
                                    <a id="tongji_shangchuancgt"
                                       href="http://reply.meishij.net/create_dish.php?id=1803039"
                                       target="_blank" title="上传苏式五香熏鱼的图片" class="upload_zp_btn">上传成果作品</a>
                                </div>
                            </div>
                            <div class="cp_comlist_tab">
                                <strong>评论排序：</strong>
                                <span class="cp_comlist_tab1 current" id="cp_comlist_tab1">最新</span>
                                <span class="cp_comlist_tab2 " id="cp_comlist_tab2">最热</span>
                                <input type="hidden" id="comment_order" value="new">
                            </div>
                            <div id="newspls">
                                <div class="cp_comlist_w">
                                    <ul class="clearfix">
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=218810"
                                               class="avatar"><img
                                                    src="/Public/msj/images/t218810_142379930730751.jpg">
                                                <h5>鱼的梦</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[随意吐槽]</strong>我家也经常这样做 </p>
                                                <div class="info">
                                        <span>
                                            2016-11-15 16:29:03来自                                                <a
                                                target="_blank" href="http://www.meishij.net/">
                                                    美食杰                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_start">回复</a>
                                                    <span class="zzzzan" id="zzzzan4209413" plid="4209413">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix" style="display:none;">
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php"
                                                          id="pl_3245972">
                                                        <input type="hidden" id="reply_id_3245972" value="3245972">
                                                        <textarea class="re_textarea" placeholder="我也说一句"
                                                                  id="text_3245972"></textarea>
                                                        <input type="button" onclick="submit_reply(&#39;3245972&#39;)"
                                                               class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=2975247"
                                               class="avatar"><img
                                                    src="/Public/msj/images/t2975247_142312699138461.jpg">
                                                <h5>甜盐蜜语</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[提问求解]</strong>这腥线真的不好去除，是不是可以不去啊？ </p>
                                                <div class="info">
                                        <span>
                                            2016-11-15 11:15:15来自                                                <a
                                                target="_blank" href="http://www.meishij.net/">
                                                    美食杰                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_slideUp">收起回复</a>
                                                    <span class="zzzzan" id="zzzzan4206446" plid="4206446">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <a target="_blank"
                                                               href="http://i.meishi.cc/cook.php?id=2811207"
                                                               class="avatar1"><img
                                                                    src="/Public/msj/images/t2811207_146435735412769.jpg"></a>
                                                            <div class="c1">
                                                                <p class="p2">
                                                                    <a target="_blank"
                                                                       href="http://i.meishi.cc/cook.php?id=2811207">meggy跳舞的苹果</a>
                                                                    <a target="_blank" class="v_small"
                                                                       href="http://i.meishi.cc/expert/" title="达人"
                                                                       _hover-ignore="1"></a>
                                                                    :不去也成的 </p>
                                                                <div class="info1"><span>2016-11-15 13:18:27 来自<a
                                                                        target="_blank"
                                                                        href="http://sj.meishi.cc/app.php?to=meishij">美食杰Android客户端</a></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:;" class="saybtn">我也说一句</a>
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php"
                                                          id="pl_3243032">
                                                        <input type="hidden" id="reply_id_3243032" value="3243032">
                                                        <textarea class="re_textarea" placeholder="我也说一句"
                                                                  id="text_3243032"></textarea>
                                                        <input type="button" onclick="submit_reply(&#39;3243032&#39;)"
                                                               class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=212391"
                                               class="avatar"><img
                                                    src="/Public/msj/images/t212391_142379966281606.jpg">
                                                <h5>是调皮不</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[随意吐槽]</strong>亲，你的太好了，我也在努力哦 </p>
                                                <div class="info">
                                        <span>
                                            2016-11-15 10:38:52来自                                                <a
                                                target="_blank" href="http://www.meishij.net/">
                                                    美食杰                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_slideUp">收起回复</a>
                                                    <span class="zzzzan" id="zzzzan4206090" plid="4206090">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <a target="_blank"
                                                               href="http://i.meishi.cc/cook.php?id=2811207"
                                                               class="avatar1"><img
                                                                    src="/Public/msj/images/t2811207_146435735412769.jpg"></a>
                                                            <div class="c1">
                                                                <p class="p2">
                                                                    <a target="_blank"
                                                                       href="http://i.meishi.cc/cook.php?id=2811207">meggy跳舞的苹果</a>
                                                                    <a target="_blank" class="v_small"
                                                                       href="http://i.meishi.cc/expert/" title="达人"
                                                                       _hover-ignore="1"></a>
                                                                    :谢谢亲的鼓励 </p>
                                                                <div class="info1"><span>2016-11-15 13:18:43 来自<a
                                                                        target="_blank"
                                                                        href="http://sj.meishi.cc/app.php?to=meishij">美食杰Android客户端</a></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:;" class="saybtn">我也说一句</a>
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php"
                                                          id="pl_3242689">
                                                        <input type="hidden" id="reply_id_3242689" value="3242689">
                                                        <textarea class="re_textarea" placeholder="我也说一句"
                                                                  id="text_3242689"></textarea>
                                                        <input type="button" onclick="submit_reply(&#39;3242689&#39;)"
                                                               class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=359387"
                                               class="avatar"><img
                                                    src="/Public/msj/images/t359387_145714230209761.jpg">
                                                <h5>暮色影子</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[随意吐槽]</strong>不错不错 </p>
                                                <div class="info">
                                        <span>
                                            2016-11-15 10:10:54来自                                                <a
                                                target="_blank" href="http://www.meishij.net/">
                                                    美食杰                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_slideUp">收起回复</a>
                                                    <span class="zzzzan" id="zzzzan4205781" plid="4205781">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <a target="_blank"
                                                               href="http://i.meishi.cc/cook.php?id=2811207"
                                                               class="avatar1"><img
                                                                    src="/Public/msj/images/t2811207_146435735412769.jpg"></a>
                                                            <div class="c1">
                                                                <p class="p2">
                                                                    <a target="_blank"
                                                                       href="http://i.meishi.cc/cook.php?id=2811207">meggy跳舞的苹果</a>
                                                                    <a target="_blank" class="v_small"
                                                                       href="http://i.meishi.cc/expert/" title="达人"
                                                                       _hover-ignore="1"></a>
                                                                    :谢谢亲 </p>
                                                                <div class="info1"><span>2016-11-15 13:18:58 来自<a
                                                                        target="_blank"
                                                                        href="http://sj.meishi.cc/app.php?to=meishij">美食杰Android客户端</a></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:;" class="saybtn">我也说一句</a>
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php"
                                                          id="pl_3242383">
                                                        <input type="hidden" id="reply_id_3242383" value="3242383">
                                                        <textarea class="re_textarea" placeholder="我也说一句"
                                                                  id="text_3242383"></textarea>
                                                        <input type="button" onclick="submit_reply(&#39;3242383&#39;)"
                                                               class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=192322"
                                               class="avatar"><img
                                                    src="/Public/msj/images/t192322_142380249028948.jpg">
                                                <h5>木有昵称</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[随意吐槽]</strong>喜欢！明天学做一下！ </p>
                                                <div class="info">
                                        <span>
                                            2016-11-15 09:23:28来自                                                <a
                                                target="_blank" href="http://www.meishij.net/">
                                                    美食杰                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_slideUp">收起回复</a>
                                                    <span class="zzzzan" id="zzzzan4205369" plid="4205369">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <a target="_blank"
                                                               href="http://i.meishi.cc/cook.php?id=2811207"
                                                               class="avatar1"><img
                                                                    src="/Public/msj/images/t2811207_146435735412769.jpg"></a>
                                                            <div class="c1">
                                                                <p class="p2">
                                                                    <a target="_blank"
                                                                       href="http://i.meishi.cc/cook.php?id=2811207">meggy跳舞的苹果</a>
                                                                    <a target="_blank" class="v_small"
                                                                       href="http://i.meishi.cc/expert/" title="达人"
                                                                       _hover-ignore="1"></a>
                                                                    :好嘞 </p>
                                                                <div class="info1"><span>2016-11-15 13:19:07 来自<a
                                                                        target="_blank"
                                                                        href="http://sj.meishi.cc/app.php?to=meishij">美食杰Android客户端</a></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:;" class="saybtn">我也说一句</a>
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php"
                                                          id="pl_3241973">
                                                        <input type="hidden" id="reply_id_3241973" value="3241973">
                                                        <textarea class="re_textarea" placeholder="我也说一句"
                                                                  id="text_3241973"></textarea>
                                                        <input type="button" onclick="submit_reply(&#39;3241973&#39;)"
                                                               class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=292201"
                                               class="avatar"><img
                                                    src="/Public/msj/images/t292201_142375652337642.jpg">
                                                <h5>狼魔女</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[随意吐槽]</strong>不错！美食啊，要自己会做。 </p>
                                                <div class="info">
                                        <span>
                                            2016-11-14 23:34:17来自                                                <a
                                                target="_blank" href="http://www.meishij.net/">
                                                    美食杰                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_slideUp">收起回复</a>
                                                    <span class="zzzzan" id="zzzzan4203648" plid="4203648">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <a target="_blank"
                                                               href="http://i.meishi.cc/cook.php?id=2811207"
                                                               class="avatar1"><img
                                                                    src="/Public/msj/images/t2811207_146435735412769.jpg"></a>
                                                            <div class="c1">
                                                                <p class="p2">
                                                                    <a target="_blank"
                                                                       href="http://i.meishi.cc/cook.php?id=2811207">meggy跳舞的苹果</a>
                                                                    <a target="_blank" class="v_small"
                                                                       href="http://i.meishi.cc/expert/" title="达人"
                                                                       _hover-ignore="1"></a>
                                                                    :自己做有乐趣 </p>
                                                                <div class="info1"><span>2016-11-15 13:19:27 来自<a
                                                                        target="_blank"
                                                                        href="http://sj.meishi.cc/app.php?to=meishij">美食杰Android客户端</a></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:;" class="saybtn">我也说一句</a>
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php"
                                                          id="pl_3240266">
                                                        <input type="hidden" id="reply_id_3240266" value="3240266">
                                                        <textarea class="re_textarea" placeholder="我也说一句"
                                                                  id="text_3240266"></textarea>
                                                        <input type="button" onclick="submit_reply(&#39;3240266&#39;)"
                                                               class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listtyle1_page">
                                    <div class="listtyle1_page_w"><a href="javascript:get_more_pl(1803039,1);"
                                                                     class="current">1</a><a
                                            href="javascript:get_more_pl(1803039,2);">2</a><a
                                            href="javascript:get_more_pl(1803039,2);" class="next">下一页</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            window["_BFD"] = window["_BFD"] || {};
            _BFD.BFD_INFO = {
                "title": "苏式五香熏鱼",
                "pic": "http://site.meishij.net/r/207/244/2811207/a2811207_147911657128139.jpg",
                "id": "1803039",
                "url": "http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html",
                "category": [["海鲜", "http://www.meishij.net/chufang/diy/haixian/"], ["益智补脑", "http://www.meishij.net/yaoshanshiliao/gongnengxing/yizhibunao/"], ["家常菜", "http://www.meishij.net/chufang/diy/jiangchangcaipu/"]],
                "tag": [],
                "author": "meggy跳舞的苹果",
                "pinglun": "18",
                "renqi": "272",
                "step": "13步",
                "gongyi": "煨",
                "nandu": "初中水平",
                "renshu": "4人份",
                "kouwei": "五香味",
                "zbshijian": "数小时",
                "prshijian": "<30分钟",
                "page_type": "detail"
            };
            window["_BFD"] = window["_BFD"] || {};
            _BFD.client_id = "Cmeishijie";
            _BFD.script = document.createElement("script");
            _BFD.script.type = "text/javascript";
            _BFD.script.async = true;
            _BFD.script.charset = "utf-8";
            _BFD.script.src = (('https:' == document.location.protocol ? 'https://ssl-static1' : 'http://static1') + '.baifendian.com/service/meishijie/meishijie.js');
            document.getElementsByTagName("head")[0].appendChild(_BFD.script);</script>
        <script>window._bd_share_config = {
            common: {
                bdSnsKey: {"tsina": "3274300248"},
                bdText: '推荐一道苏式五香熏鱼，做法真的很简单哦，我在家里试过了，很好吃。（分享自 @美食杰网 ）',
                bdDesc: '',
                bdUrl: 'http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html',
                bdPic: 'http://site.meishij.net/r/207/244/2811207/s2811207_147911657128139.jpg',
                bdMiniList: ['mshare', 'qzone', 'tsina', 'tqq', 'huaban', 'renren', 'weixin', 'kaixin001', 'douban', 'tsohu', 'bdysc', 'sohu', 't163', 'meilishuo', 'mogujie', 'tfh', 'fx', 'youdao']
            },
            share: [{"bdSize": 16}],
            selectShare: [{"bdselectMiniList": ['qzone', 'tsina', 'douban', 'tqq', 'renren']}]
        }
        with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
        <div style="display:none;"></div>
        <script>
            (function () {
                var s = "_" + Math.random().toString(36).slice(2);
                document.write('<div id="' + s + '"></div>');
                (window.slotbydup = window.slotbydup || []).push({
                    id: '1026794',
                    container: s,
                    size: '120,270',
                    display: 'float'
                });
            })();
        </script>
        <div id="_fnx0d3v2kz7145e94zvax4unmi"></div>
        <script charset="utf-8" src="/Public/msj/images/fcmm(8)"></script>
    </div>
    <div style="margin:0 auto;padding-top:20px;width:990px;">
        <script>
            (function () {
                var s = "_" + Math.random().toString(36).slice(2);
                document.write('<div id="' + s + '"></div>');
                (window.slotbydup = window.slotbydup || []).push({
                    id: '759776',
                    container: s,
                    size: '990,90',
                    display: 'inlay-fix'
                });
            })();
        </script>
        <div id="_5pmm29nyj6pch0fitbc1t9be29"></div>
        <script charset="utf-8" src="/Public/msj/images/fcmm(9)"></script>
        <script type="text/javascript">
            var cpro_id = "u2396030";
            (window["cproStyleApi"] = window["cproStyleApi"] || {})[cpro_id] = {
                at: "3",
                rsi0: "990",
                rsi1: "90",
                pat: "6",
                tn: "baiduCustNativeAD",
                rss1: "#FFFFFF",
                conBW: "1",
                adp: "1",
                ptt: "0",
                titFF: "%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91",
                titFS: "14",
                rss2: "#000000",
                titSU: "0",
                ptbg: "90",
                piw: "0",
                pih: "0",
                ptp: "0"
            }
        </script>
        <script src="/Public/msj/images/c.js.下载" type="text/javascript"></script>
    </div>
    <iframe allowtransparency="true" id="add_speed_bfd" frameborder="0" scrolling="no"
            style="height: 0px; width: 0px; float: none; position: absolute; overflow: hidden; z-index: 333333; margin: 0px; padding: 0px; border: 0px none; background: none;"
            src="/Public/msj/images/saved_resource(3).html"></iframe>
    <div class="main_footer pngFix">
        <div class="footer_con1 clearfix">
            <p class="text pngFix"><a href="http://www.meishij.net/" class="footer_homelink"></a>
                中国，最大的菜谱库<strong> 800,000 篇</strong><br>每月，用户访问数量<strong> 20,000,000 次</strong><br>
                每年，菜谱被浏览量<strong> 36,000,000,000 次</strong><br>
                现在，这些数字还在不断的增长着，欢迎您来一起使用美食杰</p>
            <div class="links">
                <ul class="cleearfix">
                    <li class="sina"><a class="img" target="_blank"
                                        href="http://e.weibo.com/meishij"><span>关注：81万</span></a>
                        <p><a target="_blank" href="http://e.weibo.com/meishij">点击进入<br>美食杰官方微博</a></p></li>
                    <li class="tengxun"><a class="img" target="_blank" href="http://user.qzone.qq.com/613171717"><span>关注：10.3万</span></a>
                        <p><a target="_blank" href="http://user.qzone.qq.com/613171717">点击进入<br>美食杰QQ空间</a></p></li>
                    <li class="weixin"><a target="_blank" href="http://sj.meishi.cc/" class="img"></a>
                        <p><a target="_blank" href="http://sj.meishi.cc/">扫描二维码添加<br>美食杰为微信好友</a></p></li>
                    <li class="download"><a target="_blank" href="http://sj.meishi.cc/" class="img"></a>
                        <p><a target="_blank" href="http://sj.meishi.cc/">扫描二维码下载<br>美食杰手机客户端</a></p></li>
                </ul>
            </div>
        </div>
        <div class="footer_con3">
            <ul class="clearfix">
                <li><a target="_blank" href="http://www.meishij.net/siteinfo/index.php" title="公司简介">公司简介</a></li>
                <li><a target="_blank" href="http://www.meishij.net/siteinfo/index.php#qywh" title="企业文化">企业文化</a></li>
                <li><a target="_blank" href="http://www.meishij.net/siteinfo/index.php#gsdt" title="公司动态">公司动态</a></li>
                <li><a target="_blank" href="http://www.meishij.net/siteinfo/index.php#mzsm" title="免责声明">免责声明</a></li>
                <li><a target="_blank" href="http://www.meishij.net/siteinfo/contact.php" title="联系我们">联系我们</a></li>
                <li><a target="_blank" href="http://www.meishij.net/siteinfo/hr.php" title="招贤纳士">招贤纳士</a></li>
                <li><a target="_blank" href="http://www.meishij.net/siteinfo/bd.php" title="商务合作">商务合作</a></li>
                <li><a target="_blank" href="http://www.meishij.net/siteinfo/maps.php" title="网站地图">网站地图</a></li>
                <li><a target="_blank" href="http://www.meishij.net/siteinfo/links.php" title="友情链接">友情链接</a></li>
                <li><a target="_blank" href="http://sj.meishi.cc/" title="美食杰移动APP">美食杰移动APP</a></li>
            </ul>
            <p><a target="_blank" href="http://www.miibeian.gov.cn/" class="gray_a">京ICP证150335号</a>/京公网安备11010802009977
                Copyright © 2003-2016 MEISHIJ CO.,LTD.</p>
        </div>
    </div>
    <div style="display:none;">
        <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cspan id='cnzz_stat_icon_1259001544'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/stat.php%3Fid%3D1259001544' type='text/javascript'%3E%3C/script%3E"));</script>
        <span id="cnzz_stat_icon_1259001544"><a href="http://www.cnzz.com/stat/website.php?web_id=1259001544"
                                                target="_blank" title="站长统计">站长统计</a></span>
        <script src="/Public/msj/images/stat.php" type="text/javascript"></script>
        <script src="/Public/msj/images/core.php" charset="utf-8"
                type="text/javascript"></script>
    </div>
    <script src="/Public/msj/images/click.php"></script>
    <iframe frameborder="0" id="bdSharePopup_selectshare1479304004024bg" class="bdselect_share_bg" style="display:none;"
            src="/Public/msj/images/saved_resource(4).html"></iframe>
    <div id="bdSharePopup_selectshare1479304004024box" style="display: none;" share-type="selectshare"
         class="bdselect_share_box" data-bd-bind="1479304004023">
        <div class="selectshare-mod-triangle">
            <div class="triangle-border"></div>
            <div class="triangle-inset"></div>
        </div>
        <div class="bdselect_share_head"><span>分享到</span><a
                href="http://www.baidu.com/s?wd=%E6%8E%A8%E8%8D%90%E4%B8%80%E9%81%93%E8%8B%8F%E5%BC%8F%E4%BA%94%E9%A6%99%E7%86%8F%E9%B1%BC%EF%BC%8C%E5%81%9A%E6%B3%95%E7%9C%9F%E7%9A%84%E5%BE%88%E7%AE%80%E5%8D%95%E5%93%A6%EF%BC%8C%E6%88%91%E5%9C%A8%E5%AE%B6%E9%87%8C%E8%AF%95%E8%BF%87%E4%BA%86%EF%BC%8C%E5%BE%88%E5%A5%BD%E5%90%83%E3%80%82%EF%BC%88%E5%88%86%E4%BA%AB%E8%87%AA%20@%E7%BE%8E%E9%A3%9F%E6%9D%B0%E7%BD%91%20%EF%BC%89&amp;tn=SE_hldp08010_vurs2xrp"
                class="bdselect_share_dialog_search" target="_blank"><i class="bdselect_share_dialog_search_i"></i><span
                class="bdselect_share_dialog_search_span">百度一下</span></a><a class="bdselect_share_dialog_close"></a>
        </div>
        <div class="bdselect_share_content">
            <ul class="bdselect_share_list bdshare-button-style0-16">
                <div class="bdselect_share_partners"><a href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#"
                                                        class="bds_mshare" data-cmd="mshare"></a><a
                        href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="bds_qzone"
                        data-cmd="qzone"></a><a href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#"
                                                class="bds_tsina" data-cmd="tsina"></a><a
                        href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="bds_bdysc"
                        data-cmd="bdysc"></a></div>
                <a href="http://www.meishij.net/zuofa/sushiwuxiangxunyu_1.html#" class="bds_more" data-cmd="more"></a>
            </ul>
        </div>
    </div>
    </body>

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
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script charset="utf-8" src="/Public/msj/js/keyword.js.下载" async=""
            mod_name="tkapi-plugin-keyword"></script>
    <script charset="utf-8" src="/Public/msj/js/plugin.js.下载" async=""
            mod_name="tkapi-plugin"></script>
    <script charset="utf-8" src="/Public/msj/js/main.js.下载" async=""
            mod_name="tkapi-main"></script>
    <script src="/ex" async=""></script>
    <script charset="gbk" async="" src="/Public/msj/js/tkapi.js.下载"></script>
    <!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8; charset=UTF-8" />-->
    <title>苏式五香熏鱼的做法_家常苏式五香熏鱼的做法【图】苏式五香熏鱼的家常做法大全怎么做好吃视频 - 美食杰</title>
    <meta name="keywords"
          content="">
    <meta name="description"
          content="">
    <meta content="www.meishij.net" name="author">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script src="/Public/msj/js/hm.js.下载"></script>
    <script>
        var _hmt = _hmt || [];
    </script>
    <!--[if lt IE 7]>
    <script>try {
        document.execCommand('BackgroundImageCache', false, true);
    } catch (e) {
    }</script><![endif]-->
    <!--[if IE 6]>
    <script type="text/javascript" src="http://css.meishij.net/n/js/EvPng.js"></script>
    <script language="javascript" type="text/javascript">EvPNG.fix(".pngFix,.pngFix:hover");</script><![endif]-->
    <link rel="stylesheet" type="text/css" media="all"
          href="/Public/msj/css/ss_base.css">
    <link rel="stylesheet" type="text/css" media="all"
          href="/Public/msj/css/main.css">
    <link rel="stylesheet" type="text/css" media="all"
          href="/Public/msj/css/list.css">
    <link rel="stylesheet" type="text/css" media="all"
          href="/Public/msj/css/content.css">
    <link rel="stylesheet" type="text/css" media="all"
          href="/tipswindown.css">
    <script type="text/javascript" src="/Public/msj/js/j.m.js.下载"></script>
    <script type="text/javascript" src="/Public/msj/js/main.js(1).下载"></script>
    <script type="text/javascript" src="/Public/msj/js/list.js.下载"></script>
    <script type="text/javascript" src="/Public/msj/js/lazyload.js.下载"></script>
    <script type="text/javascript"
            src="/Public/msj/js/tipswindown.js.下载"></script>
    <script src="/Public/msj/js/ds.js.下载"></script>
    <script>var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?01dd6a7c493607e115255b7e72de5f40";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
    <script type="text/javascript" async="" charset="utf-8"
            src="/Public/msj/js/meishijie.js.下载"></script>
    <script src="/Public/msj/js/share.js.下载"></script>
    <link href="/Public/msj/css/bfd_style.css" rel="stylesheet" type="text/css">
    <script id="" src="/StdID.do" charset="utf-8"></script>
    <script src="/Public/msj/js/bcore.min.js.下载"
            type="text/javascript"></script>
    <script src="/Public/msj/js/Visit.do" charset="utf-8"></script>
    <script src="/Public/msj/js/AddItem.do" charset="utf-8"></script>
    <script src="/Public/msj/js/VisitCat.do" charset="utf-8"></script>
    <script src="/Public/msj/js/AddCat.do" charset="utf-8"></script>
    <script src="/Public/msj/js/P.do" charset="utf-8"></script>
    <script src="/PageView.do" charset="utf-8"></script>
    <link rel="stylesheet" href="/Public/msj/css/share_style0_16.css">
    <link rel="stylesheet" href="/Public/msj/css/share_popup.css">
    <link rel="stylesheet" href="/Public/msj/css/select_share.css">

</div>
</body>
</html>