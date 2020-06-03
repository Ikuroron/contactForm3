<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  header('Location: index.html');
}


// 別ファイルの読み込み
require_once('function.php');


$username = $_POST['username'];
$email = $_POST['email'];
$content = $_POST['content'];

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>入力内容確認</h1>
  <p>お名前：<?= h($username); ?></p>
  <p>メールアドレス：<?= h($email); ?></p>
  <p>お問い合わせ内容：<?= h($content); ?></p>

<form action="thanks.php" method="POST">
  <input type="hidden" name="username" value="<?= h($username); ?>">
  <input type="hidden" name="email" value="<?= h($email); ?>">
  <input type="hidden" name="content" value="<?= h($content); ?>">

  <button type="button" onclick="history.back()" >戻る</button>

  <?php if ($username != '' && $email != '' && $content != '') { ?>
    <button type="submit" >確定</button>
  <?php } ?>

</form>

</body>
</html>