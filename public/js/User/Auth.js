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

function registerUser(){
    var name = $('#reg_name').val();
    var email = $('#reg_email').val();
    var pass = $('#reg_password').val();
    var confirm = $('#reg_confirm_password').val();

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
                url: '/auth/register-user',
                type:'POST',
                data:{ 
                        name:name,
                        email:email,
                        password:pass,
                        password_confirmation:confirm
                    },
            }).done(function(res){
                window.setInterval(function(){
                    window.location = "/"
                },2000)
                Toast.fire({
                    icon: 'success',
                    title: 'User has been created'
                })
            }).error(function(e){
                $('#errorMessageName').text(e.responseJSON.errors.name?e.responseJSON.errors.name[0]:'')
                $('#regErrorMessageEmail').text(e.responseJSON.errors.email?e.responseJSON.errors.email[0]:'')
                $('#regErrorMessagePass').text(e.responseJSON.errors.password?e.responseJSON.errors.password[0]:'')
            })
        }
    })
}

function test(){
    if('password' == $('#reg_password').attr('type')){
        $('#reg_password').prop('type', 'text');
        $( "#showPass" ).removeClass( "d-none" );
        $( "#hidePass" ).addClass( "d-none" );
   }else{
        $('#reg_password').prop('type', 'password');
        $( "#showPass" ).addClass( "d-none" );
        $( "#hidePass" ).removeClass( "d-none" );
   }
}