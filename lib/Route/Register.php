<?php

namespace AvoRed\Route;


use AvoRed\Module\BaseRegister;

class Register extends BaseRegister
{
  

    public function init()
    {
    }

    public function register()
    {
        
        $this->routeFile("config/routes.php");
    }

    public function routeFile($path = null)
    {
        $basePath = $this->app->basePath();
        
        return $basePath . DIRECTORY_SEPARATOR . $path;
    }
}
