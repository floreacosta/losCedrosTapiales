    <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
    <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"  type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $('#especialidades').multiselect({
                includeSelectAllOption: true,
                enableFiltering: true,
                disableIfEmpty: true,
                disabledText: 'Especialidades'
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
        <h3>Edición de doctor.</h3>
        <p>Desde aquí podrá cambiar los datos del doctor seleccionado.</p>
        <p>El doctor puede tener varias especialidades seleccionadas.</p>
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
                'value' => $resultadoDoctor->nombre,
                'class' => 'form-control'
            );
            $submit = array(
                'id' => 'submit',
                'class' => 'btn btn-primary'
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
        <div class="form-group">
        <?= form_label('Nombre: ', 'nombre') ?>
        <?= form_input($nombre) ?>
        </div>
        <br>
        <div class="form-group">
        <select id="especialidades" multiple="multiple">
        <? foreach($especialidadesConSeleccion as $especialidadConSeleccion): ?>    
            <option <?= ($especialidadConSeleccion["esSeleccionada"] ? 'selected=selected' : '') ?> value="<?= $especialidadConSeleccion["idEspecialidad"]; ?>"><?= $especialidadConSeleccion["nombreEspecialidad"]; ?></option>    
        <? endforeach; ?>
        </select>
        </div>
        <?= form_submit('submit','Editar doctor', $submit) ?>
        <?= form_close() ?>
    </body>
</html>