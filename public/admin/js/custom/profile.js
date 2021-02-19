$(document).ready(function(){
  //settings page check the current password
  $('#current_password').on('keyup',function () {
    var current_pwd = $(this).val();
      
    if(current_pwd.length < 1){
        $('#chkCurrentPwd').html("");
        return false;
    }
    $.ajax({
       url:'/admin_/checkPassProfile',
       type:'post',
       data:{current_pwd:current_pwd},
       success:function (resp) {
         
            if(resp == true){
                $('#chkCurrentPwd').html("<span style='color: green'>ancienne mot de passe est correct</span>");
            }else{
                $('#chkCurrentPwd').html("<span style='color: red'>ancienne mot de passe est Incorrect</span>");
            }
       },
        error:function () {
            alert("Something was wrong");
        }
    });

});

$('#confirmDivision').on('change',function(e){
    var division_id = $('#confirmDivision').val();  

    Swal.fire({
        title: 'vous voulez vraiment modifier ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, modifier!'
    }).then((result) => {
        if (result.value) {

            Swal.fire({
                position: 'middle',
                icon: 'success',
                title: 'division modifier avec succés.',
                showConfirmButton: false,
                timer: 1500
            })
            window.location.href ="/admin_/profile/updateDivisionProfile/"+division_id
        }else{
            window.location.href = "/admin_/profile";
        }
    })
    
});


});