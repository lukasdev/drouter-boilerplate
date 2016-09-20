<?php
    namespace ProjectName\Controllers;
    use ProjectName\Controllers\Controller;

    class HomeController extends Controller{
        public function index(){
            //pega usuarios do banco
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