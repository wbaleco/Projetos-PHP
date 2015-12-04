<!DOCTYPE html>
<html lang="pt-BR">
    <head>
       
        <title>Escalar - Viagem</title>
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
                    ESCALA DE VIAGEM</h1>
            </div>
            <form action="/index.php/Controlador/cadastrar" method="post">
                
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="nome">Cliente:</label>
                                <input class="form-control" id="nome" name="nome" placeholder="Informe o cliente..." required="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="local">Local:</label>
                                <input class="form-control" id="local" name="local" placeholder="Informe a cidade..." required="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="motorista">Motorista:</label>
                                <input class="form-control" id="motorista" name="motorista" placeholder="Informe o motorista..." required="" type="text"> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="data">Data:</label>
                                <input class="form-control" id="data" name="data" placeholder="Informe a data..." required="" type="date">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="hora">Hora: </label>
                                <input class="form-control" id="hora" name="hora" placeholder="Informe a hora..." required="" type="text">
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
