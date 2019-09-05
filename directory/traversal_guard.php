<?php
  define('FILEDIR', '../file/');
  $file = basename(filter_input(INPUT_GET, 'file'));
?>
<body>
<?php readfile(FILEDIR . $file . '.html'); ?>
メニュー（以下略）
</body>
