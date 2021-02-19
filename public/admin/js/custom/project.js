$(document).ready(function () {
    $('.confirm_delete_project').on('click',function () {
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
                window.location.href ="/admin_/project/delete/"+record_id
            }
        })
        return false;
    });
});
