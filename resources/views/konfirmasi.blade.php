@foreach($pilihan as $p)
<table>
    <tr>
        <td>Nama kereta</td>
        <td>:</td>
        <td>{{ $p->nama_kereta }}</td>
    </tr>
    <tr>
        <td>Awal</td>
        <td>:</td>
        <td>{{ $p->awal }} - {{ $p->tgl }}  - {{ $p->jam_berangkat }}</td>
    </tr>
    <tr>
        <td>Tujuan</td>
        <td>:</td>
        <td>{{ $p->tujuan }} - {{ $p->tgl_tujuan }}  - {{ $p->jam_sampai }}</td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>{{ $p->Kelas }}</td>
    </tr>
    <tr>
        <td>Sisa</td>
        <td>:</td>
        <td>{{ $p->sisa }}</td>
    </tr>
    @endforeach
    <tr>
        <td>Dewasa</td>
        <td>:</td>
        <td>{{ $dewasa }}</td>
    </tr>
    <tr>
        <td>Anak</td>
        <td>:</td>
        <td>{{ $anak }}</td>
    </tr>
</table>

<?php
echo "
    Data Pemesan <br>
    <form>
    Nama : <input type='text' name='namaPemesan'><br>
    Email : <input type='text' name='emailPemesan'><br>
    HP : <input type='text' name='HPPemesan'><br>
    NIK : <input type='text' name='NIKPemesan'><br><br>
";

for ($i=0; $i < $dewasa; $i++) { 
    echo "
    <br>Data Penumpang ke-".($i+1)."<br>
    NIK : <input type='text' name='nik'><br>
    Nama : <input type='text' name='nik'><br>
    HP : <input type='text' name='nik'><br>
    </form>
    ";
}
?>

