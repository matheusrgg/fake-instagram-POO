<?php

include_once"Conexao.php";


class Login extends Conexao{

    public function loginUsuario($nome){
        $db = parent::criarConexao();
        $query = $db->prepare("SELECT * from usuario where nome =? ");
        $query->execute([ $nome]);
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

  






}