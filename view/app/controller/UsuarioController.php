<?php
include_once "../conexao/Conexao.php";
include_once "../model/Usuario.php";
include_once "../dao/UsuarioDAO.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

//pega todos os dados passado por POST

$d = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $usuario->setEmail($d['email']);
    $usuario->setSenha($d['senha']);
    $usuario->setNome($d['nome']);
    $usuario->setSobrenome($d['sobrenome']);
    $usuario->setSexo($d['sexo']);
    $usuario->setData_nascimento($d['data_nascimento']);
    $usuario->setIdentidade($d['identidade']);
    $usuario->setTipoidentidade($d['tipoidentidade']);
    $usuario->setCpf($d['cpf']);

    $usuariodao->create($usuario);

    echo "Cadastrado com Sucesso <br/>";
    

} 
// se a requisição for editar
else if(isset($_POST['editar'])){

    $usuario->setEmail($d['email']);
    $usuario->setSenha($d['senha']);
    $usuario->setNome($d['nome']);
    $usuario->setSobrenome($d['sobrenome']);
    $usuario->setSexo($d['sexo']);
    $usuario->setData_nascimento($d['data_nascimento']);
    $usuario->setIdentidade($d['identidade']);
    $usuario->setTipoidentidade($d['tipoidentidade']);
    $usuario->setCpf($d['cpf']);
    $usuario->setId($d['id']);

    $usuariodao->update($usuario);

    echo "Editado com Sucesso <br/>";
}
// se a requisição for deletar
else if(isset($_GET['del'])){

    $usuario->setId($_GET['del']);

    $usuariodao->delete($usuario);

    echo "Deletado com Sucesso <br/>";
}else{
    header("Location: ../../");
}