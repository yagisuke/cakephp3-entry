<h1>DB Search Learning!</h1>
<div><a href="/boards/">boardsへ戻る&gt;</a></div>

<h2>検索フォーム</h2>
<?= $this->Form->create("", ["type"=>"get", "url"=>["action"=>"search"]]) ?>
  <fieldset>
    id   : <?= $this->Form->text("id") ?>
    title : <?= $this->Form->text("title") ?>
  </fieldset>
  <?= $this->Form->button("送信") ?>
<?= $this->Form->end(); ?>

<h2>検索結果</h2>
<p>COUNT: <?= count($data) ?></p>
<p>FIRST: <?php if (!empty($first)) print_r($first->toArray()); ?></p>
<p>MIN  : <?= $min ?></p>
<p>MAX  : <?= $max ?></p>

<h2>検索結果一覧</h2>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>TITLE</th>
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
              $data[$i]['title']),
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
