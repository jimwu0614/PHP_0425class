<h1>計算生日倒數</h1>
<?php
$birthday="04-24";
echo "妳的生日是".$birthday."<br>";
// $now=strtotime('now');
$today=strtotime(date("Y-m-d"));
$mybirth=strtotime(date("Y-").$birthday);
$diff=0;

if($mybirth-$today>0){
    $diff=($mybirth-$today)/(24*60*60);
    echo "距離生日還有".$diff."天";
}else if($mybirth-$today<0){
    $mybirth=strtotime("+1 year",$mybirth);
    $diff=($mybirth-$today)/(24*60*60);
    echo "距離生日還有".$diff."天";
}else{
    echo "生日快樂";
}
    

?>