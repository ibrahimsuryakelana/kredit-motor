<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
       
      <div class="container">
      <h1>Edit Data Motor</h1>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            @endif
        <div class="row">
          <div class="col-lg-12">
          <form action="/motor/{{$motor->id_motor}}/update" method="POST">
            {{csrf_field()}}
            
             <div class="form-group">
              <label for="exampleInputEmail1">merk</label>
              <input name="merk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="merk"  placeholder="merk" value="{{$motor->merk}}" >
            </div>

             <div class="form-group">
              <label for="exampleInputEmail1">nama_motor</label>
              <input name="nama_motor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_motor" placeholder="nama_motor" value="{{$motor->nama_motor}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">tarif</label>
              <input name="tarif" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="tarif" placeholder="tarif" value="{{$motor->tarif}}">
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
 