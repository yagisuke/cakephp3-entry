<?php
namespace App\Controller;

class BoardsController extends AppController {

  /* 全レコード表示画面 */
  public function index() {
      $this->set("data", $this->Boards->find("all"));
  }

  /* レコード登録画面 */
  public function register() {

    if ($this->request->is("post") && !empty($this->request->data)) {
      $board = $this->Boards->newEntity($this->request->data);
      $this->Boards->save($board);
    }

    $this->set("data", $this->Boards->find("all"));
    $this->set("entity", $this->Boards->newEntity());
  }

  /* レコード検索画面 */
  public function search() {

    if ($this->request->is("get") && !empty($this->request->query)) {
      $conditions = [];
      if (!empty($this->request->query["id"])) {
        $conditions[] = ["id" => $this->request->query["id"]];
      }
      if (!empty($this->request->query["name"])) {
        $conditions[] = ["name like" => "%{$this->request->query["name"]}%"];
      }
      $data = $this->Boards->find("all")->where($conditions);
    } else {
      $data = $this->Boards->find("all");
    }

    $data->order(["name"=>"ASC", "id"=>"DESC"]);
    $this->set("data", $data->toArray());
    $this->set("count", $data->count());
    $this->set("min", $data->min("id"));
    $this->set("max", $data->max("id"));
    $this->set("first", $data->first()->toArray());
  }

}
