<?php

include_once"Conexao.php";


class User extends Conexao{

    public function criarUsuario($image, $nome , $senha){
        $db = parent::criarConexao();
        $query = $db->prepare("INSERT INTO usuario (img, nome, senha) values(?,?,?) ");
        return $query->execute([$image, $nome , $senha]);
    }

}