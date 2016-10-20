    <body>
        <h3>Edición de servicio.</h3>
        <p>Desde aquí podrá cambiar los datos del servicio seleccionado.</p>
        <?=  form_open('admin/servicios/updateServicios') ?>
        <?
            $resultado = $servicio->result()[0];
                        
            $hidden = array(
                'hiddenId' => $resultado->id
            );
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'value' => $resultado->nombre,
                'class' => 'form-control'
            );
            $descripcion = array(
                'name' => 'descripcion',
                'type' => 'textarea',
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
        <?= form_label('Descripción: ', 'descripcion') ?>
        <?= form_textarea($descripcion) ?>
        </div>
        <?= form_submit('','Editar servicio', $buttonClass) ?>
        <?= form_close() ?>
    </body>
</html>
