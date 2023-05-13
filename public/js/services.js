function updateData(url,data,redirect_page){
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to update this data?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Update it!',
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
                url:url,
                type:'PUT',
                data:data,
            }).done(function(res){
                console.log(res);
                window.setInterval(function(){
                    window.location = redirect_page
                },2000)
                
                Toast.fire({
                    icon: 'success',
                    title: 'Update successfully'
                })
            })
        }
    })
}


