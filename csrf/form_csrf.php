<?php
session_start();

// ログイン確認

if (empty($_SESSION['token'])) { 
	//トークンを生成
	$token = bin2hex(openssl_random_pseudo_bytes(24));
	$_SESSION['token'] = $token;
} else {  
	// トークンがすでに存在していたらそちらを使用
	$token = $_SESSION['token'];
}
?>
<body>
<form action="change_csrf.php" method="POST">
<p>パスワード変更</p>
<input name="password" type="password"><BR>
<input type=submit value="変更">
<input type="hidden" name="token" value="<?php echo htmlspecialchars($token, ENT_QUOTES, 'UTF-8'); ?>">
</form>
</body>
