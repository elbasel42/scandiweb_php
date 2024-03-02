<?php

namespace App;

class Router
{
    private $routes = [];

    public function addRoute($route, $controller)
    {
        $this->routes[$route] = $controller;
    }

    public function handleRequest()
    {
        $requestedUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Check if the requested URL points to an asset file
        if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|ico)$/', $requestedUrl)) {
            $this->serveAsset($requestedUrl);
            return;
        }

        if (array_key_exists($requestedUrl, $this->routes)) {
            $controllerAction = explode('@', $this->routes[$requestedUrl]);
            $controllerName = '\\App\\Controllers\\' . $controllerAction[0];
            $methodName = $controllerAction[1];

            if (class_exists($controllerName)) {
                $controller = new $controllerName();

                if (method_exists($controller, $methodName)) {
                    $controller->$methodName();
                    return;
                }
            }
        }

        header("HTTP/1.0 404 Not Found");
        echo 'Route not found';
    }

    private function serveAsset($assetPath)
    {
        $filePath = APP_ROOT . '/public_html/' . $assetPath;

        if (file_exists($filePath)) {
            $extension = pathinfo($assetPath, PATHINFO_EXTENSION);
            $contentType = $this->getContentType($extension);
            header("Content-Type: $contentType");
            readfile($filePath);
            exit;
        }

        header("HTTP/1.0 404 Not Found");
        echo 'Asset not found';
    }

    private function getContentType($extension)
    {
        switch ($extension) {
            case 'png':
                return 'image/png';
            case 'jpg':
            case 'jpeg':
                return 'image/jpeg';
            case 'gif':
                return 'image/gif';
            case 'css':
                return 'text/css';
            case 'js':
                return 'application/javascript';
            case 'ico':
                return 'image/x-icon';
            default:
                return 'application/octet-stream';
        }
    }
}

// Example usage:

$router = new Router();

$router->addRoute('/', 'HomeController@index');
$router->addRoute('/product/add', 'ProductController@add');
$router->addRoute('/product/delete', 'ProductController@delete');

$router->handleRequest();
