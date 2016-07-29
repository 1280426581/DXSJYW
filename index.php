<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/js.js"></script>
</head>
<body>
	<header>
		<ul>
			<li><a href="">新闻速递</a></li>
			<li><a href="">政策法规</a></li>
			<li><a href="">招聘信息</a></li>
			<a href="index.php"><li></li></a>
			<li><a href="">求职信息</a></li>
			<li><a href="">BBS论坛</a></li>
			<li><a href="">后台管理</a></li>
		</ul>
	</header>
	
	<nav>
		<div id="div2">
			<ul >
				<li><a href=""><img src="img/11.jpg" alt=""></a></li>
				<li><a href=""><img src="img/22.jpg" alt=""></a></li>
				<li><a href=""><img src="img/33.jpg" alt=""></a></li>
				<li><a href=""><img src="img/44.jpg" alt=""></a></li>
				<li><a href=""><img src="img/55.jpg" alt=""></a></li>
				<li><a href=""><img src="img/66.jpg" alt=""></a></li>
				<li><a href=""><img src="img/77.jpg" alt=""></a></li>
				<li><a href=""><img src="img/88.jpg" alt=""></a></li>
			</ul>
			<div id="buttons">
		        <span index="1" class="on"></span>
		        <span index="2"></span>
		        <span index="3"></span>
		        <span index="4"></span>
		        <span index="5"></span>
		        <span index="6"></span>
		        <span index="7"></span>
		        <span index="8"></spanormaln>
    		</div>
			<a href="javascript:;" id="prev" class="arrow"><</a>
		    <a href="javascript:;" id="next" class="arrow">></a>
			<!-- 登陆开始 -->
			<div id="loginbox">
				<form id="form1" name="form1" method="post" action="login_code.php">
				<h2 class="textcenter">用户登陆</h2>
				<input type="text" name="username" placeholder="输入用户名">
				<input type="password" name="password" placeholder="输入密码">
					<div class="div1">
				    	<div id="div1" >请按住滑块，向右滑动
					        <div id="huakuai">
					        <p id="huakuaitext">&gt;&gt;</p>
		        			</div>
		    			</div>
					</div>

				<input type="buttons" id="login" class="inputlittlebutton" value="登陆"  onclick="document.getElementById('form1').submit();" disabled="disabled">
				<input type="buttons" class="inputlittlebutton" value="注册" readonly>
				</form>
			</div>
		</div>
	</nav>
</body>
</html>