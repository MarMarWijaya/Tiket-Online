<form method="post" action="/validasi">
{{ csrf_field() }}
<?php
  echo "<input type='hidden' name='jml' value='".$jml."'>";
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
  echo "<input type='hidden' name='gerbong' value='".$gerbong."'>";
  echo "<input type='hidden' name='kursi' value='".$noKursi."'>";

  echo "<input type='submit'>";

echo $gerbong;
  echo $noKursi;
  echo $emailPemesan;
?>
</form>