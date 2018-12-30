<?php
	// returns first 
	function forwarded_ip(){
		$keys = array(
			'HTTP_X_FORWARDED_FOR',
			'HTTP_X_FORWARDED',
			'HTTP_FORWARDED_FOR',
			'HTTP_FORWARDED',
			'HTTP_CLIENT_IP',
			'HTTP_X_CLUSTER_CLIENT_IP'
		);

		foreach ($keys as $key) {
			if(isset($_SERVER[$key])){
				$ip_array = explode(',', $_SERVER[$key]);
				foreach ($ip_array as $ip) {
					return trim($ip);
				}
			}
		}
		return '';
	} 
	$remote_ip = $_SERVER["REMOTE_ADDR"];
	$forwarded_ip = forwarded_ip();

	echo "Remote IP:" . $remote_ip;
	echo "<br/>";
	if($forwarded_ip != ''){
		echo "Forwarded IP:" . $forwarded_ip;
	}
?>