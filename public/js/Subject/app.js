
let selected_subject_id = null;
let selected_course_id = null;

$('#btnCreate').on('click',function(){
    var subject_name = $('#subject_name').val()
    var course_id = $('#course_id').val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/subject/store',
        type:'POST',
        data:{subject_name:subject_name,course_id:course_id},
    }).done(function(res){
        window.setInterval(function(){
            window.location = "/subject/index/"+course_id
        },2000)
        Toast.fire({
            icon: 'success',
            title: 'Subject has been created'
        })
    }).error(function(e){
        $('#subject_name_error').text(e.responseJSON.errors.subject_name[0]);
    })
});

function btnView(subject_id){
    var res = $.map( subject, function( val, i ) {
        if(val.id == subject_id){
            return val;
        }
    });
    $('#subject_name_show').val(res[0]['subject_name']);
    $('#showUpdate').modal('show');
    selected_subject_id = res[0]['id'];
    selected_course_id = res[0]['course_id'];
}

function btnUpdate(){
    
    var subject_name = $('#subject_name_show').val();
    var redirect = "/subject/index/"+selected_course_id
    var url = "/subject/update/"+selected_subject_id
    data = {
        subject_name:subject_name
    }
    // params 1 route url
    // params 2 request data
    // params 3 redirect page
    this.updateData(url,data,redirect);
}

function btnDelete(subject_id){
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
                url: '/subject/delete/'+subject_id,
                type:'GET',
            }).done(function(res){
                console.log(res);
                window.setInterval(function(){
                    window.location = "/subject/index/"+res
                },2000)
                
                Toast.fire({
                    icon: 'success',
                    title: 'Signed in successfully'
                })
            })
        }
    })
}