$('#btn_saave').click(function(event) {

    $.post('/path/to/file', {
        item_id: $('#item_id').val()
    }, function(result) {
        $('#my_modal').modal('show');
    });
});