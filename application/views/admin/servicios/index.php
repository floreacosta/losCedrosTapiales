<body>        
    <? if(isset($result)){
        if($result){
            if($tipo === 'crear'){
    ?>
                <div class="alert alert-success text-center">
                    Servicio creado con exito.
                </div>
    <?        }else if($tipo === 'editar'){ ?>
                <div class="alert alert-success text-center">
                    Servicio editado con exito.
                </div>
    <?        }else{ ?>
                <div class="alert alert-success text-center">
                    Servicio eliminado con exito.
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
        <h2>Gestión de servicios.</h2>
        <p>Desde aquí podrá dar de alta nuevos servicios, editar los existentes o eliminarlos.</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>  
                    <th>Descripción</th>
                    <th>Editar servicio</th>
                    <th>Eliminar servicio</th>
                </tr>
            </thead>
            <tbody>
                <? foreach($servicios->result() as $servicio): ?>    
                <tr>
                    <td><?= $servicio->nombre; ?></td>
                    <td><?= $servicio->descripcion; ?></td>
                    <td><a href="<?= base_url(); ?>admin/servicios/editarFormularioServicios?id=<?= $servicio->id ?>">Editar</a></td>
                    <td><a href="<?= base_url(); ?>admin/servicios/EliminarServicio?id=<?= $servicio->id ?>">Eliminar</a></td>
                </tr>
                <? endforeach; ?>
            </tbody>
        </table>
        <a href="<?= base_url(); ?>admin/servicios/crearServicio" class="btn btn-success" role="button">Crear nuevo servicio</a>
        <br>
        <br>
        <a href="<?= base_url(); ?>admin/index" class="btn btn-primary" role="button">Volver al menú principal</a>
        <br>
        <br>
        <a href="<?= base_url(); ?>admin/index/logout" class="btn btn-info" role="button">Cerrar sesión</a>
        </div>
    </body>
</html>

    