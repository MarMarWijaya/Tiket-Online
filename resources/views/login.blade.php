<!DOCTYPE html>
<html>
    <head>
        <title>Login User</title>
        <style>
            .hero{
                margin-top: 10%;
                height: 100%;
                width: 60%;
                background-image: linear-gradient(rgba(255,255,255), rgba(255,255,255)), 
                    url();
                background-position: top ;
                background-size: cover;
                overflow-x: hidden;
                position: relative;
            }

            .bg{
                background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(https://c4.wallpaperflare.com/wallpaper/410/867/750/vector-forest-sunset-forest-sunset-forest-wallpaper-thumb.jpg);
                background-size: cover;
            }
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>

    <body class="bg">
        <?php
            if(isset($_SESSION['user'])){
                return redirect('/');
            }
            if(isset($err)){
                echo $err;
            }
        ?>
        <center>
        <div class="hero">
            <div class="row">
            <div class="col" style="margin-top: 5%">
                    <img  src="https://img.freepik.com/free-vector/mobile-login-concept-illustration_114360-83.jpg?size=338&ext=jpg">
                </div>
                <div class="col">
        <table cellpadding=5% style="margin-top: 20%">
        <form action='/loginUser' method="POST">
        {{ csrf_field() }}
        <tr>
            <td> <label for='email'>Email</label> </td>
            <td> <input class="form-control" type='email' name='email' id='email' required> </td>
        </tr>

        <tr>
            <td> <label for='pass'>Password</label> </td>
            <td> <input class="form-control" type='password' name='password' id='pass' required> </td>
        </tr> 

        <tr>
            <td colspan='2' style="text-align:center"> <input  type='submit' class="btn btn-primary" value='Login'> </td>
            
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td colspan='2' style="text-align:center">Belum punya akun?<br><a href='/daftar'>Daftar di sini</a></td>
            
        </tr>
        </form>
        </div>
        </div>
        </div>
        </center>
    </body>
</html>