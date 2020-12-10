<html>
    <head>
    <title>Edit Stok</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/homeAdmin"><img src="https://www.freelogodesign.org/file/app/client/thumb/19b5b75e-f509-4efe-9714-83cb17f089c9_200x200.png?1606298625886" width="50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link" href="/homeAdmin">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link" href="/home">Stasiun</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/stok">Stok</a>
                </li>
                <li>
                    <a class="nav-link" href="/gerbong">Gerbong</a>
                </li>
                <li>
                    <a class="nav-link" href="/kereta">Kereta</a>
                </li>
                <li>
                    <a class="nav-link" href="/pemesanan">Pemesanan</a>
                </li>
                </ul>
                &ensp;<a href="{{ url('/logout')}}" style="color:white; background-color:red; border-radius:10px"><b>&ensp;LOGOUT&ensp;</b></a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="boxed" style="margin-top:10%; background-color:#0b56a7; border-radius: 15px; margin-left:22%; margin-right: 22%">
        <h3 style="text-align:center; color: white;"><br>Edit Data Stok</h3><br>
        <form method='post' action='/ubahStok' style="margin-left: 5%; margin-right: 5%">
            {{ csrf_field() }}
            @foreach($hasil as $h)
                <div class="form-group">
                    <label style="color: white; font-size: 19;">Tanggal Berangkat</label>
                    <input type='hidden' name='idStok' value='{{ $h->idStok }}'>
                    <input type='date' class="form-control" name='tgl' value='{{ $h->tgl }}' required>
                </div>
                <div class="form-group">
                    <label style="color: white; font-size: 19;">Tanggal Tujuan</label>
                    <input type='date' class="form-control" name='tgl_tujuan' value='{{ $h->tgl_tujuan }}' required>
                </div>
                <div class="form-group">
                    <label style="color: white; font-size: 19;">ID Kereta</label>
                    <input style="border: none; font-size:20; color:white; background-color: transparent;" class="form-control" type="text" readonly name='idKereta' value='{{ $idKeretaEdit }}'>
                </div>
                <div class="form-group">
                <input style="margin-left:0.5%; margin-top: 2%; width: 99%; height: 6%; font-size: 22; background-color: #ffbb33; border: 0" type='submit' value='Update' class="btn btn-warning" >
                </div><br style="margin-top:-2%">
            @endforeach
        </form>
        </div>  
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>