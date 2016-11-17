<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.2,minimum-scale=1.2,maximum-scale=1.2,user-scalable=no" />
		
		<title>暖思音乐</title>
		<meta name="description" content="暖思,music,lininn,个人音乐盒">
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<link rel="shortcut icon" href="img/7.ico"/>
		<script type="text/javascript" src="js/index.js">
			
		</script>
		<script src="js/mui.min.js"></script>
    
    <script type="text/javascript" charset="utf-8">
      	mui.init();
      
    </script> 
    
		<style type="text/css">
			#add_m{
				width: 40px;
				height: 40px;
				position:absolute;
				right:5%;
				bottom: 15px;
				
			}
			#add_m img{
				height: 40px;
				width: 40px;
				
			}
			.add_form{
				height: 200px;
				width: 200px;
				background: black;
				position: absolute;
				top: -205px;
				border-radius: 10px;
				/*background: linear-gradient(#ecf1f9 0%,#b7c9e8 100%);*/
				background: url(css/img/yun.png);
				left: -170px;
			}
			.a_form{
				
				position: absolute;
				top: 33px;
				left: 30px;
			}
			.a_form li{
				width: 150px;
				padding-left: 20px;
				height: 30px;
				font-size: 12px;
				line-height: 30px;
			}
			.a_form input[type="text"]{
				width: 100px;
				height: 20px;
				
			}
			.a_form input[type="submit"]{
				margin-left: 5px;
				height: 20px;
				width: 40px;
				font-size: 12px;
			}
			.a_form input[type="button"]{
				margin-left: 17px;
				height: 20px;
				width: 40px;
				font-size: 12px;
			}
			
			.add_yin{
		display: none;
			}
			
			#shang_xia{
				bottom: 15px;
				position: absolute;
				left: 15%;
			}
			#houtai {
				float: right;
			}
			#houtai img{
				border-radius: 100%;
				margin-right: 3px;
				margin-top: 3px;
				top: 2px;
				box-shadow: 3px 3px 10px #ccc;
			}
		</style>
	</head>
	<body>
		<section id="yinyue">
			<div id="houtai"><a href="admin/index.html"><img src="img/aa.png"/></a></div>
			<nav id="dao">
			<ul id="contr">
				<li><img src="img/stop.gif" height="38px"/></li>
				<li><img id="kong" src="img/play.gif" height="38px"/></li>
				<li><img src="img/audio.gif" height="38px"/></li>
			</ul>	
			<footer id="upa">
				<input type="range" name="upda" id="upda" value="" min="0" max="100" step="1"/>
			</footer>
			<div id="gundong">
				<input type="range" name="gun_1" id="gun_1" value="0" max="100" min="0" step="1" />
				
			</div>
			</nav>
			
			<article id="ge">
				<ul id="lie">
					<?php
						require "page/sql.php";
						error_reporting(E_ALL^E_NOTICE);
	$id=$_GET["id"];
	if(empty($id)){
	$sql="select * from gequ  order by mdate desc limit 0,10";
		
		
	}else{
		$id=($id-1)*10;
		$sql="select * from gequ  order by mdate desc limit $id,10";
	}					
	
	$result=cha($sql);
	while($row=mysql_fetch_array($result)){
	
	
						?>
					<li onclick="bofang(<?php echo $row['id']?>,'<?php echo $row['mpath']?>',this)"><label class="ali"></label><span><?php echo $row['mname']?></span><input type="hidden" name="" class="jilu"  id="" value="<?php echo $row['mpath']?>" /></li>
					
					
				<?php 
				}
					?>
					
				</ul>
				
			</article>
			<div id="add_m"><img id="tuaa" src="img/add.png"/><div id="cc" class="add_form add_yin">
				<form action="page/insert.php" method="post">
					<ul class="a_form">
						<li><input type="text" name="gname" placeholder="歌曲名称" required="required"></li>
						<li><input type="text" name="gurl" placeholder="歌曲链接" required="required"></li>
						<li><input type="submit" value="添加" class="a_an"><input type="button" id="quxi" value="取消" class="a_an"></li>
					</ul>
				</form>
				
			</div></div>
			<div id="shang_xia">
				<input type="image" src="img/shang.png" name="" id="shang" value="" />
				<input type="image" src="img/xia.png" name="" id="xia" value="" />
			</div>
		</section>
		
		<audio id="gequ"></audio>
	</body>
</html>
