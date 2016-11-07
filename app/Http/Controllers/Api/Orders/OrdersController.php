<?php

namespace App\Http\Controllers\Api\Orders;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends Controller {

    public function attachQrcode($order_no, $type) {
        $path = public_path().'/ckfinder/userfiles/images/qrcodes/'.$order_no.'/'.$type.'/code.png';

        $streamData = file_get_contents('php://input', 'r');

        if(strlen($streamData) != 0) {
            //读写方式打开，将目标文件截为零
            $h = fopen($path, 'w+');
            if($h){
                if(fwrite($h, $streamData)){
                    fclose($h);
                }else{
                    $statusCode = 400;
                    $statusText = "img write error";
                    $statusAlert = '头像上传失败';
                }
            }else{
                fclose($h);
                unlink($fullPath);
                $statusCode = 400;
                $statusText = "img open error";
                $statusAlert = '头像上传错误';
            }
        } else {
            $statusCode = 400;
            $statusText = "streamData is zero";
            $statusAlert = '网络数据流错误';
        }
        json_response($statusCode,$statusText,$statusAlert,$data);
    }

    function setImg() {
        $statusCode = 200;
        $statusText = 'successsful';
        $statusAlert = '执行成功';

        isset($_GET['uid']) or  json_response(400,'uid is lost','出错了');
        $uid = round($_GET['uid']);

        $userForlder = PHPCMS_PATH.'uploadfile/UserAvatar/'.$uid;
        // mkdir($userForlder, 0777, true);
        if(!is_dir($userForlder)) {
            mkdir($userForlder, 0777, true);
        }

        $shortPath = 'uploadfile/UserAvatar/'.$uid.'/'.sha1(time()).'.png';
        $fullPath = PHPCMS_PATH.$shortPath;
        $data = array();
        $data['imgPath'] = '';

        $streamData = file_get_contents('php://input', 'r');

        if(strlen($streamData) != 0) {
            //读写方式打开，将目标文件截为零
            $h = fopen($fullPath, 'w+');
            if($h){
                if(fwrite($h, $streamData)){
                    fclose($h);
                    $imgInfo = $this->db->get_one(array('userid'=>$uid),'img');  // ZJ_20160712 删除旧图片
                    $this->db->update(array('img'=>APP_PATH.$shortPath), array('userid'=>$uid));
                    unlink($imgInfo['img']);
                    $data['imgPath'] = APP_PATH.$shortPath;
                }else{
                    $statusCode = 400;
                    $statusText = "img write error";
                    $statusAlert = '头像上传失败';
                }
            }else{
                fclose($h);
                unlink($fullPath);
                $statusCode = 400;
                $statusText = "img open error";
                $statusAlert = '头像上传错误';
            }
        } else {
            $statusCode = 400;
            $statusText = "streamData is zero";
            $statusAlert = '网络数据流错误';
        }
        json_response($statusCode,$statusText,$statusAlert,$data);
    }
}
