$(document).ready(function() {
    $('#especialidades').multiselect({
        includeSelectAllOption: true,
        enableFiltering: true
    });
    $('#submit').click(function () {
        var selected = $("#especialidades option:selected");
        var message = "";
        var hayAlguna = false;
        var hayTexto = false;
        selected.each(function () {
            message += $(this).val() +".";
            hayAlguna = true;
        });

        if($('#nombre').val() === ''){
            hayTexto = false;
        }else{
            hayTexto = true;
        }

        if(hayTexto) {
            $("#div-form-nombre").removeClass();
            $("#div-form-nombre").addClass('form-group has-feedback has-success');
            $("#validate-ok-nombre").css('display', 'block');
            $("#validate-wrong-nombre").css('display', 'none');
            $("#warning-text-nombre").css('display', 'none');
        }else {
            $("#div-form-nombre").removeClass();
            $("#div-form-nombre").addClass('form-group has-feedback has-error');
            $("#validate-ok-nombre").css('display', 'none');
            $("#validate-wrong-nombre").css('display', 'block');
            $("#warning-text-nombre").css('display', 'block');
        }
        if(hayAlguna) {
            $("#div-form-descripcion").removeClass();
            $("#div-form-descripcion").addClass('form-group has-feedback has-success');
            $("#validate-ok-descripcion").css('display', 'block');
            $("#validate-wrong-descripcion").css('display', 'none');
            $("#warning-text-descripcion").css('display', 'none');
        }else {
            $("#div-form-descripcion").removeClass();
            $("#div-form-descripcion").addClass('form-group has-feedback has-error');
            $("#validate-ok-descripcion").css('display', 'none');
            $("#validate-wrong-descripcion").css('display', 'block');
            $("#warning-text-descripcion").css('display', 'block');
        }
        if(hayAlguna && hayTexto) {
            $('<input>').attr({
                type: 'hidden',
                id: 'especialidades',
                name: 'especialidades',
                value: message
            }).appendTo('form');
            return true;    
        }else {
            return false;
        }
    });
});

function checkNombre() {
    var hayTexto = false;

    if($('#nombre').val() === ''){
        hayTexto = false;
    }else{
        hayTexto = true;
    }

    if(hayTexto) {
        $("#div-form-nombre").removeClass();
        $("#div-form-nombre").addClass('form-group has-feedback has-success');
        $("#validate-ok-nombre").css('display', 'block');
        $("#validate-wrong-nombre").css('display', 'none');
        $("#warning-text-nombre").css('display', 'none');
    }else {
        $("#div-form-nombre").removeClass();
        $("#div-form-nombre").addClass('form-group has-feedback has-error');
        $("#validate-ok-nombre").css('display', 'none');
        $("#validate-wrong-nombre").css('display', 'block');
        $("#warning-text-nombre").css('display', 'block');
    }

}

function checkEspecialidades() {
    var seleccionadas = $("#especialidades option:selected");
    var hayAlguna = false;
    seleccionadas.each(function () {
        hayAlguna = true;
    });

    if(hayAlguna) {
        $("#div-form-descripcion").removeClass();
        $("#div-form-descripcion").addClass('form-group has-feedback has-success');
        $("#validate-ok-descripcion").css('display', 'block');
        $("#validate-wrong-descripcion").css('display', 'none');
        $("#warning-text-descripcion").css('display', 'none');
    }else {
        $("#div-form-descripcion").removeClass();
        $("#div-form-descripcion").addClass('form-group has-feedback has-error');
        $("#validate-ok-descripcion").css('display', 'none');
        $("#validate-wrong-descripcion").css('display', 'block');
        $("#warning-text-descripcion").css('display', 'block');
    }
}