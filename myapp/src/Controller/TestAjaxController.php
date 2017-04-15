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

  public function testJson () {
    $this->viewBuilder()->layout('');
    $this->render('testJson');
  }

  public function testJsonApi () {
    $this->autoRender = false;

    $this->response->charset('UTF-8');
    $this->response->type('json');
    $this->response->body(
      '{
         "bookmarks":[
            {
               "user":"masaka99",
               "title":"\u9ebb\u96c0\u4e00\u756a\u8857 - \u30b3\u30e9\u30e0 - \u5929\u9cf3\u306e\u653b\u7565\u65b9\u6cd5",
               "url":"http://dora12.net/modules/column/tenhoukouryaku.html"
            },
            {
               "user":"masaka99",
               "title":"\u9ebb\u96c0\u4e00\u756a\u8857 - \u30b3\u30e9\u30e0 - \u5929\u9cf3\u306e\u653b\u7565\u65b9\u6cd5",
               "url":"http://dora12.net/modules/column/tenhoukouryaku.html"
            }
         ]
      }'
    );

    return $this->response;
  }
}
