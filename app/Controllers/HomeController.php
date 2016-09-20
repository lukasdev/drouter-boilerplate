<?php

namespace ProjectName\Controllers;

use ProjectName\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Pega usuarios do banco
        $usuarios =  [
            ['name' => 'João'],
            ['name' => 'Maria'],
            ['name' => 'José']
        ];

        $this->render->load('home.php', [
            'users' => $usuarios
        ]);
    }
}
