<?php

class Core
{
    protected $currentController = 'Pages';
    public function __construct()
    {
        $url = $this->getUrl();
        $controllerName = ucwords($url[0]);{
        $controllerFileName = '../app/controllers/.$controllerName'.'.php';
        $this->currentController = $controllerName;
        unset($url[0]);
    }
        require_once $controllerFileName;
        $this->currentController = $controllerName;
        unset($url[0]);

        echo $controllerFileName;
        echo  '<pre>';
        print_r($url);
        echo '</pre>';
    }
    public function getUrl(){

        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = filter_list();
        $url = explode( '/', $url);
        return $url;
    }
}
