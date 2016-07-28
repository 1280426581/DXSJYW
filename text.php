<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>text</title>
	<style>
	*{
		padding: 0;
		margin: 0;
	}
	#div1{
		width: 1140px;
		height: 290px;
		overflow: hidden;
		background:red;
		position: relative;
	}
	#div1 ul{
		position: absolute;
		left: 0;
		top: 0;
		transition:left 1s;

		-moz-transition:left 1s; /* Firefox 4 */

		-webkit-transition:left 1s; /* Safari and Chrome */

		-o-transition:left 1s; /* Opera */
	}
	#div1 ul li{
		float: left;
		width: 1140px;
		height: 290px;
		list-style: none;
	}
	.arrow { cursor: pointer; display: none; line-height: 39px; text-align: center; font-size: 36px; font-weight: bold; width: 40px; height: 40px;  position: absolute; z-index: 2; top: 125px; background-color: RGBA(0,0,0,.3); color: #fff; text-decoration: none;}
        .arrow:hover { background-color: RGBA(0,0,0,.7);}
        #div1:hover .arrow { display: block;}
        #prev { left: 20px;}
        #next { right: 20px;}

	</style>
	<script>
	window.onload=function(){
		var div=document.getElementById('div1');
		var ul=document.getElementsByTagName('ul')[0];
		var li=document.getElementsByTagName('li');
		var prev=document.getElementById('prev');
		var next=document.getElementById('next');
		ul.style.width=li[0].offsetWidth*li.length+'px';
		var timer;
		// 开始运动
		function startmove(offset){
		ul.style.left=ul.offsetLeft+offset+'px';
		if(ul.offsetLeft<-6840){
				ul.style.left=0+'px';
			}
		if(ul.offsetLeft>0){
				ul.style.left=-6840+'px';
			}
		}
		next.onclick=function(){
			startmove(-1140);
		}
		prev.onclick=function(){
			startmove(1140);
		}
		function play() {
                timer = setInterval(function () {
                    next.onclick();
                }, 5000);
            }
        function stop() {
                clearTimeout(timer);
            }
        div.onmouseover=stop();
        div.onmouseout=play();
		play();
	}
	</script>
</head>
<body>
<div id="div1">
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
	<a href="javascript:;" id="prev" class="arrow">&lt;</a>
    <a href="javascript:;" id="next" class="arrow">&gt;</a>
</div>
	
</body>
</html>