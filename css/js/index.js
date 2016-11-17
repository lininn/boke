var timer=null;
window.onload=function(){
	
	var kon=document.getElementById("kong");
				var a=document.getElementById("contr");
				var con=a.getElementsByTagName('li');
				var bo=document.getElementById("gequ");//audio
				var upda=document.getElementById("upda");//滚动条
				var da=document.getElementById("upa");
				upda.value=bo.volume*100;
				upda.onchange=function(){
					bo.volume=upda.value/100;
				}
				con[1].onclick=function(){
					
					if(bo.paused){
						bo.play();
						kon.src="img/play.gif"
					}else{
						bo.pause();
						kon.src="img/stop.gif"
					}
					
//					alert(bo.currentTime);


	//var gun_1=document.getElementById("gun_1");
		dong();
	

	
	

				}
				con[0].onclick=function(){
					bo.pause();
				}
			upda.onmouseover=con[2].onmouseover=function(){
					da.style.display='block';
					
				}
			upda.onmouseout=con[2].onmouseout=function(){
				da.style.display='none';
			}
			
				
			}
			function bofang(id,dizhi,obj){
				dong();
				var a=document.getElementById("kong");
			a.src="img/play.gif";
			var a=document.getElementById("lie");
				var len=a.children.length;
				var la=a.getElementsByTagName('label');
			for(var i=0;i<len;i++){
				la[i].innerHTML="";
			}
				obj.children[0].innerHTML="<img src='img/play.gif' height='15px' width='15px'>";
				document.getElementById("gequ").src=dizhi;
					var bo=document.getElementById("gequ").play();
			}
			

function dong(){
	clearInterval(timer);
		var bo=document.getElementById("gequ");//audio
	timer=setInterval(shijian,100);
	
	
	gun_1.onmouseover=function(){
		clearInterval(timer);
		//bo.currentTime=bo.duration*(gun_1.value/100);
	}
	gun_1.onmouseup=function(){
		var gun_1=document.getElementById("gun_1");
		bo.currentTime=bo.duration*(gun_1.value/100);
		timer=setInterval(shijian,100);
	}
	gun_1.onmouseout=function(){
		clearInterval(timer);
		timer=setInterval(shijian,100);
		
	}
	
	function shijian(){
	
var va=(bo.currentTime/bo.duration)*100;
var gun_1=document.getElementById("gun_1");
gun_1.value=va;
if(bo.ended){
	
	
	clearInterval(timer);
	xia();
}
	}	
}
//function xia(){
//	var ali=document.getElementsByClassName('ali');
//	for(var i=0;i<ali.length;i++){
//		if(ali[i].innerHTML){
//			if(ali[i+1]){
//			dong();
//				var a=document.getElementById("kong");
//			a.src="img/play.gif";
//			var a=document.getElementById("lie");
//				var len=a.children.length;
//				var la=a.getElementsByTagName('label');
//			for(var i=0;i<len;i++){
//				la[i].innerHTML="";
//			}
//				obj.children[0].innerHTML="<img src='img/play.gif' height='15px' width='15px'>";
//				document.getElementById("gequ").src=dizhi;
//					var bo=document.getElementById("gequ").play();
//					
//		}
//	}
//	
//}
