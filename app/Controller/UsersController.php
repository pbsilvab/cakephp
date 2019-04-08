<?php

class UsersController extends AppController{

    public function index() {

	}

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('add', 'logout');
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
         //   debug($this->request->data);
           // die();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        }
    }
    public function login() {
        if ($this->request->is('post')) {

            if ($this->Auth->login()) {
                $this->Session->write('userId', $this->Auth->user('id'));
                $this->Session->write('Correo', $this->Auth->user('email'));


                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
    
    public function logout() {
        $this->Session->destroy();
        return $this->redirect($this->Auth->logout());
    }
    
}
