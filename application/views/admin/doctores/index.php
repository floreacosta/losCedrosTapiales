<body>        
    <? if(isset($result)){
        if($result){
            if($tipo === 'crear'){
    ?>
                <div class="alert alert-success text-center">
                    Doctor creado con exito.
                </div>
    <?        }else if($tipo === 'editar'){ ?>
                <div class="alert alert-success text-center">
                    Doctor editado con exito.
                </div>
    <?        }else{ ?>
                <div class="alert alert-success text-center">
                    Doctor eliminado con exito.
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
        <h2>Gestión de dectores.</h2>
        <p>Desde aquí podrá dar de alta nuevos doctores, editar los existentes o eliminarlos.</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Editar servicio</th>
                    <th>Eliminar servicio</th>
                </tr>
            </thead>
            <tbody>
                <? foreach($doctores->result() as $doctor): ?>    
                <tr>
                    <td><?= $doctor->nombre; ?></td>
                    <td><a href="<?= base_url(); ?>admin/doctores/editarFormularioDoctores?id=<?= $doctor->id ?>">Editar</a></td>
                    <td><a href="<?= base_url(); ?>admin/doctores/EliminarDoctor?id=<?= $doctor->id ?>">Eliminar</a></td>
                </tr>
                <? endforeach; ?>
            </tbody>
        </table>
        <a href="<?= base_url(); ?>admin/doctores/crearDoctor" class="btn btn-success" role="button">Crear nuevo doctor</a>
        <br>
        <br>
        <a href="<?= base_url(); ?>admin/index" class="btn btn-primary" role="button">Volver al menú principal</a>
        <br>
        <br>
        <a href="<?= base_url(); ?>admin/index/logout" class="btn btn-info" role="button">Cerrar sesión</a>
        </div>
    </body>
</html>