    <body>
        <?=  form_open(base_url()."admin/servicios/crearServicio") ?>

        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text'
            );
            $descripcion = array(
                'name' => 'descripcion',
                'type' => 'textarea'
            );
        ?>
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_label('Descripcion: ', 'descripcion') ?>
        <?= form_textarea($descripcion) ?>
        <br>
        <?= form_submit('','Crear servicio') ?>
        <?= form_close() ?>
    </body>
</html>