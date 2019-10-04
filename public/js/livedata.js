$('.link-to-balance').on('click', function () {
    // alert(this);

    var userid = $(this).attr('data-userId');
    // console.log(userid);
    var route = window.location.origin + '/cash-fund/'+ userid +'/balance';
    var table = '';


    $.get(route, function (data, status) {
        console.log(data);
        var result = Object.keys(data).map(function(key) {
            return [key, data[key]];
        });
        // console.log(result);
        result.forEach((item, index) => {
            console.log(item);
            if(index === 0){
                table += '<thead><tr><th scope="col">' + item[0] + '</th>';
               var live_data = item[1];
                var children = Object.keys(live_data).map(function(key) {
                    return [key, live_data[key]];
                });
                children.forEach((child, index) => {
                    table += '<th scope="col">' + child[1] + '</th>';
                });
                table += '</tr></thead>';
            }else{

                var n = table.includes('<tbody>');

                if(n){
                    table += '<tbody>';
                }else{

                }
                table += '<tbody><tr><th> scope="row"' + item[0] + '</th>';

                var live_data = item[1];
                var children = Object.keys(live_data).map(function(key) {
                    return [key, live_data[key]];
                });
                children.forEach((child, index) => {
                    table += '<td>' + child[1] + '</td>';
                });
                table += '</tr>';
            }
        });

        table += '</tbody>';



        console.log(table);
    });
});