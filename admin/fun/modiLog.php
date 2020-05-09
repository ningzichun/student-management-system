<?php

require_once("../../config/database.php");

$com="select * from student_log where sid=".$_GET['sid']." and addtime='". $_GET['addtime']."'";

$result=mysqli_query($db,$com);
if($result){
    while($row=mysqli_fetch_object($result)){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/fun.css">
    <title>Title</title>
</head>
<body>
<h3 class="subtitle">奖惩管理 >> 修改信息</h3>
    <form action="editLog.php" method="post" id="log">
    
    <span>学号：</span><input name="sid" required type="text" style="width:180px" value="<?php echo $row->sid ?>"><br>
    <span>类型：</span><input name="type" required type="radio" value="1" <?php  if($row->type=='1') echo "checked"; ?>>奖<input name="type" type="radio" value="0" <?php  if($row->type=='0') echo "checked"; ?>>惩<br>
    <span>时间：</span><input name="logdate" required type="date" style="width:180px" value="<?php echo $row->logdate ?>"><br>
    <input name="addtime"required  type="text" style="display:none;" value="<?php echo $row->addtime ?>">
    <span>缘由：</span><input name="reason"required  type="text" class="boxwidth" value="<?php echo $row->reason ?>">
    <br>
    <span>详情：</span><br><textarea style="display:block;width:90%;height:60px;"name="detail" required form="log" ><?php echo $row->detail ?></textarea><br>
   

        <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="修改信息"></div>
        <div class="redbox clickbox "><span></span><input name="back" type="button" onclick="javascript:history.back(-1);" value="返回"></div>
    </form>

        <?php
    }
}
mysqli_close($db);
?>

