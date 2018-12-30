<?php
// 	Shawn and Arrays
// Shawn has been obsessed about arrays since he read how fun they can be. He recently had a visitor who was ready to challenge Shawn in any array challenge. 
// Shawn thought about challenging him to a question that he has been working on. He gave the visitor two arrays that contain n positive integers and asked him to check if the arrays are equal.

// The arrays will be equal if both the arrays contain the same elements. The permutation of elements doesn’t matter. 
// If they are not equal, the visitor needs to find the smallest single positive integer element that can be added 
// to any one of the elements of any of the arrays to make them equal.

// Help the visitor in solving the challenge.

// Constraints

// 1<=T<=100

// 1<=n<=10000

// 0<=ar[i]<=1000

// Sample Input Format

// The first line of input consists of an integer T which is the number of test cases

// The first line of each test case contains an integer n which indicates the size of both arrays

// The second and third line of each test case contains n space separated integers which are the elements of the first and second arrays respectively

// Sample Output Format

// For each test case, if

// The arrays are equal, print “Yes” (Without quotes)

// If the arrays are not equal, print out two space separated integers p and q. Here p is the smallest positive integer that needs to be added to an element of array q

// If there is no such integer, then print “No” (Without quotes)


	fscanf(STDIN, "%d", $T);
	for($i = 0; $i < $T; $i++){
		fscanf(STDIN, "%d", $n);

		$array1 = fgets(STDIN);
		$array2 = fgets(STDIN);

		$array1 = explode(' ', trim($array1));
		$array2 = explode(' ', trim($array2));

		sort($array1);
		sort($array2);
		
		$status = 1;
		$notequal = false;
		$diff;
		$arr_no;

		$x = 0;
		$y = 0;
		while($x < count($array1) && $y < count($array2)){
			if($array1[$x] == $array2[$y]){
			}else{
				if($notequal == true){
					$status = -1;
					break;
				}if($notequal == false){
					$notequal = true;
					$status = 0;
					if($array1[$x] < $array2[$y]){	$diff =  $array2[$y] - $array1[$x]; $arr_no = 1;	}
					else{	$diff = $array1[$x] - $array2[$y]; $arr_no = 2;	}
				}
			}
			$x++;
			$y++;
		}
		if($status == 1) echo "Yes\n";
		if($status == -1) echo "No\n";
		if($status == 0){ echo $diff . " " . $arr_no . "\n";
	}
?>