<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/fun.css">
    <title>数据统计 >> 选课统计</title>
    <script>
        function printresult(){
            document.getElementsByName("resultbox")[0].contentWindow.print();
        }
    </script>
</head>
<body><a style="float:right;margin-right:50px" href="#" onclick="printresult()">打印</a>
<h3 class="subtitle">数据统计 >> 选课统计</h3>
<form action="./fun/classStatistic.php" method="get" target="resultbox">
    <div class="inputbox"><span>课程号：</span><input name="cid"  type="text"></div>
    <div class="inputbox"><span>课程名：</span><input name="cname"  type="text"></div>
    <div class="inputbox"><span>教师姓名：</span><input name="tname"  type="text"></div>
    <div class="inputbox"><span>开课学院：</span>
    <?php
    require_once '../config/database.php';
    echo '<select name="did"><option value="">全部</option>';
    $dept=mysqli_query($db,"select did,dname from department");
    while($dr=mysqli_fetch_object($dept)) {
        var_dump($dr);
        echo '<option value="'.$dr->did.'" ';  echo '> '.$dr->dname.'</option>' ;
    }
    echo '</select>';
    mysqli_close($db);
    ?></div>
    <br>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="提交"></div>
    <div class="redbox clickbox "><span></span><input name="reset" type="reset" value="清除"></div>
</form>

    <iframe name="resultbox" frameborder="0" width="100%" height=550px ></iframe>


</body>
</html>