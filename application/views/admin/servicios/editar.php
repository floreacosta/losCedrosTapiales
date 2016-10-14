    <body>
        <?=  form_open('admin/servicios/updateServicios') ?>
        <?
            $resultado = $servicio->result()[0];
                        
            $hidden = array(
                'hiddenId' => $resultado->id
            );
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'value' => $resultado->nombre
            );
            $descripcion = array(
                'name' => 'descripcion',
                'type' => 'textarea',
                'value' => $resultado->descripcion
            );
        ?>
        <?= form_hidden($hidden) ?>
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_label('Descripción: ', 'descripcion') ?>
        <?= form_textarea($descripcion) ?>
        <br>
        <?= form_submit('','Editar servicio') ?>
        <?= form_close() ?>
    </body>
</html>