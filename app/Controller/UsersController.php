<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// app/Controller/UsersController.php
App::uses('AppController', 'Controller');

class UsersController extends AppController {



    /*public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('admin_login', 'admin_logout');
    }
	public function admin_list($userId=null) {
		if(isset($userId) && $this->Auth->user('role') !== 'admin')
            exit('You are not authorized to view this page');
        
        if(!isset($userId))
            $userId = $this->Auth->user('id');
        
        if($this->Auth->user('role') === 'admin')
            $user = $this->User->find('all');
        else
            $user = $this->User->find('all', array('conditions' => array('User.id' => $this->Auth->user('id'))));
        
        $this->set('users', $user);
//       pr($user);
	}*/
	
    public function admin_login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }	
    
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function admin_logout() {
        $this->Auth->logout();
        return $this->redirect('/admin');
    }

    public function admin_index() {
        
        
        
    }

    public function admin_view($id = null) {
        
        
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->findById($id));
        
    }

    public function admin_add() {
        if($this->Auth->user('role') !== 'admin')
        {
            $this->redirect('/admin');
            die();
        }
        //pr($this->Auth->user());
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        }
    }

    public function admin_edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

    public function admin_delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        
		$this->User->id = $id;
		$user = $this->User->read();
		if ($this->User->delete($id)){
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash-error(__('The user could not be deleted, please try again'));
		}
		return $this->redirect(array('action' => 'index'));
    }
}