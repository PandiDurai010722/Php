<?php 
function x(){
 $x=10;
 $y=90;
 $x=$y;
 echo $x."<br>";
}
x(); 

define("Msg","hello guys<br>");//first method
echo Msg;
const Msg1="hii <br>";//second method
echo Msg1;
 define("Msg2","Ho panid <br>");
echo constant("Msg2");

?>