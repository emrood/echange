"use strict";
//bootstrap wizard//
$("#gender, #gender1").select2({
    theme:"bootstrap",
    placeholder:"",
    width: '100%'
});
$('input[type="checkbox"].custom-checkbox, input[type="radio"].custom-radio').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue',
    increaseArea: '20%'
});
$("#dob").datepicker({
    dateFormat: 'yy-m-d',
    widgetPositioning:{
        vertical:'bottom'
    },
    keepOpen:false,
    useCurrent: false,
    maxDate: moment().add(1,'h').toDate()
});
$("#commentForm").bootstrapValidator({
    fields: {
        name: {
            validators: {
                notEmpty: {
                    message: 'Le nom est obligatoire'
                }
            },
            required: true,
            minlength: 3
        },
        password: {
            validators: {
                notEmpty: {
                    message: 'Le mot de passe est obligatoire'
                },
                different: {
                    field: 'first_name,last_name',
                    message: 'Le mot de passe ne doit pas correspondre au nom'
                },
                minlength: 3
            }
        },
        password_confirmation: {
            validators: {
                notEmpty: {
                    message: 'Le mot de passe doit etre confirmer'
                },
                identical: {
                    field: 'password'
                },
                different: {
                    field: 'first_name,last_name',
                    message: 'Les mots de passe doivent etre les memes'
                }
            }
        },
        email: {
            validators: {
                notEmpty: {
                    message: 'L\'adresse email est obligatoire'
                },
                emailAddress: {
                    message: 'L\'entrée n\'est pas une adresse email valide'
                }
            }
        },
        bio: {
            validators: {
                notEmpty: {
                    message: 'Bio est requis et ne peut pas être vide'
                }
            },
            minlength: 20
        },

        gender: {
            validators: {
                notEmpty: {
                    message: 'Veuillez choisir un genre'
                }
            }
        },

        group: {
            validators:{
                notEmpty:{
                    message: 'Vous devez sélectionner un groupe'
                }
            }
        }
    }
});

$('#rootwizard').bootstrapWizard({
    'tabClass': 'nav nav-pills',
    'onNext': function(tab, navigation, index) {
        var $validator = $('#commentForm').data('bootstrapValidator').validate();
        return $validator.isValid();
    },
    onTabClick: function(tab, navigation, index) {
        return false;
    },
    onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index + 1;

        // If it's the last tab then hide the last button and show the finish instead
        if ($current >= $total) {
            $('#rootwizard').find('.pager .next').hide();
            $('#rootwizard').find('.pager .finish').show();
            $('#rootwizard').find('.pager .finish').removeClass('disabled');
        } else {
            $('#rootwizard').find('.pager .next').show();
            $('#rootwizard').find('.pager .finish').hide();
        }
    }});

$('#rootwizard .finish').click(function () {
    var $validator = $('#commentForm').data('bootstrapValidator').validate();
    if ($validator.isValid()) {
        document.getElementById("commentForm").submit();
    }

});
// $('#activate').on('ifChanged', function(event){
//     $('#commentForm').bootstrapValidator('revalidateField', $('#activate'));
// });
$('#commentForm').keypress(
    function(event){
        if (event.which == '13') {
            event.preventDefault();
        }
    });