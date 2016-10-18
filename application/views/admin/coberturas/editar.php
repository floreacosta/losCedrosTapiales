    <h3>Edición de cobertura.</h3>
    <p>Desde aquí podrá cambiar los datos de la cobertura seleccionada.</p>
    <body>
        <?=  form_open_multipart('admin/coberturas/subirImagenEditar') ?>
        <?
            $resultado = $cobertura->result()[0];
                        
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
        <img class="img-thumbnail" src="<?= base_url(); ?>img/obras-sociales/<?= $resultado->imagen; ?>" />
        </div>
        <div class="form-group">
        <?= form_label('Nueva Imagen: ', 'user_file') ?>
        <?= form_input($imagen) ?>
        <small id="fileHelp" class="form-text text-muted">Seleccione una imagen desde su computadora.</small>
        </div>
        <?= form_submit('','Editar cobertura', $buttonClass) ?>
        <?= form_close() ?>
    </body>
</html>
