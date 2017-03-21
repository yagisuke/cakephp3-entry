<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class BoardsTable extends Table {

  public function initialize(array $config) {
    parent::initialize($config);
    $this->setDisplayField('title');
    $this->belongsTo('Members');
  }
}
