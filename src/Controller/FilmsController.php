<?php

namespace App\Controller;

Class FilmsController extends \App\Controller\AppController
{
    public function index(){
        $films = $this->Films->find('all');
        $this->set(compact('films'));
    }
    
     public function view($id = null)
    {
        $film = $this->Films->get($id);
        $this->set(compact('film'));
    }
    
    public function edit($id = null)
{
    $film = $this->Films->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Films->patchEntity($film, $this->request->getData());
        if ($this->Films->save($film)) {
            $this->Flash->success(__('Votre film a été mis à jour.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Impossible de mettre à jour votre film.'));
    }

    $this->set('film', $film);
}

    public function delete($id)
    {
        $film = $this->Films->get($id);
        if ($this->Films->delete($film)) {
            $this->Flash->success(__("Le film avec l'id: {0} a été supprimé.", h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

