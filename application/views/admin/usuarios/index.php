<body>        
    <? if(isset($result)){
        if($result){
            if($tipo === 'crear'){
    ?>
                <div class="alert alert-success text-center">
                    Usuario creado con exito.
                </div>
    <?        }else if($tipo === 'editar'){ ?>
                <div class="alert alert-success text-center">
                    Usuario editado con exito.
                </div>
    <?        }else{ ?>
                <div class="alert alert-success text-center">
                    Usuario eliminado con exito.
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
                    <a class="navbar-brand" href="#">Admin</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url(); ?>admin/usuarios/crearUsuario">Crear usuario</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Secciones <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url(); ?>admin/coberturas">Coberturas</a></li>
                            <li><a href="<?= base_url(); ?>admin/doctores">Doctores</a></li>
                            <li><a href="<?= base_url(); ?>admin/especialidades">Especialidades</a></li>
                            <li><a href="<?= base_url(); ?>admin/instalaciones">Instalaciones</a></li>
                            <li><a href="<?= base_url(); ?>admin/servicios">Servicios</a></li>
                            <li><a href="<?= base_url(); ?>admin/usuarios">Usuarios</a></li>
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
      <h2>Gestión de usuarios.</h2>
      <p>Desde aquí podrá dar de alta nuevos usuarios, editar los existentes o eliminarlos.</p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>  
            <th>Usuario</th>
            <th>Editar usuario</th>
            <th>Eliminar usuario</th>
          </tr>
        </thead>
        <tbody>
            <? foreach($usuarios->result() as $usuario): ?>    
            <tr>
                <td><?= $usuario->nombre; ?></td>
                <td><?= $usuario->usuario; ?></td>
                <td><a href="<?= base_url(); ?>admin/usuarios/editarFormularioUsuario?id=<?= $usuario->id ?>">Editar</a></td>
                <td><a href="<?= base_url(); ?>admin/usuarios/EliminarUsuario?id=<?= $usuario->id ?>">Eliminar</a></td>
            </tr>
            <? endforeach; ?>
        </tbody>
      </table>
        </div>
    </body>
</html>