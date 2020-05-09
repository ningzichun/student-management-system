<?php
session_start();
$sid=$_SESSION["user"];
require_once("../config/database.php");
if(isset($_POST["age"])){
    $com="update student set age='".$_POST["age"]."',email='".$_POST["email"]."',tel='".$_POST["tel"]."' where sid='".$sid."'" ;

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
<?php
exit();
}

$com="select * from department natural join (select * from student where sid='$sid') as myinfo ";

$result=mysqli_query($db,$com);

if($result){
    while($row=mysqli_fetch_object($result)){
        ?>
<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./user.css">
    <title>Result</title>
</head>
<body>
<h3 class="subtitle">修改信息</h3>
    <form action="./editInfo.php" method="post">

        <div class="inputbox"><span>姓名：</span><input name="name" type="text" required disabled value="<?php echo $row->name ?>"></div>
        <div class="inputbox"><span>年龄：</span><input name="age" type="text" required value="<?php echo $row->age ?>"></div>
        <div class="inputbox"><span>邮箱：</span><input name="email" type="text" required value="<?php echo $row->email ?>"></div>
        <div class="inputbox"><span>手机：</span><input name="tel" type="text" required value="<?php echo $row->tel ?>"></div>
        <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="修改信息"></div>
    </form>

        <?php
    }
}
mysqli_close($db);
?>

