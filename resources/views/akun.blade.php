<html>
<head>
    <title>E-tiket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="https://www.freelogodesign.org/file/app/client/thumb/19b5b75e-f509-4efe-9714-83cb17f089c9_200x200.png?1606298625886" width="50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pesan">Pesan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentang">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontak">Kontak</a>
                </li>
                <li>
                    <a class="nav-link" href="/akun">Akun</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <?php
        echo "<h1 align='center'>AKUN</h1>";
        echo "<p>Anda login sebagai: ".$_SESSION['user']."<a href='logout'> [Logout]</a>"."</p>";
        echo "<h3>informasi akun</h3>";

        if(isset($err)){
    ?>
    <form method='POST' actoin='/editAkun'>
    <table>
    {{ csrf_field() }}
        <tr>
            <td> <label for='nama'>Nama</label>
            <td> <input name='nama' id='nama' placeholder='Nama lengkap sesuai KTP' value='<?= $akun[0]->nama ?>' required>
        </tr>

        <tr>
            <td> <label for='email'>Email</label>
            <td> <input type='email' name='email' id='email' placeholder='contoh@domain.com' value='<?= $akun[0]->email ?>' required> </td>
        </tr>

        <tr>
            <td> <label for='hp'>No HP</label>
            <td> <input name='hp' id='hp' placeholder='08xxx' value='<?= $akun[0]->hp ?>' required> </td>
        </tr>
            
        <tr>
            <td> <label for='nik'>NIK</label>
            <td> <input name='nik' id='nik'placeholder='NIK sesuai ktp' value='<?= $akun[0]->nik ?>' required> </td>
        </tr>

        <tr>
            <td> <label for='pass'>Password</label>
            <td> <input type='password' name='password' id='pass' placeholder='Password Saat ini' required> </td>
        </tr>

        <tr>
            <td align='right'> <a href='/akun'>Batal</a> </td>
            <td align='right'> <input type='submit' value='Simpan'> </td>
        </tr>            

        <?php if(isset($err)){ ?>
        <tr>
            <td colspan='2' align='right'><?= $err ?></td>
        </tr>
        <?php } ?>
    </form>
    </table>
    <?php
        }else{
    ?>
    <table border="1">
        <tr>
            <td> Nama </td>
            <td> <?= $akun[0]->nama ?> </td>
        </tr>
        <tr>
            <td> Email </td>
            <td> <?= $akun[0]->email ?> </td>
        </tr>
        <tr>
            <td> HP </td>
            <td> <?= $akun[0]->hp ?> </td>
        </tr>
        <tr>
            <td> NIK </td>
            <td> <?= $akun[0]->nik ?> </td>
        </tr>
        <tr>
            <td> <a href='/editAkun/{{ $akun[0]->email }}'>Edit Informasi Akun</a> </td>
            <td align='right'> <a href='editAkun/{{ $akun[0]->email }}'>Ubah Password</a> </td>
        </tr>
    </table>
    <?php } ?>

            

      
    <?php
    if(isset($msg)) echo $msg;
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<body>
</html>