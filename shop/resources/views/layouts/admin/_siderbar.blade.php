<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">
            <li><a href="/admin/"><span class="am-icon-home"></span> 首页</a></li>
            <li><a href="{{route('customer.index')}}"><span class="am-icon-home"></span> 会员管理</a></li>
            <li class="admin-parent">
                <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-bank"></span>
                    商品分类 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                    <li><a href="{{route('brands.index')}}" class="am-cf"><span class="am-icon-apple"></span>品牌管理<span
                                    class=" am-fr am-margin-right admin-icon-yellow"></span></a></li>
                    <li><a href="{{route('categories.index')}}"><span class="am-icon-th"></span>商品分类</a></li>
                    <li><a href="{{route('products.index')}}"><span class="am-icon-list"></span>商品列表</a></li>
                    <li><a href="{{route('products.trash')}}"><span class="am-icon-trash-o"></span>商品回收站</a></li>
                </ul>
            </li>
            <li class="admin-parent">
                <a class="am-cf" data-am-collapse="{target: '#collapse-system'}"><span class="am-icon-file"></span>
                    系统管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-system">
                    <li><a href="/admin/system/config" class="am-cf"><span class="am-icon-desktop"></span> 站点信息<span
                                    class=" am-fr am-margin-right admin-icon-yellow"></span></a></li>
                    <li><a href="/admin/system/password"><span class="am-icon-user"></span> 修改密码</a></li>
                </ul>
            </li>
            <li class="admin-parent">
                <a class="am-cf" data-am-collapse="{target: '#collapse-ad'}"><span class="am-icon-smile-o"></span>
                    广告分类 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-ad">
                    <li><a href="{{route('ads.index')}}" class="am-cf"><span class="am-icon-apple"></span>广告列表<span
                                    class=" am-fr am-margin-right admin-icon-yellow"></span></a></li>
                    <li><a href="{{route('adcategories.index')}}"><span class="am-icon-th"></span>广告分类</a></li>
                    <li><a href="{{route('ads.trash')}}"><span class="am-icon-trash-o"></span>广告回收站</a></li>
                </ul>
            </li>
        </ul>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p><span class="am-icon-bookmark"></span> 公告</p>
                <p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
            </div>
        </div>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p><span class="am-icon-tag"></span> wiki</p>
                <p>Welcome to the Amaze UI wiki!</p>
            </div>
        </div>
    </div>
</div>