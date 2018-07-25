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
                        <a class="navbar-brand" href="<?= base_url(); ?>admin/home">Admin</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= base_url(); ?>admin/usuario">Menú anterior</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Secciones <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="navigation" aria-label="Menú desplegable - Secciones de administración">
                                <li><a href="<?= base_url(); ?>admin/cobertura">Coberturas</a></li>
                                <li><a href="<?= base_url(); ?>admin/empleado">Empleados</a></li>
                                <li><a href="<?= base_url(); ?>admin/especialidad">Especialidades</a></li>
                                <li><a href="<?= base_url(); ?>admin/estudio">Estudios</a></li>
                                <li><a href="<?= base_url(); ?>admin/instalacion">Instalaciones</a></li>
                                <li><a href="<?= base_url(); ?>admin/servicio">Servicios</a></li>
                                <li><a href="<?= base_url(); ?>admin/usuario">Usuarios</a></li>
                                <li><a href="<?= base_url(); ?>admin/categoria">Categorías</a></li>
                                <li><a href="<?= base_url(); ?>admin/noticia">Noticias</a></li>
                              </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= base_url(); ?>admin/home">Menú principal</a></li>
                            <li><a href="<?= base_url(); ?>admin/home/logout">Cerrar sesión</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        <h3>Edición de usuario.</h3>
        <p>Desde aquí podrá cambiar los datos del usuario seleccionado.</p>
        <p>Recuerde no compartir su nueva contraseña ya que el sistema se veria vulnerado.</p>

        <?=  form_open('admin/usuario/updateUsuario') ?>
        <?
            $resultado = $usuario->result()[0];

            $hidden = array(
                'hiddenId' => $resultado->id,
                'hiddenNombre' => $resultado->nombre
            );
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'value' => $resultado->nombre,
                'class' => 'form-control'
            );
            $user = array(
                'name' => 'user',
                'type' => 'text',
                'value' => $resultado->usuario,
                'class' => 'form-control'
            );
            $old_pass = array(
                'name' => 'old_pass',
                'class' => 'form-control'
            );
            $new_pass = array(
                'name' => 'new_pass',
                'class' => 'form-control'
            );
            $confirmation_new_password = array(
                'name' => 'confirmation_new_password',
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
        <div class="form-group">
        <?= form_label('Usuario: ', 'user') ?>
        <?= form_input($user) ?>
        </div>
        <div class="form-group">
        <?= form_label('Contrasaña anterior: ', 'old_pass') ?>
        <?= form_password($old_pass) ?>
        </div>
        <div class="form-group">
        <?= form_label('Contrasaña nueva: ', 'new_pass') ?>
        <?= form_password($new_pass) ?>
        </div>
        <div class="form-group">
        <?= form_label('Repetir contraseña: ', 'confirmation_new_password') ?>
        <?= form_password($confirmation_new_password) ?>
        </div>
        <?= form_submit('','Editar usuario', $buttonClass) ?>
        <?= form_close() ?>
        </div>
    </body>
</html>
