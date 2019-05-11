<?php
namespace App\Controllers;

use \Core\View;
use \App\Models\User;
use App\Authentication as Auth;

/**
 * Login controller
 */
class Login extends \Core\Controller{

    /**
     * Show the login pahe
     * 
     * @return void
     */
    public function newAction(){
        View::renderTemplate('Login/new.html');
    }

    /**
     * Log in a user
     * 
     * @return void
     */
    public function createAction(){
        $user = User::authenticate($_POST['email'], $_POST['password']);

        if($user){
            Auth::login($user);
            
            $this->redirect(Auth::getReturnToPage());
        }else{
            View::renderTemplate('Login/new.html', [
                'email' => $_POST['email'],
            ]);
        }
    }

    /**
     * Log out a user
     * 
     * @return void
     */
    public function destroyAction(){
        Auth::logout();

        $this->redirect('/');
    }
}