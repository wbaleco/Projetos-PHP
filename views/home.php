
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Home - Controlls System</title>

        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="justified-nav.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap.min.css"
              />
    </head>

    <body>

        <div class="container">

            <br>
            <br>
            <br>
            <!-- Jumbotron -->
            <div class="jumbotron">
                <h1 class="row">Bem vindo ao Controlls System!</h1>
                <div class="row">
                    <p class="lead">O Controlls System é um sistema de gerenciamento
                        de transportes. Ele possibilita a gestão de todos os processos no setor logístico. Visa também otimizar a organização da empresa. </p>
                </div>
                <div class="row">
                    <p class="text-muted text-center">Logue-se agora para poder acessar o sistema.</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
        <a id="btn-fblogin" href="/index.php/Controlador/login" class="btn btn-success pull-right">Login</a>
                    </div>
                </div>
            </div
            

        </div> <!-- /container -->

        <hr>

        <?php include("rodape.php") ?>

    </body>
</html>
