<?php
include_once "./app/conexao/Conexao.php";
include_once "./app/dao/UsuarioDAO.php";
include_once "./app/model/Usuario.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Recife'); 


if (isset($_GET["id"])) {
$uri = $_GET["id"];
$ler = array();
$ler = $usuariodao->read();
echo $ler[$uri]->getEmail();
echo $ler[$uri]->getSenha();
echo $ler[$uri]->getNome();
echo $ler[$uri]->getSobrenome();
echo $ler[$uri]->getSexo();
$idade = $ler[$uri]->getData_nascimento();
echo $ler[$uri]->getIdentidade();
echo $ler[$uri]->getTipoidentidade();
echo $ler[$uri]->getCpf();

$age = floor((time() - strtotime($idade)) / 31556926);

} elseif ($ler == null)
{
	echo 'Perfil invalido';
}
else
{
    echo 'Sem URL';
}



?>


			<!DOCTYPE html>
			<html lang="pt-br">

			 <head>

					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
					<meta name="description" content="">
					<meta name="author" content="">

					<title>Perfil</title>

			 <!-- Fonte e Figuras Google Fonte e Font Awesome-->
                    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
                    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

                   

          <!-- CDN Admin-->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" crossorigin="anonymous">        
				</head>

			<body>

			 <div align="center" style="background: #B0C4B1;">
						<div id="Perfil">
							<div class="col-sm-6">
							<!--	<img alt="Foto do usuario" src="img/perfil.png" class="rounded-circle" />  -->
								<br/>
									<ul>
										<li class="list-unstyled">
										<h3><b><?php echo $ler[$uri]->getNome().' '.$ler[$uri]->getSobrenome(); ?></b></h3>
										</li>
										<li class="list-unstyled">
										<b><?php echo $age; ?></b>
										</li>
									</ul>
							</div>
							<br/>
						</div>
						
						<div class="col-sm-6" id="Calendario">            
						<div class="d-flex flex-row shadow bg-white" style="background: white;">
							<div class="col-sm" id="jan" style='background-color:#00c753'>
							JAN
							</div>
							<div class="col-sm" id="fev" style='background-color:#00c753'>
							FEV
							</div>
							<div class="col-sm" id="mar" style='background-color:#00c753'>
							MAR
							</div>
							<div class="col-sm" id="abr" style='background-color:#00c753'>
							ABR
							</div>
						</div>
						<div class="d-flex flex-row shadow bg-white" style="background: white;">
							<div class="col-sm" id="mai" style='background-color:#ff4100'>
							MAI
							</div>
							<div class="col-sm" id="jun">
							JUN
							</div>
							<div class="col-sm" id="jul">
							JUL
							</div>
							<div class="col-sm" id="ago">
							AGO
							</div>
						</div>
						<div class="d-flex flex-row shadow bg-white" style="background: white;">
							<div class="col-sm" id="set">
							SET
							</div>
							<div class="col-sm" id="out">
							OUT
							</div>
							<div class="col-sm" id="nov">
							NOV
							</div>
							<div class="col-sm" id="dez">
							DEZ
							</div>
						</div>                    
						<br/>
						</div>
							
							<div class="col-sm-6" id="Financeiro">
								<h4>Financeiro</h4>
								<h5>
									<?php echo strftime('%d de %B de %Y', strtotime('today')); 
									?>
				
								</h5>
								
								<h6>Vencimento: todo dia 10</h6> 	
							
								<div class="table-responsive shadow bg-white">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
									<tr>
										<th>Data:</th>
										<th>Situação:</th>
										<th>Ação:</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td style='background-color:#00c753'><b>Jan/2020</b></td>
										<td style='background-color:#00c753'>Pago (02/01/2020)</td>
										<td style='background-color:#00c753'><button type="button" class="btn btn-warning"><i class="fas fa-file-alt"></i></button></td>
									</tr>
									<tr>
										<td style='background-color:#00c753'><b>Fev/2020</b></td>
										<td style='background-color:#00c753'>Pago (04/02/2020)</td>
										<td style='background-color:#00c753'><button type="button" class="btn btn-warning"><i class="fas fa-file-alt"></i></button></td>
									</tr>
									<tr>
										<td style='background-color:#00c753'><b>Mar/2020</b></td>
										<td style='background-color:#00c753'>Pago (17/03/2020)</td>
										<td style='background-color:#00c753'><button type="button" class="btn btn-warning"><i class="fas fa-file-alt"></i></button></td>
									</tr>
									<tr>
										<td style='background-color:#00c753'><b>Abr/2020</b></td>
										<td style='background-color:#00c753'>Pago (10/04/2020)</td>
										<td style='background-color:#00c753'><button type="button" class="btn btn-warning"><i class="fas fa-file-alt"></i></button></td>
									</tr>
									<tr>
										<td style='background-color:#ff4100'><b>Mai/2020</b></td>
										<td style='background-color:#ff4100'>Em Aberto </td>
										<td style='background-color:#ff4100'>
											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalpagaberto"><i class="fas fa-shopping-cart"></i></button>
										</td>
									</tr>
									<tr>
										<td><b>Jun/2020</b></td>
										<td>A Vencer</td>
										<td>
											<button type="button" class="btn btn-success"><i class="fas fa-shopping-cart"></i></button>

										</td>
									</tr>
									</tbody>
								</table>
							</div>

						
			 
						<br/>

						<script>
							  function calcular(){
								var_quant = 0;
								var valor = document.getElementById("valor").value;
			 
								var valor_pago = document.getElementById("valor_pago").value;
								var var_quant = valor_pago - valor;
			 
								document.getElementById("troco").value = var_quant;
								}


								//Habilitar e Desabilitar
								function enableText(){
								
								document.getElementById("valor").disabled = false;
									
							
								};
							
						</script>

			<!-- Modal -->
			<div class="modal fade" id="modalpagaberto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="text-align: left;">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Pagamento - Administrador</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<h5>Luciana Oliveira</h5>
					<br/>
					<form action="">
						<label for="mes">Mês:</label>
						<input type="text" name="mes" class="form-control" placeholder="" value="Maio" style="font-weight: bold;" disabled="">
						<label for="valor">Valor Mensalidade:</label>
						<div class="input-group mb-3">
						<div class="input-group-prepend">
						<span class="input-group-text">R$</span>
						</div>            
						<input type="text" id="valor" name= "valor" class="form-control" placeholder="" disabled="" value="45" style="font-weight: bold;" onblur="calcular()">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button" onclick="enableText()"><i class="far fa-edit"></i></button>
						</div>
						</div>
						<label for="valor_pago">Valor Pago:</label>
						<div class="input-group mb-3">            
						<div class="input-group-prepend">
						<span class="input-group-text">R$</span>
						</div>
						<input type="text" id="valor_pago" name="valor_pago" class="form-control" style="font-weight: bold;" required onblur="calcular()">
						</div>
						<label for="troco">Troco:</label>
						<div class="input-group mb-3">            
						<div class="input-group-prepend">
						<span class="input-group-text">R$</span>
						</div>
						<input type="text" id="troco" name="troco" class="form-control" placeholder="" disabled="" style="font-weight: bold;" value='' readonly>
						</div>
					</form>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Efetuar Pagamento</button>
				  </div>
				</div>
			  </div>
			</div>



				<!-- Scroll to Top Button-->
				<a class="scroll-to-top rounded" href="#Perfil">
					<i class="fas fa-angle-up"></i>
				</a>


 <!-- Bootstrap core JavaScript-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	

			</body>

			</html>
