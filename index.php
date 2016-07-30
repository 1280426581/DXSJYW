<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/js.js"></script>
	<script>
		
	</script>
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
			<?php
				if($_SESSION['username']==''){	
			 ?>

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
				<input type="buttons" id="login" class="inputlittlebutton inputbuttoncolor1" value="登陆"  onclick="check_form();" disabled="disabled" readonly>
				<input type="buttons" class="inputlittlebutton inputbuttoncolor2"  onclick="window.open('index.php')"  value="注册" readonly>
				</form>
				<?php 
				}
				else
				{
				?>
				<h2 class="textcenter">欢迎：<?php echo $_SESSION['username'] ?></h2>
				<?php if($_SESSION['po']=='admin') { ?>
				<input type="buttons" class="inputlargebutton inputbuttoncolor3"   onclick="location.href='admin.php'  "  value="管理入口" readonly>
				<?php }?>
				<?php if($_SESSION['po']=='qiye') { ?>
				<input type="buttons" class="inputlargebutton inputbuttoncolor3"   onclick="location.href='zhaopin.php'  "  value="发布招聘信息" readonly>
				<input type="buttons" class="inputlargebutton inputbuttoncolor4"   onclick="location.href='newslistqiye.php'  "  value="查看发布的招聘信息" readonly>
				<?php }?>
				<?php if($_SESSION['po']=='geren') { ?>
				<input type="buttons" class="inputlargebutton inputbuttoncolor3"   onclick="location.href='qiuzhi.php'  "  value="发布求职信息" readonly>
				<input type="buttons" class="inputlargebutton inputbuttoncolor4"   onclick="location.href='newslistgeren.php'  "  value="查看发布的求职信息" readonly>
				<?php }?>
				<input type="buttons" class="inputlargebutton inputbuttoncolor1" value="修改资料" onclick="window.open('user_edit.php')" readonly >
				<input type="buttons" class="inputlargebutton inputbuttoncolor2"   onclick="location.href='login_out.php'" value="退出" readonly>
				<?php 
				}
				?>
			</div>
		</div>
	</nav>
</body>
</html>
