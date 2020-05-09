<?php

require_once("../../config/database.php");
if($_GET['sid']){
    $sid=$_GET['sid'];
}
$com='select * from student natural join (select did,dname from department) as didname where 1=1 and sid='.$sid ;


$result=mysqli_query($db,$com);
if($result){
    while($row=mysqli_fetch_object($result)){
        ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/fun.css">
    <title>Title</title>
</head>
<body>
<h3 class="subtitle">学生查询 >> 修改信息</h3>
    <form action="editStudent.php" method="post">

        <div class="inputbox"><span>学号：</span><input name="sid" type="text" required value="<?php echo $row->sid ?>"></div>
        <div class="inputbox"><span>姓名：</span><input name="name" type="text" required value="<?php echo $row->name ?>"></div>
        <div class="inputbox"><span>性别：</span>
            <select name="sex" required>
                <option value="男" <?php  if($row->sex=='男') echo "selected"; ?>>男</option>
                <option value="女" <?php  if($row->sex=='女') echo "selected"; ?>>女</option>
            </select></div>
        <div class="inputbox"><span>年龄：</span><input name="age" type="text" required value="<?php echo $row->age ?>"></div>
        <div class="inputbox"><span>班级：</span><input name="class" type="text" required value="<?php echo $row->class ?>"></div>
        <div class="inputbox"><span>院系：</span>
            <?php
            echo '<select required name="did">';
            $dept=mysqli_query($db,"select did,dname from department");
            while($dr=mysqli_fetch_object($dept)) {
                var_dump($dr);
            echo '<option value="'.$dr->did.'" '; if($dr->dname==$row->dname) echo 'selected'; echo '> '.$dr->dname.'</option>' ;
            }
            echo '</select>';
            ?></div>
            
        <div class="inputbox"><span>证件号：</span><input name="idnum" required type="text" value="<?php echo $row->idnum ?>"></div>
        <div class="inputbox"><span>邮箱：</span><input name="email" type="text" value="<?php echo $row->email ?>"></div>
        <div class="inputbox"><span>电话：</span><input name="tel" type="text"  value="<?php echo $row->tel ?>"></div>
        <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="修改信息"></div>
        <div class="redbox clickbox "><span></span><input name="back" type="button" onclick="javascript:history.back(-1);" value="返回"></div>
    </form>

        <?php
    }
}
mysqli_close($db);
?>

