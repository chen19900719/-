<?php
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

function qiniu($path)
{
    $accessKey = env('QINIU_ACCESS_KEY');
    $secretKey = env('QINIU_SECRET_KEY');
    $auth = new Auth($accessKey, $secretKey);

    $bucket = env('QINIU_BUCKET');
    // 上传文件到七牛后， 七牛将文件名和文件大小回调给业务服务器

    $token = $auth->uploadToken($bucket);

//    // 要上传文件的本地路径
//    $filePath = getcwd() . '/storage' . ltrim($path, 'public');

    // 上传到七牛后保存的文件名
    $key = basename($path);

    // 初始化 UploadManager 对象并进行文件的上传
    $uploadMgr = new UploadManager();

    // 调用 UploadManager 的 putFile 方法进行文件的上传
    return $uploadMgr->putFile($token, $key, $path);

}