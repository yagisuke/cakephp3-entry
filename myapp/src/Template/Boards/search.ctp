<h1>DB Search Learning!</h1>
<div><a href="/boards/">boardsへ戻る&gt;</a></div>

<h2>検索フォーム</h2>
<?= $this->Form->create("", ["type"=>"get", "url"=>["action"=>"search"]]) ?>
  <fieldset>
    id   : <?= $this->Form->text("id") ?>
    name : <?= $this->Form->text("name") ?>
  </fieldset>
  <?= $this->Form->button("送信") ?>
<?= $this->Form->end(); ?>

<h2>検索結果</h2>
<p>COUNT: <?= $count ?></p>
<p>FIRST: <?php print_r($first) ?></p>
<p>MIN  : <?= $min ?></p>
<p>MAX  : <?= $max ?></p>

<h2>検索結果一覧</h2>
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
            $data[$i]->toArray(),
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
