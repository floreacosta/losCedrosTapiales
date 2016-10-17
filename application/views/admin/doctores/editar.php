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
        <?=  form_open('admin/doctores/updateDoctores') ?>

        <?
            $resultadoDoctor = $doctor->result()[0];
            $resultadoEspecialidadesCompleto = $especialidades->result();
            if($especialidadesXDoctor)
            $resultadoEspecialidadesXDoctor = $especialidadesXDoctor->result();
            else
            $resultadoEspecialidadesXDoctor = array();
            
            $hidden = array(
                'hiddenId' => $resultadoDoctor->id
            );
            $nombre = array(
                'name' => 'nombre',
                'type' => 'text',
                'value' => $resultadoDoctor->nombre
            );
            $submit = array(
                'id' => 'submit',
                'class' => 'submit'
            );
              
            $especialidadesConSeleccion = array();

            foreach ($resultadoEspecialidadesCompleto as $especialidad) {
                $esSeleccionada = false;
                foreach ($resultadoEspecialidadesXDoctor as $especialidadXDoctor) {
                    if(!$esSeleccionada){
                        if($especialidad->id === $especialidadXDoctor->idEspecialidad){
                            $esSeleccionada = true;
                        }else{
                            $esSeleccionada = false;
                        }
                    } 
                }
                $array = array(
                    'idEspecialidad' => $especialidad->id,
                    'nombreEspecialidad' => $especialidad->nombre,
                    'esSeleccionada' => $esSeleccionada
                );
                $especialidadesConSeleccion[] = $array;
            }
        ?>
        <?= form_hidden($hidden) ?>
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        <br>
        <?= form_label('Especialidades: ', 'especialidades') ?>
            <select id="especialidades" multiple="multiple">
            <? foreach($especialidadesConSeleccion as $especialidadConSeleccion): ?>    
                <option <?= ($especialidadConSeleccion["esSeleccionada"] ? 'selected=selected' : '') ?> value="<?= $especialidadConSeleccion["idEspecialidad"]; ?>"><?= $especialidadConSeleccion["nombreEspecialidad"]; ?></option>    
            <? endforeach; ?>
            </select>
        <?= form_submit('submit','Editar doctor', $submit) ?>
        <?= form_close() ?>
    </body>
</html>