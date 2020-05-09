<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/fun.css">
    <title></title>
</head>
<body>
<h3 class="subtitle">新增专业</h3>
<form action="./addMajorFun.php" method="get" target="resultbox">
    <div class="inputbox"><span>学院：</span>
    <?php
    require_once '../../config/database.php';
    echo '<select required name="did">';
    $dept=mysqli_query($db,"select did,dname from department");
    while($dr=mysqli_fetch_object($dept)) {
        var_dump($dr);
        echo '<option value="'.$dr->did.'" ';  echo '> '.$dr->dname.'</option>' ;
    }
    echo '</select>';
    mysqli_close($db);
    ?></div>
    <div class="inputbox"><span>专业名称：</span><input name="mname" required type="text"></div>

    <br>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="提交"></div>
    <div class="redbox clickbox "><span></span><input name="reset" type="reset" value="清除"></div>
    <p>注：所有项必填！</p>
</form>

    <iframe name="resultbox" frameborder="0" width="100%" height=100px ></iframe>


</body>
</html>