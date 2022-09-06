<?php
//初期化
$num = '';
$sum = '';
$err_msg = '';

//POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $num1 = $_POST['num1'];
   $num2 = $_POST['num2'];
   $num3 = $_POST['num3'];
   if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
   $sum = $num1 + $num2 + $num3;
   } else {
   $err_msg = '全てに数字を入力してください';
   }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>数字の入力</title>
</head>
<body>
   <h1>数字を入力してください</h1>
   <?php if ($err_msg) : ?>
      <ul>
         <li><?= $err_msg ?></li>
      </ul>
   <?php endif; ?>
   <form action="" method="POST">

   <!-- 入力ボタン -->
      <div>
         <label for  ="num1">１つめの数字</label><br>
         <input type ="number" name="num1" id="num1">
      </div>
      <div>
         <label for ="num2">2つめの数字</label><br>
         <input type="number" name="num2" id="num2">
      </div>
      <div>
         <label for ="num3">3つめの数字</label><br>
         <input type="number" name="num3" id="num3">
      </div>

   <!-- 送信ボタン -->
      <div>
         <input type="submit" value="送信">
      </div>
   </form>
   
   <!-- XSS対策     -->
   <?PHP if ($sum) : ?>
      <p>合計値は<?= htmlspecialchars($sum, ENT_QUOTES, 'UTF-8') ?>です。</p>
   <?php endif; ?>
</body>
</html>
