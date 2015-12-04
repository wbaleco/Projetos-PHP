
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url();?>index.php/Controlador/main">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>index.php/Controlador/cliente"><span class="glyphicon glyphicon-plus"></span> Cliente</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url();?>index.php/Controlador/motorista"><span class="glyphicon glyphicon-plus"></span> Motorista</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url();?>index.php/Controlador/cadastrousuario"><span class="glyphicon glyphicon-plus"></span> Usuário</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url();?>index.php/Controlador/veiculo"><span class="glyphicon glyphicon-plus"></span> Veículo</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consulta <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>index.php/Controlador/listarCliente"><span class="glyphicon glyphicon-list"></span> Cliente</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url();?>index.php/Controlador/listarMotorista"><span class="glyphicon glyphicon-list"></span> Motorista</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url();?>index.php/Controlador/listarUsuario"><span class="glyphicon glyphicon-list"></span> Usuário</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url();?>index.php/Controlador/listarVeiculo"><span class="glyphicon glyphicon-list"></span> Veículo</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo base_url();?>index.php/Controlador/listarEscala"><span class="glyphicon glyphicon-list"></span> Escala</a></li>
                    </ul>
                </li>

                <li><a href="<?php echo base_url();?>index.php/Controlador/escala">Escala</a></li>
                <li><a href="<?php echo base_url();?>index.php/Controlador/logout">Sair</a></li>
            </ul>
        </div> 



    </div>
</div>
</nav><!-- fim nav-->