<!DOCTYPE html>
<html lang="ja">
<head>
  <?= $this->Html->charset(); ?>
  <title><?= $this->fetch("title"); ?></title>
  <?php
    echo $this->Html->css("cake.baseTemplate");
    echo $this->Html->script("cake.baseTemplate");
    // echo $this->Html->fetch("meta"); あとで使う
    // echo $this->Html->fetch("css"); あとで使う
    // echo $this->Html->fetch("script"); あとで使う
  ?>
</head>
<body>
  <div id="container">
    <div id="header"><?= $this->element("Base/HeaderTemplate", ["msg"=>$msg]) ?></div>
    <div id="content"><?= $this->fetch("content"); ?></div>
    <div id="footer"><?= $this->element($footer) ?></div>
  </div>
</body>
</html>
