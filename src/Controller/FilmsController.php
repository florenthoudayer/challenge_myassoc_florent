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
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

