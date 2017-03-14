<h1>Form Helper checkbox Learning!</h1>
<p><?= $result ?></p>
<?= $this->Form->create(null, ["type"=>"post", "url"=>["controller"=>"FormHelperLearning", "action"=>"checkbox"]]) ?>
<?= $this->Form->input('checkbox1', array('type' => 'checkbox', 'label' => 'チェックボックス')) ?>
<?= $this->Form->submit("送信") ?>
<?= $this->Form->end() ?>
