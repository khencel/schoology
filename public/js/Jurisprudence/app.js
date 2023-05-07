const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})
var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    
$('#btnUpdate').on('click',function(){
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to edit this record!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, update it!',
        buttonsStyling: false,
        customClass: {
                confirmButton: "success-button",
                cancelButton:'danger-button'
            }
    }).then((result) => {
        if (result.isConfirmed) {
            window.setInterval(function(){
                $('#submitForm').submit();
            },2000)
                
            
              Toast.fire({
                icon: 'success',
                title: 'Signed in successfully'
              })
        }
    })
})

function deleteRecord(id){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        buttonsStyling: false,
        customClass: {
                confirmButton: "success-button",
                cancelButton:'danger-button'
            }
    }).then((result) => {
        if (result.isConfirmed) {
            
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/jurisprudence/delete/'+id,
                type:'GET',
            }).done(function(res){
                window.setInterval(function(){
                    window.location = "/jurisprudence/index/month/case?year="+new Date(res).getFullYear()+"&month="+months[new Date(res).getMonth()]
                },2000)
                
                Toast.fire({
                    icon: 'success',
                    title: 'Signed in successfully'
                })
            })
        }
    })
    
}
