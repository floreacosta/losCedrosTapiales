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
                            <li><a href="<?= base_url(); ?>admin/noticia">Menú anterior</a></li>
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
                            <li><a href="<?= base_url(); ?>admin/index">Menú principal</a></li>
                            <li><a href="<?= base_url(); ?>admin/index/logout">Cerrar sesión</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <h3>Edición de noticia.</h3>
            <p>Desde aquí podrá cambiar los datos de la noticia seleccionada.</p>

            <div>
                <?=  form_open_multipart(base_url().'admin/noticia/subirImagenEditar') ?>
                <?
                    $resultado = $noticia->result()[0];

                    $hidden = array(
                        'hiddenId' => $resultado->id
                    );

                    $titulo = array(
                        'name' => 'titulo',
                        'type' => 'text',
                        'value' => $resultado->titulo,
                        'class' => 'form-control'
                    );

                    $bajada = array(
                      'name' => 'bajada',
                      'type' => 'textarea',
                      'value' => $resultado->bajada,
                      'class' => 'form-control'
                    );

                    $cuerpo = array(
                      'id' => 'cleditorInput',
                      'name' => 'cuerpo',
                      'type' => 'textarea',
                      'value' => $resultado->cuerpo,
                      'class' => 'form-control'
                    );

                    $imagen = array(
                      'name' => 'user_file',
                      'type' => 'file',
                      'size' => 20,
                      'class' => 'form-control-file',
                      'aria-describedby' => 'fileHelp'
                    );

                    $descripcionImagen = array(
                      'name' => 'descripcionImagen',
                      'type' => 'textarea',
                      'value' => $resultado->descripcionImagen,
                      'class' => 'form-control'
                    );

                    $buttonClass = array(
                        'class' => 'btn btn-primary'
                    );
                ?>

                <div>
                  <?= form_hidden($hidden) ?>
                  <div class="form-group">
                    <?= form_label('Título: ', 'titulo') ?>
                    <?= form_input($titulo) ?>
                  </div>

                  <div class="form-group">
                    <?= form_label('Bajada: ', 'bajada') ?>
                    <?= form_textarea($bajada) ?>
                  </div>

                  <div class="form-group">
                    <?= form_label('Cuerpo: ', 'cuerpo') ?>
                    <?= form_textarea($cuerpo) ?>
                  </div>

                  <div class="form-group">
                    <?= form_label('Imagen seleccionada: ') ?>
                    <img class="img-thumbnail" alt="<?= $resultado->descripcionImagen ?>" src="<?= base_url(); ?>img/noticias/<?= $resultado->imagen ?>" />
                  </div>

                  <div class="form-group">
                    <?= form_label('Imagen: ', 'image_file') ?>
                    <?= form_input($imagen) ?>
                  </div>

                  <div class="form-group">
                    <?= form_label('Descripción de la imagen: ', 'descripcionImagen') ?>
                    <?= form_textarea($descripcionImagen) ?>
                  </div>

                  <?= form_submit('', 'Editar noticia', $buttonClass) ?>
                </div>
              <?= form_close() ?>
            </div>
        </div>
    </body>
</html>
