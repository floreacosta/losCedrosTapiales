    <body>
        <h3>Creación de cobertura.</h3>
        <p>Desde aquí podrá crear una nueva cobertura para mostrar desde la página.</p>
        <?=  form_open_multipart(base_url()."admin/coberturas/subirImagen") ?>
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
        ?>        <div class="form-group">
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        </div>
        <div class="form-group">
        <?= form_label('Imagen: ', 'user_file') ?>
        <?= form_input($imagen) ?>
        <small id="fileHelp" class="form-text text-muted">Seleccione una imagen desde su computadora.</small>
        </div>
        <?= form_submit('','Crear cobertura', $buttonClass) ?>
        <?= form_close() ?>
    </body>
</html>