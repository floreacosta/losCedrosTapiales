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
                'value' => $resultado->nombre
            );
            $imagen = array(
                'name' => 'user_file',
                'type' => 'file',
                'size' => 20
            );
        ?>
        <?= form_hidden($hidden) ?>
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_label('Imagen actual: ', 'nombre') ?>
        <img src="<?= base_url(); ?>img/obras-sociales/<?= $resultado->imagen; ?>" />
        <br>
        <?= form_label('Nueva Imagen: ', 'user_file') ?>
        <?= form_input($imagen) ?>
        <br>
        <?= form_submit('','Editar cobertura') ?>
        <?= form_close() ?>
    </body>
</html>