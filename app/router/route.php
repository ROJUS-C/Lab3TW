<?php
class Route{
    protected $url;
    protected $nameUrl;
    protected $fileController;
    /*Inicia la funcion que que separa la url en cadenas de texto ejemplo: movistar.cl/hola/hola1 => ["hola","hola2"]
      Inicia la funcion existe url   
    */
    public function __construct()
    {
        $this->setUrl();
        if(!$this->existUrl()){
            require_once 'vista/error/error.php';
        };
    }

    /*funcion que busca busca las peticiones de la url*/
    protected function setUrl(){
        $this->url = isset($_GET['url']) ? $_GET['url'] : null;
        $this->url = rtrim($this->url, '/');
        $this->url = explode('/', $this->url);
    }

    protected function getUrl(){
        return $this->url;
    }
    /*funcion que verifica si la peticion existe*/
    protected function existUrl(){
        if (empty($this->url[0])) {
            require_once ('controlador/ControllerFormulario.php');
            $this->fileController = new ControllerFormulario();
            $this->fileController->render();
            return true;
        }
        if(!$this->seachFile(strtolower($this->url[0]))){
            return false;
        }
        if(!file_exists($this->nameUrl)){
            return false;
        }else{
            require_once $this->nameUrl;
            $url = 'Controller' . ucfirst($this->url[0]);
            $controller = new $url;
            if(isset($this->url[1])){
                if (method_exists($controller, $this->url[1])) {
                    $controller->{$this->url[1]}();
                    return true;
                }
                return false;
            }else{
                $controller->render();
                return true;
            }
            return false;
        }
    }

    /*Busca la direccion de la pagina*/
    protected function seachFile($seach){
        $string = file_get_contents('utilities/pages.json');
        $json = json_decode($string, true);
        
        foreach ($json as $key => $value) {
                if($value['name'] === $seach){
                    $this->nameUrl = 'controlador/Controller'. ucfirst($value['name']).'.php';
                    return true;
                }
        }
        return false;
    }

}
