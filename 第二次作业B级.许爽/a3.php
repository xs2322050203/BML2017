<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
.one:link { font-size:20px;color:black;}    /* 未被访问的链接 */
.one:visited { font-size:20px;color:gray} /* 已被访问的链接 */
.one:hover { font-size:20px;color:blue;}   /* 鼠标指针移动到链接上 */
.one:active { font-size:20px;color:red;}  /* 正在被点击的链接 */
</style>
</head>
<body>
<?php 

$book=fopen('3.txt','r');
echo fread($book,filesize('3.txt'));

fclose($book);	
 ?>
 <br>
 <a class="one" href="abc.html" target="_blank"><strong>点我返回上一界面</strong></a>
</body>
</html>