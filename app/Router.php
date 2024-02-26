<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\NoConfigurationException;

class Router
{
    public function __invoke(RouteCollection $routes)
    {
        $context = new RequestContext();
        $context->fromRequest(Request::createFromGlobals());
        $requestedUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Check if the requested URL points to an asset file
        if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|ico)$/', $requestedUrl)) {
            // Serve the asset file directly
            $this->serveAsset($requestedUrl);
            return;
        }

        $matcher = new UrlMatcher($routes, $context);
        try {
            $arrayUri = explode('?', $requestedUrl);
            $matches = $matcher->match($arrayUri[0]);
            $className = '\\App\\Controllers\\' . $matches['controller'];
            $classInstance = new $className();
            call_user_func_array(array($classInstance, $matches['method']), []);
        } catch (MethodNotAllowedException $e) {
            echo 'Route method is not allowed.';
        } catch (ResourceNotFoundException $e) {
            echo 'Route does not exist.';
        } catch (NoConfigurationException $e) {
            echo 'Configuration does not exist.';
        }
    }

    private function serveAsset($assetPath)
    {
        // Set the appropriate Content-Type header based on the file extension
        $extension = pathinfo($assetPath, PATHINFO_EXTENSION);
        switch ($extension) {
            case 'png':
                header('Content-Type: image/png');
                break;
            case 'jpg':
            case 'jpeg':
                header('Content-Type: image/jpeg');
                break;
            case 'gif':
                header('Content-Type: image/gif');
                break;
            case 'css':
                header('Content-Type: text/css');
                break;
            case 'js':
                header('Content-Type: application/javascript');
                break;
            case 'ico':
                header('Content-Type: image/x-icon');
                break;
            default:
                header('Content-Type: application/octet-stream');
        }

        // Read and output the contents of the asset file
        readfile(APP_ROOT . '/public_html//'.  $assetPath);
    }
}
// Invoke
$router = new Router();
$router($routes);
