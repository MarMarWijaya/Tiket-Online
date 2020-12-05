<html>
<head>
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
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="pesan">Pesan <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tentang">Tentang Kami <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak">Kontak</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
<?php
    
?>



<form method="post" action="/pembayaran">
{{ csrf_field() }}
  <?php

  echo "<input type='hidden' name='jml' value='".$_SESSION['jml']."'>";
  echo "<input type='hidden' name='idStok' value='".$idStok."'>";
  echo "<input type='hidden' name='idKereta' value='".$idKereta."'>";
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
  $index = 0;
  $no = [];


echo "<center>";
    foreach ($kursi as $k) {
      $noG[$index] = $k->gerbong;
      $no[$index] = $k->nomorKursi;
      $index++;
    }
    $per = 0;
    $ind = 0;
    while($per < $_SESSION['jml']){
      $gerb = 1;
      echo "<h1>Penumpang ke-".($per+1)."</h1>";
      
    for ($i=1; $i < 6; $i++) { 
      
      $kursi = 1;
      if(in_array($i, $noG)){
        echo "<table  cellpadding='15%'>";
        echo "<tr><td colspan='4' style='text-align: center'><h4>Gerbong ke-".$i."</h4></td><tr>";
        
        $indexGerbongFix = array_search($i, $noG);
        $gerbongFix = $i;
        for ($j=0; $j < 5; $j++) { 
          echo "<tr>";
          for ($k=0; $k < 4; $k++) { 
           if(in_array($kursi, $no)){
            $indexKursiFix = array_search($kursi, $no); 
             if($indexGerbongFix == $indexKursiFix){
              
              echo "<td><input type='radio' disabled>";
             
            }else{
              echo "<td><input type='radio' name='kursiPilihan[".$ind."]' value='".$i.$kursi."'>";
              
            }
           }else{
            echo "<td><input type='radio' name='kursiPilihan[".$ind."]' value='".$i.$kursi."'>&nbsp";
            
           }
           echo $kursi; $kursi++; 
          } echo "<br>";echo "</td><tr>";
        }echo "</table>";
      }else{
        echo "<table cellpadding='15%'>";
        echo "<tr><td colspan='4' style='text-align: center'><h4>Gerbong ke-".$i."</h4></td></tr>";
        
        for ($j=0; $j < 5; $j++) { 
          echo "<tr>";
          for ($k=0; $k < 4; $k++) {
            echo "<td><input type='radio' name='kursiPilihan[".$ind."]' value='".$i.$kursi."'>&nbsp";
            
            echo $kursi; $kursi++;
            echo "</td>";
          }
          echo "</tr>";
        }
        echo "</table>";
      }
      echo "<input type='hidden' name='test[".$ind."]' value='".$gerb."'>&nbsp";
      $gerb++;
   
    }
    $per++;
    $ind++;
  }
  ?>
 <br>
<input class="btn btn-warning" type='submit' value="Pilih">
</form>
</center>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>