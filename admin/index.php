<?php 
session_start();
if(!isset($_SESSION["admin"])||!$_SESSION["login"]==true){
        header ("HTTP/1.1 302 Moved Temporatily"); 
        header ("Location: "."../"); 
        exit();
    }
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>学生选课信息管理系统@2019</title>
</head>
<body>
<div class="container topnav">
    <div class="logo">
        学生选课信息管理系统
    </div>
    <div class="userbox" style="float:right">
        你好，管理员 <?php echo $_SESSION["admin"]?> <a href="../logout.php"> 登出</a>
    </div>

</div>
<div class="container main">
    <div class="leftnav">
        <div class="homepage">
            <a href="./welcome.php" target="frame">首页</a>
        </div>
        <div class="subtitle">
            学生管理
        </div>
        <div class="item">
            <a href="./addStudent.php" target="frame">新增学生</a>
        </div>
        <div class="item">
            <a href="./queueStudent.php" target="frame">查询学生</a>
        </div>
        <div class="item">
            <a href="./getLog.php" target="frame">奖惩管理</a>
        </div>
        <div class="subtitle">
            院系管理
        </div>
        <div class="item">
            <a href="./queueDept.php" target="frame">院系信息</a>
        </div>
        <div class="item">
            <a href="./queueMajor.php" target="frame">专业列表</a>
        </div>
        <div class="subtitle">
            课程管理
        </div>
        <div class="item">
            <a href="./queueCourse.php" target="frame">课程查询</a>
        </div>
        <div class="item">
            <a href="./addCourse.php" target="frame">新增课程</a>
        </div>
        <div class="subtitle">
            选课管理
        </div>
        <div class="item">
            <a href="./queueChoose.php" target="frame">学生选课</a>
        </div>
        <div class="item">
            <a href="./queueMark.php" target="frame">登记分数</a>
        </div>
        <div class="item">
            <a href="./queueRetake.php" target="frame">补考重修</a>
        </div>
        <div class="subtitle">
            数据统计
        </div>
        <div class="item">
            <a href="./scoreStatistic.php" target="frame">成绩统计</a>
        </div>
        <div class="item">
            <a href="./classStatistic.php" target="frame">选课统计</a>
        </div>
        <div class="subtitle">
            系统设置
        </div>
        <div class="item">
            <a href="./userManage.php" target="frame">用户管理</a>
        </div>
        <div class="item">
            <a href="./changePassword.php" target="frame">修改密码</a>
        </div>


    </div>
    <div class="content">
        <iframe name="frame" frameborder="0" width="100%"  scrolling="no"  src="./welcome.php"></iframe>
    </div>

</div>
<div class="container footer">
    <span>数据库系统课程设计@2019</span>
</div>
</body>
</html>