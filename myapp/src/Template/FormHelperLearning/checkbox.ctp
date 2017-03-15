<h1>Form Helper checkbox Learning!</h1>
<p><?= $result ?></p>
<?= $this->Form->create(null, ["type"=>"post", ["action"=>"checkbox"]]) ?>
<?= $this->Form->input("FormHelperLearningForm.checkbox1", array("type"=>"checkbox", "label"=>"チェックボックス")) ?>
<?= $this->Form->submit("送信") ?>
<?= $this->Form->end() ?>
