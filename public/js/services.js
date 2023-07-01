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

function deleteData(url,redirect_page){
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
                url: url,
                type:'GET',
            }).done(function(res){
                window.setInterval(function(){
                    window.location = redirect_page
                },2000)
                
                Toast.fire({
                    icon: 'success',
                    title: 'Deleted successfully'
                })
            })
        }
    })
}

function storeData(url,data,redirect_page){
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to Create this data?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Create it!',
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
                type:'POST',
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

function storeDataForm(form_id){
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to Create this data?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Create it!',
        buttonsStyling: false,
        customClass: {
                confirmButton: "success-button",
                cancelButton:'danger-button'
            }
    }).then((result) => {
        if (result.isConfirmed) {
            Toast.fire({
                icon: 'success',
                title: 'Create successfully'
            })
            window.setInterval(function(){
                $(form_id).submit();
            },2000)
        }
    })
}

function updateDataForm(form_id){
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
            Toast.fire({
                icon: 'success',
                title: 'Update successfully'
            })
            window.setInterval(function(){
                $(form_id).submit();
            },2000)
        }
    })
}


