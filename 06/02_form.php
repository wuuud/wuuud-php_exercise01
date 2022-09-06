<!-- <?php

$name = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
}
?> -->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>氏名を別のファイルへ</title>
</head>

<body>
    <form action="02_result.php" method="POST">
        <div>
            <label for="name">名前</label><br>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>
        <?=htmlspecialchars($name, ENT_QUOTES, 'UTF-8')?>
    </div>
    
</body>

</html>
