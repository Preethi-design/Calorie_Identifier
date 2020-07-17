<?php
require 'vendor/autoload.php';

$client=new MongoDB\Client;
$fooddata=$client->fooddata;
$foodcollection=$fooddata->foodcollection;

$insertManyResult=$foodcollection->insertMany([
    ['_id'=>1,'name'=>'apple','calorie'=>'5.6g','protien'=>'0.3g','fat'=>'0.2g'],
    ['_id'=>2,'name'=>'mango','calorie'=>'60g','protien'=>'0.8g','fat'=>'0.4g'],
    ['_id'=>3,'name'=>'papaya','calorie'=>'120g','protien'=>'2g','fat'=>'1g'],
    ['_id'=>4,'name'=>'cherry','calorie'=>'50g','protien'=>'1g','fat'=>'0.3g'],
    ['_id'=>5,'name'=>'orange','calorie'=>'47g','protien'=>'0.9g','fat'=>'0.1g']

]);

printf("inserted %d documents",$insertManyResult->getInsertedCount());
var_dump($insertManyResult->getInsertedIds());

?>
