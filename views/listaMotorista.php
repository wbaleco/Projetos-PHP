<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <title>Lista - Controlls</title>
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
                    <h1 class="page-header text-muted ">MOTORISTAS CADASTRADOS

                    </h1>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <caption>Listagem</caption>
                    <thead>
                        <tr>
                            <th>MOTORISTA</th>
                            <th>Endereço</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Cep</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Cpf</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($motorista as $m ) { ?>
                        <tr>
                            <td><?= $m->CODIGO ?></td>
                            <td><?= $m->ENDERECO ?></td>
                            <td><?= $m->BAIRRO ?></td>
                            <td><?= $m->CIDADE ?></td>
                            <td><?= $m->ESTADO ?></td>
                            <td><?= $m->CEP ?></td>
                            <td><?= $m->TELEFONE ?></td>
                            <td><?= $m->CODIGO ?></td>
                            <td><?= $m->CPF ?></td>
                            <td><a href="<?php echo  base_url('index.php/Controlador/deletemotorista/'.$m->CODIGO); ?>"class="btn btn-danger">DELETAR</a></td>
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
