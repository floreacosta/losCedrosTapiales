    <body>
        <h3>Creación de instalación.</h3>
        <p>Desde aquí podrá crear una nueva instalación para mostrar desde la página.</p>
        <?=  form_open_multipart(base_url()."admin/instalaciones/subirImagen") ?>

        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'class' => 'form-control'
            );
            $imagen = array(
                'name' => 'user_file',
                'type' => 'file',
                'size' => 20,
                'class' => 'form-control-file',
                'aria-describedby' => 'fileHelp'  
            );            
            $buttonClass = array(
                'class' => 'btn btn-primary'
            );
            $descripcion = array(
                'name' => 'descripcion',
                'type' => 'text',
                'class' => 'form-control'
            );
            
        ?>
        <div class="form-group">
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        </div>
        <div class="form-group">
        <?= form_label('Imagen: ', 'user_file') ?>
        <?= form_input($imagen) ?>
        <small id="fileHelp" class="form-text text-muted">Seleccione una imagen desde su computadora.</small>
        </div>
        <div class="form-group">
        <?= form_label('Descripción: ', 'descripcion') ?>
        <?= form_textarea($descripcion) ?>
        </div>
        <?= form_submit('','Crear instalacion', $buttonClass) ?>
        <?= form_close() ?>
    </body>
</html>
