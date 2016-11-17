<?php
	header("Content-type:text/html;charset=utf-8");
	require 'sql.php';
	$gname=$_POST["gname"];
	$gurl=$_POST["gurl"];
	date_default_timezone_set('PRC');
	$shijian=date('Y-m-d h:i:s',time());
	$sql="insert into gequ(mname,mpath,mdate) values('".$gname."','".$gurl."','".$shijian."')";
	cha($sql);
	echo "<script>location.href='../index.php'</script>";
	?>