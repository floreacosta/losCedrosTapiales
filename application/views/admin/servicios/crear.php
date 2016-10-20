    <body>
        <h3>Creación de Servicio.</h3>
        <p>Desde aquí podrá crear un nuevo servicio para mostrar desde la página.</p>
        <?=  form_open(base_url()."admin/servicios/crearServicio") ?>
        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'class' => 'form-control'
            );
            $descripcion = array(
                'name' => 'descripcion',
                'type' => 'textarea',
                'class' => 'form-control'
            );                        
            $buttonClass = array(
                'class' => 'btn btn-primary'
            );
        ?>
        <div class="form-group">
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        </div>
        <div class="form-group">
        <?= form_label('Descripcion: ', 'descripcion') ?>
        <?= form_textarea($descripcion) ?>
        </div>
        <?= form_submit('','Crear servicio', $buttonClass) ?>
        <?= form_close() ?>
    </body>
</html>