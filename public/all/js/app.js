function toast(status, message, title = null) {
    if (title === null) {
        title = 'Online Hostel Admission System'
    }
    toastr[status](message, title)

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "slideDown",
        "hideMethod": "slideUp"
    }
}

let _token = $('input[name=_token]').val()


//delete records

function deleteAlert(url, id) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        confirmButtonClass: "btn btn-primary",
        cancelButtonClass: "btn btn-danger ml-1",
        buttonsStyling: !1
    }).then(function(t) {
        if (t.value) {
            // Delete
            $.ajax({
                url: url + id,
                type: 'delete',
                data: { _token: _token },
                success: function(data) {
                    toast('success', data.message)
                    category_list.ajax.reload()
                    toast('success', data.message)
                    refresh()
                    Swal.fire({
                        type: "success",
                        title: "Deleted!",
                        text: "Your data has been deleted.",
                        confirmButtonClass: "btn btn-success"
                    })
                }
            })
        } else if (t.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: "Cancelled",
                text: "Your data is safe :)",
                type: "error",
                confirmButtonClass: "btn btn-success"
            })
        }
    })

}




/**** CATEGORY ****/

//add new category

$(document).ready(function() {

    $.ajax({
        url: '/admin/hostel/categories',
        type: 'get',
        dataType: 'json',
        success: function (data) {
            let category_id = $('#category_id')
            $.each(data, function (k,v) {
                category_id.append(`<option value="${v.id}">${v.category_name}</option>`)
            })
        }
    })


    let form = $('#add-category-form')
    form.submit(function(e) {
        e.preventDefault()
        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.status === 'fail') {
                    let msg = ''
                    $.each(data.error, function(k, v) {
                        msg = v
                        toast('error', msg)
                    })
                } else {
                    form[0].reset()
                    category_list.ajax.reload()
                    toast('info', data.message)
                    hold_modal('add-category-modal', 'hide')
                }
            }
        })
    })


    //fetching data from DB

    let dt_category_lists = $('.zero-configuration')

    let category_list

    if (dt_category_lists.length) {
        category_list = dt_category_lists.DataTable({
            ajax: '/admin/categories',
            processing: true,
            order: ['0', 'asc'],
            columns: [{ 'data': 'id' },
                { 'data': 'category_name' },
                { 'data': 'amount' },
                { 'data': 'number_of_years' },
                {
                    'data': null,
                    render: function(data) {
                        return `
                                <div class="">
                                <a title="Show" class="btn btn-outline-info btn-sm" onclick="view_category('${data.id}')" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a title="Edit" class="btn btn-outline-primary btn-sm" onclick="edit_category('${data.id}')" class="pd-setting-ed"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a title="Delete" class="btn btn-outline-danger btn-sm" onclick="deleteAlert('/admin/delete/', '${data.id}')" ><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                                </div>
                                `
                    }
                }
            ]
        })
    }


    //edit records form

    let eform = $('#edit-category-form')
    eform.submit(function(e) {
        e.preventDefault()
        $.ajax({
            url: eform.attr('action'),
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.status === 'fail') {
                    let msg = ''
                    $.each(data.error, function(a, b) {
                        msg = b
                        toast('error', msg)
                    })
                } else {
                    eform[0].reset()
                    hold_modal('edit-category-modal', 'hide')
                    category_list.ajax.reload()
                    toast('success', data.message)
                }
            }
        })
    })
})

function view_category(id) {
    $.ajax({
        url: '/admin/categoryid',
        type: 'post',
        data: { id: id, _token: _token },
        success: function(data) {
            if (data) {
                $.each(data, function(k, v) {
                    $('#v_' + k).html(v)
                })
            }
        }
    })
    hold_modal('view-category-modal', 'show')
}

function edit_category(id) {
    $.ajax({
        url: '/admin/categoryid',
        type: 'post',
        data: { id: id, _token: _token },
        success: function(data) {
            if (data) {
                $.each(data, function(k, v) {
                    $('#e_' + k).val(v)
                })
            }
        }
    })
    hold_modal('edit-category-modal', 'show')
}




function images_path(assets_path) {
    let base_url = $('#base_url').val()
    return  base_url + '/all/app-assets/images/' + assets_path
}

function load_image(image, image_loader, target = '#') {
    if (target === '.') {
        target = '.'
    }
    $(target + image).change(function (event) {
        let path = URL.createObjectURL(event.target.files[0])
        $(target + image_loader).html(`<img src="${path}" style="width: 80px; height: 80px; border-radius: 100px" alt="" />`)
    })
}


/**** AGENT ****/

//add new agnt

$(document).ready(function() {
    let form = $('#add-agent-form')
    form.submit(function(e) {
        e.preventDefault()
        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.status === 'fail') {
                    let msg = ''
                    $.each(data.error, function(k, v) {
                        msg = v
                        toast('error', msg)
                    })
                } else {
                    form[0].reset()
                    agent_list.ajax.reload()
                    toast('info', data.message)
                    hold_modal('add-agent-modal', 'hide')
                }
            }
        })
    })


    //fetching data from DB

    let dt_agent_lists = $('.agent-configuration')

    let agent_list

    if (dt_agent_lists.length) {
        agent_list = dt_agent_lists.DataTable({
            ajax: '/admin/agents',
            processing: true,
            order: ['0', 'asc'],
            columns: [{
                    'data': null,
                    render: function(data) {
                        return `
                              <img src="${images_path('uploads/agents/'+data.agent_name.toLowerCase().replace(' ', '_')+'/'+data.picture)}"  data-fancybox="gallery" alt=""
                            style="width: 60px; height: 60px; border-radius: 100px">
                            `
                    }
                },
                { 'data': 'id' },
                { 'data': 'agent_name' },
                { 'data': 'phone' },
                { 'data': 'hostel_id' },
                { 'data': 'hostel_name' },
                {
                    'data': null,
                    render: function(data) {
                        return `
                                <div class="">
                                <a title="Show" class="btn btn-outline-info btn-sm" onclick="view_agent('${data.id}')" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a title="Edit" class="btn btn-outline-primary btn-sm" onclick="edit_agent('${data.id}')" class="pd-setting-ed"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a title="Delete" class="btn btn-outline-danger btn-sm" onclick="deleteAlert('/admin/agent/delete/', '${data.id}')" ><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                                </div>
                                `
                    }
                }
            ]
        })
    }


    //edit records form

    let eform = $('#edit-agent-form')
    eform.submit(function(e) {
        e.preventDefault()
        $.ajax({
            url: eform.attr('action'),
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.status === 'fail') {
                    let msg = ''
                    $.each(data.error, function(a, b) {
                        msg = b
                        toast('error', msg)
                    })
                } else {
                    eform[0].reset()
                    hold_modal('edit-agent-modal', 'hide')
                    agent_list.ajax.reload()
                    toast('success', data.message)
                }
            }
        })
    })
})

function view_agent(id) {
    $.ajax({
        url: '/admin/agentid',
        type: 'post',
        data: { id: id, _token: _token },
        success: function(data) {
            if (data) {
                $.each(data, function(k, v) {
                    $('#v_' + k).html(v)
                })
            }
        }
    })
    hold_modal('view-agent-modal', 'show')
}

function edit_agent(id) {
    $.ajax({
        url: '/admin/agentid',
        type: 'post',
        data: { id: id, _token: _token },
        success: function(data) {
            if (data) {
                $.each(data, function(k, v) {
                    $('#e_' + k).val(v)
                })
            }
        }
    })
    hold_modal('edit-agent-modal', 'show')
}





/**** HOSTEL ****/

//add new hostel

$(document).ready(function() {
    let form = $('#add-hostel-form')
    form.submit(function(e) {
        e.preventDefault()
        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.status === 'fail') {
                    let msg = ''
                    $.each(data.error, function(k, v) {
                        msg = v
                        toast('error', msg)
                    })
                }

                form[0].reset()
                hostel_list.ajax.reload()
                toast('info', data.msgs)
                hold_modal('add-hostel-modal', 'hide')
            }
        })
    })


    //fetching data from DB

    let dt_hostel_lists = $('.hostel-configuration')

    let hostel_list

    if (dt_hostel_lists.length) {
        hostel_list = dt_hostel_lists.DataTable({
            ajax: '/admin/hostels',
            processing: true,
            order: ['0', 'asc'],
            columns: [
                { 'data': 'id' },
                {
                    'data': null,
                    render: function(data) {
                        return `
                            <img src="${images_path('uploads/hostels/'+data.hostel_name.toLowerCase().replace(' ', '_')+'/'+data.picture)}"  data-fancybox="gallery" alt=""
                            style="width: 60px; height: 60px; border-radius: 100px">
                            `
                    }
                },

                { 'data': 'hostel_id' },
                { 'data': 'hostel_name' },
                { 'data': 'location' },
                { 'data': 'hostel_type' },
                { 'data': 'agent' },
                {
                    'data': null,
                    render: function(data) {
                        return `
                                <div class="">
                                <a title="Show" class="btn btn-outline-info btn-sm" onclick="view_hostel('${data.id}')" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a title="Edit" class="btn btn-outline-primary btn-sm" onclick="edit_hostel('${data.id}')" class="pd-setting-ed"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a title="Delete" class="btn btn-outline-danger btn-sm" onclick="deleteAlert('/admin/hostel/delete/', '${data.id}')" ><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                                </div>
                                `
                    }
                }
            ]
        })
    }


    //edit records form

    let eform = $('#edit-hostel-form')
    eform.submit(function(e) {
        e.preventDefault()
        $.ajax({
            url: eform.attr('action'),
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.status === 'fail') {
                    let msg = ''
                    $.each(data.error, function(a, b) {
                        msg = b
                        toast('error', msg)
                    })
                } else {
                    eform[0].reset()
                    hold_modal('edit-hostel-modal', 'hide')
                    hostel_list.ajax.reload()
                    toast('success', data.message)
                }
            }
        })
    })
})

function view_hostel(id) {
    $.ajax({
        url: '/admin/hostelid',
        type: 'post',
        data: { id: id, _token: _token },
        success: function(data) {
            if (data) {
                $.each(data, function(k, v) {
                    $('#v_' + k).html(v)
                })
            }
        }
    })
    hold_modal('view-hostel-modal', 'show')
}

function edit_hostel(id) {
    $.ajax({
        url: '/admin/hostelid',
        type: 'post',
        data: { id: id, _token: _token },
        success: function(data) {
            if (data) {
                $.each(data, function(k, v) {
                    $('#e_' + k).val(v)
                })
            }
        }
    })
    hold_modal('edit-hostel-modal', 'show')
}





/**** PAYMENT ****/

//add new Payment



$(document).ready(function() {

    let form = $('#add-payment-form')
    form.submit(function(e) {
        e.preventDefault()
        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.status === 'fail') {
                    let msg = ''
                    $.each(data.error, function(k, v) {
                        msg = v
                        toast('error', msg)
                    })
                } else {
                    form[0].reset()
                    hostel_list.ajax.reload()
                    toast('info', data.message)
                    hold_modal('add-payment-modal', 'hide')
                }
            }
        })
    })





    let dt_payment_lists = $('.payment-configuration')

    let payment_list

    if (dt_payment_lists.length) {
        payment_list = dt_payment_lists.DataTable({
            ajax: '/admin/payments',
            processing: true,
            order: ['0', 'asc'],
            columns: [
                { 'data': 'id' },
                { 'data': 'stud_id' },
                { 'data': 'hostel_name' },
                { 'data': 'category' },
                { 'data': 'duration' },
                { 'data': 'amount' },
                { 'data': 'created_at' },
                { 'data': 'pay_mode' },
                {
                    'data': null,
                    render: function(data) {
                        return `
                                <div>
                                <a title="Delete" class="btn btn-outline-danger btn-sm" onclick="deleteAlert('/admin/payment/delete/', '${data.id}')" ><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                                </div>
                                `
                    }
                }
            ]
        })
    }



    //edit records form

    let eform = $('#edit-payment-form')
    eform.submit(function(e) {
        e.preventDefault()
        $.ajax({
            url: eform.attr('action'),
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.status === 'fail') {
                    let msg = ''
                    $.each(data.error, function(a, b) {
                        msg = b
                        toast('error', msg)
                    })
                } else {
                    eform[0].reset()
                    hold_modal('edit-payment-modal', 'hide')
                    payment_list.ajax.reload()
                    toast('success', data.message)
                }
            }
        })
    })
})



function view_payment(id) {
    $.ajax({
        url: '/admin/paymentid',
        type: 'post',
        data: { id: id, _token: _token },
        success: function(data) {
            if (data) {
                $.each(data, function(k, v) {
                    $('#v_' + k).html(v)
                })
            }
        }
    })
    hold_modal('view-payment-modal', 'show')
}


function edit_payment(id) {
    $.ajax({
        url: '/admin/paymentid',
        type: 'post',
        data: { id: id, _token: _token },
        success: function(data) {
            if (data) {
                $.each(data, function(k, v) {
                    $('#e_' + k).val(v)
                })
            }
        }
    })
    hold_modal('edit-payment-modal', 'show')
}




/**** OCCUPANTS ****/

//add new occupant



$(document).ready(function() {

    let form = $('#add-occupant-form')
    form.submit(function(e) {
        e.preventDefault()
        $.ajax({
            url: form.attr('action'),
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.status === 'fail') {
                    let msg = ''
                    $.each(data.error, function(k, v) {
                        msg = v
                        toast('error', msg)
                    })
                } else {
                    form[0].reset()
                    occupant_list.ajax.reload()
                    toast('info', data.message)
                    hold_modal('add-occupant-modal', 'hide')
                }
            }
        })
    })


    let dt_occupant_lists = $('.occupant-configuration')

    let occupant_list

    if (dt_occupant_lists.length) {
        occupant_list = dt_occupant_lists.DataTable({
            ajax: '/admin/occupants',
            processing: true,
            order: ['0', 'asc'],
            columns: [
                { 'data': 'id' },
                {
                    'data': null,
                    render: function(data) {
                        return `
                            <a href="${images_path('profile/user-uploads/' + data.picture)}" data-fancybox>
                                <img src="${images_path('profile/user-uploads/' + data.picture)}" alt=""
                                style="width: 60px; height: 60px; border-radius: 100px" class="img-circle m-b">
                            </a>
                            `
                    }
                },
                { 'data': 'hostel.hostel_name' },
                { 'data': 'name_stud' },
                { 'data': 'phone_stud' },
                { 'data': 'email_stud' },
                { 'data': 'due_date' },
                {
                    'data': null,
                    render: function(data) {
                        return `
                                <div>
                                <a title="Show" class="btn btn-outline-info btn-sm" onclick="view_occupant('${data.id}')" class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a title="Edit" class="btn btn-outline-primary btn-sm" onclick="edit_occupant('${data.id}')" class="pd-setting-ed"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                <a title="Delete" class="btn btn-outline-danger btn-sm" onclick="deleteAlert('/admin/occupant/delete/', '${data.id}')" ><i class="fa fa-trash-o" aria-hidden="true" ></i></a>
                                </div>
                                `
                    }
                }
            ]
        })
    }

    $.ajax({
        url: '/admin/occupants',
        type: 'get',
        dataType: 'json',
        success: function(data) {
            console.log(data)
        }
    })



    //edit records form

    let eform = $('#edit-occupant-form')
    eform.submit(function(e) {
        e.preventDefault()
        $.ajax({
            url: eform.attr('action'),
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.status === 'fail') {
                    let msg = ''
                    $.each(data.error, function(a, b) {
                        msg = b
                        toast('error', msg)
                    })
                } else {
                    eform[0].reset()
                    hold_modal('edit-occupant-modal', 'hide')
                    occupant_list.ajax.reload()
                    toast('success', data.message)
                }
            }
        })
    })
})



function view_occupant(id) {
    $.ajax({
        url: '/admin/occupantid',
        type: 'post',
        data: { id: id, _token: _token },
        success: function(data) {
            if (data) {
                $.each(data, function(k, v) {
                    $('#v_' + k).html(v)
                })
            }
        }
    })
    hold_modal('view-occupant-modal', 'show')
}


function edit_occupant(id) {
    $.ajax({
        url: '/admin/occupantid',
        type: 'post',
        data: { id: id, _token: _token },
        success: function(data) {
            if (data) {
                $.each(data, function(k, v) {
                    $('#e_' + k).val(v)
                })
            }
        }
    })
    hold_modal('edit-occupant-modal', 'show')
}




function hold_modal(id, action) {
    $('#' + id).modal(action)
}

function refresh() {
    setTimeout(() => window.location.reload(true), 5000);
}
