<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<p>Hai, {{ $namaPemesan }}</p>
<p>Kamu baru saja membeli tiket dari layanan kami dengan data sebagai berikut :</p>
<p>Nama penumpang : {{ $namaPenumpang }}</p>
<p>NIK penumpang : {{ $nikPenumpang }}</p>
<p>Kereta : {{ $namaKereta }}</p>
<p>Keberangkatan : {{ $berangkat }}</p>
<p>Tiba : {{ $tiba }}</p>
<p>Nomor Gerbong : {{ $gerbong }}</p>
<p>Nomor Kursi : {{ $nomorKursi }}</p>
<p>Harga : Rp.{{ $harga }}</p>
<p>Screenshot data di atas untuk keamanan Anda. Terimakasih</p>
</body>
</html>