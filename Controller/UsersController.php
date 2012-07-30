<?php

class UsersController extends IndoorAppController {

    var $paginate = array(
        'limit' => 10,
        'order' => array(
            'User.email' => 'asc'
        )
    );

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function login() {
        $this->set('title_for_layout', 'LinuxAp - ' . __('Administrative panel'));
        $this->layout = 'login';
        if ($this->request->is('post')) {
            if ($this->Auth->login())
                $this->redirect($this->Auth->redirect());
            else
                $this->Session->setFlash(__('Invalid username or password, try again'), 'default', array('class' => 'alert alert-error'));
        } else
            $this->Session->setFlash(__('<b>Welcome!</b> Enter your email and password to log in.'), 'default', array('class' => 'alert alert-info', 'escape' => false));
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->set('title_for_layout', 'LinuxAp - ' . __('All Users'));
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function add() {
        $this->set('title_for_layout', 'LinuxAp - ' . __('Add User'));
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'), 'default', array('class' => 'alert alert-success'));
                $this->redirect(array('controller' => 'users', 'action' => 'index'));
            } else
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
        }
    }

    public function edit($id = null) {
        $this->set('title_for_layout', 'LinuxAp - ' . __('Edit User'));
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'), 'default', array('class' => 'alert alert-success'));
                $this->redirect(array('controller' => 'users', 'action' => 'index'));
            } else
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            $this->Session->setFlash(__('Invalid request'), 'default', array('class' => 'alert'));
            $this->redirect(array('controller' => 'users', 'action' => 'index'));
        }

        $this->User->id = $id;

        if (!$this->User->exists()) {
            $this->Session->setFlash(__('Invalid user'), 'default', array('class' => 'alert alert-error'));
            $this->redirect(array('controller' => 'posts', 'action' => 'index'));
        }

        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'), 'default', array('class' => 'alert alert-success'));
            $this->redirect(array('controller' => 'users', 'action' => 'index'));
        }

        $this->Session->setFlash(__('User was not deleted'), 'default', array('class' => 'alert alert-error'));
        $this->redirect(array('controller' => 'users', 'action' => 'index'));
    }

}
