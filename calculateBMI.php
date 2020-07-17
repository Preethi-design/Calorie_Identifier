<?php

$BMI;

$weight=$_POST["weight"];
$height=$_POST["height"];

require 'vendor/autoload.php';

$client=new MongoDB\Client;
$bmidb=$client->bmidb;
$bmicollection=$bmidb->bmicollection;


if(isset($_POST['calculate'])){
  if (!isset($_POST['weight'])) {
    return 'Please enter your weight';
    exit();
  }
  if (!isset($_POST['height'])) {
    return 'Please enter your height';
    exit();
  }
}

$insertOneResult=$bmicollection->insertOne(
['weight'=>$weight,'height'=>$height]
);


// $weight = filter_var(htmlentities(floatval($_POST['weight'])),FILTER_SANITIZE_NUMBER_FLOAT);
// $height = filter_var(htmlentities(floatval($_POST['height'])),FILTER_SANITIZE_NUMBER_FLOAT);

// function calculateBMI($weight, $height){
//   return pow($weight / ($height / 100), 2);
// }
$a=$height/100;
$b=$a*$a;
$c=$weight/$b;

$insertOnebmi=$bmicollection->insertOne(
  ['bmi'=>$c]
  );
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
  <h1> <?php echo $c?>
  
  </h1>
  </body>
  </html>
  