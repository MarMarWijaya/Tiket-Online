<!DOCTYPE html> 
<html>
    <head>
        <title>Dafar Akun User Baru</title>
    </head>

    <body>
        <?php
            if(isset($err[0])){
                    echo $err[0]."<br>";
            }
            if(isset($err[1])){
                    echo $err[1]."<br>";
            }
        ?>
        <table>
        <form method='POST' actoin=''>
        {{ csrf_field() }}
            <tr>
                <td> <label for='nama'>Nama</label>
                <td> <input name='nama' id='nama' placeholder='nama lengkap sesuai ktp' required> </td>
            </tr>

            <tr>
                <td> <label for='email'>Email</label>
                <td> <input type='email' name='email' id='email' placeholder='contoh@domain.com' required> </td>
            </tr>

            <tr>
                <td> <label for='pass'>Password</label>
                <td> <input type='password' name='password' id='pass' placeholder='password'> </td>
                <td> <input type='password' name='password2' placeholder='ulangi password' required> </td>
            </tr>

            <tr>
                <td> <label for='hp'>No HP</label>
                <td> <input name='hp' id='hp' placeholder='08xxx' required> </td>
            </tr>
           
            <tr>
                <td> <label for='nik'>NIK</label>
                <td> <input name='nik' id='nik'placeholder='NIK sesuai ktp' required> </td>
            </tr>

            <tr>
                <td align='right'> <a href='/loginUser'>Login</a> </td>
                <td align='right'> <input type='submit' value='Daftar'> </td>
            </tr>
        </form>
        </table>
    </body>
</html>