<h1>Connection Manager Learning!</h1>
<div><a href="/boards/">boardsへ戻る&gt;</a></div>

<h2>検索フォーム</h2>
<?= $this->Form->create("", ["type"=>"get", "url"=>["action"=>"searchv2"]]) ?>
  <fieldset>
    id   : <?= $this->Form->text("id") ?>
  </fieldset>
  <?= $this->Form->button("送信") ?>
<?= $this->Form->end(); ?>

<h2>検索結果一覧</h2>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
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
              $data[$i]['name'],
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
