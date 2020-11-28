<html>
<head>
    <title>E-tiket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css"/>
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
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pesan">Pesan <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- <form method='POST' action='/'>
        {{ csrf_field() }}
        Keberangkatan<br>
        <input type="text" name="asal" list="cityname">
            <datalist id="cityname">
                @foreach($stasiun as $key) 
                    <option value="{{ $key->letak }}">
                @endforeach

            </datalist>
            <br><br>
        Kedatangan<br>
        <input type="text" name="tujuan" list="cityname">
                <datalist id="cityname">
                    <option value="Tester">
                </datalist>
                <br><br>
            Penumpang<br>
            <select name="penumpang_dewasa">  
                <option value="1" selected="yes">1 Dewasa</option>
                <option value="2">2 Dewasa</option>
                <option value="3">3 Dewasa</option>
                <option value="4">4 Dewasa</option>    
            </select>
            <br>
            <select name="penumpang_anak">
                <option value="1Infant" selected="yes">1 Infant</option>
                <option value="2Infant">2 Infant</option>
                <option value="3Infant">3 Infant</option>
                <option value="4Infant">4 Infant</option>    
            </select>
            <br><br>
            Tanggal Keberangkatan<br>
            <input type='date' name='date'>
            <br><br>
            <input type='submit' value='Pesan & Cari Kereta'>
    </form> -->
<div class="container">
    <div class="boxed">
        <form method="POST" action="/pesan">
        {{ csrf_field() }}
        <p style="margin-top: 2%">Pemesanan Tiket Kereta Api</p1>
        <hr class="my-4">
        <table border='0' width="97%">
            <tr>
                <td><p>Stasiun Awal</p></td>
                <td><p>Kedatangan</p></td>
            </tr>
            <tr>
                <td>
                    <div class="input">
                        <input type="text" name='asal' class="form-control" id="exampleInputPassword1" required list="cityname">
                            <datalist id="cityname">
                                @foreach($stasiun as $key) 
                                    <option value="{{ $key->letak }}">
                                @endforeach
                            </datalist>
                    </div>
                </td>
                <td>
                    <div class="input">
                        <input type="text" name='tujuan' class="form-control" id="exampleInputPassword1" required list="cityname">
                        
                            <datalist id="cityname">
                            @foreach($stasiun as $key) 
                                    <option value="{{ $key->letak }}">
                                @endforeach
                            </datalist>
                    </div>
                </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
        </table>


        <table border='0' width='97%'>
            <tr>
                <td><p>Tanggal Keberangkatan</p></td>
                <td><p>Dewasa</p></td>
                <td><p>Bayi 0-3 Thn</p></td>
            </tr>
            <tr>
                <td>
                    <div class="input">
                        <input type='date' name='date' required size="25">
                    </div>
                </td>
                <td>
                    <div class="input">
                    <input type="number" name="dewasa" list="dewasa" required size="25">
                            <datalist id="dewasa">
                                    <option value="1">
                                    <option value="2">
                                    <option value="3">
                                    <option value="4">
                                
                            </datalist>  
                    </div>
                </td>
                <td>
                    <div class="input">
                    <input type="number" name="anak" list="anak" size="25">
                            <datalist id="anak">
                                    <option value="1">
                                    <option value="2">
                                    <option value="3">
                                    <option value="4">
                                
                            </datalist>  
                    </div>
                </td>
            </tr>
        </table>
        <br>

        <input style="margin-left:0.5%; margin-top: 2%; width: 99%; height: 7%; font-size: 24; background-color: #ffbb33; border: 0" type='submit' value='Cari Kereta' class="btn btn-warning" >
</form>
    </div>
    </div>
<br>
<table class="table table-striped" style="text-align: center" >
    <thead style="background-color: #0b56a7; color: white">
    <tr>
        <th>Nama</th>
        <th>Keberangkatan</th>
        <th>Tujuan</th>
        <th>Sisa Kursi</th>
        <th>Action</th></tr>
</thead>    
@if(isset($kereta))
    @foreach($kereta as $k)
    
<tbody> 
    <tr>
        <form method='post' action='/konfirmasi'>
        {{ csrf_field() }}
        <input type='hidden' name="id_kereta" value='{{ $k->id }}'>
        <input type='hidden' name="id_kelas" value='{{ $k->idKelas }}'>
        <input type='hidden' name="id_stok" value='{{ $k->idStok }}'>
        <?php
            echo "<input type='hidden' name='dewasa' value='".$_POST['dewasa']."'>";
            echo "<input type='hidden' name='anak' value='".$_POST['anak']."'>";
        ?>

        <td><span style="font-weight: bold; font-size: 24">{{ $k->nama_kereta }}</span> <br> {{ $k->Kelas }}</td>
        <td><span>{{ $k->awal }}</span> <br> {{ $k->tgl }} <br> Jam : {{ $k->jam_berangkat }}</td>
        <td><span>{{ $k->tujuan }}</span> <br> {{ $k->tgl_tujuan }} <br> Jam : {{ $k->jam_sampai }}</td>
        <td>{{ $k->sisa }}</td>
        <td><input type="submit" class="btn btn-warning" value="Pesan"></td>
        </form>
</tr>
</tbody>


    @endforeach
    @endif
    </table>    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<body>
</html>