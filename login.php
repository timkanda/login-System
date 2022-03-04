<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>user Login & Registration </title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
    
</head>
<body>
<div class="container">
    <div class="login-box">
    <div class="row">
        <div class="col-md-6 login-left">
            <h2>Login here</h2>
            <form method="post" action="validation.php">
                    <input  name="user" placeholder="Username" class="form-control" required type="text"><br><br>
                    <input name="password" placeholder="password" class="form-control" required type="password"><br><br>
                    <button type="submit" class="btn btn-primary">Login</button>
            </form> 
        </div>  
        <div class="col-md-6 login-right">
            <h2>Register here</h2>
            <form method="post" action="registration.php">
            <input  name="user" placeholder="Username" class="form-control" required type="text"><br><br>
                    <input name="password" placeholder="password" class="form-control" required type="password"><br><br>
                    <button type="submit" class="btn btn-primary">Login</button>
            </form>
           
        </div> 
    </div>
    </div>
</div>
    
            

</body>
</html>