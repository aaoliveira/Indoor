<?php

class PostsController extends AdminAppController {
    
    
    public function index() {
        $this->set('title_for_layout', 'LinuxAp - ' . __('All Posts'));
        $this->Post->recursive = 0;
        $this->set('posts', $this->paginate());
    }

    public function view($id = null) {
        $this->set('title_for_layout', 'LinuxAp - ' . __('View Post'));
        $this->Post->id = $id;

        if (!$this->Post->exists())
            $this->Session->setFlash(__('Invalid post'), 'default', array('class' => 'alert alert-error'));

        $this->set('post', $this->Post->read(null, $id));
    }

    public function add() {
        $this->set('title_for_layout', 'LinuxAp - ' . __('Add Post'));
        if ($this->request->is('post')) {
            $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            $this->Post->create();

            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('The post has been saved'), 'default', array('class' => 'alert alert-success'));
                $this->redirect(array('controller' => 'posts', 'action' => 'index'));
            } else
                $this->Session->setFlash(__('The post could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
        }
    }

    public function edit($id = null) {
        $this->set('title_for_layout', 'LinuxAp - ' . __('Edit Post'));
        $this->Post->id = $id;

        if (!$this->Post->exists())
            $this->Session->setFlash(__('Invalid post'), 'default', array('class' => 'alert alert-error'));


        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('The post has been saved'), 'default', array('class' => 'alert alert-success'));
                $this->redirect(array('controller' => 'posts', 'action' => 'index'));
            } else
                $this->Session->setFlash(__('The post could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
        } else
            $this->request->data = $this->Post->read(null, $id);
    }

    public function delete($id = null) {

        if (!$this->request->is('post')) {
            $this->Session->setFlash(__('Invalid request'), 'default', array('class' => 'alert'));
            $this->redirect(array('controller' => 'posts', 'action' => 'index'));
        }

        $this->Post->id = $id;

        if (!$this->Post->exists()) {
            $this->Session->setFlash(__('Invalid post'), 'default', array('class' => 'alert alert-error'));
            $this->redirect(array('controller' => 'posts', 'action' => 'index'));
        }

        if ($this->Post->delete()) {
            $this->Session->setFlash(__('Post deleted'), 'default', array('class' => 'alert alert-success'));
            $this->redirect(array('controller' => 'posts', 'action' => 'index'));
        }
        $this->Session->setFlash(__('Post was not deleted'), 'default', array('class' => 'alert alert-error'));
        $this->redirect(array('controller' => 'posts', 'action' => 'index'));
    }

}
