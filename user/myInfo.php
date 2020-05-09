<?php
session_start();
$sid=$_SESSION["user"];
require_once("../config/database.php");

$com="select * from student natural join (select did,dname from department) as didname where sid='$sid' ";

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
<h3 class="subtitle">学籍信息</h3>

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
        <?php
    }
}
mysqli_close($db);
?>
