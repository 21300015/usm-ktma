<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct() {
        parent::__construct();
        /* if (isset($_SESSION['ROLEID'])) {
            
            if ($_SESSION['ROLEID'] == 4) {
                return $this->innerapp->redirect('/');
            }
        }
        if (!$this->innerapp->servervar->islogin()) {
            return $this->innerapp->redirect('outerapp/logout');
        } */
        
    }
    public function index(){
        //$this->addJs('modules/home.js');
        $this->innerapp->servervar->generateToken();
        return $this->ViewDefault('dashboard', array());
    }
}
