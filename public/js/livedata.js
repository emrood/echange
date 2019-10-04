$('.link-to-balance').on('click', function () {
    // alert(this);
    var userid = $(this).attr('data-userId');
    // console.log(userid);
    var route = window.location.origin + '/cash-fund/' + userid + '/balance';
    var table = '';


    $.get(route, function (data, status) {
        console.log(data);
        var result = Object.keys(data).map(function (key) {
            return [key, data[key]];
        });
        // console.log(result);
        result.forEach((item, index) => {
            console.log(item);
            if (index === 0) {
                table += '<thead><tr><th scope="col">' + item[0] + '</th>';
                var live_data = item[1];
                var children = Object.keys(live_data).map(function (key) {
                    return [key, live_data[key]];
                });
                children.forEach((child, index) => {
                    table += '<th scope="col">' + child[1] + '</th>';
                });
                table += '</tr></thead>';
            } else {

                var n = table.includes('<tbody>');

                // console.log(n,'TEST');

                if (!n) {
                    table += '<tbody>';
                }

                table += '<tr><th scope="row">' + item[0] + '</th>';

                var live_data = item[1];
                var children = Object.keys(live_data).map(function (key) {
                    return [key, live_data[key]];
                });
                children.forEach((child, index) => {
                    table += '<td>' + child[1] + '</td>';
                });
                table += '</tr>';
            }
        });

        table += '</tbody>';


        $('.table-balance').html(table);
        $('.table-balance-container').css('display', 'block');

        console.log(table);
    });
});

$('.link-to-rate').on('click', function () {
    var route = window.location.origin + '/change/getrate';
    var table = '';

    $.get(route, function (data, status) {
        console.log(data);

        table += '<tbody class="rate-content">';
        data.forEach((item, index) => {
            table += '<tr>' +
                        '<td>'+ item.id +'</td>' +
                        '<td>'+ item.abbreviation +'</td>' +
                        '<td>'+ item.sale_rate +'</td>' +
                        '<td>'+ item.purchase_rate +'</td>' +
                    '</tr>';

        });

        table += '</tbody>';

        $('.table-rate .rate-content').remove();
        $('.table-rate').append(table);
        $('.table-rate-container').css('display', 'block');
        console.log(table);
    });
});