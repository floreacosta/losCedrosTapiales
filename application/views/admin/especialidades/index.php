<body>        
    <? if(isset($result)){
        if($result){
            if($tipo === 'crear'){
    ?>
                <div class="alert alert-success text-center">
                    Especialidad creada con exito.
                </div>
    <?        }else if($tipo === 'editar'){ ?>
                <div class="alert alert-success text-center">
                    Especialidad editada con exito.
                </div>
    <?        }else{ ?>
                <div class="alert alert-success text-center">
                    Especialidad eliminada con exito.
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
                    <th>Editar especialidad</th>
                    <th>Eliminar especialidad</th>
                </tr>
            </thead>
            <tbody>
                <? foreach($especialidades->result() as $especialidad): ?>    
                <tr>
                    <td><?= $especialidad->nombre; ?></td>
                    <td><a href="<?= base_url(); ?>admin/especialidades/editarFormularioEspecialidades?id=<?= $especialidad->id ?>">Editar</a></td>
                    <td><a href="<?= base_url(); ?>admin/especialidades/EliminarEspecialidad?id=<?= $especialidad->id ?>">Eliminar</a></td>
                </tr>
                <? endforeach; ?>
            </tbody>
        </table>
        <a href="<?= base_url(); ?>admin/especialidades/crearEspecialidad" class="btn btn-success" role="button">Crear nueva especialidad</a>
        <br>
        <br>
        <a href="<?= base_url(); ?>admin/index" class="btn btn-primary" role="button">Volver al menú principal</a>
        <br>
        <br>
        <a href="<?= base_url(); ?>admin/index/logout" class="btn btn-info" role="button">Cerrar sesión</a>
        </div>
    </body>
</html>