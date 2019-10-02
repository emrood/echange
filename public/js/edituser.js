// bootstrap wizard//
$("#gender, #gender1").select2({
    theme:"bootstrap",
    placeholder:"",
    width: '100%'
});
$('input[type="checkbox"].custom-checkbox').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    increaseArea: '20%'
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
                different: {
                    field: 'first_name,last_name',
                    message: 'Le mot de passe est obligatoire'
                }
            }
        },
        password_confirmation: {
            validators: {
                identical: {
                    field: 'password'
                },
                different: {
                    field: 'first_name,last_name',
                    message: 'Le mot de passe doit etre confirmer'
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
        activate: {
            validators: {
                notEmpty: {
                    message: 'Veuillez cocher la case pour activer'
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
$('#activate').on('ifChanged', function(event){
    $('#commentForm').bootstrapValidator('revalidateField', $('#activate'));
});