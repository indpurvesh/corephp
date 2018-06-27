<?php

namespace AvoRed\Foundation;

use AvoRed\Route\Register as Route;

class App
{
    public $components = [
        Route::class
    ];

    public $registeredCompoents = [];

    public function __construct($basePath)
    {
        $this->basePath = $basePath;
        $this->registerComponents();
    }

    public function run()
    {
        echo 'Hello World';
    }

    public function registerComponents()
    {
        foreach ($this->components as $component) {
            $componentClass = new $component($this);

           

            if (method_exists($componentClass, 'init')) {
                $componentClass->init();
            }
            if (method_exists($componentClass, 'register')) {
                $componentClass->register();
            }
        }
    }

    public function resolveComponentClass($component)
    {
        return new $component();
    }

    public function basePath() {
        return $this->basePath;
    }

   
}
