<h1>DB Redister Learning!</h1>
<div><a href="/boards/">boardsTOPへ戻る&gt;</a></div>
<?= $this->Form->create($entity, ["type"=>"post", "url"=>["action"=>"register"]]) ?>
  <fieldset>
    name   : <?= $this->Form->text("name") ?>
    title  : <?= $this->Form->text("title") ?>
    content: <?= $this->Form->textarea("content") ?>
  </fieldset>
  <?= $this->Form->button("送信") ?>
<?= $this->Form->end(); ?>
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
      $arr = $data;
      for ($i = 0; $i < count($arr); $i++) {
          echo $this->Html->tableCells(
            array(
              $this->Html->link(
                $arr[$i]['id'],
                "/boards/update/" . $arr[$i]['id']
              ),
              $arr[$i]['member']['name'],
              $arr[$i]['title'],
              $arr[$i]['content']),
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
