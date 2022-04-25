<h1>時間格式練習</h1>
<?php date_default_timezone_set("Asia/Taipei");?>
<?=date("Y/m/d")?>
<hr>
<?=date("n月j日 l")?>
<hr>
<?=date("Y-n-j G:").(int)date("i").":".(int)date("s");?>
<hr>
<?=date("Y/m/d H:i:s")?>
<hr>
<?php 

$workday="";
$w=date("w");
if($w==0 || $w==6){
    $workday="假日";
}else{
    $workday="工作日";
}
echo date("今天是西元Y年n月j日 ") . $workday;


;?>
<hr>