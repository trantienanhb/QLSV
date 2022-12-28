<html>
<head>
    <title>login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        body
        {
            margin:0;
            padding:0;
            background-color:#f1f1f1;
        }
        .box
        {
            margin-top: 200px;
            width:700px;
            padding:20px;
            background-color:#fff;
        }
    </style>
</head>
<body>
<div class="container box">
    <form action="/QLSV/admin/index.php?Controller=login&action=loginuser" method="POST" id="frmLogin">
        <h3 align="center">PHP Login </h3><br />
        <div class="text-danger">  </div>
        <div class="form-group">
            <label for="">Username</label>
            <input name="username" required type="text" value="<?php if (isset($_COOKIE["username"])){echo $_COOKIE["username"];}?>" placeholder="Username" class="form-control" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" required type="password" value="<?php if (isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>" placeholder="Password" class="form-control" />
        </div>
        <div class="form-group">
            <input type="checkbox" name="remember" <?php if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])){ echo "checked";}?> />
            <label for="remember-me">Remember me</label>
        </div>
        <div class="form-group">
            <div><input  type="submit" name="login" value="Login" class="btn btn-success"></span></div>
        </div>
    </form>
    
    <br />
    <span>

</span>
</div>
</body>
</html>
