<h1>Form Helper checkbox Learning!</h1>
<p><?= $result ?></p>
<?= $this->Form->create(null, ["type"=>"post", "url"=>["controller"=>"FormHelperLearning", "action"=>"radiobutton"]]) ?>
<?= $this->Form->input("FormHelperLearningForm.radio1", array("type"=>"radio",
  "options"=>[
    ["value"=>"men", "text"=>"おとこのこ"],
    ["value"=>"women", "text"=>"おんなのこ"]
  ], "label"=>false)) ?>
<?= $this->Form->submit("送信") ?>
<?= $this->Form->end() ?>