<?php
require_once("../../config/database.php");

$com="REPLACE into student ( sid,name,sex,age,class,did,idnum,email,tel ) values(".$_POST["sid"].",'".$_POST["name"]."','".$_POST["sex"]."','".$_POST["age"]."','".$_POST["class"]."','".$_POST["did"]."','".$_POST["idnum"]."','".$_POST["email"]."','".$_POST["tel"]."' )" ;

$result=mysqli_query($db,$com);
if($result){
    echo '<h4 style="margin:30px;">提示：信息更改成功！</h4>';
}
else{
    echo '<h4 style="margin:30px;">注意：数据未更改！</h4>';
}

mysqli_close($db);
?>
<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="#" onclick="javascript:history.back(-1);">返回</a></div> </div>
