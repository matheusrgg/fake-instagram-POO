<?php
session_start();
include_once "models/Login.php";


class LoginController {

    public function acao($rotas){
        switch($rotas){

            case "login-usuarioView":
                $this->loginUsuario();
            break;

            case "login-usuarioValidacao":
                $this->loginValidacao();
            break;
        }
    }


    private function loginUsuario(){
        include "loginUsuario.php";
    }

    private function loginValidacao (){
        
        
        $login = new Login();

        $name=$_POST['uname'];

        $resultado=$login->loginUsuario($name);

        // var_dump($resultado);
        // exit;

        $userok = password_verify($_POST['senha'],$resultado[0]['senha']);

        if($userok){
        
           //newsession é uma associação (é um array) , guardando os dados do usuário e sempre que quiser , vc acessa a session como se fosse uma array. 
        
        $_SESSION["newsession"]=$resultado;

            header('Location:/fake-instagram-POO/posts');
            
        }else{
    
            echo "deu errado meu BROTHERRERR";
    
        }

        
    }

    private function logout() {
        session_start();
        session_destroy();
        header('Location:login');
    }



}