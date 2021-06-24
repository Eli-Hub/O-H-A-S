$(document).ready(function () {
    let _token = $('input[name=_token]').val()
    $.ajax({
        url: '/user/categories',
        type: 'get',
        success: function (data) {
            $.each(data, function (k,v) {
                $('#category_id').append(`<option value="${v.id}">${v.category_name}</option>`)
            })
        }
    })

    $('#category_id').change(function () {
        let id = $(this).val()
        $.ajax({
            url: '/user/category',
            type: 'post',
            data: {id: id, _token: _token},
            success: function (data) {
                $.each(data, function (k,v) {
                    $('#'+k).val(v)
                })
            }
        })
    })
})
