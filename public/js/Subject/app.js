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