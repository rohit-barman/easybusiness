

$("form[id='addTransaction']").validate({

    rules: {
        "perticuler[]": {
            required: true,
        },
        "price[]": {
            required: true,
        },
        "quantity[]": {
            required: true,
        },
        "amount[]": {
            required: true,
        }
       

    },
    submitHandler: function (form) {
        form.submit();
    }
});

