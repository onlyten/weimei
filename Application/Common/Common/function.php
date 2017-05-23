<?php
//生成随机码的函数，默认生成15位
function gen_random($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
// 发送模板消息
function model_msg($msg_json){
    // 获取access_token
    if (cookie('access_token')) {
        $access_token = cookie('access_token');
    }else{
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".C('WX_APPID')."&secret=".C('WX_APPSECRET');
        $json_info = curl_get($url);
        // dump($json_info);
        $array_info = json_decode($json_info,true);
        // dump($array_info);
        $access_token = $array_info['access_token'];
        cookie('access_token',$access_token,3600);
    }
    //发送模板消息
    // dump($url);
    $url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=".$access_token;
    $result_json = curl_post($url,$msg_json);
    $result_array = json_decode($result_json,true);
    // dump($result_array);
    return $result_array['errmsg'];

}

 //curl get
function curl_get($url)
{
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在   
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//返回文本流,
    $data=curl_exec($ch);
    curl_close($ch);
    return $data;
}

//curl post
function curl_post($url,$message_text)
{
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, $url); //设置请求的URL
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $message_text);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

?>