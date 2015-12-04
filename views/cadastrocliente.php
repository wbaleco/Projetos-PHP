<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <title>Cadastro cliente</title>
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
                <h1 class="page-header text-muted">
                    CADASTRO DE CLIENTE</h1>
            </div>
            <form action="/index.php/Controlador/cadastrocliente" method="post">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="cliente">Cliente:</label>
                            <input class="form-control" id="cliente" name="cliente" placeholder="Informe o cliente..." required="" type="text">
                        </div>
                    </div>
                </div>           
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="cnpj">Cnpj:</label>
                            <input class="form-control" id="cnpj" name="cnpj" placeholder="Informe o cnpj..." required="" type="text"> 
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="inscricao">Inscrição estadual:</label>
                            <input class="form-control" id="inscricao" name="inscricao" placeholder="Informe a inscrição estadual..." required="" type="text">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="endereco">Endereço:</label>
                            <input class="form-control" id="endereco" name="endereco" placeholder="Informe o endereço..." required="" type="text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bairro">Bairro: </label>
                            <input class="form-control" id="bairro" name="bairro" placeholder="Informe a bairro..." required="" type="text">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="tel">Cidade: </label>
                        <input class="form-control" id="cidade" name="cidade" placeholder="Informe a cidade..." required="" type="text">
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="estado">Estado:</label>
                            <input class="form-control" id="estado" name="estado" placeholder="Informe o estado..." required="" type="text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cep">Cep: </label>
                            <input class="form-control" id="cep" name="cep" placeholder="Informe a cep..." required="" type="text">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input class="form-control" id="email" name="email" placeholder="Informe o email..." required="" type="text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="control-group form-group">
                            <label for="tel">Telefone: </label>
                            <input class="form-control" id="tel" name="telefone" placeholder="Informe o telefone..." required="" type="text">
                        </div>
                    </div>
                </div>

                <div class="col-md-10 text-right">
                    <input type="submit" class="btn btn-success" value="Salvar">
                    <input type="reset" class="btn btn-default" value="Cancelar">
                </div> 

            </form>

        </div>


        <hr>

        <?php include("rodape.php") ?>

    </body>
</html>
