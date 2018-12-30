<?php
// hackerearth test
// 06-10-2017

function process_string ($S)
{
    
    // Complete this function and return the appropriate value
    // The format of returning the value is explained above
    $length = strlen($S);
    $subStr = $S[0];
    $found = "no";
    $foundLength = 0;
    
    for($i = 0; $i < length; $i++){
        $subStr = $subStr . $S[$i + 1];
        $subStrLength = $subStr.length;
        
        for($j = length; $j > 0; $j--){
            if($subStr == substr($subStr, $j, $subStrLength)){
                $found = "yes";
                $foundLength = $subStrLength;
            }
        }
    }
    if($found == "no"){
        echo "NO";
    }else{
        echo "YES" . "\n" . $foundLength;
    }
}

process_string("helloxxolleh");

?>