<?php
	require 'sql.php';
	$sql="select * from gequ";
	$result=cha($sql);
	while($row=mysql_fetch_array($result)){
	print_r($row);
	}
	?>