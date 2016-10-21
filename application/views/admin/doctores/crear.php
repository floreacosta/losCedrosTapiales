    <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
    <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"  type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $('#especialidades').multiselect({
                includeSelectAllOption: true,
                enableFiltering: true
            });
            $('#submit').click(function () {
                var selected = $("#especialidades option:selected");
                var message = "";
                selected.each(function () {
                    message += $(this).val() +".";
                });
                $('<input>').attr({
                    type: 'hidden',
                    id: 'especialidades',
                    name: 'especialidades',
                    value: message
                }).appendTo('form');
            });
        });
    </script>
    <style>
        .open > .dropdown-menu {
            max-height: 400px;
            overflow: scroll;
        }        
    </style>
    <body>
        <h3>Creación de doctor.</h3>
        <p>Desde aquí podrá crear un nuevo doctor para mostrar desde la página.</p>
        <p>El doctor puede tener varias especialidades seleccionadas.</p>
        <?=  form_open('') ?>

        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'class' => 'form-control'
            );
            $submit = array(
                'id' => 'submit',
                'class' => 'btn btn-primary'
            );
        ?>
        <div class="form-group">
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        </div>
        <div class="form-group">
            <select id="especialidades" multiple="multiple" name='especialidades'>
            <? foreach($especialidades->result() as $especialidad): ?>    
                <option value="<?= $especialidad->id; ?>"><?= $especialidad->nombre; ?></option>    
            <? endforeach; ?>
            </select>
        </div>
        <?= form_submit('submit','Crear doctor', $submit) ?>
        <?= form_close() ?>
    </body>
</html>