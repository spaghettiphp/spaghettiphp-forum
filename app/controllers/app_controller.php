<?php

require_once 'lib/core/security/Sanitize.php';
require_once 'lib/auth/Auth.php';

/*
    Class: AppController
*/
class AppController extends Controller {
    protected $beforeFilter = array('configAuth', 'requireLogin');
    protected $requireLogin = array();
    
    protected function configAuth() {
        Auth::$hash = function($password) {
            return md5($password);
        };
    }
    
    protected function requireLogin() {
        if(!Auth::loggedIn()) {
            if(in_array($this->param('action'), $this->requireLogin)) {
                Session::flash('Auth.redirect', Mapper::here());
                $this->redirect('/users/login');
            }
        }
    }
}