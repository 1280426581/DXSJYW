window.onload=function(){
	// 轮播图开始
		var div=document.getElementById('div2');
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
			var time=300;
			var interval=10;
			var speed=offset/(time/interval);
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


        // 验证滑块
        var obox=document.getElementById('huakuai');
	var odiv=document.getElementById('div1');
	var onext=document.getElementById("login");

	var x=0;
	var y=0;
	obox.onmousedown=function(ev)
	{
		var oevent=ev||event;
		x=oevent.clientX-obox.offsetLeft;
	
		odiv.onmousemove=function(ev)
		{
			obox.style.cursor="move";
		var oevent=ev||event;
		var l=oevent.clientX-x;
		
			if(l<0)
			{
				l=0;	
			}
			else if(l>odiv.offsetWidth-obox.offsetWidth)
			{
				l=odiv.offsetWidth-obox.offsetWidth;
				odiv.style.background="#2ECC71";
				odiv.style.color="white";
				odiv.innerHTML="验证成功！";
				onext.disabled=null;
			};
			obox.style.left=l+"px";
		};

		obox.onmouseup,document.onmouseup=function()
		{
		obox.style.left=0;
		obox.style.cursor="";
		odiv.onmousemove=null;
		odiv.onmouseup=null;
		};
	};
	
	}
	// 检查用户名密码：
	function check_form()
{
	if(form1.username.value.length<5 || form1.username.value.length>20)
	{
		alert("用户名必须在5-20位之间！");
		return false;
		}
	else if	(form1.password.value.length<5|| form1.password.value.length>20)
	{
		alert("密码必须在5-20位之间！");
		return false;
		}
	else
	document.getElementById('form1').submit()
	}

