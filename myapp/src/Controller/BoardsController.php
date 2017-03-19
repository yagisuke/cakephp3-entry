<?php
namespace App\Controller;

use \Exception;
use Cake\Log\Log;
use Cake\Datasource\ConnectionManager;
use Cake\Validation\Validator;

class BoardsController extends AppController {

  /* 全レコード表示画面 */
  public function index() {
      $this->set("data", $this->Boards->find("list")->toArray());
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

  /* レコード登録画面(validation対応) */
  public function registerv2() {

    $entity = $this->Boards->newEntity();
    if ($this->request->is("post")) {
      $validator = new Validator();
      $validator->notEmpty("name");
      $validator->notEmpty("title");

      if (!empty($validator->errors($this->request->data))) {
        $this->Flash->error("please check entered values...");
      } else {
        $entity = $this->Boards->patchEntity($entity, $this->request->data);
        $this->Boards->save($entity);
        return $this->redirect(["action"=>"index"]);
      }
    }
    $this->set('entity', $entity);
  }

  /* レコード検索画面 */
  public function search() {

    $conditions = [];

    if ($this->request->is("get")) {
      if (!empty($this->request->query["id"])) {
        $conditions[] = ["id" => $this->request->query["id"]];
      }
      if (!empty($this->request->query["name"])) {
        $conditions[] = ["name like" => "%{$this->request->query["name"]}%"];
      }
    }

    $data = $this->Boards->find()
      ->where($conditions)
      ->select(["id", "name", "title"])
      ->order(["name"=>"ASC", "id"=>"DESC"]);

    $this->set("data", $data->toArray());
    $this->set("min", $data->min("id"));
    $this->set("max", $data->max("id"));
    $this->set("first", $data->first());
  }

  /* レコード検索画面(connection managerにて検索) */
  public function searchv2() {
    $connection = ConnectionManager::get("default");

    if ($this->request->is("get") && !empty($this->request->query["id"])) {
      $data = $connection
        ->execute("SELECT * FROM boards where id = :id", ["id" => $this->request->query["id"]])
        ->fetchAll("assoc");
    } else {
      $data = $connection->execute("SELECT * FROM boards")->fetchAll("assoc");
    }

    $this->set("data", $data);
    $this->set("entity", $this->Boards->newEntity());
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
