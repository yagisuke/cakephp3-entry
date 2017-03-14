<?php
namespace App\Controller;

class HelloController extends AppController {

  public function index() {
    $this->viewBuilder()->autoLayout(false);
  }

  public function other() {
    // default template使用
  }

  /* otherにフォワードさせるexecuteメソッドです */
  public function fowardpg() {
    $this->setAction("other");
  }

  /* otherにリダイレクトさせるexecuteメソッドです */
  public function redirectpg() {
    $this->redirect("/hello/other/");
  }

}
