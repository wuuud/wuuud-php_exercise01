<?php
//初期化
$caluculate = '';
$answer = 0;
$error = false;

//GET
$num1     = $_GET['num1'];
$num2     = $_GET['num2'];
$operator = $_GET['operator'];

//計算
switch ($operator) {
   case 'addition':
      $caluculate = '+';
      $answer = $num1 + $num2;
      break;
   case 'subtraction':
      $caluculate = '-';
      $answer = $num1 - $num2;
      break;
   case 'multiplication':
      $caluculate = '*';
      $answer = $num1 * $num2;
      break;
   case 'division':
      $caluculate = '/';
      $answer = $num1 / $num2;
      break;
   default:
      $error = true;
      break;
}

//答え
if ($error) {
   echo '正しい演算子を指定してください';
} else {
   echo "{$num1}{$caluculate}{$num2}={$answer}";
}
