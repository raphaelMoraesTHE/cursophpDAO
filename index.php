<?php

    require_once("config.php");

    //$sql = new Sql();

    //$usuarios = $sql->select("SELECT * FROM tb_usuarios");

    //Carrega um usuario
    //$root = new Usuario();

    //$root->loadById(4);

    //echo json_encode($usuarios);
    //$lista = Usuario::getList();

    //echo json_encode($lista);

    //Carrega uma lista de usuarios buscando pelo login
    //$search = Usuario::search("R");

    //echo json_encode($search);

    //Carrega usuario login e senha
    //$usuario = new Usuario();
    //$usuario->login("raphael", "1234");

    //echo $usuario;


    //Criando um novo usuario
   // $aluno = new Usuario("aluno", "@lun@");
    
    //$aluno->insert();

    //echo $aluno;


    //Alterar um usuario
    //$usuario = new Usuario();
    //$usuario->loadById(4);
    //$usuario->update("professor", "123456");



    //echo $usuario;


    $usuario = new Usuario();
    $usuario->loadById(5);
    $usuario->delete();

    echo $usuario;

?>