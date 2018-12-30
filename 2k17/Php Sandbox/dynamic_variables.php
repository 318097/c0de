<?php
	$a = "hello";
	$hello = "hello world";
	// $$a takes the value of $a which is 'hello' and adds that to $ which becomes $hello. Thus, the content of $hello is printed.
	echo $$a;
?>