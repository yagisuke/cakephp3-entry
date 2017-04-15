<?php
namespace App\Controller;

class TestAjaxController extends AppController {
  public function index () {
    $this->viewBuilder()->layout('');
    $this->render('index');
  }

  public function testApi () {
    $this->autoRender = false;
    $this->response->charset('UTF-8');
    $this->response->type('text/html');
    $this->response->body('Ajax Success');

    return $this->response;
  }
}
