<?php

    $rotas = key($_GET)?key($_GET):"posts";


    switch($rotas){
        case "posts":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;

        case "formulario-post":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;

        case "cadastrar-post":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;


        /*----- case Cadastro do Usuario para Banco de Dados --- */

        case "cadastro-usuarioDB":
            include "controllers/PostController.php";
            $controller = new CadastroController();
            $controller->acao($rotas);
        break;

        
        case "cadastro-usuarioView":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;
    }