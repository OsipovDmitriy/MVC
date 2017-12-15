<?php

declare(strict_types = 1);

namespace MVC\FrontController;

use \MVC\Dispatcher\DispatcherFactoryAbstract;

class FrontControllerFactory
{
    public function create(): FrontControllerFactory
    {
        $front_controller = new \MVC\FrontController\FrontController();
        return $front_controller;
    }
}