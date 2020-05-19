<?php 

session_start();
include_once "models/Post.php";

class PostController {

    public function acao($rotas){
        switch($rotas){

            
            case "posts":
               $this->listarPosts();
            break;

            case "formulario-post":
                $this->viewFormularioPost();
            break;

            case "cadastrar-post":
                $this->cadastroPost();
            break;

           

             
            
        }
    }

    /*------- funcoes do post -------*/

    private function viewFormularioPost(){
        if(isset($_SESSION['newsession'])){
        include "views/newPost.php";
        }
        echo 'Você precisa se logar';
    }

    private function viewPosts(){
        include "views/posts.php";
    }

    private function cadastroPost(){
        
        $post = new Post();
        $descricao = $_POST['descricao'];
        $nomeArquivo = $_FILES['img']['name'];
        $linkTemp = $_FILES['img']['tmp_name'];
        $caminhoSalvar = "views/img/$nomeArquivo";
        move_uploaded_file($linkTemp, $caminhoSalvar);

        $idUsuario = $_SESSION['newsession'][0]['id'];
        // var_dump($idUsuario);
        // exit;

        $resultado = $post->criarPost($caminhoSalvar, $descricao, $idUsuario);
        if($resultado){
            header('Location:/fake-instagram-POO/posts');
        }else {
            echo "deu errado meu irmão";
        }
    }

    private function listarPosts(){
        $post = new Post();
        $listaPosts = $post->listarPosts();
        // var_dump($listaPosts);
        // exit;
        $_REQUEST['posts'] = $listaPosts;
        $this->viewPosts();
    }
}
