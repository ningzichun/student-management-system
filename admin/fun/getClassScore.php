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
        <th>班级</th>
        <th>成绩</th>
        <th>类型</th>
    </tr>
    <?php
    require_once("../../config/database.php");
    $cid=$_GET["cid"];
    $com="select * from (select * from student_course where cid='$cid' )as v1 natural join (select sid,name,class,did from student) as v2 natural join (select did,dname from department) as v3 " ;
    

    $result=mysqli_query($db,$com);
    if($result){
        while($row=mysqli_fetch_object($result)){
            ?>
            <tr>
                <td><?php echo $row->sid ?></td>
                <td><?php echo $row->name ?></td>
                <td><?php echo $row->dname ?></td>
                <td><?php echo $row->class ?></td>
                <td><?php if($row->score==0) echo("未考试"); else echo $row->score ?></td>
                <td><?php if($row->status==1)echo "重修" ;else echo "首次" ?></td>
            </tr>
            <?php
        }
    }

    mysqli_close($db);
    ?>
</table>
<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="#" onclick="javascript:history.back(-1);">返回</a></div> </div>
</body>
</html>