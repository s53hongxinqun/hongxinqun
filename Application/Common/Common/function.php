<?php 

/**
 * [StrHide 字符串替换函数]
 * @param [type] $needel [用于替换的字符串]
 * @param [type] $start  [开始位置]
 * @param [type] $end    [结束位置]
 * @param [type] $str    [原始字符串]
 */
 function StrHide($needel,$start,$end,$str)
 {
 	for($i = $start; $i <= $end; $i++){
 		$str[$i] = $needel;
 	}
 	return $str;
 }

 
 /**
  * 发送模板短信
  * @param to 手机号码集合,用英文逗号分开
  * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
  * @param $tempId 模板Id,测试应用和未上线应用使用测试模板请填写1，正式应用上线后填写已申请审核通过的模板ID
  */       
function sendTemplateSMS($to,$datas,$tempId)
{
     // 初始化REST SDK
    include_once("./CCPRestSmsSDK.php");

//主帐号,对应开官网发者主账号下的 ACCOUNT SID
$accountSid= '8aaf0708586c4340015872a1f83c04d2';

//主帐号令牌,对应官网开发者主账号下的 AUTH TOKEN
$accountToken= '8a38c8a68d84481e90379e766227691f';

//应用Id，在官网应用列表中点击应用，对应应用详情中的APP ID
//在开发调试的时候，可以使用官网自动为您分配的测试Demo的APP ID
$appId='8aaf0708586c4340015872a1f99d04d6';

//请求地址
//沙盒环境（用于应用开发调试）：sandboxapp.cloopen.com
//生产环境（用户应用上线使用）：app.cloopen.com
$serverIP='app.cloopen.com';


//请求端口，生产环境和沙盒环境一致
$serverPort='8883';

//REST版本号，在官网文档REST介绍中获得。
$softVersion='2013-12-26';
     // global $accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion;
     $rest = new Org\Util\REST($serverIP,$serverPort,$softVersion);
     $rest->setAccount($accountSid,$accountToken);
     $rest->setAppId($appId);
    
     // 发送模板短信
     // echo "Sending TemplateSMS to $to <br/>";
     $result = $rest->sendTemplateSMS($to,$datas,$tempId);
     if($result == NULL ) {
         // echo "result error!";
         // break;
     }
     if($result->statusCode!=0) {
         // echo "error code :" . $result->statusCode . "<br>";
         // echo "error msg :" . $result->statusMsg . "<br>";
         //TODO 添加错误处理逻辑
     }else{
         // echo "Sendind TemplateSMS success!<br/>";
         // 获取返回信息
         $smsmessage = $result->TemplateSMS;
         // echo "dateCreated:".$smsmessage->dateCreated."<br/>";
         // echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
         //TODO 添加成功处理逻辑
     }
}