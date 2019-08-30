<?php
 //POSTデータの取得
$name = @$_POST['name'];
$mail = @$_POST['mail'];
$gender = @$_POST['gender'];

// 登録処理
?>
<html>
<head>
	<title>登録完了</title>
</head>
<body>
<p>氏名:<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
<p>メールアドレス:<?php echo htmlspecialchars($mail, ENT_QUOTES, 'UTF-8'); ?></p>
<p>性別:<?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?></p>
<p>登録されました</p>
</body>
</html>
