<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="View/maisumamano/assets/css/styles.min.css">
</head>

<body>
    <div class="login-clean">
        <form method="post" action="Controller/login.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="View/images/isss.gif" height="120"></img></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
            <br>
            <div class="form-group"><button class="btn btn-dark btn-block" type="submit">Log In</button></div><a class="forgot" href="registerForm.php">Registre-se</a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>