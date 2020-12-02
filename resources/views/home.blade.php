<html>
<head>
    <title>E-tiket</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pesan">Pesan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tentang">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak">Kontak</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    

    <div class="jumbotron">
        <div class="container">
        <h1 class="display-4"><span class="font-weight-bold">Tiket Jangkrik Balap</span></h1>
        <p></p>
            <hr class="my-4">
            <p class="lead">Ingin Liburan Bulan Madu tapi Bingung Cari Tiket? Cari di Jangkrik Balap aja &#128521;</p>
            <a class="btn btn-primary btn-lg font-weight-bold" href="/pesan" role="button">PESAN SEKARANG</a>
        </div>
    </div>

    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1557916896-b1671a7338ec?ixlib=rb-1.2.1&auto=format&fit=crop&w=966&q=80" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4"><span class="font-weight-bold">Tiket Jangkrik Balap</span></h1>
                    <p></p>
                    <hr class="my-4">
                    <p class="lead">Ingin Liburan Bulan Madu tapi Bingung Cari Tiket? Cari di Jangkrik Balap aja &#128521;</p>
                    <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">PESAN SEKARANG</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1512631911403-3e3a06d12389?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=925&q=80" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1534227749049-06c3ed80963c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->

    <!--  

    <div class="input-field-with-icon">
        <label for="email">Email Address</label>
        <i class="fas fa-train">
            <input type="text" id="email" placeholder="Email address" />
        </i>
        <label for="email">Password</label>
        <span class="icon icon-lock">
            <input type="password" id="email" placeholder="Password" />
        </span>
    </div> -->

    
    <?php
    if(isset($msg)) echo $msg;
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<body>
</html>