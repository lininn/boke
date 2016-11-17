<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,height=device-height, user-scalable=no,initial-scale=1, minimum-scale=1, maximum-scale=1,target-densitydpi=device-dpi ">  
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<script type="text/javascript" src="js/index.js">
			
		</script>
	</head>
	<body>
		<section id="yinyue">
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
						
	$sql="select * from gequ";
	$result=cha($sql);
	while($row=mysql_fetch_array($result)){
	
	
						?>
					<li onclick="bofang(<?php echo $row['id']?>,'<?php echo $row['mpath']?>',this)"><label class="ali"></label><span><?php echo $row['mname']?></span><input type="hidden" name="" class="jilu"  id="" value="<?php echo $row['mpath']?>" /></li>
					
					
				<?php 
				}
					?>
					
				</ul>
			</article>
		</section>
		<audio id="gequ"></audio>
	</body>
</html>
