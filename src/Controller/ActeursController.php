<?php

namespace App\Controller;

Class ActeursController extends \App\Controller\AppController
{
    public function index(){
        $acteurs = $this->Acteurs->find('all');
        $this->set(compact('acteurs'));
    }

}