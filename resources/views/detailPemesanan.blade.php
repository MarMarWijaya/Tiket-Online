<html>
    <head>
        <title>Detail Pemesanan</title>
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
                <li>
                    <a class="nav-link" href="/homeAdmin">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link" href="/home">Stasiun</a>
                </li>
                <li>
                    <a class="nav-link" href="/stok">Stok</a>
                </li>
                <li>
                    <a class="nav-link" href="/gerbong">Gerbong</a>
                </li>
                <li>
                    <a class="nav-link" href="/kereta">Kereta</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/pemesanan">Pemesanan</a>
                </li>
                </ul>
                &ensp;<a href="{{ url('/logout')}}" style="color:white; background-color:red; border-radius:10px"><b>&ensp;LOGOUT&ensp;</b></a>
            </div>
        </div>
    </nav>
    <br><br><br><br><br>
    <div class="container">
        <form method='post' action='/fixPemesanan'>
            {{ csrf_field() }}
            @foreach($hasil as $h)
                <h3 style="text-align:center; color: black;">Data Pemesanan<br>"{{ $h->namaPemesan }}"</h3><br>
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%">
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">ID Pemesanan</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='idPemesanan' value='{{ $h->idPemesanan }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">Nama Pemesan</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='namaPemesan' value='{{ $h->namaPemesan }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">Email Pemesan</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='emailPemesan' value='{{ $h->emailPemesan }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">NO HP Pemesan</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='hpPemesan' value='{{ $h->hpPemesan }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">NIK Pemesan</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='nikPemesan' value='{{ $h->nikPemesan }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">Nama Penumpang</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='namaPenumpang' value='{{ $h->namaPenumpang }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">NIK Penumpang</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='nikPenumpang' value='{{ $h->nikPenumpang }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">NO HP Penumpang</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='hpPenumpang' value='{{ $h->hpPenumpang }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">Email Penumpang</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='emailPenumpang' value='{{ $h->emailPenumpang }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">ID Kereta</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='idKereta' value='{{ $h->idKereta }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">ID Stok</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='idStok' value='{{ $h->idStok }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">ID Kelas</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='idKelas' value='{{ $h->idKelas }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">Keberangkatan</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='berangkat' value='{{ $h->berangkat }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">Kedatangan</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='tiba' value='{{ $h->tiba }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">NO Gerbong</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='gerbong' value='{{ $h->gerbong }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">NO Kursi</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='nomorKursi' value='{{ $h->nomorKursi }}'>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>
                                <input style="border:none; background-color: transparent;" class="form-control" type='text' readonly  name='harga' value='{{ $h->harga }}'>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input style="margin-left:0.5%; margin-top: 2%; width: 99%; height: 6%; font-size: 22; background-color: #ffbb33; border: 0" type='submit' value='OK' class="btn btn-warning">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @endforeach
        </form> 
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>