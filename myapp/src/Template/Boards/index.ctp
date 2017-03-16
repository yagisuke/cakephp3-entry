<h1>DB Learning!</h1>
<ul>
  <li><a href="/boards/register/">レコード登録画面へ</a></li>
  <li><a href="/boards/search/">レコード検索画面へ</a></li>
  <li><a href="/boards/delete/">レコード削除画面へ</a></li>
</ul>
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
      $arr = $data->toArray();
      for ($i = 0; $i < count($arr); $i++) {
          echo $this->Html->tableCells(
            $arr[$i]->toArray(),
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
