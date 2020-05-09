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
        <th>课程号</th>
        <th>课程名</th>
        <th>教师名</th>
        <th>开课学院</th>
        <th>选课人数</th>
        <th>已修人次</th>
        <th>平均分数</th>
        <th>操作</th>
    </tr>
    <?php
    require_once("../../config/database.php");

    $com="select * from course left join (select did,dname from department)as v1 on course.did=v1.did left join
(select cid,count(sid) as taking from student_course natural join course where score is null group by cid) as v2 on course.cid=v2.cid left join
(select cid,count(sid) as finished ,avg(score) as avg_score from student_course natural join course where score is not null group by cid) as v3 on course.cid=v3.cid  where 1=1" ;
    

    if($_GET['cid']){
        $com=$com." and course.cid like '%".$_GET['cid']."%'";
    }
    if($_GET['cname']){
        $com=$com." and cname like '%".$_GET['cname']."%'";
    }
    if($_GET['tname']){
        $com=$com." and tname like '%".$_GET['tname']."%'";
    }
    if($_GET['did']){
        $com=$com." and v1.did like '%".$_GET['did']."%'";
    }

    $result=mysqli_query($db,$com);
    if($result){
        while($row=mysqli_fetch_object($result)){
            ?>
            <tr>
                
                <td><?php echo $row->cid ?></td>
                <td><?php echo $row->cname ?></td>
                <td><?php echo $row->tname ?></td>
                <td><?php echo $row->dname ?></td>
                <td><?php if($row->taking==0)echo "0";else echo $row->taking ?></td>
                <td><?php if($row->finished==0)echo "0";else echo $row->finished ?></td>
                <td><?php echo $row->avg_score ?></td>
                <td><a href="getClassScore.php?cid=<?php echo $row->cid ?>">详情</a></td>
            </tr>
            <?php
        }
    }

    mysqli_close($db);
    ?>
</table>
</body>
</html>