<body>        
    <? if(isset($result)){
        if($result){
            if($tipo === 'crear'){
    ?>
                <div class="alert alert-success text-center">
                    Cobertura creada con exito.
                </div>
    <?        }else if($tipo === 'editar'){ ?>
                <div class="alert alert-success text-center">
                    Cobertura editada con exito.
                </div>
    <?        }else{ ?>
                <div class="alert alert-success text-center">
                    Cobertura eliminada con exito.
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
      <h2>Gestión de coberturas.</h2>
      <p>Desde aquí podrá dar de alta nuevas coberturas, editar las existentes o eliminarlas.</p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>  
            <th>Imagen</th>
            <th>Editar cobertura</th>
            <th>Eliminar cobertura</th>
          </tr>
        </thead>
        <tbody>
            <? foreach($coberturas->result() as $cobertura): ?>    
            <tr>
                <td><?= $cobertura->nombre; ?></td>
                <td><img class="img-thumbnail" src="<?= base_url(); ?>img/obras-sociales/<?= $cobertura->imagen; ?>"></td>
                <td><a href="<?= base_url(); ?>admin/coberturas/editarFormularioCoberturas?id=<?= $cobertura->id ?>">Editar</a></td>
                <td><a href="<?= base_url(); ?>admin/coberturas/EliminarCobertura?id=<?= $cobertura->id ?>">Eliminar</a></td>
            </tr>
            <? endforeach; ?>
        </tbody>
      </table>
            <a href="<?= base_url(); ?>admin/coberturas/crearCobertura" class="btn btn-success" role="button">Crear nueva cobertura</a>
            <br>
            <br>
            <a href="<?= base_url(); ?>admin/index" class="btn btn-primary" role="button">Volver al menú principal</a>
            <br>
            <br>
            <a href="<?= base_url(); ?>admin/index/logout" class="btn btn-info" role="button">Cerrar sesión</a>
        </div>
    </body>
</html>
