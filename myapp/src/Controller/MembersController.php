<?php
namespace App\Controller;

class MembersController extends AppController {

  public function index() {
    $data = $this->Members->find('all')->contain(['Boards']);
    $this->set('data', $data->toArray());
  }

}
