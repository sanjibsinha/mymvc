<?php
namespace Karnel;

/* 
 * This Karnel URL class defines the types of our framework app object
 */

class Url
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $args = [];

    public function __construct() {
        
        $url = $this->parsingURL();
        
        $filename = '../src/controllers/' . $url[0] . '.php';
        
        if(file_exists($filename)){
            $this->controller = $url[0];
            unset($url[0]);
        }
        
        require_once '../src/controllers/' . $this->controller . '.php';
        
        $this->controller = new \Controller\Home();
        
        $url[1] = "";
        
        if(method_exists($this->controller, $url[1])){
            $this->method = $url[1];
            unset($url[1]);
        }
        
        $this->args = $url? array_values($url): [];
        
        call_user_func_array([$this->controller, $this->method], $this->args);
        
    }
    
    public function parsingURL() {
        
        if (isset($_GET['url'])) {
            $string = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
            $url = explode('/', $string);
            return $url;
            
        }
        
    }
    
}

