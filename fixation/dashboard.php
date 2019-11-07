<?php
include "setting.php";
session_start();
?>
<html>
<body>
<p><?php echo SID; ?></p>
<p>ユーザID:<?php echo htmlspecialchars(@$_SESSION['id'], ENT_COMPAT, 'UTF-8'); ?></p>
<p>ログインしたユーザのみが閲覧できるページ</p>
<p><a href="index.html">戻る</a></p>
</body>
</html>
