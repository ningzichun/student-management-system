<?php
require_once("../../config/database.php");
$sid=$_GET["sid"];
$pwd=md5(substr($sid,-6));

$com1="select * from user_student where sid='$sid'";
$com2="update user_student set pwd='$pwd' where sid='$sid'";
$com3="insert into user_student (sid,pwd) values ('$sid','$pwd')";

$result1=mysqli_query($db,$com1);


if($result1->num_rows>0){ //user exists
    $result2=mysqli_query($db,$com2);
    if($result2){
        echo '<h4 style="margin:30px;">提示：用户存在，密码已重置为学号后六位。</h4>';
    }
    else{
    echo '<h4 style="margin:30px;">注意：用户存在，数据未更改！</h4>';
    }
}
else{ //user 404
    $result3=mysqli_query($db,$com3);
    if($result3){
        echo '<h4 style="margin:30px;">提示：已新增用户，密码设置为学号后六位。</h4>';
    }
    else{
    echo '<h4 style="margin:30px;">注意：用户不存在，数据未更改！</h4>';
    }
}

mysqli_close($db);
?>

<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="#" onclick="javascript:history.back(-1);">返回</a></div> </div>