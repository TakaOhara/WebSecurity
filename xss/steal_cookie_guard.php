<?php
  session_start();
  // ログインチェック（略）
?>
<body>
出力結果:<?php echo htmlspecialchars($_GET['word'], ENT_QUOTES, 'UTF-8'); ?><BR>
</body>
