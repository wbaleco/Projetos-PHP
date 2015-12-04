<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Lista - Controlls System</title>
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
                <h1 class="page-header ">
                    USUÁRIOS CADASTRADO</h1>
            </div>
                <table class="table table-striped table-hover table-bordered">
                    <caption>Listagem</caption>
                    <thead>
                        <tr>
                            <td>CÓDIGO</td>
                            <th>NOME</th>
                            <th>EMAIL</th>
                            <th>SENHA</th>
                            <th>DELETAR</th>

                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php foreach ($usuario as $usu ) { ?>
                        <tr>
                            <td><?= $usu->id_usuario ?></td>
                            <td><?= $usu->nm_usuario ?></td>
                            <td><?= $usu->ds_email ?></td>
                            <td><?= $usu->ds_senha ?></td>
                              <td><button class="btn btn-danger" type="button">DELETAR</button></td>

                        </tr>
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
        </div>
        <hr>
        <?php include("rodape.php") ?>

    </body>
</html>