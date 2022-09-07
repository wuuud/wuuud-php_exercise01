<?php 

echo '$numの値を入力してください:' ;
$num = trim(fgets(STDIN));
 
if ($num % 1 == 0 && $num==1) {
echo "{$num}は素数ではありません。"; 
} else {
echo "{$num}は素数です。"; 
}

// $judge = True;

// if ($num == 1) {
//     $judge = False;
// }

// for ($i = 2; $i < $num; $i++) {
//     if ($num % $i == 0) {
//         $judge = False;
//         // 素数と判定されたら処理を抜ける
//         break;
//     }
// }

// if ($judge) {
//     echo $num . 'は素数です。';
// } else {
//     echo $num . 'は素数ではありません。';
// }
