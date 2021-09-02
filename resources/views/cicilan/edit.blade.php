<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
       
      <div class="container">
      <h1>Edit Data cicilan</h1>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            @endif
        <div class="row">
          <div class="col-lg-12">
          <form action="/cicilan/{{$cicilan->id_cicilan}}/update" method="POST">
            {{csrf_field()}}
            
             <div class="form-group">
              <label for="exampleInputEmail1">id_kredit</label>
              <input name="id_kredit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="id_kredit"  placeholder="id_kredit" value="{{$cicilan->id_kredit}}" >
            </div>

             <div class="form-group">
              <label for="exampleInputEmail1">nama_pembeli</label>
              <input name="nama_pembeli" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_pembeli" placeholder="nama_pembeli" value="{{$cicilan->nama_pembeli}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">tanggal_bayar</label>
              <input name="tanggal_bayar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="tanggal_bayar" placeholder="tanggal_bayar" value="{{$cicilan->tanggal_bayar}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">bayar</label>
              <input name="bayar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="bayar" placeholder="bayar" value="{{$cicilan->bayar}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">total_bayar</label>
              <input name="total_bayar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="total_bayar" placeholder="total_bayar" value="{{$cicilan->total_bayar}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">sisa_cicilan</label>
              <input name="sisa_cicilan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="sisa_cicilan" placeholder="sisa_cicilan" value="{{$cicilan->sisa_cicilan}}">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">sisa_saat_ini</label>
            <input name="sisa_saat_ini" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="sisa_saat_ini" placeholder="sisa_saat_ini" value="{{$cicilan->sisa_saat_ini}}">
            </div>
            
          <button type="submit" class="btn btn-warning  ">Update</button>
           
          </form>
        </div>  
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
 