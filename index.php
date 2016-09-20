<?php
    require 'vendor/autoload.php';

    $app = new DRouter\App();
    $app->render->setViewsFolder(__DIR__.'/public/views/');
    
    include 'app/dependencies.php';
    include 'app/routes.php';


    $app->run();