<body>
    <? if (isset($result)) {
        if ($result) {
            if ($tipo === 'crear') {
    ?>
                <div class="alert alert-success text-center">
                    Empleado creado con exito.
                </div>
    <?        } else if ($tipo === 'editar') { ?>
                <div class="alert alert-success text-center">
                    Empleado editado con exito.
                </div>
    <?        } else { ?>
                <div class="alert alert-success text-center">
                    Empleado eliminado con exito.
                </div>
    <?        }
    ?>


    <?    } else { ?>
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
                        <li><a href="<?= base_url(); ?>admin/empleado/crearEmpleado">Crear empleado</a></li>
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
        <h2>Gestión de empleados.</h2>
        <p>Desde aquí podrá dar de alta nuevos empleados, editar los existentes o eliminarlos.</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Sexo</th>
                    <th>Editar empleado</th>
                    <th>Eliminar empleado</th>
                </tr>
            </thead>
            <tbody>
                <? foreach($empleados as $empleado): ?>
                <tr>
                    <td><?= $empleado['nombre']; ?></td>
                    <td><?= $empleado['cargo']; ?></td>
                    <td><?= $empleado['sexo']; ?></td>
                    <td><a href="<?= base_url(); ?>admin/empleado/editarFormularioEmpleado?id=<?= $empleado['id'] ?>&idC=<?= $empleado['idCargo'] ?>">Editar</a></td>
                    <td><a href="<?= base_url(); ?>admin/empleado/eliminarEmpleado?id=<?= $empleado['id'] ?>">Eliminar</a></td>
                </tr>
                <? endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
