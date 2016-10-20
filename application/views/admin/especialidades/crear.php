    <body>
        <h3>Creación de Especialidad.</h3>
        <p>Desde aquí podrá crear una nueva especialidad para mostrar desde la página.</p>
        <?=  form_open(base_url()."admin/especialidades/crearEspecialidad") ?>

        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
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
        <?= form_submit('','Crear especialidad', $buttonClass) ?>
        <?= form_close() ?>
    </body>
</html>
