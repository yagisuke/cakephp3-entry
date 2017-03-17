<h1>DB Update Learning!</h1>
<div><a href="/boards/">boardsTOPへ戻る&gt;</a></div>

<h2>更新申請</h2>
<?= $this->Form->create($entity, ["url"=>["action"=>"update"]]) ?>
  <fieldset>
    <p>更新対象ID: <?= $entity->id ?></p>
    name   : <?= $this->Form->text("name") ?>
    title  : <?= $this->Form->text("title") ?>
    content: <?= $this->Form->textarea("content") ?>
  </fieldset>
  <?= $this->Form->button("送信") ?>
<?= $this->Form->end(); ?>

<?php if (!empty($updateId)): ?>
  <h2>更新項目</h2>
  <p>ID&nbsp;<?= $updateId ?>&nbsp;を更新しました。</p>
<?php endif; ?>

<h2>一覧</h2>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
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
              $data[$i]['name'],
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
