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

//pega todos os dados passado por POST e SANITIZA

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = md5(filter_input(INPUT_POST, 'senha'));
    $nome =  filter_input(INPUT_POST, 'nome');
    $sobrenome =  filter_input(INPUT_POST, 'sobrenome');
    $sexo =  filter_input(INPUT_POST, 'sexo');
    $data_nascimento =  filter_input(INPUT_POST, 'data_nascimento');
    $identidade =  filter_input(INPUT_POST, 'identidade');
    $tipoidentidade =  filter_input(INPUT_POST, 'tipoidentidade');
    $cpf =  filter_input(INPUT_POST, 'cpf');
    $responsavel =  filter_input(INPUT_POST, 'responsavel');
    $fixo =  filter_input(INPUT_POST, 'fixo');
    $celular =  filter_input(INPUT_POST, 'celular');
    $reg_data_pagamento =  filter_input(INPUT_POST, 'reg_data_pagamento');
    $situacao =  filter_input(INPUT_POST, 'situacao');
    $cep =  filter_input(INPUT_POST, 'cep');
    $endereco =  filter_input(INPUT_POST, 'endereco');
    $ponto_de_referencia =  filter_input(INPUT_POST, 'ponto_de_referencia');
    $numero =  filter_input(INPUT_POST, 'numero');
    $complemento =  filter_input(INPUT_POST, 'complemento');
    $bairro =  filter_input(INPUT_POST, 'bairro');
    $cidade =  filter_input(INPUT_POST, 'cidade');
    $estado =  filter_input(INPUT_POST, 'estado');
    $produto =  filter_input(INPUT_POST, 'produto');
    $preco =  filter_input(INPUT_POST, 'preco');
    $payment_status =  filter_input(INPUT_POST, 'payment_status');
    $data_pagamento =  filter_input(INPUT_POST, 'data_pagamento');
    $vencimento =  filter_input(INPUT_POST, 'vencimento');

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $usuario->setEmail($email);
    $usuario->setSenha($senha);
    $usuario->setNome($nome);
    $usuario->setSobrenome($sobrenome);
    $usuario->setSexo($sexo);
    $usuario->setData_nascimento($data_nascimento);
    $usuario->setIdentidade($identidade);
    $usuario->setTipoidentidade($tipoidentidade);
    $usuario->setCpf($cpf);
    $tutor->setResponsavel($responsavel);
    $telefone->setFixo($fixo);
    $telefone->setCelular($celular);
    $pagamento->setReg_data_pagamento($reg_data_pagamento);
    $pagamento->setSituacao($situacao);
    $logradouro->setCep($cep);
    $logradouro->setEndereco($endereco);
    $logradouro->setPonto_de_referencia($ponto_de_referencia);
    $logradouro->setNumero($numero);
    $logradouro->setComplemento($complemento);
    $logradouro->setBairro($bairro);
    $logradouro->setCidade($cidade);
    $logradouro->setEstado($estado);
    $financeiro->setProduto($produto);
    $financeiro->setPreco($preco);
    $financeiro->setPayment_status($payment_status);
    $financeiro->setData_pagamento($data_pagamento);
    $financeiro->setVencimento($vencimento);




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

    $usuario->setEmail($email);
    $usuario->setSenha($senha);
    $usuario->setNome($nome);
    $usuario->setSobrenome($sobrenome);
    $usuario->setSexo($sexo);
    $usuario->setData_nascimento($data_nascimento);
    $usuario->setIdentidade($identidade);
    $usuario->setTipoidentidade($tipoidentidade);
    $usuario->setCpf($cpf);
    $tutor->setResponsavel($responsavel);
    $telefone->setFixo($fixo);
    $telefone->setCelular($celular);
    $pagamento->setReg_data_pagamento($reg_data_pagamento);
    $pagamento->setSituacao($situacao);
    $logradouro->setCep($cep);
    $logradouro->setEndereco($endereco);
    $logradouro->setPonto_de_referencia($ponto_de_referencia);
    $logradouro->setNumero($numero);
    $logradouro->setComplemento($complemento);
    $logradouro->setBairro($bairro);
    $logradouro->setCidade($cidade);
    $logradouro->setEstado($estado);
    $financeiro->setProduto($produto);
    $financeiro->setPreco($preco);
    $financeiro->setPayment_status($payment_status);
    $financeiro->setData_pagamento($data_pagamento);
    $financeiro->setVencimento($vencimento);

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