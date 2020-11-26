<html>
<head>
    <title>E-tiket</title>
</head>
<body>

<form method='POST' action='/'>
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
    </form>
    @if(isset($kereta))
    @foreach($kereta as $k)
        <p>{{ $k->nama_kereta }}</p>
    @endforeach
    @endif
<body>
</html>