<?php 
$z=2;//global variable
function  local (){

    $x=10;
    // global$z;
    $y=$GLOBALS['z']++;

    // $z=30;
 
    echo "my value of local variable:$x<br>";//local scope
    echo "Golbal variable value:$y<br>";
}
local();
echo "$z<br>";
$x=20;
echo "my local value outside fn:$x<br>";


function local1(){
static$y=10;
$y++;

echo "local variables:$y<br>";

}local1();
local1();//static variable
local1();
?>