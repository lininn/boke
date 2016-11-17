<?php
header("Content-type:text/html;charset=utf-8");
 $id=$_POST['shan'];
require 'sql.php';
for($i=0;$i<count($id);$i++){
$sql="delete from gequ where id=$id[$i]";
	cha($sql);

	
}
echo "<script>alert('操作成功！');location.href='del.php'</script>";




?>