<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/fun.css">
    <title>院系管理 >> 专业列表</title>
</head>
<body>
<h3 class="subtitle">院系管理 >> 专业查询</h3>
<form action="./fun/getMajor.php" method="get" target="resultbox">
     <div class="twocols inputbox"><span>院系：</span>
    <?php
    require_once '../config/database.php';
    echo '<select name="did">';
    $dept=mysqli_query($db,"select did,dname from department");
    while($dr=mysqli_fetch_object($dept)) {
        var_dump($dr);
        echo '<option value="'.$dr->did.'" ';  echo '> '.$dr->dname.'</option>' ;
    }
    echo '</select>';
    mysqli_close($db);
    ?></div>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="提交"></div>
    <a style="float:left" href="./fun/addMajor.php" target="resultbox">新增专业</a>

</form>
<iframe name="resultbox" frameborder="0" width="100%" height=500px ></iframe>
</body>
</html>