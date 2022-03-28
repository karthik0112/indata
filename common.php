<!-- 
// define('A','karthi',true);
// echo A;

//---INDEXED ARRAY----
// $fruits=array("apple","orange","cherry");
// echo $fruits[0];
// echo "<br>";
// echo count($fruits);
// echo "<br>";
// echo count($fruits);
// echo "<br>";
// print_r($fruits);

// $fruits[]="banana"; it will  add the array value at the end of the array
//$fruits[5]="banana";  // we cant add the array value after printing.
//FOR LETTERS;
// $fruits=array("apple"=>"red","orange"=>"orange","cherry"=>"red");
// echo $fruits["apple"];

// //FOR NUMBERS
// $persons=["name"=>"1","orange"=>"3","cherry"=>"7"];
// echo $persons["name"];

//FOR EACH
// $persons=["name"=>1,"orange"=>3,"cherry"=>7];
// foreach($persons as $names=>$values){
//     echo $names;
//     echo "<br>";
//     echo $values;
//     echo "<br>";

// }
$n=10;
$p=20;
function add(&$no1,&$no2){ //function add(&$no1,&$no2)it will//&&&//useful for refer
    $sum=$no1+$no2;
    echo "the sum is:",$sum;
}
add($n,$p);
// function add($no1,$no2){
//     $sum=$no1+$no2;
//     echo "the sum is:"+$sum;
// }
// add(8,9); -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<?php
    //USING STRING
   // $charn="karthi";
    //echo "i like $charn";
    //echo strtoupper($charn);

    //index array;
   // $charn[0]="A";
  // $charn="karthi"; 
//$charn[0]="A";
//echo $charn;
//echo str_replace("ka", "hu", $charn);
//echo substr($charn, 3,2);
echo ceil(3.9);
echo floor(3.9);
?> -->
</body>
</html>
