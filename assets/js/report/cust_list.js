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

function edit_cust(i, cust_id) {
    $('#my_modal').modal('show');
    // console.log($('#cust_name' + i).html());

    let body = '<div class="row">';
    body += '<div class="col-sm-4"><input type="text" class="form-control" value="' + $('#cust_name' + i).html() + '" id="cust_name"></div>';
    body += '<div class="col-sm-5"><input type="text" class="form-control" value="' + $('#cust_address' + i).html() + '" id="cust_address"></div>';
    body += '<div class="col-sm-3"><input type="text" class="form-control" value="' + $('#cust_phone' + i).html() + '" id="cust_phone"></div>';
    body += '</div>';
    body += '<div class="row">';
    body += '<div class="col-sm-3"><input type="hidden" class="form-control" value="' + cust_id + '" id="cust_id"></div>';
    body += '</div>';

    $('#my_modal').ready(function() {
        $('#modal_title').html('EDIT CUSTOMER');
        $('#modal_body').html(body);
    })
}

$('#btn_save_modal').click(function() {
    $.post(url + 'report/cust_list/edit_data', {
        cust_name: $('#cust_name').val(),
        cust_address: $('#cust_address').val(),
        cust_phone: $('#cust_phone').val(),
        cust_id: $('#cust_id').val()
    }, function(result) {
        $('#my_modal').modal('hide');
        get_data();
    });
})