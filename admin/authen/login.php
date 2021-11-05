<?php
    session_start();

    require_once('../../utils/utility.php');
    require_once('../../database/dbhelper.php');
    require_once('process_form_login.php');

    // $user = getUserToken();
    // if($user != null){
    //     header('Location : index.php');
    //     die();
    // }
    
?>


<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-image: url(../../assets/photos/logo2.png);background-size:cover;background-repeat:no-repeat">
    <div class="container">
        <div class="panel panel-primary" style="width:480px;margin:30px auto;background-color: white;padding:10px;">
            <div class="panel-heading">
                <h2 class="text-center">Đăng Nhập</h2>
                <h5 style="color: red;" class="text-center"><?=$msg?></h5>
            </div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input required="true" type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mật Khẩu:</label>
                        <input required="true" type="password" class="form-control" name="password" id="pwd" minlength="6">
                    </div>
                    <p>
                        <a href="register.php">Đăng ký tài khoản mới</a>
                    </p>
                    <button class="btn btn-success">Đăng Nhập</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>