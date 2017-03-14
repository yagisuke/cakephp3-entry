<?php
namespace App\Controller;

class TemplateLearningController extends AppController {

  /* TemplateLearningControllerの共通初期化処理 */
  public function initialize() {
    $this->viewBuilder()->autoLayout(true);
    $this->viewBuilder()->layout("BaseTemplate");
  }

  public function index() {
    $this->set("msg", "ヘッダーエレメント!!");
    $this->set("footer", "Base/FooterTemplate");
  }

}
