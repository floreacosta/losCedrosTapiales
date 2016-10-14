    <body>
        <?=  form_open('admin/doctores/updateDoctores') ?>
        <?
            $resultado = $doctor->result()[0];
                        
            $hidden = array(
                'hiddenId' => $resultado->id
            );
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'value' => $resultado->nombre
            );
        ?>
        <?= form_hidden($hidden) ?>
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_submit('','Editar doctor') ?>
        <?= form_close() ?>
    </body>
</html>