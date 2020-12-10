<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title></title>
</head>
<body>
    <div class="container">
        <center><h1>Jangkrik Balap</h1>
        <hr>
        <p>Hai, {{ $namaPemesan }}</p>
        <p>Kamu baru saja membeli tiket dari layanan kami dengan data sebagai berikut :</p></center>
        <div class="row" style="background-color:#ebebeb;">
            <div class="col" >
                <table cellpadding="5%">
                    <tr>
                        <td>Nama penumpang</td>
                        <td>:</td>
                        <td>{{ $namaPenumpang }}</td>
                    </tr>
                    <tr>
                        <td>NIK penumpang</td>
                        <td>:</td>
                        <td>{{ $nikPenumpang }}</td>
                    </tr>
                    <tr>
                        <td>Kereta</td>
                        <td>:</td>
                        <td>{{ $namaKereta }}</td>
                    </tr>
                    <tr>
                        <td>Keberangkatan</td>
                        <td>:</td>
                        <td>{{ $berangkat }}</td>
                    </tr>
                    <tr>
                        <td>Tiba</td>
                        <td>:</td>
                        <td>{{ $tiba }}</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td>{{ $kelas }}</td>
                    </tr>
                    <tr>
                        <td>Nomor Gerbong</td>
                        <td>:</td>
                        <td>{{ $gerbong }}</td>
                    </tr>
                    <tr>
                        <td>Nomor Kursi</td>
                        <td>:</td>
                        <td>{{ $nomorKursi }}</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td>Rp.
                            <?php
                                echo number_format($harga,0,',','.');
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <img src="https://www.freelogodesign.org/file/app/client/thumb/19b5b75e-f509-4efe-9714-83cb17f089c9_200x200.png?1606298625886" width="250px" style="margin-top: 5%; margin-left: 30%;">
            </div>
          </div>
<br>
<center>
<p>Screenshot data di atas untuk keamanan Anda. </p>
<p>Terimakasih telah menggunakan layanan kami.</p>
<p>Semoga hari Anda menyenangkan.</p>
</center>
</div>
</body>
</html>