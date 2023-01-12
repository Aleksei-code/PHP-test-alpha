<!doctype html>

<html lang="en">
<head>
    <?php require_once 'blocks/head.php'; ?>
    <title>Registration form</title>
</head>
<body>
<?php require_once 'blocks/header.php'; ?>

<h1> Registration form</h1>
<div class="m-3 ">
    <div class="row">
        <div class="mb-3 col-md-5 col-sm-6">
            <form id="registration" name="login" >
                <div class="col-auto m-2">
                    <label for="name" class="form-label">Your name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="col-auto m-2">
                    <label for="email" class="form-label">Your email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="col-auto m-2">
                    <label for="username" class="form-label">Your username</label>
                    <input type="text" class="form-control" id="username" name="username"
                           placeholder="Enter your login">
                </div>
                <div class="col-auto m-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password"
                           placeholder="Enter your password">
                    <div class="alert alert-danger mt-3" id="errorBlock">Wrong</div>
                </div>

                <div class="col-auto mt-4 m-2">
                    <button type="button" id="regUser" class="btn btn-primary w-100">Submit</button>
                </div>
            </form>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6">
            <h3> Some important info:</h3>
            <span>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad architecto consequatur cupiditate distinctio doloribus, eveniet facilis fugit ipsum itaque nemo, nobis officiis porro quasi quisquam temporibus veritatis vero voluptate. Aspernatur autem consequatur culpa dolor eos, eveniet, hic illum ipsa, laborum modi nam nihil nostrum quasi sapiente sed ullam ut vel.
                </span>
        </div>


    </div>
    <?php require_once 'blocks/footer.php' ?>
</div>


</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#regUser').click( function() {
        const name = $('#name').val();
        const email = $('#email').val();
        const username = $('#username').val();
        const password = $('#password').val();

        $.ajax({
            url: 'ajax/reg.php',
            type: 'POST',
            cache: false,
            data: {'name': name, 'email': email, 'username': username, 'password': password},
            dataType: 'html',
            success: function (data) {
                if (data === "DONE") {
                    $('#regUser').text('Все готово');
                    $('#errorBlock').hide();
                    $('#regUser').removeClass();
                    $('#regUser').addClass('btn btn-success w-100')
                } else {
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                    $('#regUser').removeClass();
                    $('#regUser').addClass('btn btn-danger w-100')
                }
            }
        })
    })
    //++*
    // $('reg_user').click(function (){
    //     console.log('click')
    // alert("ee");


</script>
<<!--script>


    async function FormLogin(event) {
        event.preventDefault();
        console.log(document.forms);
        let login = document.forms.registration;
        let formData = new FormData(login);

        await fetch("/reg.php", {
                method: 'POST',
                body: formData
            }
        )

    }

    //const formLogin = document.querySelector("#form");
    /*formLogin.addEventListener("submit", function (event) {
        console.log("YOU CLICKED IT");
        event.preventDefault();
        console.log(event)
    });*/


</script>
-->