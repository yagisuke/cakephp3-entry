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
    </tr>
  </thead>
  <tbody>
    <?php
      print_r($data);
      foreach ($data as $key => $name) {

          echo $this->Html->tableCells(
            array(
              $this->Html->link(
                $key,
                "/boards/update/" . $key
              ),
              $name),
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
