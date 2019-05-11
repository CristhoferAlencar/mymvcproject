<?php
namespace App\Controllers;

use \Core\View;
use \App\Authentication as Auth;

/**
 * Items controller (example)
 */
class Items extends \Core\Controller{

    /**
     * Items index
     *
     * @return void
     */
    public function indexAction(){
        if(!Auth::isLoggedIn()){
            $this->redirect('/login');
        }

        View::renderTemplate('Items/index.html');
    }
}