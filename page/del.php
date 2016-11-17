<?php
	session_start();
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>暖思后台管理</title>
	<link rel="stylesheet" media="(min-width:640px)" type="text/css" href="../css/640.css"/>
<style type="text/css">
	@media only screen and (min-width: 100px) and (max-width: 640px) {
	.ge{
		display: none;
	}	
	table{
		width: 100%;
		border-collapse: collapse;
		position: relative;
	}
	td{
		display: block;
		width: 100%;
		height: 40px;
		border: solid 1px;
		border-bottom: none;
		text-align: center;
		line-height: 40px;
		position: relative;
		font-family: "微软雅黑";
		font-size: 14px;
	}
	
	span{
		display: inline-block;
		width: 20%;
		height: 30px;
		
		position: absolute;
		left: 5%;
		top: 0px;
		
	}
	.iid:before{
		content: "ID";
		font-size: 17px;
		font-weight: bold;
	
	}
	.nnm:before{
		content: "歌曲名称";
		font-size: 15px;
		font-weight: bold;

	}
	
	#anow{
		height: 10px;
		width: 100px;
	top: -80px;
		border: none;
		float: right;
	}
	#anow input{
		height: 15px;
		width: 15px;
	}
	.idbg{
		  
  background:#35b558;
  /*ff5c00 cheng
		 * #35b558绿色
		 */
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;

}
	}
	.nnmbg{
		border-bottom-left-radius:5px;
		border-bottom-right-radius:5px;
		border-bottom: solid 1px;
		box-shadow: 3px 3px 10px #aaa;
	}
	.di{
		height: 90px;
		border:solid 1px;
		line-height: 90px;
	}
	#quan{
		height: 15px;
		width: 15px;
	
	}
	#shanchu{
		height: 35px;
		width: 100px;
		margin-left: 50px;
		font-size: 15px;
		font-family: "微软雅黑";
		cursor: pointer;
	}
	}
</style>
		<script type="text/javascript">
			window.onload=function(){
				var a=document.getElementsByName('shan[]');
				var quan=document.getElementById("quan");
				quan.onclick=function(){
					if(quan.checked){
						for(var i=0;i<a.length;i++){
							a[i].checked=true;
						}
					}else{
					for(var i=0;i<a.length;i++){
							a[i].checked=false;
						}	
					}
				}
				onsubmit=function(){
				return	confirm("您确认要删除？");
				}
			}
		</script>
	</head>
	<body>
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th class="ge">ID</th>
				<th class="ge">歌曲名称</th>
				<th class="ge">歌曲链接</th>
				<th class="ge">添加时间</th>
				<th class="ge">状态</th>
				
				</tr>
				<form action="shan.php" method="post">
				<?php
				
					
				if(empty($_SESSION['usern'])){
					echo "<script>alert('您尚未登录！');location.href='../admin/index.html'</script>";
				}
	require 'sql.php';
	$sql="select * from gequ order by mdate desc";
	$result=cha($sql);
	while($row=mysql_fetch_array($result)){
	
	
					
					?>
				
			<tr>
				<td class="idbg"><span class="iid"></span><?php echo 	$row["id"]?></td>
				<td class="nnmbg"><span class="nnm"></span><?php echo 	$row["mname"]?></td>
				<td class="ge"><a href="<?php echo 	$row["mpath"]?>" target="_blank"><?php echo substr($row["mpath"],0,15).'...'?></a></td>
				<td class="ge"><?php echo 	$row["mdate"]?></td>
				<td id="anow"><input type="checkbox" name="shan[]" class="ch" id="shan[]" value="<?php echo 	$row["id"]?>" /></td>
				
				</tr>
				<?php
	}
					?>
					
					<tr><td colspan="5" class="di"><label>全选：<input id="quan" type="checkbox" class="ch" style="position:relative;top:4px;"></label><input type="submit" name="" id="shanchu" value="删除" /></td></tr>
		</form>
		</table>
	</body>
</html>
