<?php

require_once("../../config/database.php");
$cid=$_POST["cid"];
$cname=$_POST["cname"];
$credit=$_POST["credit"];
$cadd=$_POST["cadd"];
$did=$_POST["did"];
$tname=$_POST["tname"];


$com="insert into course (cid,cname,credit,cadd,did,tname) values('$cid','$cname','$credit','$cadd','$did','$tname')";

$result=mysqli_query($db,$com);
if($result){
    echo '<h4 style="margin:30px;">提示：已添加课程！</h4>';
}
else{
    echo '<h4 style="margin:30px;">注意：数据未更改！</h4>';
}

mysqli_close($db);
?>
<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="./myLog.php">返回</a></div> </div>
