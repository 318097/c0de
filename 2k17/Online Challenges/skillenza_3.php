<?php
	// Couldnt finish it.... 


	// Amazon’s Grand Sale
	// Amazon is afraid of overloads on its website. So they planned to use dedicated servers for each item going on sale. To minimize the cost, they are required to manage the traffic with a minimal number of servers. Additionally, each server needs 5 minutes time to be switched for its use from the current item to another. For the first item the server handles, it does not take any time as it had been configured a day before. Write a program to manage the servers.

	// Input:
	// The first line of input contains an integer n which is the number of items on sale.
	// The next n lines contain four space separated integers in the format:
	// hh mm HH MM, where hh mm is the starting time and HH MM is the ending time of an item’s sale (both inclusive).

	// Output:
	// Print the minimum number of servers required to accomplish an issue free sale.
	// *Note: *
	// hh mm will be in 24-hour format. If a sale finishes at 10 20 and another sale starts at 10 25, the same server can be used as they have a 5 minute time gap.
	// Constraints:
	// 1 <= n <= 1000
	// 00 <= hh, HH <= 23
	// 00 <= mm, MM <= 59
	
	// Sample Input
	// 	4
	// 00 00 11 11
	// 00 00 10 11
	// 11 17 23 17
	// 12 12 12 50
	
	// Sample Output
	// 2

	fscanf(STDIN, "%d", $n);
	$count = 0;
	$time = array();
	while($count < $n){
		fscanf(STDIN, "%d %d %d %d", $sh, $sm, $fh, $fm);
		// $time[] = fgets(STDIN);
		$count++;

		$time[] = implode(" ", [$sh, $sm, $fh, $fm]);
	}
	$servers = 1;
	
	$serverMap = array();
	$serverMap[] = $time[0];

	$count = 1;
	while($count < $n){
		$flag = true;

		for($i = 0; $i < sizeof($serverMap); $i++){
			$p2 = explode(" ", $time[$count]);
			$serverMap[$i] = explode(" ", $time[$count]);

			if((int)$p2[0] >= (int)$serverMap[$i][2] && (int)$p2[1] > (int)$serverMap[$i][3]){
				$serverMap[$i] = implode(" ", [$serverMap[$i][0], $serverMap[$i][1], $p2[2], $p2[3]]);
				$flag = false;
				break;
			}
		}

		if($flag){
			$servers++;
			$serverMap[] = $time[$count];
		}

		$count++;
	}
	// print_r($time);
	print_r($serverMap);
	echo $servers;

?>