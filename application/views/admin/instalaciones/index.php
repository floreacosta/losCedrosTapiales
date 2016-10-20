    <body>        
    <? if(isset($result)){
        if($result){
            if($tipo === 'crear'){
    ?>
                <div class="alert alert-success text-center">
                    Instalación creada con exito.
                </div>
    <?        }else if($tipo === 'editar'){ ?>
                <div class="alert alert-success text-center">
                    Instalación editada con exito.
                </div>
    <?        }else{ ?>
                <div class="alert alert-success text-center">
                    Instalación eliminada con exito.
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
      <h2>Gestión de instalaciones.</h2>
      <p>Desde aquí podrá dar de alta nuevas instalaciones, editar las existentes o eliminarlas.</p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>  
            <th>Imagen</th>
            <th>Descripción<th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            <? foreach($instalaciones->result() as $instalacion): ?>    
            <tr>
                <td><?= $instalacion->nombre; ?></td>
                <td><img class="img-thumbnail" src="<?= base_url(); ?>img/<?= $instalacion->imagen; ?>"></td>
                <td><?= $instalacion->descripcion; ?></td>
                <td><a href="<?= base_url(); ?>admin/instalaciones/editarFormularioInstalaciones?id=<?= $instalacion->id ?>">Editar</a></td>
                <td><a href="<?= base_url(); ?>admin/instalaciones/EliminarInstalacion?id=<?= $instalacion->id ?>">Eliminar</a></td>
            </tr>
            <? endforeach; ?>
        </tbody>
      </table>
            <a href="<?= base_url(); ?>admin/instalaciones/crearInstalacion" class="btn btn-success" role="button">Crear nueva instalacion</a>
            <br>
            <br>
            <a href="<?= base_url(); ?>admin/index" class="btn btn-primary" role="button">Volver al menú principal</a>
            <br>
            <br>
            <a href="<?= base_url(); ?>admin/index/logout" class="btn btn-info" role="button">Cerrar sesión</a>
        </div>
    </body>
</html>