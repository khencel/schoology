function login(){
    var email = $('#email').val()
    var password = $('#password').val()

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/auth/login-user',
        type:'POST',
        data:{email:email,password:password},
    }).done(function(res){
        if(res.status != "success"){
            $('#errorMessageEmail').text("")
            $('#errorMessagePass').text("")
            $('#errorMessageCred').text(res);
        }else{
            
            window.location = "/home";
        }
    }).error(function(e){
        $('#errorMessageEmail').text(e.responseJSON.errors.email?e.responseJSON.errors.email[0]:"")
        $('#errorMessagePass').text(e.responseJSON.errors.password?e.responseJSON.errors.password[0]:"")
    })
    
}