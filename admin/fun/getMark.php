<?php

require_once("../../config/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../css/fun.css">
    <script>
    function addScore(sid,cid){
        var score = prompt("请输入成绩","");
        window.location.href="./addScore.php?sid="+sid+"&cid="+cid+"&score="+score;
    }
</script>
</head>
<body>
<table>
    <tr>
        <th>学号</th>
        <th>姓名</th>
        <th>课程号</th>
        <th>课程名</th>
        <th>教师</th>
        <th>学分</th>
        
        <th>备注</th>
    </tr>
    <?php
    $com="select * from student natural join student_course as v1 left join course on v1.cid=course.cid where score is null  " ;

    
    if($_GET['sid']){
        $com=$com." and sid like '%".$_GET['sid']."%'";
    }
    if($_GET['name']){
        $com=$com." and name like '%".$_GET['name']."%'";
    }
    if($_GET['cname']){
        $com=$com." and cname like '%".$_GET['cname']."%'";
    }
    if($_GET['cid']){
        $com=$com." and v1.cid like '%".$_GET['cid']."%'";
    }

    $result=mysqli_query($db,$com);
    if($result){
        while($row=mysqli_fetch_object($result)){
            ?>
            <tr>
                <td><?php echo $row->sid ?></td>
                <td><?php echo $row->name ?></td>
                <td><?php echo $row->cid ?></td>
                <td><?php echo $row->cname ?></td>
                <td><?php echo $row->tname ?></td>
                <td><?php echo $row->credit ?></td>
                <td><?php if($row->statius==0) echo("首次"); else echo("重修")?> / 
                <a onclick="addScore(<?php echo $row->sid.",".$row->cid; ?>);" href="#">登记成绩</a></td>
            </tr>
            <?php
        }
    }

    mysqli_close($db);
    ?>
</table>
</body>

</html>