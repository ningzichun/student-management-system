<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/fun.css">
    <title>Title</title>
</head>
<body>
<h3>新增奖惩</h3>
<form style="margin:30px;"action="./fun/addLog.php" method="post" id="log">

    <span>学号：</span><input name="sid" required type="text" style="width:180px"><br>
    <span>类型：</span><input name="type" required type="radio" value="1" >奖<input name="type" type="radio" value="0">惩<br>
    <span>时间：</span><input name="logdate" required type="date" style="width:180px"><br>
    <span>缘由：</span><input name="reason"required  type="text" class="boxwidth">
    <br>
    <span>详情：</span><br><textarea style="display:block;width:90%;height:60px;"name="detail" required form="log"></textarea><br>
    <input name="submit" type="submit" value="提交"><br>
</form>
<div style="width: 90%;height: 55px;margin: 50px"><div style="margin: 0 auto;width: 90px;height: 30px;background-color: #117700"><a style="text-decoration: none;padding:3px;color: #f3f3f3;text-align: center;display: block" href="#" onclick="javascript:history.back(-1);">返回</a></div> </div>
</body>
</html>