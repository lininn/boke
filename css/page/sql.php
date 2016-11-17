<?php

	function cha($sql){
	@mysql_connect('localhost','root','root')or die('错误：'.mysql_error());
    @mysql_select_db('mu') or die('错误：'.mysql_error());
    mysql_query('SET NAMES utf8');

    $result=mysql_query($sql);
    return $result;
			}
	
	?>