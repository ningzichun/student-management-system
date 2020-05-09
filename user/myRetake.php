<?php
session_start();
$sid=$_SESSION["user"];
require_once("../config/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./user.css">
</head>
<body>
    <h3>重修查询</h3>
    <h4>正在重修课程</h4>
<table>
    <tr>
        <th>课程号</th>
        <th>课程名</th>
        <th>学分</th>
        <th>教师名</th>
    </tr>
    <?php

    $com="select * from course natural join (select * from student_course where sid='$sid' and status='1' and score is null) as chosen  " ;
    
    $result=mysqli_query($db,$com);
    if($result){
        while($row=mysqli_fetch_object($result)){
            ?>
            <tr>
                <td><?php echo $row->cid ?></td>
                <td><?php echo $row->cname ?></td>
                <td><?php echo $row->credit ?></td>
                <td><?php echo $row->tname ?></td>
            </tr>
            <?php
        }
    }
    ?>
</table>
<h4>已重修课程</h4>
<table>
    <tr>
        <th>课程号</th>
        <th>课程名</th>
        <th>学分</th>
        <th>教师名</th>
        <th>成绩</th>
    </tr>
    <?php

    $com="select * from course natural join (select * from student_course where sid='$sid' and status='1' and score is not null) as chosen  " ;
    
    $result=mysqli_query($db,$com);
    if($result){
        while($row=mysqli_fetch_object($result)){
            ?>
            <tr>
                <td><?php echo $row->cid ?></td>
                <td><?php echo $row->cname ?></td>
                <td><?php echo $row->credit ?></td>
                <td><?php echo $row->tname ?></td>
                <td><?php echo $row->score ?></td>
            </tr>
            <?php
        }
    }
    ?>
</table>
<h4>不及格课程记录</h4>
<table>
    <tr>
        <th>课程号</th>
        <th>课程名</th>
        <th>学分</th>
        <th>教师名</th>
        <th>成绩</th>
    </tr>
    <?php

    $com="select * from course natural join (select * from student_course where sid='$sid' and status='0' and score<60 ) as chosen  " ;
    
    $result=mysqli_query($db,$com);
    if($result){
        while($row=mysqli_fetch_object($result)){
            ?>
            <tr>
                <td><?php echo $row->cid ?></td>
                <td><?php echo $row->cname ?></td>
                <td><?php echo $row->credit ?></td>
                <td><?php echo $row->tname ?></td>
                <td><?php echo $row->score ?></td>
            </tr>
            <?php
        }
    }
    mysqli_close($db);
    ?>
</table>
</body>
</html>
