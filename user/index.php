<?php 
session_start();
if(!isset($_SESSION["user"])||!$_SESSION["login"]==true){
        header ("HTTP/1.1 302 Moved Temporatily"); 
        header ("Location: "."../"); 
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="container topnav">
    <div class="logo">
        学生选课信息管理系统
    </div>
    <div class="userbox" style="float:right">
        当前用户：<?php echo $_SESSION["user"]?>  <a href="../logout.php">登出</a>
    </div>

</div>
<div class="container main">
    <div class="leftnav">
        <div class="homepage">
            <a href="./welcome.php" target="frame">首页</a>
        </div>
        <div class="subtitle">
            个人信息
        </div>
        <div class="item">
            <a href="./myInfo.php" target="frame">学籍信息</a>
        </div>
        <div class="item">
            <a href="./editInfo.php" target="frame">修改信息</a>
        </div>
        <div class="subtitle">
            选课管理
        </div>
        <div class="item">
            <a href="./queueClass.php" target="frame">开课查询</a>
        </div>
        <div class="item">
            <a href="./myClass.php" target="frame">选课管理</a>
        </div>
        <div class="subtitle">
            成绩查询
        </div>
        <div class="item">
            <a href="./myScore.php" target="frame">学科成绩</a>
        </div>
        <div class="item">
            <a href="./myRetake.php" target="frame">重修管理</a>
        </div>
        <div class="subtitle">
            奖惩管理
        </div>
        <div class="item">
            <a href="./myLog.php" target="frame">奖惩查询</a>
        </div>
        <div class="item">
            <a href="./addLog.php" target="frame">项目录入</a>
        </div>
        <div class="subtitle">
            系统管理
        </div>
        <div class="item">
            <a href="./editPass.php" target="frame">修改密码</a>
        </div>



    </div>
    <div class="content">
        <iframe name="frame" frameborder="0" width="100%" src="./welcome.php"></iframe>
    </div>

</div>
<div class="container footer">
    <span>数据库系统课程设计@2019</span>
</div>
</body>
</html>