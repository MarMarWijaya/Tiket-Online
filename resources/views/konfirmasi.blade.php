<?php session_start() ?>
<html>
<head>
    <title>Tiket Jangkrik Balap</title>
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
                    <a class="nav-link" href="tentang">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="/checkout">
        {{ csrf_field() }}
            <h1 style="margin-top:3%; margin-left:-1.5%">Pemesanan</h1>
                <div class="row" style="margin-top: 0%">
                    <div class="column-content-left col-md-7">
                            <h4 style="margin-top: 3%; color: #0b56a7; margin-left:2%"><b>Data Pemesan</b></h4>
                        <div class="input" style="margin-left:2%">

                        <!-- get data pemesan dari user akun -->
                            <?php if(isset($_SESSION['user'])){echo "<h1>login gais</h1>";}?>
                            <table border='0' width="97%">
                                <tr style="color: #0b56a7"> <td><h6><b>Nama Pemesan</b> <br style="margin-bottom: 1%"> <input type="text" name='namaPemesan' class="form-control" id="exampleInputPassword1" placeholder="Nama sesuai KTP/SIM/Paspor" required></h6></td>
                                </tr>
                                <tr style="color: #0b56a7">
                                    <td><h6 style="margin-top:2%"><b>Email</b> <br style="margin-bottom: 1%"> <input type="text" name='emailPemesan' class="form-control" id="exampleInputPassword1" placeholder="Contoh@gmail.com" required></h6></td>
                                </tr>
                                <tr style="color: #0b56a7">
                                    <td><h6 style="margin-top:2%"><b>No. HP Pemesan</b> <br style="margin-bottom: 1%"> <input type="text" name='hpPemesan' class="form-control" id="exampleInputPassword1" placeholder="08xxx" required></h6></td>
                                </tr>
                                <tr style="color: #0b56a7">
                                    <td><h6 style="margin-top:2%"><b>No. NIK Pemesan</b> <br style="margin-bottom: 1%"> <input type="text" name='nikPemesan' class="form-control" id="exampleInputPassword1" placeholder="NIK sesuai KTP/SIM" required></h6><br style="margin-bottom: 1%"></td>
                                </tr>
                            </table>
                        </div>
                    </div>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;

                @foreach($pilihan as $p)
                    <div class="column-content-right col-md-4" style="margin-bottom:10%">
                        <div class="boxed">
                            <h3 style="text-align:center; color:white"><br><span class="font-weight-bold">
                            <?php
                                $total = 0;
                                for ($i=1; $i <= $dewasa; $i++) { 
                                    $total += $p->Harga;
                                }
                                echo "Rp. ".number_format($total,0,',','.');
                                echo "<input type='hidden' name='harga' value='".$total."'>";
                            ?>
                            
                            </span></h3><br>
                        </div>
                            <table border='0' width="97%" style="margin-top: 5%; margin-left:3%">
                                <tr>
                                    <td><h3><b>{{ $p->nama_kereta }}</b></h3></td>
                                </tr>
                                <tr>
                                    @if(!is_null($anak))
                                    <td><h6><b>{{ $p->Kelas }}</b> <br> {{ $dewasa }} Dewasa, {{ $anak }} Anak</h6></td>
                                    @endif
                                    @if(is_null($anak))
                                    <td><h6><b>{{ $p->Kelas }}</b> <br> {{ $dewasa }} Dewasa</h6></td>
                                    @endif
                                </tr>
                            </table>
                            <table border='0' width='97%' style="margin-top: 5%; margin-left:3%">
                                <tr>
                                    <td><h6><b>{{ $p->awal }}</b> <br> {{ $p->jam_berangkat }} <br> {{ $p->tgl }}</h6><br></td>
                                    <td style="color:red"><h5><b>></b></h5><br></td>
                                    <td><h6><b>&nbsp;&nbsp;&nbsp;&nbsp;{{ $p->tujuan }}</b> <br> &nbsp;&nbsp;&nbsp;&nbsp;{{ $p->jam_sampai }} <br> &nbsp;&nbsp;&nbsp;&nbsp;{{ $p->tgl_tujuan }}</h6><br></td>
                                </tr>
                            </table>
                    </div>
                    <input type='hidden' name='idKereta' value='{{ $p->idKereta }}'>
                    <input type='hidden' name='idStok' value='{{ $p->idStok }}'>
                    <?php
                        echo "<input type='hidden' name='tiba' value='".$p->awal.", ".$p->tgl.", ".$p->jam_berangkat."'>
                        <input type='hidden' name='tujuan' value='".$p->tujuan.", ".$p->tgl_tujuan.", ".$p->jam_sampai."'>";
                    ?>
                @endforeach
                <?php
                for ($i=0; $i < $dewasa; $i++) { 
                    echo "<div class='column-content-left col-md-7' style='margin-top:3%'>";
                            echo "<h4 style='margin-top: 3%; color: #0b56a7; margin-left:2%'><b>Data Penumpang ".($i+1)."</b></h4>";
                        echo "<div class='input' style='margin-left:2%'>"; 
                            echo "<table border='0' width='97%'>";
                                echo "<tr style='color: #0b56a7'>";
                                    echo "<td><h6><b>Nama Pemesan</b> <br style='margin-bottom: 1%'> <input type='text' name='namaPenumpang[]' class='form-control' id='exampleInputPassword1' placeholder='Nama sesuai KTP/SIM/Paspor' required></h6></td>";
                                    echo "<td>&ensp;</td>";
                                    echo "<td><h6><b>Email</b> <br style='margin-bottom: 1%'> <input type='text' name='emailPenumpang[]' class='form-control' id='exampleInputPassword1' placeholder='Contoh@gmail.com' required></h6></td>";
                                echo "</tr>";
                                echo "<tr style='color: #0b56a7'>";
                                    echo "<td><h6 style='margin-top:2%'><b>No. HP Pemesan</b> <br style='margin-bottom: 1%'> <input type='text' name='hpPenumpang[]' class='form-control' id='exampleInputPassword1' placeholder='08xxx' required></h6><br></td>";
                                    echo "<td>&ensp;</td>";
                                    echo "<td><h6 style='margin-top:2%'><b>No. NIK Pemesan</b> <br style='margin-bottom: 1%'> <input type='text' name='nikPenumpang[]' class='form-control' id='exampleInputPassword1' placeholder='NIK sesuai KTP/SIM' required></h6><br></td>";
                                echo "</tr>";
                            echo "</table>";
                        echo "</div>";
                    echo "</div>";
                }
                ?>
                </div>
                
                <input type='submit' value='Pesan' style="margin-top:3%; margin-left:50%; background-color:#ffbb33; border-radius:15px; width:15%; height:6%; font-size:140%;">
        </form>
    </div>
    <br><br>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<body>
</html>