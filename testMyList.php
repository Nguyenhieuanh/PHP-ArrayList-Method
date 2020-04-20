<?php
include_once "Classes/MyList.php";


$myList = new MyList();
$myList->addEnd([1,0]);
$myList->addEnd(2);
$myList->addEnd('one');
$myList->addEnd('two');
$myList->addEnd(4);


echo '<pre>';
var_dump($myList);
$myList->addAtIndex(2,'hello');
$myList->booleanAdd('hello1');

echo '<pre>';
var_dump($myList);

$arr = ['a','b'];
$myList->addEnd($arr);

echo '<pre>';
var_dump($myList);
var_dump($myList->indexOf('1'));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Triển khai các phương thức của ArrayList</title>
</head>
<body>

</body>
</html>
