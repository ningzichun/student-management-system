<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="./css/fun.css">
</head>
<body>
    <div class="subtitle">
        <h3>课程查询</h3>
    </div>
    <form action="./fun/getCourse.php" method="get" target="resultbox">
        
        <div class="inputbox"><span>课程号：</span><input name="cid"  type="text"></div>
        <div class="inputbox"><span>课程名：</span><input name="cname"  type="text"></div>
        <div class="inputbox"><span>学分：</span><input name="credit"  type="text"></div>
        <div class="inputbox"><span>上课地址：</span><input name="caddr"  type="text"></div>
        <div class="inputbox"><span>开课学院：</span><input name="dname"  type="text"></div>
        <div class="inputbox"><span>教师姓名：</span><input name="tname"  type="text"></div>
    <div class="clickbox clearfloat"><span></span><input name="submit" type="submit" value="提交"></div>
    <div class="redbox clickbox "><span></span><input name="reset" type="reset" value="清除"></div>
        
    </form>
    <iframe name="resultbox" frameborder="0" width="100%" height=550px ></iframe>
</body>
</html>