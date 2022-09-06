<?php

$food = [
   '朝食' => 'パン',
   '昼食' => 'うどん',
   '夕食' => 'ライス', 
];

echo '私は、' .  PHP_EOL;
foreach ($food as $meals => $menu ){
echo  $meals . 'に' . $menu . PHP_EOL;
}
//パン等をfoodとする。
// foreach ($foods as $meal => $food) {
//     echo $meal . 'に' . $food . PHP_EOL;
// }

echo 'を食べます。';
