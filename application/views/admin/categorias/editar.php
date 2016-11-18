    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Admin</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= base_url(); ?>admin/categorias">Menú anterior</a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Secciones <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url(); ?>admin/coberturas">Coberturas</a></li>
                                <li><a href="<?= base_url(); ?>admin/doctores">Doctores</a></li>
                                <li><a href="<?= base_url(); ?>admin/especialidades">Especialidades</a></li>
                                <li><a href="<?= base_url(); ?>admin/instalaciones">Instalaciones</a></li>
                                <li><a href="<?= base_url(); ?>admin/servicios">Servicios</a></li>
                                <li><a href="<?= base_url(); ?>admin/usuarios">Usuarios</a></li>
                                <li><a href="<?= base_url(); ?>admin/categorias">Categorias</a></li>
                            </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= base_url(); ?>admin/index">Menú principal</a></li>
                            <li><a href="<?= base_url(); ?>admin/index/logout">Cerrar sesión</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        <h3>Edición de especialidad.</h3>
        <p>Desde aquí podrá cambiar los datos de la especialidad seleccionada.</p>
        <?=  form_open('admin/categorias/updateCategorias') ?>
        <?
            $resultado = $categoria->result()[0];
                        
            $hidden = array(
                'hiddenId' => $resultado->id
            );
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'value' => $resultado->nombre,
                'class' => 'form-control'
            );
            $buttonClass = array(
                'class' => 'btn btn-primary'
            );
        ?>
        <?= form_hidden($hidden) ?>
        <div class="form-group">
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        </div>
        <?= form_submit('','Editar categoria', $buttonClass) ?>
        <?= form_close() ?>
        </div>
    </body>
</html>