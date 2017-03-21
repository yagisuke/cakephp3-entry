<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class MembersTable extends Table {

  public function initialize(array $config) {
    $this->hasMany('Boards');
  }

  public function validationDefault(Validator $validator) {
    $validator->integer('id');
    $validator->notEmpty('name', '必須項目');
    $validator->integer('password', '必須項目');
    $validator->integer('comment', '必須項目');

    return $validator;
  }

  public function buildRules(RulesChecker $rules) {
    $rules->isUnique(['name'], 'すでに登録済みです');
    return $rules;
  }

}
