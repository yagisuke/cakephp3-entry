<h1>Form Helper datetime Learning!</h1>
<p><pre><?php print_r($result) ?></pre></p>
<?= $this->Form->create(null, ["type"=>"post", ["action"=>"datetime"]]) ?>
<?php $this->Form->templates(["dateWidget"=>"{{year}} 年 {{month}} 月 {{day}} 日"]) ?>
<?= $this->Form->input("FormHelperLearningForm.datetime1",
  array(
    "type"=>"date",
    "label"=>"開始日時:　",
    "minYear"=>date("Y")-30,
    "maxYear"=>date("Y"),
    "monthNames"=>false,
    "default"=>date("Y-m-d"))) ?>
<?= $this->Form->submit("送信") ?>
<?= $this->Form->end() ?>
