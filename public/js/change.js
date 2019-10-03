$('#input_change_type').on('change', function() {
    // alert( this.value );
    $('#currency_sign').removeClass();
    switch (this.value) {
        case '2':
            $('#currency_sign').addClass("fa fa-dollar-sign ");
            break;
        case '3':
            $('#currency_sign').addClass("fa fa-euro-sign");
            break;
        default:
            $('#currency_sign').addClass("fa fa-money-bill-alt");
            break;
    }

    calculateToGive();
});

$('#input_received').on('change, mouseup, keyup', function() {
    calculateToGive();
});

function calculateToGive() {
    //Calculate money to give
    var route = window.location.origin + '/change/getrate';
    var currencie = Number($('#input_change_type').val());
    var input_received = Number($('#input_received').val()) != null ?  Number($('#input_received').val()) : 0;

    $.get(route, function(data, status){
        data.forEach((item, index) => {
            if(item.id === currencie){
                var total = input_received * item.sale_rate;
                $('#input_to_give').val(total);
            }
        });
    });

}


$(document).ready(function() {
    calculateToGive();
    $(window).keydown(function(event){
        if(event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });
})

