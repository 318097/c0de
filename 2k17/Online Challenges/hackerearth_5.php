<?php
    // fscanf(STDIN, "%d", $a);
    // fscanf(STDIN, "%s", $aCards);

    // fscanf(STDIN, "%d", $b);
    // fscanf(STDIN, "%s", $bCards);
    $a = 3;
    $aCards = "1 3 10";
    
    $b = 2;
    $bCards = "3 4";
  

    $count = 0;
    
    $aCards = explode(' ', $aCards);
    $bCards = explode(' ', $bCards);

    $max = $bCards[0];
    for($j = 0; $j < sizeof($bCards) - 1; $j++){
        if($bCards[$j] < $bCards[$j + 1]){
            $max = $bCards[$j + 1];
        }
    }
    
    for($i = 0; $i < sizeof($aCards); $i++){

            if((int)$aCards[$i] < $max){
                $count = $count + ( (int)$max - (int)$aCards[$i] );
                $count++;
                echo "<br/>" . "A : " . $aCards[$i] . " || B : " . $bCards[$j];
            }elseif( (int)$aCards[$i] == $max){
                $count++;
            }

    }
    echo "<br>";
    echo $count;
?>