<!DOCTYPE html>
<html lang="pt-BR">
    <head>

        <title>Lista  Clientes - Controlls System</title>
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
                    CLIENTES CADASTRADO</h1>
            </div>
            <table class="table table-striped table-hover table-bordered ">
                <caption>Listagem</caption>
                <thead>
                    <tr>
                        <th>CLIENTE</th>
                        <th>CNPJ</th>
                        <th>INSCRIÇÃO ESTADUAL</th>
                        <th>ENDEREÇO</th>
                        <th>BAIRRO</th>
                        <th>CIDADE</th>
                        <th>ESTADO</th>
                        <th>CEP</th>
                        <th>TELEFONE</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach ($cliente as $m ) { ?>
                    <tr>
                        <td><?= $m->CODIGO ?></td>
                        <td><?= $m->CNPJ ?></td>
                        <td><?= $m->INSCRICAOESTADUAL ?></td>
                        <td><?= $m->ENDERECO ?></td>
                        <td><?= $m->BAIRRO ?></td>
                        <td><?= $m->CIDADE ?></td>
                        <td><?= $m->ESTADO ?></td>
                        <td><?= $m->CEP ?></td>
                        <td><?= $m->TELEFONE ?></td>
                        <td><a href="<?php echo  base_url('index.php/Controlador/deletecliente/'.$m->CODIGO); ?>"class="btn btn-danger">DELETAR</a></td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
        <hr>
        <?php include("rodape.php") ?>

    </body>
</html>