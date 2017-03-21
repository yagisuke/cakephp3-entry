<h1>DB Delete Learning!</h1>
<div><a href="/boards/">boardsTOPへ戻る&gt;</a></div>

<h2>削除申請</h2>
<?= $this->Form->create("", ["type"=>"post", "url"=>["action"=>"delete"]]) ?>
  <fieldset>
    id   : <?= $this->Form->text("id") ?>
  </fieldset>
  <?= $this->Form->button("送信") ?>
<?= $this->Form->end(); ?>

<?php if (!empty($deleteId)): ?>
  <h2>削除項目</h2>
  <p>ID&nbsp;<?= $deleteId ?>&nbsp;を削除しました。</p>
<?php endif; ?>

<h2>一覧</h2>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>TITLE</th>
      <th>CONTENT</th>
    </tr>
  </thead>
  <tbody>
    <?php
      for ($i = 0; $i < count($data); $i++) {

          echo $this->Html->tableCells(
            array(
              $this->Html->link(
                $data[$i]['id'],
                "/boards/update/" . $data[$i]['id']
              ),
              $data[$i]['title'],
              $data[$i]['content']),
            ['style'=>'background-color: #f0f0f0'],
            ['style'=>'font-weight: bold'],
            true);
      }
    ?>
  </tbody>
</table>
<br />
<br />
<br />
