<!-- Function

Piece of code that can be used many times 

Takes in input may be arguments and it returns value

Conditional function,Function within Function and Recurisive function

Code reusability

Less code

Easy to understand

   funciton functionname(){


    //Code to be executed
   }




-->

<?php 

function sample($name){
    echo "hiiii welcome to $name channel<br>";
}
sample("codebinx");
sample("pandi");
sample("fixcoder");
sample("codefixer");

// call by value=>actual value=>no modification


function  sample1($str7){
     $str7.="Concat";
     echo $str7."<br>";
}
$str7="my value";
sample1($str7);
echo $str7."<br>";
 

// call by reference=>actual value -->modified

function  sample2(&$string){
    $string.="pandi";
    echo $string."<br>";
}
$str8="my value";
sample2($str8);
echo $str8."<br>";

//Default argument 
function sample3($string1="codebinx",$str3="youtue"){
     $string1.="abcd";
     echo $string1."<br>";
     $str3.="pandi";
     echo $str3,"<br>";

}

$string1="my value is wife";
sample3($string1,"ramesh");//Calling function


// recursive function 

function display ($number){
if($number<=10){
   echo "$number <br>";
   display ($number+1);//recursopm
}

}
display(5);


//variable length handling 

function add(...$numbers){
    $sum=0;
    foreach($numbers as $n){
        $sum+=$n;
    }
    return $sum."<br>";
}
echo add(1,2,3,4,5,6,7)
?>
