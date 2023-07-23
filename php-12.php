<?php 

for($i=0;$i<5;$i++){
for($j=0;$j<5;$j++){
if(!($i==$j)){
  continue;
}
echo $i.$j ."<br>";
}

}

$k=0;
while($k<5){
  if($k%2==0){
    $k++;
    continue;
  }
  echo $k;
  $k++;
}

?>