<?php
/**
 * la clase application maneja la url y lanza los procesos
 */

 class Application
 {
     private $urlController = null;
     private $urlAction = null;
     private $urlParams = [];

     function __construct()
     {
         print 'Prueba a ver si va';
    $db = Mysqldb::getInstance()->getDatabase();

    $url = $this->separarURL();

    if (! $this->urlController){
        require_once '../app/controllers/loginController.php';
        $page = new LoginController();
        $page->index();
    } elseif (file_exists('../app/controllers/' . ucfirst($this->urlController) . 'Controller.php')) {
        $controller = ucfirst($this->urlController ) . 'Controller';
        require_once '../app/controllers/' . $controller . '.php';
        $this->urlController = new $controller;
        $this->urlController->index();
    }



    //separar url (ver si funciona) var_dump($url);
     }

     public function separarURL()
     {
         if ($_SERVER['REQUEST_URI'] != '/'){
             $url = trim($_SERVER['REQUEST_URI'], '/');
             $url = filter_var($url, FILTER_SANITIZE_URL);
             $url = explode('/' , $url);

             $this->urlController = $url[0] ?? null;
             $this->urlAction = $url[1] ?? null;

             unset($url[0],$url[1]);

             $this->urlParams = array_values($url);
         }
     }
 }


?>