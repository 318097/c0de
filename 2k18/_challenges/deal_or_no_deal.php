<?php
fscanf(STDIN, "%d", $tc);
for($x = 0; $x < $tc; $x++){
  fscanf(STDIN, "%d %d", $n, $c);
  $price = fgets(STDIN);
  $price = explode(" ", $price);
  $max = 0;
  // echo "Size of" . sizeof($price);
   if(sizeof($price) == $n){
     for($i = 0; $i < sizeof($price); $i++){
       $profit = 0;
       $next = $i;
       while((int)$price[$next] <= (int)$c && $next <= sizeof($price)){
         $profit += (int)$c - (int)$price[$next];
         $next++;
       }
       $max = $profit > $max ? $profit : $max;
     }
     // echo $max . "\n";
  }
}
