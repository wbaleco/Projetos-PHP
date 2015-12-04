<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <title>Cadastro veículo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="<?php echo base_url();?>static/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>static/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/navbar-static-top.css" />

    </head>
    <body>
        <?php include("menu.php") ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                <h1 class="page-header ">
                    CADASTRO DE VEÍCULO</h1>
            </div>

            <form action="/index.php/Controlador/cadastroveiculo"  method="post">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="frota">Nº Frota:</label>
                            <input class="form-control" id="frota" name="frota" placeholder="Informe o nº da frota..." required="" type="text"> 
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="fabricante">Fabricante</label>
                            <input class="form-control" id="fabricante" name="fabricante" placeholder="Informe o fabricante..." required="" type="text">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="chassis">Chassis:</label>
                            <input class="form-control" id="chassis" name="chassis" placeholder="Informe o nº chassis..." required="" type="text"> 
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="tipo">Tipo veículo:</label>
                            <input class="form-control" id="tipoveiculo" name="tipo" placeholder="Informe o tipo de veículo..." required="" type="text">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="placa">Placa:</label>
                            <input class="form-control" id="placa" name="placa" placeholder="Informe a placa..." required="" type="text">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ano">Ano:</label>
                            <input class="form-control" id="ano" name="ano" placeholder="Informe o ano..." required="" type="text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="modelo">Modelo: </label>
                        <input class="form-control" id="modelo" name="modelo" placeholder="Informe o modelo..." required="" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="cor">Cor:</label>
                            <input class="form-control" id="cor" name="cor" placeholder="Informe a cor..." required="" type="text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="renavam">Renavam: </label>
                            <input class="form-control" id="renavam" name="renavam" placeholder="Informe o renavam..." required="" type="text">
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
