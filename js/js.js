window.onload=function(){
	// 轮播图开始
		var div=document.getElementById('div1');
		var ul=document.getElementsByTagName('ul')[1];
		var li=ul.getElementsByTagName('li');
		 var buttons = document.getElementById('buttons').getElementsByTagName('span');
		var prev=document.getElementById('prev');
		var next=document.getElementById('next');
		ul.style.width=li[0].offsetWidth*li.length+'px';
		var timer;
		var index =1;
		// 小圆点自动切换
		function showbutton(){
			for (var i = 0; i < buttons.length; i++) {
				if(buttons[i].className='on'){
					buttons[i].className='';
				}
			}
			buttons[index-1].className='on';
		};
		// 开始运动
		var liwidth=li[0].offsetWidth*(li.length-1);
		function startmove(offset){
		ul.style.left=ul.offsetLeft+offset+'px';
		if(ul.offsetLeft<-liwidth){
				ul.style.left=0+'px';
			}
		if(ul.offsetLeft>0){
				ul.style.left=-liwidth+'px';
			}
		}
		next.onclick=function(){
			index++;
			if(index>li.length){
				index=1;
			};
			startmove(-li[0].offsetWidth);
			showbutton();
		}
		prev.onclick=function(){
			index--;
			if(index<1){
				index=8;
			};
			startmove(li[0].offsetWidth);
			showbutton();
		}
		function play() {
                timer = setInterval(function () {
                    next.onclick();
                }, 3000);
            }
        function stop() {
                clearInterval(timer);
            }

       	for (var i = 0; i < buttons.length; i++) {
       		 buttons[i].onclick = function () {
       				if(this.className == 'on') {
                        return;
                    }
                    var myIndex = parseInt(this.getAttribute('index'));
                    var offset = -li[0].offsetWidth * (myIndex - index);
                    startmove(offset);
					index = myIndex;
                    showbutton();
                }
       	}
        play();
        div.onmouseover=stop;
        div.onmouseout=play;
	}