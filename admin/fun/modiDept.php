<?php

require_once("../../config/database.php");

$com="select * from department where did=".$_GET['did'];

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
<h3 class="subtitle">院系管理 >> 修改信息</h3>
    <form action="editDept.php" method="post" >
    
    <div class="deptbox"><span>院系序号：</span><input name="did" type="text" required readonly=“readonly” value="<?php echo $row->did ?>"></div>
        <div class="deptbox"><span>院系名称：</span><input name="dname" type="text" required value="<?php echo $row->dname ?>"></div>
        <div class="deptbox"><span>所在地址：</span><input name="dadd" type="text" required value="<?php echo $row->dadd ?>"></div>
        <div class="deptbox"><span>负责人：</span><input name="dmng" type="text" required value="<?php echo $row->dmng ?>"></div>
        <div class="deptbox"><span>联系方式：</span><input name="dtel" type="text" required value="<?php echo $row->dtel ?>"></div>
        
        <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="修改信息"></div>
        <div class="redbox clickbox "><span></span><input name="back" type="button" onclick="javascript:history.back(-1);" value="返回"></div>
        
    </form>

        <?php
    }
}
mysqli_close($db);
?>

