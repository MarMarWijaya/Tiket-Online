<!DOCTYPE html>
<html>
    <head>
        <title>Login User</title>
    </head>

    <body>
        <?php
            if(isset($_SESSION['user'])){
                return redirect('/');
            }
            if(isset($err)){
                echo $err;
            }
        ?>
        <table>
        <form action='/login' method="POST">
        {{ csrf_field() }}
        <tr>
            <td> <label for='email'>Email</label> </td>
            <td> <input type='email' name='email' id='email' required> </td>
        </tr>

        <tr>
            <td> <label for='pass'>Password</label> </td>
            <td> <input type='password' name='password' id='pass' required> </td>
        </tr> 

        <tr>
            <td> <input type='submit' value='Login'> </td>
            <td> <a href='daftar'>Daftar</a>
        </tr>
        </form>
    </body>
</html>