<?php 
// for -> Iteration time know
// while --> 
// do while-->
// foreach-> array,objet datatype

$s=array("code","bink","prime");
echo $s[0]."<br>";
foreach($s as $element){
    echo "$element <br>";
}

for($n=1;$n<=10;$n++){//variable integer
    echo "$n<br>";
    
   };
$h=array("name"=>"codebinx","place"=>"india");

foreach($h as $key=>$element){
    echo $key.":".$element;
    echo"<br>";
}

$n=1;
while($n<10){//infinite loop
    echo "$n while loop <br>";
    $n++;
}

$b=1;
while($b<3){
    $c=1;
    while($c<3){
        echo $b. ":" .$c;
        echo "<br>";
        $c++;
    }
    $b++;
}

$j=1;
do{
 echo "$j<br>";
    $j++;
}while($j<10);



?>