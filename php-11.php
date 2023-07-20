<?php 
$u=1;


for($m=0;$m<5;$m++){
 
 for($n=6;$n<10;$n++){
     echo "$m $n <br>";
     if($n==7){
        break;
     }
 }
   
}
while($u<10){
    if($u=5){
        echo $u."<br>";
        break;
    }
}

switch($i=3){
    case 1:
    echo "df <br>";
      break;
      case 2:
         echo"fd <br>";
         break;
         case 3:
            echo "sn <br>";
            break;
            default:
              echo "df <br>";
        }


?>