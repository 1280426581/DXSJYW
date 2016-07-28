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
	#buttons { position: absolute; height: 10px; width: 140px; z-index: 2; bottom: 15px; left: 500px;}
    #buttons span { cursor: pointer; float: left; border: 1px solid #fff; width: 10px; height: 10px; border-radius: 50%; background: #333; margin-right: 5px;}
    #buttons .on {  background: orangered;}
	#prev { left: 20px;position: absolute;z-index: 100;}
   	#next { right: 20px;position: absolute;z-index: 100;}
	.arrow { cursor: pointer;line-height: 39px; text-align: center; font-size: 36px; font-weight: bold; width: 40px; height: 40px;  position: absolute; z-index: 2; top: 125px; background-color: RGBA(0,0,0,.3); color: #fff;display: none; text-decoration: none;}
    .arrow:hover { background-color: RGBA(0,0,0,.7);}
	#div1:hover .arrow { display: block;}
	</style>
	<script>
	window.onload=function(){
		var odiv=document.getElementById('div1');
		var oul=document.getElementsByTagName('ul')[0];
		var ali=document.getElementsByTagName('li');
		var buttons = document.getElementById('buttons').getElementsByTagName('span');
		var prev = document.getElementById('prev');
        var next = document.getElementById('next');
        var index=1;
        var timer;
        oul.style.width=ali[0].offsetWidth*ali.length+'px';
        // 小圆点切换
        function showbutton(){
        	for (var i = 0; i < buttons.length; i++) {
        		if(buttons[i].className=='on'){
        			buttons[i].className='';
        			break;
        		}	
        	}
        	buttons[index-1].className='on';
        };
        // 大图切换
		function animate(offset){
			oul.style.left=oul.offsetLeft+offset+'px';
			if(oul.offsetLeft>0){
				oul.style.left=-7980+'px';
			}
			if(oul.offsetLeft<-7980){
				oul.style.left=0+'px';
			}
		};

		function play(){

		};


		next.onclick=function(){
			if(index==8){
				index=1;
			}
			else{
				index+=1;
			}
			showbutton();
			animate(-1140);
		};
		prev.onclick=function(){
			if(index==1){
				index=8;
			}
			else{
				index-=1;
			}
			showbutton();
			animate(1140);
		};

		for (var i = 0; i < buttons.length; i++) {
			buttons[i].onclick=function(){
				if(this.className=='on'){
					return;
				}
				var myindex=parseInt(this.getAttribute('index'));
				var myoffset=(myindex-index)*1140;
				animate(myoffset);
				index=myindex;
				showbutton();
			};
		}

	};
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
	<div id="buttons">
        <span index="1" class="on"></span>
        <span index="2"></span>
        <span index="3"></span>
        <span index="4"></span>
        <span index="5"></span>
        <span index="6"></span>
        <span index="7"></span>
        <span index="8"></span>
    </div>
	<a href="javascript:;" id="prev" class="arrow"><</a>
    <a href="javascript:;" id="next" class="arrow">></a>
</div>
	
</body>
</html>