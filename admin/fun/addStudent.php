<?php
    require_once("../../config/database.php");

    $com="insert into student ( sid,name,sex,age,class,did,idnum ) values(".$_POST["sid"].",'".$_POST["name"]."','".$_POST["sex"]."','".$_POST["age"]."','".$_POST["class"]."','".$_POST["did"]."','".$_POST["idnum"]."' )" ;

    $sid=$_POST["sid"];
    $pwd=md5(substr($sid,-6));
    $com2="insert into user_student (sid,pwd) values ('$sid','$pwd')";
    
    $result=mysqli_query($db,$com);
    $result2=mysqli_query($db,$com2);
    if($result&&$result2){
        echo "成功，同时已新建学生账户，密码为学号后六位";
    }
    else{
        echo "数据未更改。";
    }

    mysqli_close($db);
?>
<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="#" onclick="javascript:history.back(-1);">返回</a></div> </div>