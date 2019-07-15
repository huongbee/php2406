<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="text-center">User Login</h2>
                <?php if(isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </div>
                <?php endif?>
                
                <form action="xulylogin.php" method="post">
                    <div class="form-group">
                        <span class="label label-default">Username: </span>
                        <input type="text" class="form-control" placeholder="Enter username" name="username">
                    </div>
                    <div class="form-group">
                        <span class="label label-default">Password: </span>
                        <input type="text" class="form-control" placeholder="Enter password" name="password">
                    </div>
                    <div class="form-group">
                        <span>
                            <input type="checkbox" name="remember" value="1"/>
                            Remember me?
                        </span>
                    </div>
                    <button class="btn btn-primary" name="btnLogin">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>