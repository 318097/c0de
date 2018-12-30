<?php
// hackerearth test
// 06-10-2017

/*
Palindromic Sub-String <P2SME>
You are given a string S.
You have to check if there exists a sub-string X of string S having length greater than 1 such that the string X and its palindrome both are present as sub-string in the string S. 

Note: String X and its palindrome string may overlap.

Input : First line contains a string S as input.
Output: Print YES if there is a substring X as described above and in the next line print the length of maximum substring among all that satisfies this condition. If there is no sub-string that satifies the above condition print NO.


Sample Input :: hackeratrekcah
Sample Output :: YES 6
*/

function process_string ($S)
{
    $length = strlen($S);
    $subStr = $S[0];
    $found = "no";
    $foundLength = 0;
    $SR = "";
    for($x = $length; $x > 0; $x--){
        $SR .= $S[$x - 1];
    }
    $revStr = $SR[0];
    echo $S . "<br/>";
    echo $SR . "<br/>";

    for($i = 0; $i < $length; $i++){
        if($i == $length - 1){
            $subStr = $subStr . $S[$i];
        }else{
            $subStr = $subStr . $S[$i + 1];
        }
        $subStrLength = strlen($subStr);
        
        for($j = 0; $j < $length; $j++){
            if($j + $subStrLength <= $length){
                $revStr = substr($SR, $j, $subStrLength);                
                echo $subStr . " --- " . $revStr . "<br/>";

                if($subStr == $revStr){
                    $found = "yes";
                    if($subStrLLength > $foundLength){
                        $foundLength = $subStrLength;
                    }
                }
            }
        }
    }
    if($found == "no"){
        echo "NO";
    }else{
        echo "YES" . "\n" . $foundLength;
    }
}

process_string("mehulxyz");
?>