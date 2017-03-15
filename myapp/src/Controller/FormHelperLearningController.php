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
    $this->setInputResult();
  }

  public function checkbox() {
    $this->setInputResult();
  }

  public function radiobutton() {
    $this->setInputResult();
  }

  public function selectbox() {
    $this->setInputResult();
  }

  public function datetime() {
    $this->setInputResult($isDatetime = true);
  }

  private function setInputResult($isDatetime = false) {

    $result = "";
    if ($this->request->isPost()) {
      $result = "※送信された情報<br />";

      if ($isDatetime) {
        $selectItems = $this->request->data["FormHelperLearningForm"]["datetime1"];
      } else {
        $selectItems = $this->request->data["FormHelperLearningForm"];
      }

      foreach ($selectItems as $key => $val) {
        $result .= $key . " => " . $val . "<br />";
      }

    } else {
      $result = "※なにか送信してください。";
    }

    $this->set("result", $result);
  }

}
