  $(document).ready(function() {
    $('form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, ingrese un nombre'
                    }
                }
            },      
            descripcion: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, ingrese una descripción'
                    }
                }
            }
        }
    });
});

