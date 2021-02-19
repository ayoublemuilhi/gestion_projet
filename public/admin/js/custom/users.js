$(document).ready(function () {

    function validateEmail(){
        var email_user = $("#email_user").val();
        var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        if(reg.test(email_user)){
            return true;
        }else{
            return false;
        }

    }
    $('#email_user').on('keyup',function () {

        var email_user = $(this).val();

        if(email_user.length < 1){
            $('#chkCurrentEmail').html("");
            return false;
        }
        if(validateEmail()){
            $.ajax({
                url:'/admin_/users/check-current-email',
                type:'post',
                data:{email_user:email_user},
                success:function (resp) {
                    if(resp == true){
                        $('#chkCurrentEmail').html("<span style='color: green;font-size:80%;color:#28a745'>Email  valable. </span>");
                    }else{
                        $('#chkCurrentEmail').html("<span style='color: red;font-size:80%;color:#dc3545'>Email exist déja.  </span>");
                    }
                },
                error:function () {
                    alert("Something was wrong");
                }
            });
        }else{
            $('#chkCurrentEmail').html("<span style='color: red;font-size:80%;color:#dc3545'>Ne semble pas étre une addresse e-mail valide. </span>");
        }


    });


    $('.confirm_delete').on('click',function () {
        var record_id = $(this).attr('recordid');

        Swal.fire({
            title: 'Are you sure you want to delete ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {

                Swal.fire({
                    position: 'middle',
                    icon: 'success',
                    title: 'Your record  has been deleted.',
                    showConfirmButton: false,
                    timer: 1500
                })
                window.location.href ="/admin_/users/delete/"+record_id
            }
        })
        return false;
    });

    $('.modal_confirm').on('click',function () {
        var record_id = $(this).attr('recordid');

        $.ajax({
            url:'/admin_/users/view_user_modal',
            type:'post',
            data:{record_id:record_id},
            success:function (response_data) {
                $('.data_ici').html(response_data)

            }

        });
    });
});
