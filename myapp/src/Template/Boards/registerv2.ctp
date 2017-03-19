<h1>validataion Learning!</h1>
<div><a href="/boards/">boardsへ戻る&gt;</a></div>

<h2>更新フォーム</h2>
<?=$this->Form->create($entity) ?>
  <fieldset>
    <?php
      echo $this->Form->input("name");
      echo $this->Form->input("title");
      echo $this->Form->input("contet");
    ?>
  </fieldset>
  <?= $this->Form->button("送信") ?>
<?= $this->Form->end(); ?>
