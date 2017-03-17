<?php
namespace App\Controller;

use \Exception;
use Cake\Log\Log;

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

  /* レコード削除画面 */
  public function delete() {

    if ($this->request->is("post") && !empty($this->request->data)) {
      try {
        $deleteId = $this->request->data["id"];
        $entity = $this->Boards->get($deleteId);
        $this->Boards->delete($entity);

        $this->set("deleteId", $deleteId);
      } catch(Exception $e) {
        Log::write("debug", $e->getMessage());
      }
    }
    $this->set("data", $this->Boards->find("all")->toArray());

  }

  /* レコード更新画面 */
  public function update($id = 0) {

    if ($this->request->is("put")) {

      try {
        $entity = $this->Boards->get($id);
        $this->Boards->patchEntity($entity, $this->request->data);
        $this->Boards->save($entity);

      } catch(Exception $e) {
        Logg::write("debug", $e->getMessage());
      }

    }

    $this->set("entity", $this->Boards->get($id == 0 ? 1 : $id));
    $this->set("data", $this->Boards->find("all")->toArray());

  }

}
