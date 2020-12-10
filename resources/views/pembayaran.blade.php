<html>
  <head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css"/>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="https://www.freelogodesign.org/file/app/client/thumb/19b5b75e-f509-4efe-9714-83cb17f089c9_200x200.png?1606298625886" width="50px"></a>
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
    <center>
@if(isset($pesan))
{{ $pesan }}
@endif

@if(!isset($pesan))
<table cellpadding="15%">
  <tr>
    <th style="text-align: center">Bank</th>
    <th>Rekening</th>
  </tr>

  <tr>
    <td><img src="https://1.bp.blogspot.com/-LOG22fyGGOo/WransnAeOlI/AAAAAAAABiA/RnFHp0YAHuIcmzMDZNnHFFz-M2sqUEPFQCKgBGAs/s1600/logo-bca.jpg" width="100px" style="text-align: center"></td>
    <td>7830053951</td>
  </tr>

  <tr>
    <td><img src="https://1.bp.blogspot.com/-r636Aob_z_A/XicFI0zvA-I/AAAAAAAABe8/dIi1moSFZpMO7TFwhXAIEeaIpQhMCK9yACLcBGAsYHQ/w1200-h630-p-k-no-nu/Logo%2Bbank%2BBNI.png" width="90px" style="text-align: center"></td>
    <td>1234567890</td>
  </tr>

  <tr>
    <td><img src="https://i.pinimg.com/originals/f8/0a/ac/f80aac3c5591e45f0d1da6b07a801b7c.png" width="100px" style="text-align: center"></td>
    <td>123456789012345</td>
  </tr>

  <tr>
    <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Logo_ovo_purple.svg/1024px-Logo_ovo_purple.svg.png" width="100px" style="text-align: center"></td>
    <td>085315823366</td>
  </tr>
</table>

<form method="post" action="/">
{{ csrf_field() }}
<?php
  echo "<input type='hidden' name='jml' value='".$jml."'>";
  echo "<input type='hidden' name='idStok' value='".$idStok."'>";
  echo "<input type='hidden' name='idKereta' value='".$idKereta."'>";
  echo "<input type='hidden' name='idKelas' value='".$idKelas."'>";
  echo "<input type='hidden' name='kelas' value='".$kelas."'>";
  echo "<input type='hidden' name='berangkat' value='".$berangkat."'>";
  echo "<input type='hidden' name='tiba' value='".$tiba."'>";
  echo "<input type='hidden' name='namaPemesan' value='".$namaPemesan."'>";
  echo "<input type='hidden' name='emailPemesan' value='".$emailPemesan."'>";
  echo "<input type='hidden' name='hpPemesan' value='".$hpPemesan."'>";
  echo "<input type='hidden' name='nikPemesan' value='".$nikPemesan."'>";
  echo "<input type='hidden' name='namaPenumpang' value='".$namaPenumpang."'>";
  echo "<input type='hidden' name='emailPenumpang' value='".$emailPenumpang."'>";
  echo "<input type='hidden' name='hpPenumpang' value='".$hpPenumpang."'>";
  echo "<input type='hidden' name='nikPenumpang' value='".$nikPenumpang."'>";
  echo "<input type='hidden' name='harga' value='".$harga."'>";
  echo "<input type='hidden' name='gerbong' value='".$gerbong."'>";
  echo "<input type='hidden' name='kursi' value='".$noKursi."'>";

  echo "<br><input type='submit' class='btn btn-success' value='Saya sudah membayar'>";

?>
</form></center>
@endif
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>