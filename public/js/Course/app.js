$('#btnCreate').on('click',function(){
    var course_name = $('#course_name').val()
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/course/store',
        type:'POST',
        data:{course_name:course_name},
    }).done(function(res){
        window.setInterval(function(){
            window.location = "/course/index"
        },2000)
        Toast.fire({
            icon: 'success',
            title: 'Course has been created'
        })
    }).error(function(e){
        $('#course_name_error').text(e.responseJSON.errors.course_name[0]);
    })
});