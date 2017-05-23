<?php
//session_start();
function code(){
    $CheckCode= rand(100000,999999);
    return $CheckCode;
}
$phone = $_GET['phone'];
//$phone=18202206379;


$code = code();

//$_SESSION['code'] = $code;
$message = base64_encode("您的验证码" .$code. "【维美医院】");                                                                                 
$data_string = "<?xml version=\"1.0\" encoding=\"utf-8\"?><Body><user>697882</user><password>911419</password><version>1.2</version><submit><usermsgid>123456789012</usermsgid><desttermid>$phone</desttermid><srctermid></srctermid><msgcontent>$message</msgcontent><signid></signid><desttype>0</desttype><tempid>220</tempid><needreply>0</needreply></submit></Body>";                                                                                                       
$ch = curl_init('http://211.137.171.46:9191/adc_posthandler_new');                                                                   
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
	 'Action: "submitreq"',                                                                        
    'Content-Type: text/json; charset=utf-8',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);
echo $code."<br/>";
echo $result;
//echo $_SESSION["code"];
//echo $code;

?>

