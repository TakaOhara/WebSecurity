<?php
session_start();
// ログイン確認

//トークンを取得
$p_token = filter_input(INPUT_POST, 'token');
$s_token = @$_SESSION['token'];
if (empty($p_token) || $p_token !== $s_token) {
    die('エラーが発生しました'); 
}
$password = filter_input(INPUT_POST, 'password');   

// パスワード変更処理　
?>
<html>
<head>
  <title>変更後</title>
</head>
<body>
<body>
<p>パスワードを<?php echo htmlspecialchars($password, ENT_QUOTES, 'UTF-8'); ?>に変更しました</p>
<a href="login.php">会員ページ</a>
</body>
</body>

