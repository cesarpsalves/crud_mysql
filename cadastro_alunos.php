


    <!DOCTYPE html>
    <html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Cadastro de Alunos</title>

        
                    <!-- Fonte e Figuras Google Fonte e Font Awesome-->
                    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
                    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

                   

          <!-- CDN Admin-->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" crossorigin="anonymous">        

        
    </head>

    <body style="background: #B0C4B1;">
    
        <div class="container-fluid">

            <br/>
         <h4 style="text-align: center;">Formulario de Cadastro</h4>
         <br/>
         <div class="alert alert-success alert-dismissible fade show" id="mensagem" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>
         <form enctype="multipart/form-data" method="post" action="controller/AlunoController.php" id="meuFrm">
             <div class="accordion" id="dados_usuario">
                 <div class="card">
                     <div class="card-header" id="headingZero">
                         <h2 class="mb-0">
                             <button id="botaolink" class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                                 <i class="fas fa-user-shield"></i> Dados de Usuário
                             </button>
                         </h2>
                     </div>

                     <div id="collapseZero" class="collapse show" aria-labelledby="headingZero" data-parent="#dados_usuario">
                         <div class="card-body">
                             <div class="form-group">
                                 <label for="imagem">Inserir Foto</label>
                                 <input name="imagem" type="file" class="form-control-file" id="imagem">
                             </div>
                             <div class="form-group">
                                 <label for="email">E-mail *</label>
                                 <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Digitar E-mail" autocomplete="off" required onblur="TestaEMAIL(this)">
                             </div>
                             <div class="form-group">
                                 <label for="senha">Senha *</label>
                                 <input name="senha" type="password" class="form-control" id="senha" placeholder="Digitar Senha" autocomplete="off" required>
                             </div>

                         </div>
                     </div>
                 </div>

             <br/>
             <!-- Dados Pessoais -->
             <div class="accordion" id="dados_pessoais">

                 <div class="card">
                     <div class="card-header" id="headingOne">
                         <h2 class="mb-0">
                             <button  id="botaolink1" class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                 <i class="fas fa-address-card"></i> Dados Pessoais
                             </button>
                         </h2>
                     </div>
                     <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#dados_pessoais">
                         <div class="card-body">
                             <div class="form-group">
                                 <label for="nome">Nome</label>
                                 <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Digitar Nome" autocomplete="off" required>
                             </div>
                             <div class="form-group">
                                 <label for="sobrenome">Sobrenome</label>
                                 <input name="sobrenome" type="text" class="form-control" id="sobrenome" aria-describedby="sobrenome" placeholder="Digitar Sobrenome" autocomplete="off" required>
                             </div>
                             <div class="form-group">
                                 <label">Sexo</label>
                                 <select name="sexo" class="form-control">
                                     <option value=""> -- </option>
                                     <option>Feminino</option>
                                     <option>Masculino</option>
                                     <option>Outros</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="data_nascimento">Data Nascimento</label>
                                 <input name="data_nascimento" type="date" class="form-control" id="data_nascimento">
                             </div>
                             <div class="form-group">
                                 <label for="fixo">Telefone Fixo</label>
                                 <input name="fixo" type="text" class="form-control item" id="fixo" placeholder="Digitar Apenas Números" autocomplete="off">
                             </div>
                             <div class="form-group">
                                 <label for="celular">Telefone Celular</label>
                                 <input name="celular" type="text" class="form-control item" id="celular" placeholder="Digitar Apenas Números" autocomplete="off">
                             </div>
                             <div class="form-group">
                                 <label for="cpf">CPF</label>
                                 <input name="cpf" type="text" class="form-control item" id="cpf" placeholder="Digitar Apenas Números" autocomplete="off" onblur="TestaCPF(this)">
                             </div>
                             <div class="form-group">
                                 <label for="identidade">Identidade</label>
                                 <input name="identidade" type="number" class="form-control item" id="identidade" placeholder="Digitar Apenas Números" autocomplete="off">
                             </div>
                             <div class="form-group">
                                 <label for="tipoidentidade">Tipo identidade</label>
                                 <select name="tipoidentidade" class="form-control" id="tipoidentidade">
                                     <option value=""> -- </option>
                                     <option>SDS</option>
                                     <option>SSP</option>
                                     <option>Organismos Militares</option>
                                     <option>PolÌcia Federal</option>
                                     <option>Carteira de Identidade Classista</option>
                                     <option>OAB</option>
                                     <option>Outros Emissores</option>
                                     <option>Documento Estrangeiro</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="responsavel">Nome do Responsável</label>
                                 <input name="responsavel" type="text" class="form-control" id="responsavel" aria-describedby="responsavel" placeholder="Digitar Nome Responsável" autocomplete="off">
                             </div>
                             <div class="form-group">
                                 <label for="escolaridade">Escolaridade</label>
                                 <select name="escolaridade" class="form-control" id="escolaridade">
                                     <option value=""> -- </option>
                                     <option>Não sabe ler/escrever</option>
                                     <option>Alfabetizado</option>
                                     <option>1° Grau Incompleto</option>
                                     <option>1° Grau Completo</option>
                                     <option>2° Grau Incompleto</option>
                                     <option>2° Grau Completo</option>
                                     <option>Superior Incompleto</option>
                                     <option>Superior Completo</option>
                                     <option>Especialização/Residência</option>
                                     <option>Mestrado</option>
                                     <option>Doutorado</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="escola">Escola que Estuda</label>
                                 <input name="escola" type="text" class="form-control" id="escola" aria-describedby="escola" placeholder="Digitar Nome Escola" autocomplete="off">
                             </div>
                             <div class="form-group">
                                 <label for="vencimento">Vencimento</label>
                                 <select name="vencimento" class="form-control" id="vencimento">
                                     <option value=""> -- </option>
                                     <option value=<?php echo date('Y-m-05',strtotime('+1 months', strtotime(date('Y-m-d'))))?>>Dia 5</option>
                                     <option value=<?php echo date('Y-m-10',strtotime('+1 months', strtotime(date('Y-m-d'))))?>>Dia 10</option>
                                     <option value=<?php echo date('Y-m-15',strtotime('+1 months', strtotime(date('Y-m-d'))))?>>Dia 15</option>
                                     <option value=<?php echo date('Y-m-20',strtotime('+1 months', strtotime(date('Y-m-d'))))?>>Dia 20</option>
                                     <option value=<?php echo date('Y-m-28',strtotime('+1 months', strtotime(date('Y-m-d'))))?>>Dia 28</option>
                                 </select>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
             <br/>

             <!-- Endereço -->
             <div class="accordion" id="endereco">

                 <div class="card">
                     <div class="card-header" id="headingTwo">
                         <h2 class="mb-0">
                             <button id="botaolink2" class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <i class="fas fa-map-marked-alt"></i> Endereço
                             </button>
                         </h2>
                     </div>
                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#dados_pessoais">
                         <div class="card-body">
                             <div class="form-group">
                                 <label for="cep">CEP</label>
                                 <input name="cep" type="text" class="form-control item" id="cep" placeholder="Digitar Apenas Números" onblur="pesquisacep(this.value)">
                    </div>

                    <div class="form-group">
                                 <label for="logradouro">Endereço</label>
                                 <input name="logradouro" type="text" class="form-control" id="logradouro" aria-describedby="logradouro" placeholder="Digitar Endereço" autocomplete="off" required>
                             </div>
                             <div class="form-group">
                                 <label for="numero">Número</label>
                                 <input name="numero" type="text" class="form-control" id="numero" aria-describedby="numero" placeholder="Digitar Número" autocomplete="off" required>
                             </div>
                             <div class="form-group">
                                 <label for="complemento">Complemento</label>
                                 <input name="complemento" type="text" class="form-control" id="complemento" aria-describedby="complemento" placeholder="Digitar Complemento" autocomplete="off">
                             </div>
                             <div class="form-group">
                                 <label for="pontoreferencia">Ponto de Referência</label>
                                 <input name="pontoreferencia" type="text" class="form-control" id="pontoreferencia" aria-describedby="pontoreferencia" placeholder="Digitar Ponto de Referência" autocomplete="off">
                             </div>
                             <div class="form-group">
                                 <label for="bairro">Bairro</label>
                                 <input name="bairro" type="text" class="form-control" id="bairro" aria-describedby="bairro" placeholder="Digitar Bairro" autocomplete="off" required>
                             </div>
                             <div class="form-group">
                                 <label for="localidade">Cidade</label>
                                 <input name="localidade" type="text" class="form-control" id="localidade" aria-describedby="localidade" placeholder="Digitar Cidade" autocomplete="off" required>
                             </div>
                             <div class="form-group">
                                 <label for="uf">UF</label>
                                 <select name="uf" class="form-control" id="uf">
                                     <option value=""> -- </option>
                                     <option value="AC">Acre</option>
                                     <option value="AL">Alagoas</option>
                                     <option value="AP">Amapá</option>
                                     <option value="AM">Amazonas</option>
                                     <option value="BA">Bahia</option>
                                     <option value="CE">Ceará</option>
                                     <option value="DF">Distrito Federal</option>
                                     <option value="ES">Espírito Santo</option>
                                     <option value="GO">Goiás</option>
                                     <option value="MA">Maranhão</option>
                                     <option value="MT">Mato Grosso</option>
                                     <option value="MS">Mato Grosso do Sul</option>
                                     <option value="MG">Minas Gerais</option>
                                     <option value="PA">Pará</option>
                                     <option value="PB">Paraíba</option>
                                     <option value="PR">Paraná</option>
                                     <option value="PE">Pernambuco</option>
                                     <option value="PI">Piauí</option>
                                     <option value="RJ">Rio de Janeiro</option>
                                     <option value="RN">Rio Grande do Norte</option>
                                     <option value="RS">Rio Grande do Sul</option>
                                     <option value="RO">Rondônia</option>
                                     <option value="RR">Roraima</option>
                                     <option value="SC">Santa Catarina</option>
                                     <option value="SP">São Paulo</option>
                                     <option value="SE">Sergipe</option>
                                     <option value="TO">Tocantins</option>
                                 </select>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
             <br/>

                 <div style="text-align: right">
             <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                 </div>
             <br/>

                <!-- Codigo Envio -->
                
         </form>
     </div>
                <br/>
            <!-- Fim form End of Main Content -->

            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#mensagem">
        <i class="fas fa-angle-up"></i>
    </a>

        <!-- Bootstrap core JavaScript-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        

        
        <!-- CEP Paulo -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/cep.js"></script>
       
        <!-- Mascara Paulo -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="js/mascaraidentidade.js"></script>
        <script src="js/validacpf.js"></script>
        <script src="js/validaemail.js"></script>
        <script src="js/mascaratroco.js"></script>

        <!-- Enviar Form sem Reflesh Paulo 
        <script src="js/jquery.form.js"></script>
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#mensagem').hide();
                $("#meuFrm").ajaxForm({
                    target: '#mensagem',
                    success: function (retorno) {
                        $('#mensagem').html(retorno);
                        $('#mensagem').show();
                        window.scrollTo(0, 0);
                        $('#meuFrm').each (function(){
                            this.reset();
                        });
                        $().ready(function() {
                            setTimeout(function () {
                                $('#mensagem').hide(); // "foo" é o id do elemento que seja manipular.
                            }, 3500); // O valor é representado em milisegundos.
                        });

                    }
                });

            });
        </script>
-->
    </body>

    </html>
