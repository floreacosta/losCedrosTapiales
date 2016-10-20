    <body>
        <h3>Edición de instalación.</h3>
        <p>Desde aquí podrá cambiar los datos de la instalación seleccionada.</p>
        <?=  form_open_multipart('admin/instalaciones/subirImagenEditar') ?>
        <?
            $resultado = $instalacion->result()[0];
                        
            $hidden = array(
                'hiddenId' => $resultado->id
            );
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'value' => $resultado->nombre,
                'class' => 'form-control'
            );
            $imagen = array(
                'name' => 'user_file',
                'type' => 'file',
                'size' => 20,
                'class' => 'form-control-file',
                'aria-describedby' => 'fileHelp'  
            );
            $descripcion = array(
                'name' => 'descripcion',
                'type' => 'text',
                'value' => $resultado->descripcion,
                'class' => 'form-control'
            );
            $buttonClass = array(
                'class' => 'btn btn-primary'
            );
        ?>
        <?= form_hidden($hidden) ?>
        <div class="form-group">
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        </div>
        <div class="form-group">
        <?= form_label('Imagen actual: ', 'nombre') ?>
        <img class="img-thumbnail" src="<?= base_url(); ?>img/<?= $resultado->imagen; ?>" />
        </div>
        <div class="form-group">
        <?= form_label('Nueva Imagen: ', 'user_file') ?>
        <?= form_input($imagen) ?>
        </div>
        <div class="form-group">
        <?= form_label('Descripcion: ', 'descripcion') ?>
        <?= form_textarea($descripcion) ?>
        </div>
        <?= form_submit('','Editar instalacion', $buttonClass) ?>
        <?= form_close() ?>
    </body>
</html>
