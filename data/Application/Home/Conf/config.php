<?php
return array(
    "weixin" => [
        // ...
        'debug' => true,
        'app_id' => 'wx60d09b5dd72f60d4',
        'secret' => '93388add043abdd90a1ec4ecc3d73de6',
        'token' => 'weixin',
        'oauth' => [
            'scopes' => ['snsapi_userinfo'],
            'callback' => '/Home/Wechat/oauth_callback',
        ],

        // ..
    ]
);