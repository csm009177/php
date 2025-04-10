<?php
/* 
라우터 역할을 하며, 사용자의 요청을 
적절한 컨트롤러와 액션으로 라우팅합니다.
*/

class App
{

  protected $controller = 'homecontroller';
  protected $method = 'index';
  protected $params = 'index';

  public function __construct()
  {
    $url = $this->parseUrl();
    if (file_exists('../app/controller/' . $url[0] . '.php')) {
      $this->controller = $url[0];
      unset($url[0]);
    }
    require_once '../app/controllers' . $this->controller . 'php';
    $this->controller = new $this->controller;

    
  }

  public function parseUrl()
  {

    if (isset($_GET['url'])) {
      return explode('/', $_GET['url']);
    }
  }
}
