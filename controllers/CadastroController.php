<?php

session_start();

include_once "models/User.php";

class CadastroController {


    public function acao($rotas){
        switch($rotas){
            
            case "cadastro-usuarioDB":
                //se for auqela rota executa essa função
                $this->cadastrarUsuario();
            break;
        

        case "cadastro-usuarioView":
            $this->viewFormularioCadastro();
        break;
        }
    }


/*------- funcoes de cadastro -------*/

private function viewFormularioCadastro(){
        include "views/includes/cadastrarUsuario.php";

}

private function cadastrarUsuario(){

    // var_dump($_FILES);
    // exit;
    $imagem= $_FILES['img']['name'];
    $linkTemp=$_FILES['img']['tmp_name'];
    $caminhoSalvo='views/img/'.$imagem;
    
    $deucerto= move_uploaded_file($linkTemp, $caminhoSalvo);

    // var_dump($deucerto);
    // exit;

    $nome= $_POST['uname'];
    $senha = password_hash ($_POST['senha'], PASSWORD_DEFAULT);


    /* ---- Criei um objeto e logo em seguida chamo o case formulario-cadastro ----*/
    
    /*--- objeto $user de Model , classe user() */
    $user = new User();
    $resultado = $user -> criarUsuario ($imagem ,$nome, $senha );

    if($resultado){
        header('Location:/fake-instagram-POO/posts');

    }else{

        echo "deu errado meu BROTHERRERR";

    }

    }
}

