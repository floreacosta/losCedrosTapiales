    <body>
        <?=  form_open(base_url()."admin/doctores/crearDoctor") ?>

        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text'
            );
            $especialidades = array(
                'tag1Value'  => 'tag1Name',
                'tag2Value'  => 'tag2Name',
                'tag3Value'  => 'tag3Name',
                'tag4Value'  => 'tag4Name'
            );
        ?>
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_label('Especialidades: ', 'especialidades') ?>
        <?= form_multiselect('especialidades', $especialidades, array());?>
        <?= form_submit('','Crear doctor') ?>
        <?= form_close() ?>
    </body>
</html>