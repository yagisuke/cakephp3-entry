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

  /* GETの送信結果を表示 */
  public function sendGetForm() {

    $resule = "※送信された情報<br>";
    foreach ($this->request->query as $key => $val) {
      if ($val == "") continue;

      $result .= $key . " => " . h($val) . "<br />";
    }

    $this->set("result", $result);
  }

  /* POSTの送信結果を表示 */
  public function sendPostForm() {

    $resule = "※送信された情報<br>";
    foreach ($this->request->data as $key => $val) {
      if ($val == "") continue;

      $result .= $key . " => " . h($val) . "<br />";
    }

    $this->set("result", $result);
  }

}
