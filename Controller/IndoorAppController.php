<?php

App::uses('AppController', 'Controller');

class IndoorAppController extends AppController {

    public $components = array('Auth', 'Session', 'DebugKit.Toolbar');
    public $helpers = array('Html', 'Form', 'Session', 'ThumbnailsPlugin.Thumbnail', 'Time', 'Js', 'Html');

    function beforeFilter() {
        $this->Auth->authenticate = array('Form' => array('fields' => array('username' => 'email')));
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'plugin' => 'indoor');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login', 'plugin' => 'indoor');
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'add', 'plugin' => 'indoor');
    }
}

