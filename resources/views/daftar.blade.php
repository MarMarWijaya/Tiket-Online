<!DOCTYPE html> 
<html>
    <head>
        <title>Dafar Akun User Baru</title>
        <style>
  
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
        <div class="row">
        <div class="col-6 col-md-4">
                <img src="https://image.freepik.com/free-vector/registration-form-template-with-flat-design_23-2147976703.jpg" class="bg">

            </div>
        <div class="col-md-8">
        <br>
        <center><h1 style="margin-left: 25%">Registrasi</h1><br>
        <table cellpadding="5%" style="margin-left: 25%">
        <form method='POST' actoin=''>
        {{ csrf_field() }}
            <tr>
                <td> <label for='nama'>Nama</label></td>
                <td> <input class="form-control ml-30" name='nama' id='nama' placeholder='nama lengkap sesuai ktp' required> </td>
                <td></td>
            </tr>
            

            <tr>
                <td> <label for='email'>Email</label></td>
                <td> <input class="form-control ml-30" type='email' name='email' id='email' placeholder='contoh@domain.com' required> </td>
                <td></td>
            </tr>

            <tr>
                <td> <label for='pass'>Password</label></td>
                <td> <input class="form-control ml-30" type='password' name='password' id='pass' placeholder='password'> </td>
                <td> <input class="form-control ml-30" type='password' name='password2' placeholder='ulangi password' required> </td>
            </tr>

            <tr>
                <td> <label for='hp'>No HP</label></td>
                <td> <input class="form-control ml-30" name='hp' id='hp' placeholder='08xxx' required> </td>
                <td></td>
            </tr>
           
            <tr>
                <td> <label for='nik'>NIK</label></td>
                <td> <input class="form-control ml-30" name='nik' id='nik'placeholder='NIK sesuai ktp' required> </td>
                <td></td>
            </tr>
            <tr>
            <td></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center"> <input class="btn btn-success" type='submit' value='Daftar'> </td>
            </tr>
            <tr>
            <td colspan="3" style="text-align: center"> <a class="btn btn-danger" href='/loginUser'>Cancel</a> </td>
            </tr>
        </form>
        </table>
        </center>
        </div>
        </div>
    </body>
</html>