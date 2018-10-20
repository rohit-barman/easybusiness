

$("form[id='customer-form']").validate({

    rules: {
        c_name: {
            required: true,
        },
        c_email: {
            required: true,
            email: true,

        },
        c_mobile_number: {
            required: true,
            number: true,
            rangelength: [10, 10]
        },
        c_alternate_number: {
            number: true,
            rangelength: [10, 10]
        },
        c_adhar_number: {
            required: true,
            number: true,
            rangelength: [12, 12]
        },
        c_address: {
            required: true,
        },
        c_country: {
            required: true,
        },
        c_state: {
            required: true,
        },
        c_city: {
            required: true,
        },
        c_zip_code: {
            required: true,
            rangelength: [6, 6]
        },
        g_name: {
            
        },
        g_email: {
            email: true,
        },
        g_mobile_number: {
            number: true,
            rangelength: [10, 10]
        },
        g_alternate_number: {
            number: true,
            rangelength: [10, 10]
        },
        g_adhar_number: {
            number: true,
            rangelength: [12, 12]
        },
        g_address: {
          
        },
        g_country: {
            
        },
        g_state: {
            
        },
        g_city: {
            
        },
        g_zip_code: {
            
        },
        g_relation: {
            
        }

    },
    submitHandler: function (form) {
        form.submit();
    }
});

