<?php namespace Controller;

use Model\User as User;
use Karnel\View as View;
use Layout\Header as Header;
use Layout\Footer as Footer;


class Controller
{
    
    protected function model($id) {
        
        $model = new User();
        $user = $model->connect($id);
        return $user;
    }
    
    protected function view($name, $data = []) {
        
        $view = new View;
        $view->name = $name;
        $view->model = $data;
        require_once '../src/views/' . $name . '.php';
        
    }
    
    protected function header() {
        $header = new Header;
        return $header->header;
    }
    
    protected function footer() {
        $footer = new Footer;
        return $footer->footer;        
    }
    
}
