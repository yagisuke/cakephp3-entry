<?php
namespace App\Controller;

class FormHelperLearningController extends AppController {

  /* TemplateLearningControllerの共通初期化処理 */
  public function initialize() {
    $this->set("footer", "Base/FooterTemplate");
    $this->set("msg", "ヘッダーエレメント!!");
    $this->viewBuilder()->layout("BaseTemplate");
  }

  public function index() {
    $this->show();
  }

  public function checkbox() {
    $this->show();
  }

  public function radiobutton() {
    $this->show();
  }

  private function show() {

    $result = "";
    if ($this->request->isPost()) {
      $result = "<pre>※送信された情報<br />";
      foreach ($this->request->data['FormHelperLearningForm'] as $key => $val) {
        $result .= $key . ' => ' . $val;
      }
      $result .= "</pre>";
    } else {
      $result = "※なにか送信してください。";
    }

    $this->set("result", $result);
  }

}
