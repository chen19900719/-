<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class FileController extends Controller
{
    function upload(Request $request)
    {
        if ($request->hasFile('Filedata') and $request->file('Filedata')->isValid()) {

            //文件类型
            $allow = array('image/jpeg', 'image/png', 'image/gif');

            $mine = $request->file('Filedata')->getMimeType();
            if (!in_array($mine, $allow)) {
                return ['status' => 0, 'info' => '文件类型错误，只能上传图片'];
            }

            //文件大小判断$filePath
            $max_size = 1024 * 1024 * 3;
            $size = $request->file('Filedata')->getClientSize();
            if ($size > $max_size) {
                return ['status' => 0, 'info' => '文件大小不能超过3M'];
            }

            //返回新文件名
            //$time = date('Y_m');
            $path = $request->Filedata->store('public/images/');
            //绝对路径
            $filePath = getcwd() . '/storage' . ltrim($path, 'public');
            //上传到七牛
            list($ret, $err) = qiniu( $filePath);
            if ($err !== null) {
                return (['status' => 0, 'info' => $err]);
            } else {
                $file['url'] = env('QINIU_LINK') . $ret['key'];
                unlink( $filePath);
                return ['status' => 1, 'info' => env('QINIU_LINK') . $ret['key']];
            }



        }
    }
}
