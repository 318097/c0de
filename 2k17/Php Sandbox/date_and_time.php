<?php
	// time() returns the no of seconds passed since Jan 1, 1970.
	echo time() . "<br/>";

	// strtotime($any_string) takes a time format & returns seconds.
	echo strtotime("now") . "<br/>";
	echo strtotime("+1 day") . "<br/>";

	// date($format, $timestamp) converts timedate into human readable like 9 nov 2017.

	// strfrtime() is better than date().
?>