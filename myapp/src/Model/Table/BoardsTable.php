<?php
namespace App\Mode\Table;

use Cake\ORM\Table;

class BoardsTable extends Table {

  public function initialize(array $config) {
        parent::initialize($config);
        $this->setDisplayField('name');
  }
}
