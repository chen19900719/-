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
    
    <link rel="stylesheet" href="/Public/msj/css/share_style0_16.css">
    <link rel="stylesheet" type="text/css" media="all" href="/Public/msj/css/ss_base.css">
    <link rel="stylesheet" type="text/css" media="all" href="/Public/msj/css/main.css">
    <link rel="stylesheet" type="text/css" media="all" href="/Public/msj/css/list.css">
    <link rel="stylesheet" type="text/css" media="all" href="/Public/msj/css/content.css">
    <link rel="stylesheet" type="text/css" media="all" href="/Public/msj/css/tipswindown.css">
    <link href="/Public/msj/css/bfd_style.css" rel="stylesheet" type="text/css">

    

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


    <div class="main_search main_search_slideUp pngFix" slideup="1" style="_display:none;" id="main_search">
        <div class="main_search_w">
            <div class="searchform_div">
                <form action="http://so.meishi.cc/" target="_blank"><input type="text" class="text" name="q"
                                                                           x-webkit-speech="" autocomplete="off"
                                                                           id="inputString"
                                                                           placeholder="辟谣：蘑菇茄子同食会中毒？的做法"><input
                        type="submit" class="submit" value="搜 索"></form>
            </div>
            <span id="searchslideup_btn" class="pngFix" style="background-position:0px -48px;">自动收缩</span>
            <!--        <a href="http://www.meishij.net" class="bottomlogo_60"><img src="http://static.meishij.net/images/bottomlogo_60.png"></a>-->
            <!--		--><!--<span id="searchslideup_btn" class="pngFix"--><!---->自动收缩--&gt;    </div>
    </div>
    <div class="bottom_back_top_top bottom_back_top_top_slideUp" id="bottom_back_top_top"
         style="left: 1169px; display: block;"><a
            href="http://www.meishij.net/changshi/biyaomoguqiezitongshihuizhongdu.html#" title="返回辟谣：蘑菇茄子同食会中毒？的顶部"
            class="backtotop pngFix">回到顶部</a></div>
    <div class="main_w clearfix">
        <div class="main clearfix">
            <ul class="pathstlye1">
                <li><a id="tongji_shouye" href="http://www.meishij.net/">首页</a></li>
                <li> &gt; </li>
                <li><a href="http://www.meishij.net/jiankang/">健康</a></li>
                <li> &gt; </li>
                <li><a id="tongji_toolbar_10019" class="curzt"
                       href="http://www.meishij.net/jiankang/changshi/">#饮食小常识#</a>
                    <a id="tongji_toolbar_10350" class="curzt"
                       href="http://www.meishij.net/jiankang/shipinanquan/">#食品安全#</a> <a id="tongji_toolbar_10376"
                                                                                          class="curzt"
                                                                                          href="http://www.meishij.net/jiankang/yinshixinwen/">#饮食新闻#</a>
                </li>
            </ul>
            <div class="cp_body clearfix">
                <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><div class="cp_body_left">
                    <div class="artical_title_w">
                        <h1 class="title"><a title="辟谣：蘑菇茄子同食会中毒？"
                                             href="http://www.meishij.net/changshi/biyaomoguqiezitongshihuizhongdu.html"><?php echo ($a["title"]); ?></a>
                        </h1>
                        <div class="user"><a target="_blank" href="http://i.meishi.cc/cook.php?id=8472853"
                                             class="img"><img
                                src="/Public/msj/images/t8472853_147442267136995.jpg"><span
                                class="masker pngFix"></span></a>
                            <div class="info">
                                <h4>作者：<a target="_blank" href="http://i.meishi.cc/cook.php?id=8472853">诸葛白少侠</a>
                                </h4>
                                <strong>2016-11-11　/　<em id="viewclicknum"></em>人看过　/　<a
                                        href="http://www.meishij.net/changshi/biyaomoguqiezitongshihuizhongdu.html#pl">评论（7）</a></strong>
                            </div>
                            <span class="favbtns"><a href="javascript:add_fav(1802386)" title="辟谣：蘑菇茄子同食会中毒？的做法"
                                                     class="addToFav_con" id="addToFav_con">收藏<span
                                    id="f_num"></span></a><div
                                    id="bdshare" class="bdshare_b"><div
                                    class="bdsharebuttonbox bdshare-button-style0-16"
                                    data-tag="share_1"
                                    style="height:40px;width:162px;background:#f5f5f5;position:relative;float:left;line-height:40px;"
                                    data-bd-bind="1479699186780"><a class="bds_more"
                                                                    data-cmd="more"
                                                                    style="display:block;position:absolute;left:0px;top:0px;height:38px;width:162px;text-indent:-9999px;background:none;margin:0px;padding:0px;border:1px solid #e5e5e5;border-left:0px;">更多</a><span
                                    style="display:block;height:40px;font-size:14px;font-weight:bold;color:#999;width:78px;text-align:right;float:left;padding:0px;line-height:40px;">分享到：</span><a
                                    class="bds_sqq" data-cmd="sqq" style="margin-top:12px;position:relative;"
                                    title="分享到QQ好友"></a><a class="bds_qzone" data-cmd="qzone"
                                                           href="http://www.meishij.net/changshi/biyaomoguqiezitongshihuizhongdu.html#"
                                                           style="margin-top:12px;position:relative;"
                                                           title="分享到QQ空间"></a><a
                                    class="bds_tsina" data-cmd="tsina" style="margin-top:12px;position:relative;"
                                    title="分享到新浪微博"></a></div></div></span>
                        </div>
                    </div>
                    <div class="measure">
                        <div class="edit editwz" data-plugin="keyword">
                            <p style="text-align: center;"><img class="conimg" alt="辟谣：蘑菇茄子同食会中毒？hK.jpg"
                                                                src="<?php echo ($a["thumb"]); ?>"
                                                                width="600" height="450"></p>
                            <p><?php echo ($a["content"]); ?></p>
                           </div>
                        <span class="authors_copy_right"><strong>辟谣：蘑菇茄子同食会中毒？的版权归作者所有，没有作者本人的书面许可任何人不得转载或使用其中整体或任何部分内容。</strong><a
                                target="_blank" title="打印辟谣：蘑菇茄子同食会中毒？"
                                href="http://www.meishi.cc/print.php?id=1802386">打印菜谱</a></span>
                    </div>

                    <div class="cp_comment">
                        <script type="text/javascript">
                            document.domain = "meishij.net";
                            $(function () {
                                $("#addToFav_con").click(function () {
                                    Alert("", "iframe:http://i.meishi.cc/ajax/add_caidan_new.php?id=1802386&title=辟谣：蘑菇茄子同食会中毒？", "600", "415", "false", "", "true", "img");
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
                                js.src = "http://click.meishij.net/pl/click.php?from_search=" + from_search + "&classid=" + classid + "&id=" + id + "&addclick=1&nr=0&_" + (new Date()).getTime() + "&c=|10376|10019|10350|";
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
                                get_onclick(1802386, 1, 0);
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
                                    get_more_pl(1802386, 1);
                                });
                                $("#cp_comlist_tab2").click(function () {
                                    $("#comment_order").val('hot');
                                    $(this).siblings().removeClass("current");
                                    $(this).addClass("current");
                                    get_more_pl(1802386, 1);
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
                                        <input name="id" type="hidden" id="news_id" value="1802386">
                                        <textarea id="cp_com_textarea" placeholder="想说点什么..."></textarea>
                                        <input type="submit" id="cp_com_submit" value="提交" onclick="submit_comment()"
                                               class="submit">
                                        <input type="hidden" id="cp_com_type">
                                    </form>
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
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=8946917"
                                               class="avatar"><img
                                                    src="/Public/msj/images/t8946917_147834861043486.jpg">
                                                <h5>杰米7444</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[提问求解]</strong>很好 </p>
                                                <div class="info">
                                        <span>
                                            2016-11-19 09:34:28来自                                                <a
                                                target="_blank" href="http://sj.meishi.cc/sj.php?to=wap">
                                                    美食杰Wap站                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_start">回复</a>
                                                    <span class="zzzzan" id="zzzzan4237911" plid="4237911">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix" style="display:none;">
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php"
                                                          id="pl_3274263">
                                                        <input type="hidden" id="reply_id_3274263" value="3274263">
                                                        <textarea class="re_textarea" placeholder="我也说一句"
                                                                  id="text_3274263"></textarea>
                                                        <input type="button" onclick="submit_reply(&#39;3274263&#39;)"
                                                               class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=8449132"
                                               class="avatar"><img
                                                    src="/Public/msj/images/t8449132_147418325624771.jpg">
                                                <h5>故乡路</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[提问求解]</strong>哦，这回知道了 </p>
                                                <div class="info">
                                        <span>
                                            2016-11-14 07:11:20来自                                                <a
                                                target="_blank" href="http://sj.meishi.cc/sj.php?to=wap">
                                                    美食杰Wap站                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_start">回复</a>
                                                    <span class="zzzzan" id="zzzzan4195599" plid="4195599">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix" style="display:none;">
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php"
                                                          id="pl_3232275">
                                                        <input type="hidden" id="reply_id_3232275" value="3232275">
                                                        <textarea class="re_textarea" placeholder="我也说一句"
                                                                  id="text_3232275"></textarea>
                                                        <input type="button" onclick="submit_reply(&#39;3232275&#39;)"
                                                               class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=8564653"
                                               class="avatar"><img
                                                    src="/Public/msj/images/tx2_3.png"><h5>Zoy(来自</h5>
                                            </a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[随意吐槽]</strong>不会 </p>
                                                <div class="info">
                                        <span>
                                            2016-11-12 14:36:51来自                                                <a
                                                target="_blank" href="http://sj.meishi.cc/app.php?to=meishij">
                                                    美食杰Android客户端                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_start">回复</a>
                                                    <span class="zzzzan" id="zzzzan4183702" plid="4183702">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix" style="display:none;">
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php"
                                                          id="pl_3220431">
                                                        <input type="hidden" id="reply_id_3220431" value="3220431">
                                                        <textarea class="re_textarea" placeholder="我也说一句"
                                                                  id="text_3220431"></textarea>
                                                        <input type="button" onclick="submit_reply(&#39;3220431&#39;)"
                                                               class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix commentslist_li">
                                            <a target="_blank" href="http://i.meishi.cc/cook.php?id=8845488"
                                               class="avatar"><img
                                                    src="/Public/msj/images/t8845488_147718028629280.jpg">
                                                <h5>洪荒之力</h5></a>
                                            <div class="c">
                                                <p class="p1">
                                                    <strong>[随意吐槽]</strong>不会 </p>
                                                <div class="info">
                                        <span>
                                            2016-11-12 06:06:13来自                                                <a
                                                target="_blank" href="http://sj.meishi.cc/app.php?to=meishij">
                                                    美食杰Android客户端                                                </a>
                                                                                    </span>
                                                    <a href="javascript:;" class="re re_slideUp">收起回复</a>
                                                    <span class="zzzzan" id="zzzzan4179886" plid="4179886">
                                            <em class="con_comlist_zanbtn"></em>
                                            <strong>0</strong>
                                        </span>
                                                </div>

                                                <div class="comscoms clearfix">
                                                    <ul>
                                                        <li class="clearfix">
                                                            <a target="_blank"
                                                               href="http://i.meishi.cc/cook.php?id=8932299"
                                                               class="avatar1"><img
                                                                    src="/Public/msj/images/tx2_4.png"></a>
                                                            <div class="c1">
                                                                <p class="p2">
                                                                    <a target="_blank"
                                                                       href="http://i.meishi.cc/cook.php?id=8932299">杰米8932299</a>
                                                                    :阿达 </p>
                                                                <div class="info1"><span>2016-11-15 19:19:21 来自<a
                                                                        target="_blank"
                                                                        href="http://www.meishij.net/">美食杰</a></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="clearfix">
                                                            <a target="_blank"
                                                               href="http://i.meishi.cc/cook.php?id=8929570"
                                                               class="avatar1"><img
                                                                    src="/Public/msj/images/tx2_7.png"></a>
                                                            <div class="c1">
                                                                <p class="p2">
                                                                    <a target="_blank"
                                                                       href="http://i.meishi.cc/cook.php?id=8929570">SilenceH</a>
                                                                    :食品安全值得关注 </p>
                                                                <div class="info1"><span>2016-11-13 19:40:37 来自<a
                                                                        target="_blank"
                                                                        href="http://www.meishij.net/">美食杰</a></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:;" class="saybtn" _hover-ignore="1">我也说一句</a>
                                                    <form class="re_form" action="http://reply.meishij.net/pl/news.php"
                                                          id="pl_3216634">
                                                        <input type="hidden" id="reply_id_3216634" value="3216634">
                                                        <textarea class="re_textarea" placeholder="我也说一句"
                                                                  id="text_3216634"></textarea>
                                                        <input type="button" onclick="submit_reply(&#39;3216634&#39;)"
                                                               class="re_submit" value="回复">
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <script type="text/javascript">
            (function (win, doc) {
                var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0];
                if (!win.alimamatk_show) {
                    s.charset = "gbk";
                    s.async = true;
                    s.src = "http://a.alimama.cn/tkapi.js";
                    s.kslite = "";
                    h.insertBefore(s, h.firstChild);
                }
                var o = {
                    pid: "mm_10008787_2640448_11521435",
                    unid: "",
                    rd: 2,
                    appkey: "",
                    plugins: [{name: "keyword"}]
                };
                win.alimamatk_onload = win.alimamatk_onload || [];
                win.alimamatk_onload.push(o);
            })(window, document);
        </script>
        <script type="text/javascript">
            window["_BFD"] = window["_BFD"] || {};
            _BFD.BFD_INFO = {
                "title": "辟谣：蘑菇茄子同食会中毒？",
                "pic": "http://images.meishij.net/p/20161111/0ff2b10febaed9eaca2bdf12968c2ff7_150x150.jpg",
                "id": "1802386",
                "url": "http://www.meishij.net/changshi/biyaomoguqiezitongshihuizhongdu.html",
                "category": [["饮食小常识", "http://www.meishij.net/jiankang/changshi/"], ["食品安全", "http://www.meishij.net/jiankang/shipinanquan/"], ["饮食新闻", "http://www.meishij.net/jiankang/yinshixinwen/"]],
                "tag": [],
                "author": "诸葛白少侠",
                "pinglun": "7",
                "renqi": "3239",
                "step": "",
                "gongyi": "",
                "nandu": "",
                "renshu": "",
                "kouwei": "",
                "zbshijian": "",
                "prshijian": "",
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
                bdText: '推荐一篇文章【辟谣：蘑菇茄子同食会中毒？】，很有用。（分享自 @美食杰网 ）',
                bdDesc: '',
                bdUrl: 'http://www.meishij.net/changshi/biyaomoguqiezitongshihuizhongdu.html',
                bdPic: 'http://images.meishij.net/p/20161111/0ff2b10febaed9eaca2bdf12968c2ff7_150x150.jpg',
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
        <div id="_7nej24m7s1ssl7yg0cr9uj714i"></div>
        <script charset="utf-8" src="/Public/msj/images/ccem(9)"></script>
    </div>
    <iframe allowtransparency="true" id="add_speed_bfd" frameborder="0" scrolling="no"
            style="height: 0px; width: 0px; float: none; position: absolute; overflow: hidden; z-index: 333333; margin: 0px; padding: 0px; border: 0px none; background: none;"
            src="/Public/msj/images/saved_resource(3).html"></iframe>
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
        <div id="_9yfianmaisblupm86quu6usor"></div>
        <script charset="utf-8" src="/Public/msj/images/ccem(10)"></script>
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
        <div id="BAIDU_SSP__wrapper_u2396030_0"></div>
    </div>
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
        <script src="/Public/msj/images/core.php" charset="utf-8" type="text/javascript"></script>
    </div>
    <script src="/Public/msj/images/click.php"></script>
    <iframe frameborder="0" id="bdSharePopup_selectshare1479699186788bg" class="bdselect_share_bg" style="display:none;"
            src="/Public/msj/images/saved_resource(4).html"></iframe>
    <div id="bdSharePopup_selectshare1479699186788box" style="display:none;" share-type="selectshare"
         class="bdselect_share_box" data-bd-bind="1479699186787">
        <div class="selectshare-mod-triangle">
            <div class="triangle-border"></div>
            <div class="triangle-inset"></div>
        </div>
        <div class="bdselect_share_head"><span>分享到</span><a
                href="http://www.baidu.com/s?wd=%E6%8E%A8%E8%8D%90%E4%B8%80%E7%AF%87%E6%96%87%E7%AB%A0%E3%80%90%E8%BE%9F%E8%B0%A3%EF%BC%9A%E8%98%91%E8%8F%87%E8%8C%84%E5%AD%90%E5%90%8C%E9%A3%9F%E4%BC%9A%E4%B8%AD%E6%AF%92%EF%BC%9F%E3%80%91%EF%BC%8C%E5%BE%88%E6%9C%89%E7%94%A8%E3%80%82%EF%BC%88%E5%88%86%E4%BA%AB%E8%87%AA%20@%E7%BE%8E%E9%A3%9F%E6%9D%B0%E7%BD%91%20%EF%BC%89&amp;tn=SE_hldp08010_vurs2xrp"
                class="bdselect_share_dialog_search" target="_blank"><i class="bdselect_share_dialog_search_i"></i><span
                class="bdselect_share_dialog_search_span">百度一下</span></a><a class="bdselect_share_dialog_close"></a>
        </div>
        <div class="bdselect_share_content">
            <ul class="bdselect_share_list bdshare-button-style0-16">
                <div class="bdselect_share_partners"></div>
                <a href="http://www.meishij.net/changshi/biyaomoguqiezitongshihuizhongdu.html#" class="bds_more"
                   data-cmd="more"></a></ul>
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
    <script type="text/javascript" async="" src="/Public/msj/css/ccem"></script>
    <script charset="utf-8" src="/Public/msj/css/keyword.js.下载" async=""
            mod_name="tkapi-plugin-keyword"></script>
    <script charset="utf-8" src="/Public/msj/css/plugin.js.下载" async=""
            mod_name="tkapi-plugin"></script>
    <script charset="utf-8" src="/Public/msj/css/main.js.下载" async="" mod_name="tkapi-main"></script>
    <script src="/Public/msj/css/ex" async=""></script>
    <script charset="gbk" async="" src="/Public/msj/css/tkapi.js.下载"></script>
    <script type="text/javascript" charset="gbk" id="tanx-s-mm_10008787_2640448_10277767" async=""
            src="/Public/msj/css/ex(1)"></script>
    <script src="/Public/msj/css/ex(2)" async=""></script>
    <script type="text/javascript" charset="gbk" id="tanx-s-mm_10008787_2640448_10277765" async=""
            src="/Public/msj/css/ex(3)"></script>
    <script src="/Public/msj/css/ex(4)" async=""></script>
    <script charset="utf-8" async="" src="/Public/msj/css/tanxssp.js.下载"></script>
    <script type="text/javascript" charset="gbk" id="tanx-s-mm_10008787_2640448_43896251" async=""
            src="/Public/msj/css/ex(5)"></script>

    <!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8; charset=UTF-8" />-->
    <title>辟谣：蘑菇茄子同食会中毒？_饮食小常识 - 美食杰</title>
    <meta name="keywords" content="辟谣：蘑菇茄子同食会中毒？_饮食小常识 - 美食杰">
    <meta name="description" content="辟谣：蘑菇茄子同食会中毒？_饮食小常识 - 美食杰">
    <meta content="www.meishij.net" name="author">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script src="/Public/msj/css/hm.js.下载"></script>
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
    <script type="text/javascript" src="/Public/msj/css/j.m.js.下载"></script>
    <script type="text/javascript" src="/Public/msj/css/main.js(1).下载"></script>
    <script type="text/javascript" src="/Public/msj/css/list.js.下载"></script>
    <script type="text/javascript" src="/Public/msj/css/lazyload.js.下载"></script>
    <script type="text/javascript" src="/Public/msj/css/tipswindown.js.下载"></script>
    <script src="/Public/msj/css/ds.js.下载"></script>
    <script>var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?01dd6a7c493607e115255b7e72de5f40";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
    <script type="text/javascript" async="" charset="utf-8"
            src="/Public/msj/css/meishijie.js.下载"></script>
    <script src="/Public/msj/css/share.js.下载"></script>
    <script id="" src="/Public/msj/css/StdID.do" charset="utf-8"></script>
    <script src="/Public/msj/css/bcore.min.js.下载" type="text/javascript"></script>
    <script src="/Public/msj/css/Visit.do" charset="utf-8"></script>
    <script src="/Public/msj/css/AddItem.do" charset="utf-8"></script>
    <script src="/Public/msj/css/VisitCat.do" charset="utf-8"></script>
    <script src="/Public/msj/css/AddCat.do" charset="utf-8"></script>
    <script src="/Public/msj/css/P.do" charset="utf-8"></script>
    <script src="/Public/msj/css/PageView.do" charset="utf-8"></script>


</div>
</body>
</html>