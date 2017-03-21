<h1>DB Learning!</h1>
<ul>
  <li><a href="/boards/register/"><?= __('register') ?></a></li>
  <li><a href="/boards/search/"><?= __('search') ?></a></li>
  <li><a href="/boards/delete/"><?= __('delete') ?></a></li>
</ul>
<p><?= __('{0} post', count($data)) ?></p>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>TITLE</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($data as $key => $title) {
        echo $this->Html->tableCells(
          array(
            $this->Html->link(
              $key,
              "/boards/update/" . $key
            ),
            $title),
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
