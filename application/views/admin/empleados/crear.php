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
                        <a class="navbar-brand" href="<?= base_url(); ?>admin/index">Admin</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= base_url(); ?>admin/doctores">Menú anterior</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Secciones <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="navigation" aria-label="Menú desplegable - Secciones de administración">
                                <li><a href="<?= base_url(); ?>admin/cobertura">Coberturas</a></li>
                                <li><a href="<?= base_url(); ?>admin/empleados">Empleados</a></li>
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
                            <li><a href="<?= base_url(); ?>admin/index">Menú principal</a></li>
                            <li><a href="<?= base_url(); ?>admin/index/logout">Cerrar sesión</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        <h3>Creación de empleados</h3>
        <p>Desde aquí podrá crear un nuevo empleado para mostrar desde la página.</p>

        <?=  form_open(base_url()."admin/empleado/crearEmpleado") ?>
        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'class' => 'form-control',
                'id' => 'nombre'
            );
            $opcionesCargo = array();
            $opcionesCargo['0'] =  'Seleccionar...';
            foreach ($cargos as $cargo) {
              $opcionesCargo[$cargo['id']] =  $cargo['nombre'];
            }
            $opcionCargo = array(
                'name' => 'idCargo',
                'options' => $opcionesCargo,
                'type' => 'dropdown',
                'class' => 'form-control'
            );
            $opcionesSexo = array();
            $opcionesSexo['0'] =  'Seleccionar...';
            foreach ($sexo as $s) {
              $opcionesSexo[$s['id']] = $s['nombre'];
            }
            $opcionSexo = array(
                'name' => 'sexo',
                'options' => $opcionesSexo,
                'type' => 'dropdown',
                'class' => 'form-control'
            );
            $submit = array(
              'class' => 'btn btn-primary'
            );
        ?>

        <div>
          <div class="form-group">
            <?= form_label('Nombre: ', 'nombre') ?>
            <?= form_input($nombre) ?>
            <i id="validate-wrong-nombre" class="form-control-feedback glyphicon glyphicon-remove" style="display:none;" data-bv-icon-for="nombre"></i>
            <i id="validate-ok-nombre" class="form-control-feedback glyphicon glyphicon-ok" style="display: none;" data-bv-icon-for="nombre"></i>
            <small id="warning-text-nombre" class="help-block" style="display:none;" data-bv-validator="notEmpty" data-bv-validator-for="nombre">Por favor, ingrese un nombre</small>
          </div>
          <div class="form-group">
            <?= form_label('Cargo: ', 'idCargo') ?>
            <?= form_dropdown($opcionCargo) ?>
          </div>
          <div class="form-group">
            <?= form_label('Sexo: ', 'sexo') ?>
            <?= form_dropdown($opcionSexo) ?>
          </div>
          <?= form_submit('','Crear empleado', $submit) ?>
          <?= form_close() ?>
        </div>
    </body>
</html>
