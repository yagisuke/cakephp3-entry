<h1>Form Helper selectbox Learning!</h1>
<p><?= $result ?></p>
<?= $this->Form->create(null, ["type"=>"post", ["action"=>"selectbox"]]) ?>
<?= $this->Form->input("FormHelperLearningForm.select1", array("type"=>"select",
  "options"=>[
    ["value"=>"", "text"=>"---"],
    ["value"=>"1", "text"=>"1年生"],
    ["value"=>"2", "text"=>"2年生"],
    ["value"=>"3", "text"=>"3年生"],
    ["value"=>"4", "text"=>"4年生"],
    ["value"=>"5", "text"=>"5年生"],
    ["value"=>"6", "text"=>"6年生"]
  ], "label"=>"何年生ですか？")) ?>
<?= $this->Form->submit("送信") ?>
<?= $this->Form->end() ?>
