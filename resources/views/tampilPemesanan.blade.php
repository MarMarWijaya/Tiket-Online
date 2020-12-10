<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
    </script>
<style>
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/homeAdmin"><img src="https://www.freelogodesign.org/file/app/client/thumb/19b5b75e-f509-4efe-9714-83cb17f089c9_200x200.png?1606298625886" width="50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link" href="/homeAdmin">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link" href="/home">Stasiun</a>
                </li>
                <li>
                    <a class="nav-link" href="/stok">Stok</a>
                </li>
                <li>
                    <a class="nav-link" href="/gerbong">Gerbong</a>
                </li>
                <li>
                    <a class="nav-link" href="/kereta">Kereta</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/pemesanan">Pemesanan</a>
                </li>
                </ul>
                &ensp;<a href="{{ url('/logout')}}" style="color:white; background-color:red; border-radius:10px"><b>&ensp;LOGOUT&ensp;</b></a>
            </div>
        </div>
    </nav>
    <br><br><br><br><br>
<div class='container' >
        <div class="table-responsive">
            <input id="myInput" type="text" placeholder=" Search...                 &#128269;" style="margin-left: 85%; width: 15%">
                <br><br>
                <table id="example" class="table table-striped" style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%">
                    {{ csrf_field() }}
                    <thead class="thead-dark">
                        <tr style="border: 1px solid #dddddd;">
                            <th scope="col">ID Pemesanan</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Keberangkatan</th>
                            <th scope="col">Kedatangan</th>
                            <th scope="col">Harga</th>
                            <th scope="col" colspan="2" style="text-align:center">ACTION</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach($pemesanan as $p)
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>{{ $p->idPemesanan }}</td>
                            <td>{{ $p->namaPemesan }}</td>
                            <td>{{ $p->berangkat }}</td>
                            <td>{{ $p->tiba }}</td>
                            <td>{{ $p->harga }}</td>
                            <td align="center">
                            <form action='/detailPemesanan' method='post'> 
                                {{ csrf_field() }}
                                <input type='hidden' value='{{ $p->idPemesanan }}' name='idPemesanan'>
                                <input type='submit' value='Detail' style="background-color: #ffbb33; border-radius:20px; width:65px">
                            </form>

                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom:-10%">Detail</button> -->
                                
                                <!-- Modal -->
                                <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>
                                            <div class="modal-body">
                                                untuk membangun form field pada laravel -->
                                                <!-- {{ csrf_field() }}
                                                <table border="0">
                                                    <tr>
                                                        <td>{{ $p->idPemesanan }}</td>
                                                        <td>{{ $p->namaPemesan }}</td>
                                                        <td>{{ $p->berangkat }}</td>
                                                        <td>{{ $p->tiba }}</td>
                                                        <td>{{ $p->harga }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-warning" data-dismiss="modal" value='&ensp;OK&ensp;'>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- end Modal -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>