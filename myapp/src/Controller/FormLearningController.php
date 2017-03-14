<?php
namespace App\Controller;

class FormLearningController extends AppController {

  /* TemplateLearningControllerの共通初期化処理 */
  public function initialize() {
    $this->set("footer", "Base/FooterTemplate");
    $this->set("msg", "ヘッダーエレメント!!");
    $this->viewBuilder()->layout("BaseTemplate");
  }

  public function index() {
  }

  public function sendForm() {

    $str = $this->request->query["text1"];
    $result = "";
    if ($str != "") {
      $result = "you type: " . $str;
    } else {
      $result = "empty";
    }

    $this->set("result", $result);
  }
// htmlspecialchars()
}
