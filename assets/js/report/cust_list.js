get_data();

function get_data() {
    $.post(url + 'report/cust_list/get_data', {
        param1: 'value1'
    }, function(result) {
        $('#data_container').html(result);
        $('#data_container').ready(function() {
            $('#example').DataTable();
        })

    });
}