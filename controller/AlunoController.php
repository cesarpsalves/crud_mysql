<?php
    require_once('../conexao/conexao.php');     
    require_once('../DAO/FinanceiroDAO.php');
    require_once('../DTO/Financeiro.php');    
    require_once('../DAO/LogradouroDAO.php');
    require_once('../DTO/Logradouro.php');
    require_once('../DAO/PagamentoDAO.php');
    require_once('../DTO/Pagamento.php');
    require_once('../DAO/TelefoneDAO.php');
    require_once('../DTO/Telefone.php');
    require_once('../DAO/TutorDAO.php');
    require_once('../DTO/Tutor.php');
    require_once('../DAO/UsuarioDAO.php');
    require_once('../DTO/Usuario.php');

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();
$tutor = new Tutor();
$tutordao = new TutorDAO();
$telefone = new Telefone();
$telefonedao = new TelefoneDAO();
$pagamento = new Pagamento();
$pagamentodao = new PagamentoDAO();
$logradouro = new Logradouro();
$logradourodao = new LogradouroDAO();
$financeiro = new Financeiro();
$financeirodao = new FinanceiroDAO();
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
    $tutor->setResponsavel($d['responsavel']);
    $telefone->setFixo($d['fixo']);
    $telefone->setCelular($d['celular']);
    $pagamento->setReg_data_pagamento($d['reg_data_pagamento']);
    $pagamento->setSituacao($d['situacao']);
    $logradouro->setCep($d['cep']);
    $logradouro->setEndereco($d['endereco']);
    $logradouro->setPonto_de_referencia($d['ponto_de_referencia']);
    $logradouro->setNumero($d['numero']);
    $logradouro->setComplemento($d['complemento']);
    $logradouro->setBairro($d['bairro']);
    $logradouro->setCidade($d['cidade']);
    $logradouro->setEstado($d['estado']);
    $financeiro->setProduto($d['produto']);
    $financeiro->setPreco($d['preco']);
    $financeiro->setPayment_status($d['payment_status']);
    $financeiro->setData_pagamento($d['data_pagamento']);
    $financeiro->setVencimento($d['vencimento']);




    $usuariodao->inserir($usuario);
    $tutordao->cadastrar($tutor);
    $telefonedao->cadastrar($telefone);
    $pagamentodao->cadastrar($pagamento);
    $logradourodao->cadastrar($logradouro);
    $financeirodao->cadastrar($financeiro);

    echo "Cadastrado com Sucesso <br/>";
    
    //parei aqui 06/01/2021
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
    $tutor->setResponsavel($d['responsavel']);
    $telefone->setFixo($d['fixo']);
    $telefone->setCelular($d['celular']);
    $pagamento->setReg_data_pagamento($d['reg_data_pagamento']);
    $pagamento->setSituacao($d['situacao']);
    $logradouro->setCep($d['cep']);
    $logradouro->setEndereco($d['endereco']);
    $logradouro->setPonto_de_referencia($d['ponto_de_referencia']);
    $logradouro->setNumero($d['numero']);
    $logradouro->setComplemento($d['complemento']);
    $logradouro->setBairro($d['bairro']);
    $logradouro->setCidade($d['cidade']);
    $logradouro->setEstado($d['estado']);
    $financeiro->setProduto($d['produto']);
    $financeiro->setPreco($d['preco']);
    $financeiro->setPayment_status($d['payment_status']);
    $financeiro->setData_pagamento($d['data_pagamento']);
    $financeiro->setVencimento($d['vencimento']);

    $usuariodao->update($usuario);
    $tutordao->update($tutor);
    $telefonedao->update($telefone);
    $pagamentodao->update($pagamento);
    $logradourodao->update($logradouro);
    $financeirodao->update($financeiro);

    echo "Editado com Sucesso <br/>";
}
// se a requisição for deletar
else if(isset($_GET['del'])){

    $usuario->setId($_GET['del']);
    $usuariodao->delete($usuario);
    $tutor->setId($_GET['del']);
    $tutordao->delete($tutor);
    $telefone->setId($_GET['del']);
    $telefonedao->delete($telefone);
    $pagamento->setId($_GET['del']);
    $pagamentodao->delete($pagamento);
    $logradouro->setId($_GET['del']);
    $logradourodao->delete($logradouro);
    $financeiro->setId($_GET['del']);
    $financeirodao->delete($financeiro);


    echo "Deletado com Sucesso <br/>";
}else{
    echo "Problema ao deletar <br/>";
}