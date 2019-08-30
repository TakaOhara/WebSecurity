<?php 
session_start();
//ログイン処理
$user = "suzuki";
$_SESSION['user'] = $user;
?>
<html>
<head>
	<title>会員ページ</title>
</head>
<body>
<h1>CSRF</h1>
<p>ログインしました</p>
<p>ユーザ名:<?php echo htmlspecialchars($user, ENT_QUOTES, 'UTF-8'); ?></p>
<a href="form.php">パスワード変更</a><br>
<a href="form_csrf.php">パスワード変更(CSRF対策版)</a><br>
<a href="attack_form.html">罠サイト(脆弱なサービスへの攻撃)</a><br>
<a href="attack_form_csrf.html">罠サイト(CSRF対策済みサービスへの攻撃)</a><br>
</body>
</html>