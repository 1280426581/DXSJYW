window.onload=function(){
	// 轮播图开始
		var div=document.getElementById('div1');
		var ul=document.getElementsByTagName('ul')[1];
		var li=ul.getElementsByTagName('li');
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
                }, 3000);
            }
        function stop() {
                clearTimeout(timer);
            }
        div.onmouseover=stop();
        div.onmouseout=play();
		play();
	}