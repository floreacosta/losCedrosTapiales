    <body>
        <?=  form_open(base_url()."admin/especialidades/crearEspecialidad") ?>

        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text'
            );
        ?>
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_submit('','Crear especialidad') ?>
        <?= form_close() ?>
    </body>
</html>