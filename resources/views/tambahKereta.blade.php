<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method='post' action='/simpanKereta'>
                    <!-- untuk membangun form field pada laravel -->
                    {{ csrf_field() }}
                    <table border='0'>
                        <tr>
                            <td>ID Kereta&ensp;</td><td><input type='number' name='idKereta' required></td>
                        </tr>
                        <tr>
                            <td>Nama Kereta&ensp;</td><td><input type='text' name='nama_kereta' required></td>
                        </tr>
                        <tr>
                            <td>Stasiun Keberangkatan&ensp;</td><td><input type='text' name='awal' required></td>
                        </tr>
                        <tr>
                            <td>Stasiun Kedatangan&ensp;</td><td><input type='text' name='tujuan' required></td>
                        </tr>
                        <tr>
                            <td>Jam Keberangkatan&ensp;</td><td><input type='text' name='jam_berangkat' class="form-control js-time-picker" value="02:56" required></td>
                        </tr>
                        <tr>
                            <td>Jam Kedatangan&ensp;</td><td><input type='text' name='jam_sampai' required></td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </form>
            </div>
        </div>
        </div>
        <!-- end Modal -->
    </body>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>