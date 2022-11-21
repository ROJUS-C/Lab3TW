<?php
class App{
    public function __construct()
    {
        require_once './app/router/route.php';
        $router = new Route();        
   }
}
?>