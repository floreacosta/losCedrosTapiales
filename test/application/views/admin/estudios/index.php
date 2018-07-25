<body>
    <? if(isset($result)){
        if($result){
            if($tipo === 'crear'){
    ?>
                <div class="alert alert-success text-center">
                    Estudio creado con exito.
                </div>
    <?        }else if($tipo === 'editar'){ ?>
                <div class="alert alert-success text-center">
                    Estudio editado con exito.
                </div>
    <?        }else{ ?>
                <div class="alert alert-success text-center">
                    Estudio eliminado con exito.
                </div>
    <?        }
    ?>


    <?    }else{ ?>
    <div class="alert alert-danger text-center">
        Ocurrió un error, por favor vuelva a intentarlo más tarde.
    </div>
    <?    }

    } ?>

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
                        <li><a href="<?= base_url(); ?>admin/estudio/crearTipoEstudio">Crear Tipo de Estudio</a></li>
                        <li><a href="<?= base_url(); ?>admin/estudio/crearEstudio">Crear Estudio</a></li>
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
        <h2>Gestión de estudios</h2>
        <p>Desde aquí podrá dar de alta nuevos estudios, editar los existentes o eliminarlos.</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th></th>
                    <th>Descripción</th>
                    <th>Editar tipo de estudio</th>
                    <th>Eliminar tipo de estudio</th>
                </tr>
            </thead>
            <tbody>
                <? foreach($tipos as $tipo): ?>
                  <tr>
                      <td><?= $tipo['nombre']; ?></td>
                      <td></td>
                      <td><?= $tipo['descripcion']; ?></td>
                      <td><a href="<?= base_url(); ?>admin/estudio/editarFormularioTipoEstudio?id=<?= $tipo['id'] ?>">Editar</a></td>
                      <td><a href="<?= base_url(); ?>admin/estudio/eliminarTipoEstudio?id=<?= $tipo['id'] ?>">Eliminar</a></td>
                  </tr>
                <? endforeach; ?>
            </tbody>
        </table>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo de estudio</th>
                    <th>Editar estudio</th>
                    <th>Eliminar estudio</th>
                </tr>
            </thead>
            <tbody>
                <? foreach($estudios->result() as $estudio): ?>
                  <tr>
                      <td><?= $estudio->nombre; ?></td>
                      <td id="<?= $estudio->idTipo; ?>"><?= $estudio->nombreTipo; ?></td>
                      <td><a href="<?= base_url(); ?>admin/estudio/editarFormularioEstudio?id=<?= $estudio->id ?>">Editar</a></td>
                      <td><a href="<?= base_url(); ?>admin/estudio/eliminarEstudio?id=<?= $estudio->id ?>">Eliminar</a></td>
                  </tr>
                <? endforeach; ?>
            </tbody>
        </table>
    </div>
    </body>
</html>
