<html>
<head>
    <title>E-tiket Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand" href=""><img src="https://www.freelogodesign.org/file/app/client/thumb/19b5b75e-f509-4efe-9714-83cb17f089c9_200x200.png?1606298625886" width="50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">Stasiun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/stok">Stok</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gerbong">Gerbong</a>
                </li>
                <li>
                    <a class="nav-link" href="/kereta">Kereta</a>
                </li>
                </ul>
                &ensp;<a href="{{ url('/logout')}}" style="color:white; background-color:red; border-radius:10px"><b>&ensp;LOGOUT&ensp;</b></a>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
        <h1 class="display-4"><span class="font-weight-bold">Selamat Datang Admin</span></h1>
        <p></p>
            <hr class="my-4">
            <p class="lead">Selamat Bekerja, GBU &#128521;</p>
        </div>
    </div>

    <?php
    if(isset($msg)) echo $msg;
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<body>
</html>