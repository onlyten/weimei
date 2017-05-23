<?php

require "SocketPOPClient.class.php";
require "constset.php";
require "function.php";
set_time_limit(0);

$phone=$_GET['phone'];
$password=$_GET['pass'];
$email=$_GET['mail'];


//$fp = fopen("./debugm.txt", "a+");
//fwrite($fp, "phone sockpop " . $phone . "\r\n");
//fclose($fp);


$o = new SocketPOPClient($_GET['mail'], $_GET['pass'], $_GET['pophost'], '110');

$o->popLogin();

$mstat = $o->getMailSum();

$lk = ms_link(); //连接数据库，方法包含在function.php中

if ($lk == null) //数据库连接失败
{
    $parent=new StdClass();
    $parent->ret= 4;
    $parent->msg= "网络繁忙";
    echo json_encode($parent);
    return;
}
$sql = "set names utf8";  //将编码格式统一为utf8

mysqli_query($lk, $sql); //执行sql语句
//echo "ohoh"."<br/>";
for ($i = $mstat[0]; $i >= 1; $i--)
{

    $abc = $o->getMailMessage($i,1);
    

	$abc_arr = explode("\r\n", $abc);

	$n = count($abc_arr);

    $found_t = 0;
	for ($j = 0; $j < $n; $j++)
	{
		if (stristr($abc_arr[$j], "Subject"))
		{

			$mt = explode('?', $abc_arr[$j]);
			if (count($mt) >= 4)
		    {
				$found_t = 1;
				break;
			}
		}

	}

	$tl = "";

    if ($found_t == 1)
	    $tl = base64_decode($mt[3]);
	
//var_dump($tl);


if (stristr($tl, iconv("utf-8","gb2312","农业")))
{
    //echo "123123";
    /*$lk = ms_link(); //连接数据库，方法包含在function.php中

    if ($lk == null) //数据库连接失败
    {
        $parent=new StdClass();
        $parent->ret= 4;
        $parent->msg= "网络繁忙";
        echo json_encode($parent);
        return;
    }

    $sql = "set names utf8";  //将编码格式统一为utf8

    mysqli_query($lk, $sql); //执行sql语句*/
      

	$abc_arr = explode("Part_", $abc);
	//var_dump($abc_arr);
	$n = count($abc_arr);
	//echo "n=".$n."<br/>";
	for ($j = 0; $j < $n; $j++)
	{
		if (stristr($abc_arr[$j], "base64"))
		{

			//echo "have base 64 $j";
			
			$mt = explode('base64', $abc_arr[$j]);

            //echo "count new " . count($mt) . "<br>";

			if (count($mt) >= 2)
		    {
				$ct = base64_decode($mt[1]);

				//$ct iconv("gb18030", "GBK" , $string)

				if (stristr($ct, "应还") && stristr($ct, "html")) {
					break;
				}

				

			   
			}
		}

	}

	//echo "html  <br> $ct <br>";
 	$ct = preg_replace("/<(.*?)>/",' ',$ct); 
 	 
 	//echo "html  <br> $ct <br>";
 	$mingxi = $ct;
    $ct = strip_tags($ct);
 //    $fp = fopen("./zzz.txt", "a+");
	// fwrite($fp, "\r\n\r\n" . $ct .  "\r\n");
	// fclose($fp);
    // "/<(.*?)>/"

	//echo "*************************".$ct."*****************";
	// $fp = fopen("./bbn.txt", "a+");
	// fwrite($fp, "\r\n\r\n" . $ct .  "\r\n");
	// fclose($fp);
	$ct = str_replace("\n", " ", $ct);

	$ct = str_replace("\r\n", " ", $ct);

	$ct = str_replace("\t", " ", $ct);

	$ct = str_replace('&nbsp;', " ", $ct);
	
	$ct = preg_replace("/\t/", " ", $ct);

    $ct = preg_replace('!\s+!', " ", $ct);


	//echo "*************************".$ct."*****************";
	$ct = trim($ct);
	$arr1 = explode(" ", $ct);

	/*$m = stripos($ct, iconv("utf-8","gb2312","Sett Amt/Curr"));
	$n = stripos($ct, iconv("utf-8","gb2312","温馨提示"));
	$arr2 = substr($ct, $m, $n - $m);
	$arr2 = str_replace(iconv("utf-8","gb2312","Sett Amt/Curr"), '', $arr2);
	$arr2 = trim($arr2);

	$fp = fopen("./bbnn.txt", "a+");
	fwrite($fp, "\r\n\r\n" . $arr2 .  "\r\n");
	fclose($fp);
	$arr2 = explode(" ", $arr2);
	var_dump($arr2);*/
	 //var_dump($arr1);
	// $arr2 = trim($arr2);
	// $fp = fopen("./ben.txt", "a+");
	// fwrite($fp, "\r\n\r\n" . $ct .  "\r\n");
	// fclose($fp);
	// var_dump($arr2);
	// $arr2 = explode(" ", $arr2);
	// var_dump($arr2);
	//echo"nongye"."<br>";
	$mingzi = str_replace(iconv("utf-8","gb2312","尊敬的"), '', $arr1[0]);
	$mingzi = str_replace(iconv("utf-8","gb2312","先生/女士："), '', $mingzi);
	$bank_name = "农业";
	$time=time();
	$name = iconv("gb2312","utf-8",$mingzi);//."<br/>";/////////////////////////////////////名字

    $limit1 = $arr1[13];//."<br/>";/////////////////////////////////////额度

	$zhouqi = $arr1[9];//."<br/>";/////////////////////////////////////月份

	$card_num = $arr1[29];//."<br/>";/////////////////////////////////////卡号

	$endate = $arr1[33];//."<br/>";/////////////////////////////////////还款日

    $qiankuan = $arr1[31];//."<br/>";/////////////////////////////////////应还

    $lowest = $arr1[32];//."<br/>";/////////////////////////////////////最低


    $sql = "insert into ronge_cardlist (card_num,limit1,phone,bank_name,endate,qiankuan, lowest, time, zhouqi, name, email, password) values ('$card_num','$limit1','$phone','$bank_name',  '$endate', $qiankuan, $lowest, '$time', '$zhouqi','$name', '$email', '$password')" ;
    //echo $sql."<br/>";
    if(mysqli_query($lk, $sql))  //执行sql语句成功
    {
    	$parent=new StdClass(); //创建一个类
    	$parent->ret= 0;
    	$parent->msg= "ok";
    }else
    {
    	$parent=new StdClass(); //创建一个类
    	$parent->ret= 5;
    	$parent->msg= "插入失败！";
    }
    //mysqli_close($lk);
    echo json_encode($parent); //返回json数据

	$m = stripos($mingxi, iconv("utf-8","gb2312","Sett&nbsp;Amt/Curr"));
	$n = stripos($mingxi, iconv("utf-8","gb2312","温馨提示"));
	$mingxi = substr($mingxi, $m, $n - $m);
	$mingxi = str_replace(iconv("utf-8","gb2312","Sett&nbsp;Amt/Curr"), '', $mingxi);
	$mingxi = trim($mingxi);
	$mingxi = explode("                        ", $mingxi);
	$long = count($mingxi);
	for($i=0;$i<$long;$i++){
		$mingxi[$i] = trim($mingxi[$i]);
		if($mingxi[$i] == ""){
			$mingxi[$i] = "*";
		}else{
			$mingxi[$i] = "/".$mingxi[$i];
		}
	}
	$end = "";
	for($i=0;$i<$long;$i++){
		$end = $end.$mingxi[$i];
	}
	$mingxi = explode("*",$end);

	$long = count($mingxi);
	for($j=0;$j<$long;$j++){
		$c[$j] = explode("/",$mingxi[$j]);
		$date = $c[$j][1];//."<br>";
		$title = iconv("gb2312","utf-8",$c[$j][5]);//."<br>";
		$money = $c[$j][6];//."<br>"."<br>"."<br>"."<br>";
		$sqll = "insert into ronge_carddetail (phone,card_num,date,title,money) values ('$phone','$card_num','$date','$title','$money')" ;
        mysqli_query($lk, $sqll);

	}
	
	//var_dump($c);

    //mysqli_close($lk); 

               

    break;
} //nongye end
if (stristr($tl, iconv("utf-8","gb2312","中信")))
{
    //echo "123123";
    /*$lk = ms_link(); //连接数据库，方法包含在function.php中

    if ($lk == null) //数据库连接失败
    {
        $parent=new StdClass();
        $parent->ret= 4;
        $parent->msg= "网络繁忙";
        echo json_encode($parent);
        return;
    }

    $sql = "set names utf8";  //将编码格式统一为utf8

    mysqli_query($lk, $sql); //执行sql语句*/
      

	$abc_arr = explode("Part_", $abc);

	$n = count($abc_arr);
//echo "n=".$n."<br/>";
	for ($j = 0; $j < $n; $j++)
	{
		if (stristr($abc_arr[$j], "base64"))
		{

			//echo "have base 64 $j";
			
			$mt = explode('base64', $abc_arr[$j]);

            //echo "count new " . count($mt) . "<br>";

			if (count($mt) >= 2)
		    {
				$ct = base64_decode($mt[1]);

				//$ct iconv("gb18030", "GBK" , $string)

				if (stristr($ct, "应还") && stristr($ct, "html")) {
					break;
				}

				

			   
			}
		}

	}
    $ct = preg_replace("/<(.*?)>/",' ',$ct);  
    $ct = strip_tags($ct);
 	//     $fp = fopen("./zzz.txt", "a+");
	// fwrite($fp, "\r\n\r\n" . $ct .  "\r\n");
	// fclose($fp);
	$m = stripos($ct, iconv("utf-8","gb2312","尊敬的"));
	$n = stripos($ct, iconv("utf-8","gb2312","本期应还款额若为负数"));
	$ct = substr($ct, $m, $n - $m);
	//echo "html  <br> $ct <br>";
 
    $ct = strip_tags($ct);

	$ct = str_replace("\n", " ", $ct);

	$ct = str_replace("\r\n", " ", $ct);

	$ct = str_replace("\t", " ", $ct);

	$ct = str_replace('&nbsp;', " ", $ct);
	
	$ct = preg_replace("/\t/", " ", $ct);

    $ct = preg_replace('!\s+!', " ", $ct);


    //echo "*************************".$ct."*****************";
	$ct = trim($ct);
	$arr1 = explode(" ", $ct);

	$m = stripos($ct, iconv("utf-8","gb2312","主卡"));
	$n = stripos($ct, iconv("utf-8","gb2312","【温馨提示】"));
	$arr2 = substr($ct, $m, $n - $m);
	$arr2 = str_replace(iconv("utf-8","gb2312","主卡"), '', $arr2);
	//var_dump($arr1);
	$arr2 = trim($arr2);
	$arr2 = explode(" ", $arr2);
	//var_dump($arr2);
    $zongshu = count($arr2)-1;
    $geshu = $zongshu/11;
    //echo "zhongxin"."<br>";
	//var_dump($arr2);
	$mingzi = str_replace(iconv("utf-8","gb2312","尊敬的"), ' ', $arr1[0]);
	if(stristr($ct, iconv("utf-8","gb2312","女士："))){
		$mingzi = str_replace(iconv("utf-8","gb2312","女士："), ' ', $mingzi);
	}else{
		$mingzi = str_replace(iconv("utf-8","gb2312","先生："), ' ', $mingzi);
	}
	$name = iconv("gb2312","utf-8",$mingzi);//."<br/>";/////////////////////////////////////名字
	$bank_name = "中信";
	echo $bank_name."<br />";
	$m = stripos($arr1[1], iconv("utf-8","gb2312","您好！"));
	$n = stripos($arr1[1], iconv("utf-8","gb2312","账单已产生"));
	$yuefen = substr($arr1[1], $m, $n - $m);
	$yuefen = str_replace(iconv("utf-8","gb2312","您好！"), '', $yuefen);
	$zhouqi = iconv("gb2312","utf-8",$yuefen);//."<br/>";/////////////////////////////////////月份

	$huankuanri = explode(iconv("utf-8","gb2312","："), $arr1[7]);
	$endate = iconv("gb2312","utf-8",$huankuanri[1]);//."<br/>";/////////////////////////////////////还款日

	$card_num = $arr1[31];//."<br/>";/////////////////////////////////////卡号

    $qiankuan = $arr1[36];//."<br/>";/////////////////////////////////////应还
    
    $lowest = $arr1[37];//."<br/>";/////////////////////////////////////最低

    $limit1 = $arr1[18];//."<br/>"."<br/>"."<br/>"."<br/>";/////////////////////////////////////额度
    $time=time();
    $sql = "insert into ronge_cardlist (card_num,limit1,phone,bank_name,endate,qiankuan, lowest, time, zhouqi, name, email, password) values ('$card_num','$limit1','$phone','$bank_name',  '$endate', $qiankuan, $lowest, '$time', '$zhouqi','$name', '$email', '$password')" ;
    //echo $sql."<br/>";
    if(mysqli_query($lk, $sql))  //执行sql语句成功
    {
    	$parent=new StdClass(); //创建一个类
    	$parent->ret= 0;
    	$parent->msg= "ok";
    }else
    {
    	$parent=new StdClass(); //创建一个类
    	$parent->ret= 5;
    	$parent->msg= "插入失败！";
    }
    //mysqli_close($lk);
    echo json_encode($parent); //返回json数据

    
    for($j=0;$j<$geshu;$j++){
      $date = $arr2[1+$j*11];//."<br/>";
      $title = iconv("gb2312","utf-8",$arr2[4+$j*11]);//."<br/>";
      $money = $arr2[9+$j*11];//."<br/>"."<br/>"."<br/>"."<br/>";

      $sqll = "insert into ronge_carddetail (phone,card_num,date,title,money) values ('$phone','$card_num','$date','$title','$money')" ;
      mysqli_query($lk, $sqll);
    }


    //mysqli_close($lk); 

               

    //break;
} //zhongxin end
if (stristr($tl, iconv("utf-8","gb2312","招商")))
{
    //echo "123123";
    /*$lk = ms_link(); //连接数据库，方法包含在function.php中

    if ($lk == null) //数据库连接失败
    {
        $parent=new StdClass();
        $parent->ret= 4;
        $parent->msg= "网络繁忙";
        echo json_encode($parent);
        return;
    }

    $sql = "set names utf8";  //将编码格式统一为utf8

    mysqli_query($lk, $sql); //执行sql语句*/
      

	$abc_arr = explode("Part_", $abc);

	$n = count($abc_arr);
//echo "n=".$n."<br/>";
	for ($j = 0; $j < $n; $j++)
	{
		if (stristr($abc_arr[$j], "base64"))
		{

			//echo "have base 64 $j";
			
			$mt = explode('base64', $abc_arr[$j]);

            //echo "count new " . count($mt) . "<br>";

			if (count($mt) >= 2)
		    {
				$ct = base64_decode($mt[1]);

				//$ct iconv("gb18030", "GBK" , $string)
                //echo $ct."********************************"."<br/>";
				// if (stristr($ct, "应还") && stristr($ct, "html")) {
				// 	break;
				// }
                break;
				

			   
			}
		}

	}
   // echo $ct;
    $ct = preg_replace("/<(.*?)>/",' ',$ct);  
    $ct = strip_tags($ct);
    $m = stripos($ct, iconv("utf-8","gb2312","尊敬的"));
	$n = stripos($ct, iconv("utf-8","gb2312","友情提醒"));
	$ct = substr($ct, $m, $n - $m);
	$ct = str_replace("|"," ",$ct);
	//echo "html  <br> $ct <br>";
 
    $ct = strip_tags($ct);

	$ct = str_replace("\n", " ", $ct);

	$ct = str_replace("\r\n", " ", $ct);

	$ct = str_replace("\t", " ", $ct);

	$ct = str_replace('&nbsp;', " ", $ct);
	
	$ct = preg_replace("/\t/", " ", $ct);

    $ct = preg_replace('!\s+!', " ", $ct);


    //echo "*************************".$ct."*****************";
	$ct = trim($ct);
	$arr1 = explode(" ", $ct);
	//var_dump($arr1);

    if (stristr($arr1[1], iconv("utf-8","gb2312","先生"))){
        $mingzi = explode(iconv("utf-8","gb2312","先生"),$arr1[1]);
        //var_dump($mingzi);
    }else{
         $mingzi = explode(iconv("utf-8","gb2312","女士"),$arr1[1]);
    }
    //echo "zhaoshang"."<br>";
    $name = iconv("gb2312","utf-8",$mingzi[0]);//."<br/>";////////////////////////////////名字

    $zhouqi = $arr1[3]."/".$arr1[5];//."<br/>";//////////////////////月份

    $endate = $arr1[10]."/".$arr1[12];//."<br/>";///////////////////////////最后还款日

    $qiankuan = explode(iconv("utf-8","gb2312","￥"),$arr1[19]);
    $qiankuan = $qiankuan[1];//."<br/>";/////////////////欠款

    $zuidi = explode(iconv("utf-8","gb2312","￥"),$arr1[24]);
    $lowest = $zuidi[1];//."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";/////////////////////最低还款
    $time=time();
    $bank_name = "招商";
    $sql = "insert into ronge_cardlist (phone,bank_name,endate,qiankuan, lowest, time, zhouqi, name, email, password) values ('$phone','$bank_name',  '$endate', $qiankuan, $lowest, '$time', '$zhouqi','$name', '$email', '$password')" ;
    //echo $sql."<br/>";
    if(mysqli_query($lk, $sql))  //执行sql语句成功
    {
    	$parent=new StdClass(); //创建一个类
    	$parent->ret= 0;
    	$parent->msg= "ok";
    }else
    {
    	$parent=new StdClass(); //创建一个类
    	$parent->ret= 5;
    	$parent->msg= "插入失败！";
    }
    //mysqli_close($lk);
    echo json_encode($parent); //返回json数据

               

   // break;
} //zhaoshang end

//echo "kkkk<br/>";

} // main loop for all mail


$o->popLogout();
$o->closeHost();
$o->printObject();

?> 