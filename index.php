<?php

    require_once("config.php");

    //----------------------------------------------------------------------
    //Exibe todos os registros da tabela tb_usuarios
    //$sql = new Sql();
    //$usuarios = $sql->select("SELECT * FROM tb_usuarios");

    //echo json_encode($usuarios);

    //----------------------------------------------------------------------
    //Carrega um usuario
    //$root = new Usuario();
    //$root->loadById(4);
    
    //echo $root;

    //----------------------------------------------------------------------
    //Carrega uma lista de usuarios
    //$lista = Usuario::getList();
    
    //echo json_encode($lista);

    //----------------------------------------------------------------------
    //Carrega uma lista de usuarios buscando pelo login
    //$search = Usuario::search("raph");
    
    //echo json_encode($search);

    //----------------------------------------------------------------------
    //Carrega um usuario buscando pelo login e senha
    //$usuario = new Usuario();
    //$usuario->login("raphael", "1234");

    //echo $usuario;

    //----------------------------------------------------------------------
    //Criando um novo usuario
    //$aluno = new Usuario("aluno", "@lun@");
    //$aluno->insert();

    //echo $aluno;

    //----------------------------------------------------------------------
    //Alterar um usuario
    $usuario = new Usuario();
    $usuario->loadById(7);
    $usuario->update("professor", "123456");

    echo $usuario;

    //----------------------------------------------------------------------
    //Deletar um usuario
    //$usuario = new Usuario();
    //$usuario->loadById(5);
    //$usuario->delete();

    //echo $usuario;

?>