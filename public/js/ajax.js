$(document).ready(function () {
    $('#setHash').on('keyup', function () {
        $('#searchUI').show();
        var keyword = $(this).val();
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: webUrl + "/searchHash",
            data: {keyword: keyword},
            dataType: 'json',
            context: this,
            success: function (data)
            {
                if (data.status == 'success') {
                    $('#searchUI').css('height', '100px');
                    $('#searchUI').html('');
                    $.each(data.data, function (index, value) {
                        $('#searchUI').append('<li>#' + value + '</li>');
                    });
                } else {
                    $('#searchUI').css('height', '0px');
                    $('#searchUI').hide('');
                    $('#searchUI').html('');
                }

            }
        });

    });

    $(document).on('click', '#searchUI li', function () {
        $('#setHash').val($(this).html().replace(/#( )?/g, ''));
        $('#searchUI').hide('');
        $('#searchUI').html('');
    });
    $("#setHash").focusout(function () {
        $('#searchUI').hide('');
        $('#searchUI').html('');
    });
});
