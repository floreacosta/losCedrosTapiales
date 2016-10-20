    <body>
        <h3>Edición de especialidad.</h3>
        <p>Desde aquí podrá cambiar los datos de la especialidad seleccionada.</p>
        <?=  form_open('admin/especialidades/updateEspecialidades') ?>
        <?
            $resultado = $especialidad->result()[0];
                        
            $hidden = array(
                'hiddenId' => $resultado->id
            );
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'value' => $resultado->nombre,
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
        <?= form_submit('','Editar especialidad', $buttonClass) ?>
        <?= form_close() ?>
    </body>
</html>