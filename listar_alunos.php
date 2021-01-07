<?php
include_once "./app/conexao/Conexao.php";
include_once "./app/dao/UsuarioDAO.php";
include_once "./app/model/Usuario.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Recife'); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

 <!-- Fonte e Figuras Google Fonte e Font Awesome-->
                    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
                    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

                   

          <!-- CDN Admin-->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" crossorigin="anonymous">        

</head>
<body>
    <body style="background: #B0C4B1;">
    
        <br/>

        <div class="container-fluid" id="inicio">

            
            <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Alunos Cadastrados</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive-sm">
            <table class="table table-sm table-bordered table-hover">
                <thead>
                    <tr>
                        <th>E-mail</th>                        
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Data Nascimento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuariodao->read() as $usuario) : ?>
                        <tr>
                            <td><?= $usuario->getEmail() ?></td>
                            <td><?= $usuario->getNome() ?></td>
                            <td><?= $usuario->getSobrenome() ?></td>
                            <td><?php $nascimento = $usuario->getData_nascimento();
$nas = strftime('%d de %B de %Y', strtotime($nascimento)); echo $nas; ?></td>                            
                            <td class="text-center">
                                <button class="btn  btn-warning btn-sm" data-toggle="modal" data-target="#editar><?= $usuario->getId() ?>">
                                    Editar
                                </button>
                                <a href="app/controller/UsuarioController.php?del=<?= $usuario->getId() ?>">
                                <button class="btn  btn-danger btn-sm" type="button">Excluir</button>
                                </a>
                            </td>
                        </tr>                                      
					 <?php endforeach ?>
                </tbody>
            </table>
        </div>



        <!-- Bootstrap core JavaScript-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

