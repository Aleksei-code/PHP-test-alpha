<!doctype html>
<html lang="en">
<head>
    <?php require_once 'blocks/head.php';?>
    <title>Auth</title>
</head>
<body>
<?php require_once 'blocks/header.php'; ?>

<h1> Auth form</h1>
<div class="m-3 ">
    <div class="row">
        <div class="mb-3 col-md-5 col-sm-6">
            <?php
            if (!$auth->isAuth()):
                ?>
                <form id="registration" name="login">
                    <div class="col-auto m-2">
                        <label for="username" class="form-label">Your username</label>
                        <input type="text" class="form-control" id="username" name="username"
                               placeholder="Enter your login">
                    </div>
                    <div class="col-auto m-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="Enter your password">
                        <div class="alert alert-danger mt-3" id="errorBlock"></div>
                    </div>

                    <div class="col-auto mt-4 m-2">
                        <button type="button" id="authUser" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>
            <?php else: ?>
                <h2>Logged as id:<?= $_SESSION['user_id'] ?></h2>
                <button class="btn btn-danger w-100 mt-3" id="exit_button">Log out</button>
            <?php
            endif;
            ?>
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
    $('#exit_button').click(function () {
        $.ajax({
            url: '../public/exit',
            type: 'POST',
            cache: false,
            data: {},
            dataType: 'html',
            success: function (data) {
                document.location.reload(true);
            }
        })
    })

        $('#authUser').click(function () {
            const username = $('#username').val();
            const password = $('#password').val();

            $.ajax({
                url: '../public/auth',
                type: 'POST',
                cache: false,
                data: {'username': username, 'password': password},
                dataType: 'html',
                success: function (data) {
                    if (data['result'] === "success") {
                        $('#authUser').text('Logged in');
                        $('#errorBlock').hide();
                        $('#regUser').removeClass();
                        $('#regUser').addClass('btn btn-success w-100');
                        // document.location.reload(true);
                    } else {
                        $('#errorBlock').show();
                        $('#errorBlock').text('Wrong login or password');
                        $('#regUser').removeClass();
                        $('#regUser').addClass('btn btn-danger w-100');
                    }
                }
            })
        })

</script>