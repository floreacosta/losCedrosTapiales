    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css"
        rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
        rel="stylesheet" type="text/css" />
    <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $('#especialidades').multiselect({
                includeSelectAllOption: true
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
    <body>
        <?=  form_open('') ?>

        <?
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text'
            );
            $submit = array(
                'id' => 'submit',
                'class' => 'submit'
            );
        ?>
        
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_label('Especialidades: ', 'especialidades') ?>
            <select id="especialidades" multiple="multiple">
            <? foreach($especialidades->result() as $especialidad): ?>    
                <option value="<?= $especialidad->id; ?>"><?= $especialidad->nombre; ?></option>    
            <? endforeach; ?>
            </select>
        <?= form_submit('submit','Crear doctor', $submit) ?>
        <?= form_close() ?>
    </body>
</html>