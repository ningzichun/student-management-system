<?php
    require_once("../config/database.php");
    session_start();
    $sid=$_SESSION['user'];
    $cid=$_GET['cid'];
    $com="delete from student_course where sid='$sid' and cid='$cid' and score is null" ;
    echo "<h3 style='text-align:center'>";
    $result=mysqli_query($db,$com);
    if($result){
        echo "提示：操作成功！";
    }
    else{
        echo "数据未更改。";
    }
    echo "</h3>";
    mysqli_close($db);
?>
<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="#" onclick="javascript:history.back(-1);">返回</a></div> </div>