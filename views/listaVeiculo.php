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
                    <h1 class="page-header text-muted">
                        VEÍCULOS CADASTRADOS</h1>
                </div>

                <table class="table table-striped table-hover table-bordered">
                    <caption>Listagem</caption>
                    <thead>
                        <tr>

                            <th>FROTA</th>
                            <th>FABRICANTE</th>
                            <th>CHASSIS</th>
                            <th>TIPO</th>
                            <th>PLACA</th>
                            <th>ANO</th>
                            <th>MODELO</th>
                            <th>COR</th>
                            <th>RENAVAM</th>
                            <th>DELETAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($veiculo as $v ) { ?>
                        <tr>

                            <td><?= $v->FROTA ?></td>
                            <td><?= $v->FABRICANTE ?></td>
                            <td><?= $v->CHASSIS ?></td>
                            <td><?= $v->TIPO ?></td>
                            <td><?= $v->PLACA ?></td>
                            <td><?= $v->ANO ?></td>
                            <td><?= $v->MODELO ?></td>
                            <td><?= $v->COR ?></td>
                            <td><?= $v->RENAVAM ?></td>
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