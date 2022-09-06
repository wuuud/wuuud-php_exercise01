<?php

$pocket_money = 1000;
$fund_raising = 101;
echo 'あなたの所持金は' .  $pocket_money . '円です。' . PHP_EOL;

do {
    echo  $fund_raising . '円募金しました。'. PHP_EOL;
    
    $pocket_money -= $fund_raising;
    echo '残り残高は' . $pocket_money . '円です。' . PHP_EOL;
} while ($pocket_money >= $fund_raising) ;
echo 'あなたはこれ以上募金できません。';
