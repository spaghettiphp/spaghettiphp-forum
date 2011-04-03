<?php

class UsersController extends AppController {
    public function register() {

    }

    public function login() {
        if(!empty($this->data)) {
            if($this->data['remember']) {
                Session::option('lifetime', 15 * 86400);
            }
            
            if(Auth::login($this->data)) {
                if(!($location = Session::flash('Auth.redirect'))) {
                    $location = '/';
                }
                $this->redirect($location);
            }
            else {
                Session::flash('Auth.error', 'Usuário ou senha inválidos');
            }
        }
    }
    
    public function logout() {
        Auth::logout();
        $this->redirect('/');
    }

    public function edit() {

    }
}