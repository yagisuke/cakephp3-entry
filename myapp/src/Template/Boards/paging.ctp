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
      <th><?= $this->Paginator->sort('id', 'ID') ?></th>
      <th><?= $this->Paginator->sort('title', 'TITLE') ?></th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($data as $item) {
        echo $this->Html->tableCells(
          array(
            $this->Html->link(
              $item['id'],
              "/boards/update/" . $item['id']
            ),
            $item['title']),
          ['style'=>'background-color: #f0f0f0'],
          ['style'=>'font-weight: bold'],
          true);
      }
    ?>
  </tbody>
</table>
<div class="paginator">
  <ul class="pagination">
    <li><?= $this->Paginator->first('<< first') ?></li>
    <li><?= $this->Paginator->numbers() ?></li>
    <li><?= $this->Paginator->last('last >>') ?></li>
  </ul>
</div>
<br />
<br />
<br />
