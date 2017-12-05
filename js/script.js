$( document ).ready(function() {

    $(document).on('click', '#btn-login', function(e) {
        var data = $("#login-form").serialize();
        $.ajax({
            url: 'ajax.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            success: function (rs) {
                console.log(rs);
                if (rs.status == 'ok') {
                   window.location.href = "home.php";
                 }
                else {
                   alert('error');
                }
            }
        });
        e.preventDefault();
        return false;
    });



});

