<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class UsuarioController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $usuario = $this->Paginator->paginate($this->Usuario->find());
        $this->set(compact('usuario'));
    }
}