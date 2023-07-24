<?php 
// single quote 

$str='here 9im there to train  you';

$tr1='here we train 
coures related to software engg';

$tr2='im living in "chennai" for years';
$tr3='here checking \\ \n \t  \'quetation\'in php';
$tr4="Checking \\ \n \t \'quotation\' in php";
// $tr4="I am living in "Chennai" for years"; output error

 echo $tr1."<br>";
echo $str."<br>";
echo $tr2."<br>";
echo $tr3."<br>";
echo $tr4."<br>";
// echo $tr4."<br>";


// heredoc-double qutoe//parsing 
$pandi='pandi';
$sla[0]=10000000;

// heredoc 
$string=<<<Demo
$pandi write a new sentence "$sla[0]";
Demo;
echo $string."<br>";

// new doc-single quoto //no parsing

$string1=<<<'Demo'
"$pandi" now dicussing new doc "$sla[0]"
Demo;
echo $string1."<br>";

?>

<!-- 

heredoc-double qutoe//parsing 

heredoc 
$str=<<<Demo  
write a new sentence 
Demo;  


new doc-single quote //no parsing

$name="geetha"
$salary[0]=9000
$salary[1]=7000

echo "name" gets salary of $salary[0];

 -->