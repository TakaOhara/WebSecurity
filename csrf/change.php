<?php
session_start();
// ログイン確認

// パスワードの取得
$password = filter_input(INPUT_POST, 'password');   

// パスワード変更処理
?>
<html>
<head>
	<title>変更後</title>
</head>
<body>
<p>パスワードを<?php echo htmlspecialchars($password, ENT_QUOTES, 'UTF-8'); ?>に変更しました</p>
<a href="login.php">会員ページ</a>
</body>
</html>

