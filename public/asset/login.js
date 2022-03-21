document.addEventListener('DOMContentLoaded',(c) => {

    $('button#btn-login').on('click',() => {
        const email = $('input[name=email]').val();
        const password = $('input[name=password]').val();
        const token = $('meta[name="csrf-token"]').attr('content');
        console.log(email);
        $.ajax({
            url: 'http://127.0.0.1:8000/api/login',
            mode: 'cors',
            methods: 'POST',
            type: 'POST',
            dataType: 'json',
             data:{
                email: email,
                password: password,
            },

            headers : {
                'X-CSRF-TOKEN': token,
            },
            success: (msg)=>{
                alert('Selamat Datang '+ msg.data.user.name);
                window.localStorage.setItem('token',msg.data.token);
            },
            error:(req,status,err) =>{
                console.log(req);
                alert(req.responseJSON.error[0]);
            }
        });
    });

});
