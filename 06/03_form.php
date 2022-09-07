<?php
$age = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age'];
   //デバリエーション
   if (empty($age)) {
      $err_msg = '年齢を入力してください。';
   }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームの練習</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <label for="age">年齢</label><br>
            <input type="text" name="age" id="age">
        </div>
            
        <div>
            <input type="submit" value="送信">
        </div>

        <?php if ($err_msg): ?>
            <ul>
                <li><?=$err_msg?></li>
            </ul>
        <?php endif; ?>
    </form>
    <?php if ($age):?>
        <p>私は<?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?>歳です。</p>
    <?php endif; ?>
</body>
</html>
