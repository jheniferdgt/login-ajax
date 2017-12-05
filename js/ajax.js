

$( document ).ready(function() {
    $(document).on('click', '#btn-login', function(e) {
        console.log("ok");
        $.ajax({
            url: 'ajax.php',
            data: $("#login-form").serialize(),
            type: 'post',
            dataType: 'json',
            success: function (rs) {
                $('#msg-cnt').html(rs.message);
                if (rs.status == 'ok') {
                    alert('Exito');
                }
                else {
                    alert('Error ');
                }
            console.log('ok');
        }
    });
        e.preventDefault();
        return false;
    });

});