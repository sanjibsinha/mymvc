<?php namespace Controller;

use Controller\Controller as Controller;

use Model\User as User;

class Home extends Controller
{
    public function index($id = '') {
        
        $user = $this->model($id);
        $header = $this->header();
        $footer = $this->footer();
        $index = $this->view('home/index', 
                ['name' => $user,
                'location' => 'Nabagram',
                    'header' => $this->header(),
                    'footer' => $this->footer()                    
        ]);
        
        
    }
}