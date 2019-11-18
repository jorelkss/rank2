<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="View/maisumamano/assets/css/styles.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="View/js/style.js"></script>
</head>

<body>
    <div class="login-clean">
        <form method="post" action="Controller/registerUser.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="View/images/isss.gif" height="120" style="-moz-transform: scaleX(-1); -o-transform: scaleX(-1); -webkit-transform: scaleX(-1); transform: scaleX(-1);"></img></div>
            <div class="form-group"><span class="badge badge-warning" id="nameInp"></span></div>
            <div class="form-group"><input class="form-control" onkeyup="verification(this.value)" type="text" name="nome" placeholder="Nome" required></div>
            <div class="form-group"><input class="form-control" onkeyup="verification(this.value, 'email')" type="email" name="email" placeholder="Email" required></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
            <br>
            <div class="form-group" id="butao"><!----></div><a class="forgot" href="index.php">Já tem conta?</a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>