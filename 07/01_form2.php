<?php

//初期
$stylists = [
    'スタイリスト'       => 'Takashi',
    'ハイスタイリスト'    => 'Ken',
    'トップスタイリスト'  => 'Kyoutaro'
];
$select_stylist = '';

//データ取得
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $select_stylist = $_POST['stylist'];
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>埋め込み</title>
</head>

<body>
    <h1>希望する美容室のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylist">
            <?php foreach ($stylists as $rank => $stylist): ?>
            <option value = "<?=$rank?>"><?=$rank?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <!-- 送信ボタン -->
        <input type="submit" value="送信">
    </form>
    <!-- 答え -->
    <?php if ($select_stylist): ?>
    <p>あなたの担当は<?=$stylists[$select_stylist]?>です</p>
    <?php endif; ?>
    
</body>
</html>
