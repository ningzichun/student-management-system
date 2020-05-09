<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../css/fun.css">
</head>
<body>
<table>
    <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>学院</th>
        <th>操作</th>
    </tr>
    <?php
    require_once("../../config/database.php");

    $com="select * from student natural join (select did,dname from department) as didname where 1=1" ;
    if($_GET['sid']){
        $com=$com." and sid like '%".$_GET['sid']."%'";
    }
    if($_GET['name']){
        $com=$com." and name like '%".$_GET['name']."%'";
    }
    $result=mysqli_query($db,$com);
    if($result){
        while($row=mysqli_fetch_object($result)){
            ?>
            <tr>
                
                <td><?php echo $row->sid ?></td>
                <td><?php echo $row->name ?></td>
                <td><?php echo $row->dname ?></td>
                <td><a href="modiStudent.php?sid=<?php echo $row->sid ?>">学生详情</a> / <a href="./resetPassword.php?sid=<?php echo $row->sid; ?>">重置密码</a></td>
            </tr>
            <?php
        }
    }

    mysqli_close($db);
    ?>
</table>
</body>
</html>