<?php
require_once("../config/database.php");
session_start();
if(!isset($_SESSION["user"])){
    echo "非法访问，请按正常步骤操作！<br>Warning! Do not try hacking the system! ";
    exit();
}
$uid=$_SESSION["user"];
$old=md5($_POST["oldpass"]);
$new=md5($_POST["newpass"]);

$com1="select * from user_student where sid='$uid' and pwd='$old'";
$com2="update user_student set pwd='$new' where sid='$uid'";

$result1=mysqli_query($db,$com1);


if($result1->num_rows>0){ //user exists
    $result2=mysqli_query($db,$com2);
    if($result2){
        echo '<h4 style="margin:30px;">提示：密码更改成功。</h4>';
    }
    else{
    echo '<h4 style="margin:30px;">注意：系统错误，密码未更改。</h4>';
    }
}
else{
    echo '<h4 style="margin:30px;">注意：认证错误，密码未更改。请检查你的输入。</h4>';
}
mysqli_close($db);
?>

