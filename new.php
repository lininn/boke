<?php
	date_default_timezone_set("America/New_York");
header("Content-Type: text/event-stream");
$i=0;
while(1){
	 echo 'data:{"time":"aaa"}';
	echo "\n\n";
	ob_flush();
	flush();
	sleep(1);
}

 
 
  
 
//  echo "data: This is a message at time '."\n\n";
//
//
//ob_flush();
//flush();
//sleep(1);

?>