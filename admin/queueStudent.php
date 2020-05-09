<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/fun.css">
    <title>学生管理 >> 查询学生</title>
</head>
<body>
<h3 class="subtitle">学生管理 >> 查询学生</h3>
<form action="./fun/getStudent.php" method="post" target="resultbox">
    <div class="inputbox"><span>学号：</span><input name="sid"  type="text"></div>
    <div class="inputbox"><span>姓名：</span><input name="name"  type="text"></div>
    <div class="inputbox"><span>性别：</span>
        <select  name="sex">
            <option value="">未指定</option>
            <option value="男">男</option>
            <option value="女">女</option>
        </select></div>
    <div class="inputbox"><span>年龄：</span><input name="age"  type="text"></div>
    <div class="inputbox"><span>班级：</span><input name="class"  type="text"></div>
    <div class="inputbox"><span>院系：</span><input name="dname"  type="text"></div>
    <div class="inputbox"><span>证件号：</span><input name="idnum"  type="text"></div>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="提交"></div>
    <div class="redbox clickbox "><span></span><input name="reset" type="reset" value="清除"></div>
</form>
<iframe name="resultbox" frameborder="0" width="100%" height="500px" ></iframe>

</body>
</html>