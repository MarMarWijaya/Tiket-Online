<html>
    <head>
        <title>Edit Kereta</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
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
                <li class="nav-item">
                    <a class="nav-link" href="/homeAdmin">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">Stasiun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/stok">Stok</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gerbong">Gerbong</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/kereta">Kereta</a>
                </li>
                </ul>
                &ensp;<a href="{{ url('/logout')}}" style="color:white; background-color:red; border-radius:10px"><b>&ensp;LOGOUT&ensp;</b></a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="boxed" style="margin-top:10%; background-color:#0b56a7; border-radius: 15px; margin-left:22%; margin-right: 22%">
        <h3 style="text-align:center; color: white;"><br>Edit Data Kereta</h3><br>
        <form method='post' action='/ubahKereta' style="margin-left: 5%; margin-right: 5%">
            {{ csrf_field() }}
            @foreach($hasil as $h)
                <div class="form-group">
                    <label style="color: white; font-size: 19;">ID Kereta</label>
                    <input type='number' min="1" class="form-control" name='idKereta' value='{{ $h->idKereta }}' required>
                </div>
                <div class="form-group">
                    <label style="color: white; font-size: 19;">Nama Kereta</label>
                    <input type='text' class="form-control" name='nama_kereta' value='{{ $h->nama_kereta }}' required>
                </div>
                <div class="form-group">
                    <label style="color: white; font-size: 19;">Stasiun Keberangkatan</label>
                    <input type='text' class="form-control" name='awal' value='{{ $h->awal }}' required>
                </div>
                <div class="form-group">
                    <label style="color: white; font-size: 19;">Stasiun Kedatangan</label>
                    <input type='text' class="form-control" name='tujuan' value='{{ $h->tujuan }}' required>
                </div>
                <div class="form-group">
                    <label style="color: white; font-size: 19;">Jam Keberangkatan</label>
                    <input type='text' class="form-control" name='jam_berangkat' value='{{ $h->jam_berangkat }}' required>
                </div>
                <div class="form-group">
                    <label style="color: white; font-size: 19;">Jam Kedatangan</label>
                    <input type='text' class="form-control" name='jam_sampai' value='{{ $h->jam_sampai }}' required>
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