<?php
header("Content-Type:text/html; charset=utf-8");

// ini_set('display_errors',true);
// ini_set('error_reporting', E_ALL);
// echo ini_set('SMTP','xxx.xxx.xxx.xxx');
// echo ini_get('SMTP');
// phpinfo();
  $to =" m3197111@iga.com.tw "; //收件者
  $subject = "色票管理"; //信件標題
  $msg = "smtp發信測試";//信件內容
  $headers = "From: System"; //寄件者

  
  if(mail("$to", "$subject", "$msg", "$headers")):
   echo "信件已經發送成功。";//寄信成功就會顯示的提示訊息
  else:
   echo "信件發送失敗！";//寄信失敗顯示的錯誤訊息
  endif;
?>