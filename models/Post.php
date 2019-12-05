<?php

include_once "Conexao.php";


class Post extends Conexao {


    public function criarPost($image, $descricao , $idUsuario){
        $db = parent::criarConexao();
        $query = $db->prepare("INSERT INTO posts (img, descricao ,idUsuario) values(?,?,?)");
        return $query->execute([$image, $descricao, $idUsuario]);
    }

    public function listarPosts(){
        $db = parent::criarConexao();
        $query = $db->query('SELECT posts.img, posts.descricao, usuario.nome FROM posts INNER JOIN usuario ON posts.idUsuario = usuario.id ORDER BY posts.id DESC');
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

}