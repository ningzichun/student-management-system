<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./user.css">
</head>
<body>
    <div class="subtitle">
        <h3>课程查询</h3>
    </div>
    <form action="./getClass.php" method="get" target="resultbox">
        
        <div class="inputbox"><span>课程号：</span><input name="cid"  type="text"></div>
        <div class="inputbox"><span>课程名：</span><input name="cname"  type="text"></div>
        <div class="inputbox"><span>学分：</span><input name="credit"  type="text"></div>
        <div class="inputbox"><span>上课地址：</span><input name="caddr"  type="text"></div>
        <div class="inputbox"><span>开课学院：</span><input name="dname"  type="text"></div>
        <div class="inputbox"><span>教师姓名：</span><input name="tname"  type="text"></div>
        <div class="clickbox"><input name="submit" type="submit" value="提交"></div>
        
    </form>
    <iframe name="resultbox" frameborder="0" width="100%" height=400px ></iframe>
</body>
</html>