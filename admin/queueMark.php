<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/fun.css">
    <title>选课管理 >> 登记分数</title>
</head>
<body>

<div class="titlebox">
    <h3>选课管理 >> 登记分数</h3>
    <p>使用提示：在这里你可以登记学生的成绩。查找到学生后修改成绩。下面的选项可以模糊搜索。</p>
</div>

<div class="formbox">
    <form action="./fun/getMark.php" method="get" target="resultbox">
        <div class="input_mid">学号<input name="sid"  type="text"></div>
        <div class="input_mid">学生姓名<input name="name"  type="text"></div>
        <div class="input_mid">课程号<input name="cid"  type="text"></div>
        <div class="input_mid">课程名<input name="cname"  type="text"></div>
        <div class="clickbox clearfloat firstbox"><input name="submit" type="submit" value="提交"></div>
        <div class="redbox clickbox "><input name="reset" type="reset" value="清除"></div>
    </form>
</div>

<div class="resultbox">
    <iframe name="resultbox" frameborder="0" width="100%" height=500px ></iframe>
</div>


</body>
</html>