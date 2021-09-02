<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
       
      <div class="container">
      <h1>Edit Data Kredit</h1>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            @endif
        <div class="row">
          <div class="col-lg-12">
          <form action="/kredit/{{$kredit->id_kredit}}/update" method="POST">
            {{csrf_field()}}
            
             <div class="form-group">
              <label for="exampleInputEmail1">id_pembeli</label>
              <input name="id_pembeli" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="id_pembeli"  placeholder="id_pembeli" value="{{$kredit->id_pembeli}}" >
            </div>

             <div class="form-group">
              <label for="exampleInputEmail1">id_motor</label>
              <input name="id_motor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="id_motor" placeholder="id_motor" value="{{$kredit->id_motor}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">tanggal_transaksi</label>
              <input name="tanggal_transaksi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="tanggal_transaksi" placeholder="tanggal_transaksi" value="{{$kredit->tanggal_transaksi}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">tenor</label>
              <input name="tenor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="tenor" placeholder="tenor" value="{{$kredit->tenor}}">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">uang_muka</label>
              <input name="uang_muka" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="uang_muka" placeholder="uang_muka" value="{{$kredit->uang_muka}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">cicilan_pembuka</label>
              <input name="cicilan_pembuka" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="cicilan_pembuka" placeholder="cicilan_pembuka" value="{{$kredit->cicilan_pembuka}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">sisa_cicilan</label>
              <input name="sisa_cicilan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="sisa_cicilan" placeholder="sisa_cicilan" value="{{$kredit->sisa_cicilan}}">
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
 