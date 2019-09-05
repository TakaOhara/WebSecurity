<?php
  define('FILEDIR', '../file/');
  $file = filter_input(INPUT_GET, 'file');
?>
<body>
<?php readfile(FILEDIR . $file . '.html'); ?>
</body>
