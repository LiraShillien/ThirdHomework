<?php
$count = [];
function giveMoney($sum, &$count)
{
  $note = [500,200,100,50,20,10,5,2,1];
  foreach($note as $value){
    if($sum >= $value){
      $count[] = $value;
      $sum -= $value;
      giveMoney($sum, $count);
      break;
    }
  }
}  


function beautifulOutput($count)
{
  $output = array_count_values($count);
  foreach($output as $key=>$value){
    echo "$key: $value", PHP_EOL;
  }	
}

if($argv[1] > 100000){
    echo "Maximum value, that you could provide - 100 000 UAH", PHP_EOL;
  }else{
     giveMoney($argv[1], $count);
     beautifulOutput($count);   
  }
