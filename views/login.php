<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - Controlls System</title>

        <link rel="stylesheet" href="<?php echo base_url('static/css/bootstrap.min.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/css/login.css');?>" />
    </head>

    <body>

            <div class="container">  
            
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <h2 class="form-signin-heading">Acesse o Controlls System</h2>
            <div class="panel panel-success" >
                    <div class="panel-heading">
                        <div class="panel-title">Logar</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal " role="form" method="POST" action="/index.php/Controlador/auth">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="Email">
                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="senha" placeholder="Senha">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                       <input type="submit" class="btn btn-success pull" value="Login">
                                      <a id="btn-fblogin" href="/index.php/Controlador/cadastrousuario" class="btn btn-primary">Cadastrar</a>

                                    </div>
                                </div>


                               
                            </form>     



                         </div>
                    </div>

               
               
                
         </div> 
    </div>
    
        <hr>
        <?php include("rodape.php") ?>
    </body>
</html>