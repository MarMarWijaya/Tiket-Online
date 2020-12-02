<html>
<head></head>
<body>
<?php
    
?>



<form method="post" action="/percobaan">
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


 
    foreach ($kursi as $k) {
      $noG[$index] = $k->gerbong;
      $no[$index] = $k->nomorKursi;
      $index++;
    }
    $per = 0;
    $ind = 0;
    while($per < $_SESSION['jml']){
      $gerb = 1;
      echo "<h1>Penumpang ke-".$per."</h1>";
    for ($i=1; $i < 6; $i++) { 
      
      $kursi = 1;
      if(in_array($i, $noG)){
        echo "gerbong ke-".$i."<br>";
        
        $indexGerbongFix = array_search($i, $noG);
        $gerbongFix = $i;
        for ($j=0; $j < 5; $j++) { 
          for ($k=0; $k < 4; $k++) { 
           if(in_array($kursi, $no)){
            $indexKursiFix = array_search($kursi, $no); 
             if($indexGerbongFix == $indexKursiFix){
              
              echo "<input type='radio' disabled>";
             
            }else{
              echo "<input type='radio' name='kursiPilihan[".$ind."]' value='".$i.$kursi."'>";
              
            }
           }else{
            echo "<input type='radio' name='kursiPilihan[".$ind."]' value='".$i.$kursi."'>";
            
           }
           echo $kursi; $kursi++; 
          } echo "<br>";
        }
      }else{
        echo "gerbong ke-".$i."<br>";
        for ($j=0; $j < 5; $j++) { 
          for ($k=0; $k < 4; $k++) {
            echo "<input type='radio' name='kursiPilihan[".$ind."]' value='".$i.$kursi."'>";
            
            echo $kursi; $kursi++;
          }echo "<br>";
        }
      }
      echo "<input type='hidden' name='test[".$ind."]' value='".$gerb."'>";
      $gerb++;
    }
    $per++;
    $ind++;
  }


  
  ?>
 
<input type='submit'>
</form>

</body>
</html>