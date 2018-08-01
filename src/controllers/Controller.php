<?php namespace Controller;

use Model\User as User;
use Kernel\View as View;
use Layout\Header as Header;
use Layout\Footer as Footer;


class Controller
{
    //protected $user;
    protected $id;
    protected $name;
    protected $data = [];

    protected function model($id) {
        //$this->user = $user;
        $this->id = $id;
        $model = new User();
        $user = $model->connect($id);
        //$model->name = $user;
        $model->id = $user;
        return $user;
    }
    
    protected function view($name, $data = []) {
        $this->name = $name;
        $this->data = $data;
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
