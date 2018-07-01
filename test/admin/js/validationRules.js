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
            user_file: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, seleccione un archivo'
                    }
                }
            },
            user: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, ingrese un nombre de usuario'
                    }
                }
            },
            pass: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, ingrese una contraseña'
                    }
                }
            },
            old_pass: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, ingrese su contraseña anterior'
                    }
                }
            },
            new_pass: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, ingrese su nueva contraseña'
                    }
                }
            },
            confirmation_new_password: {
                validators: {
                    notEmpty: {
                        message: 'Por favor, vuelva a ingresar su nueva contraseña'
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

