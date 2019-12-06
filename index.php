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
            include "controllers/CadastroController.php";
            $controller = new CadastroController();
            $controller->acao($rotas);
        break;

        
        case "cadastro-usuarioView":
            include "controllers/CadastroController.php";
            $controller = new CadastrarController();
            $controller->acao($rotas);
        break;
    

        //*----- case Login do Usuario para Validação, vão ser sempre 2 rotas , pq eu não vou cadastrar mais vou validar --- */

         case "login-usuarioView":
         include "controllers/LoginController.php";
             $controller = new LoginController();
             $controller->acao($rotas);
         break;

         case "login-usuarioValidacao":
             include "controllers/LoginController.php";
             $controller = new LoginController();
             $controller->acao($rotas);
         break;

         case "logout";
         include "controllers/LoginController.php";
             $controller = new LoginController();
             $controller->acao($rotas);
         break;

        }