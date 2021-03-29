<?php

namespace app\core;
use app\core\Request;
use app\core\Router;

class Application
{
    public static string $ROOT_DIR;    
    public static Application $app;
    public Router $router;
    public Request $request;
    public Response $response;

     /**
     * Application constructor
     * 
     * @param \app\core\Router $router
     * @param \app\core\Request $request
     * @param \app\core\Response $response
     */

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
       echo $this->router->resolve();
    }
}