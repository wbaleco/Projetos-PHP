<!DOCTYPE html>
<html>
    <head>
        <title>Sobre - Walter Baleco </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/estilo.css');?>" />
    </head>
<body>
    <div class="container">
         <div class="cover">
      <div class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>Controlls</span></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li>
                <a><?= anchor ('Controlador/index','Home')?></a>
              </li>
             
              <li class="active">
               <a><?= anchor ('Controlador/sobre','Sobre')?></a>
              </li>
                 <li>
                <a><?= anchor ('Controlador/detalhes','Detalhes')?></a>
              </li>
                 <li>
                <a><?= anchor ('Controlador/listar','Amigos')?></a>
              </li>
                 <li>
                   <a><?= anchor ('Controlador/contato','Cadastro')?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    
    </div>
        <header class="row">
       
        </header>
    <div class="row">
        <div id="main" role="main" class="col-md-8">
             <h1 class="page-header">Sobre
                    <small>Controlls</small>
                    <img class="img-circle" src=<?php base_url()?>"/static/img/controlls.png">
                   
                </h1>
               
    <section id="about" class="about section">
        <div class="container">
<p>Nosso sistema é muito eficiente.</p>
        </div>
    </section>
        </div>
        
     

</div>
 <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Desenvolvimento &copy; Walter Baleco</p>

                </div>
            </div>
        </footer>
    </body>
</html>