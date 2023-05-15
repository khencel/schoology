let selected_course_id = null;

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

function selectedCourse(course_id){
    window.location  = "/subject/index/"+course_id
}

function btnView(course_id){
    var res = $.map( course, function( val, i ) {
        if(val.id == course_id){
            return val;
        }
    });
    console.log(res);
    $('#course_name_show').val(res[0]['course_name']);
    $('#showUpdate').modal('show');
    selected_course_id = res[0]['id'];
}

function btnUpdate(){
    var course_name = $('#course_name_show').val();
    var redirect = "/course/index/";
    var url = "/course/update/"+selected_course_id
    data = {
        course_name:course_name
    }
    // params 1 route url
    // params 2 request data
    // params 3 redirect page
    this.updateData(url,data,redirect);
}

function btnDelete(course_id){
    var redirect = "/course/index/";
    var url = "/course/delete/"+course_id
    this.deleteData(url,redirect);
}