<?php

$subjects = ['数学','英語','理科','社会','国語'];

foreach($subjects as $subject){
    switch ($subject) {
            case '数学': 
                echo  $subject . 'の試験は明日です。' . PHP_EOL;
                break;
            case '英語':
                echo  $subject . 'の試験は明後日です。' . PHP_EOL;
                break;
            case '理科':
                echo  $subject . 'の試験は明々後日です。' . PHP_EOL;
                break;
            case '社会':
                echo  $subject . 'の試験は昨日です。' . PHP_EOL;
                break;
            case '国語':
                echo  $subject . 'の試験は中止です。' . PHP_EOL;
                break;
        }
}
// switch ($subject) {
//         case '数学':
//             $msg = '明日';
//             break;

//         case '英語':
//             $msg = '明後日';
//             break;

//         case '理科':
//             $msg = '明々後日';
//             break;

//         case '社会':
//             $msg = '昨日';
//             break;

//         case '国語':
//             $msg = '中止';
//             break;
//     }
//     echo $subject . 'の試験は' . $msg . 'です｡' . PHP_EOL;
// }
