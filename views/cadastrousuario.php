<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro - Usuário </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="<?php echo base_url();?>static/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>static/css/bootstrap.min.css" >

    </head>
    <body>
        <?php include("menu.php") ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                <h1 class="page-header text-muted">CADASTRO DE USUÁRIOS
                </h1>
            </div>    
            <form action="/index.php/Controlador/cadastro" method="POST" name="sentMessage" id="contactForm">
                <div class="row">
                    <div class="col-md-8">
                        <div class="control-group form-group">
                            <label>Nome:</label>
                            <input type="text" name="nome" class="form-control" id="nome" required data-validation-required-message="Informe o nome.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email:</label>
                                <input type="email" name="email"  class="form-control" id="email" required data-validation-required-message="Informe o email.">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Senha:</label>
                                <input type="password" name="senha" class="form-control" id="senha"   >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 text-right">
                    <input type="submit" class="btn btn-success" value="Salvar">
                    <input type="reset" class="btn btn-default" value="Cancelar">
                </div> 


            </form>
        </div>

        <hr>

        <?php include("rodape.php") ?>
    </body>
</html>