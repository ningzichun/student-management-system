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
        <th>奖惩</th>
        <th>缘由</th>
        <th>详情</th>
        <th>发生时间</th>
        <th>录入时间</th>
        <th>操作</th>
    </tr>
    <?php
    require_once("../../config/database.php");

    $com='select * from student_log left join (select sid sid2,name from student) as sname on student_log.sid=sname.sid2 where 1=1 ' ;
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
                
                <td><?php echo '<a href="./modiLog.php?sid='.$row->sid.'">'.$row->sid.'</a>';?></td>
                <td><?php echo $row->name ?></td>
                <td><?php
                    if ($row->type==1){
                        echo '奖';
                    }
                    else{
                        echo '惩';
                    }
                    ?></td>
                <td><?php echo $row->reason ?></td>
                <td><?php echo $row->detail ?></td>
                <td><?php echo $row->logdate ?></td>
                <td><?php echo $row->addtime ?></td>
                <td><a href="modiLog.php?sid=<?php echo $row->sid."&addtime=".$row->addtime; ?>">修改</a> / <a href="delLog.php?sid=<?php echo $row->sid."&addtime=".$row->addtime; ?>">删除</a></td>
            </tr>
            <?php
        }
    }

    mysqli_close($db);
    ?>
</table>
</body>
</html>