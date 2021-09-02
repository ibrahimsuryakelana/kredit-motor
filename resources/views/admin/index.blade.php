<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
       
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/motor">Data Motor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pembeli">Data Pembeli</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/admin">Data Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kredit">Data kredit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cicilan">Data Cicilan</a>
      </li>
  </div>
</nav>

      <div class="container">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            @endif
        <div class="row">
          <div class="col-6">
            <h1>Data Admin</h1>
          </div>
          <div class="col-6">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah data Admin
            </button>
          
          </div>
      
      <TABLE class="table table-hover">
        <tr>
            <th>id_admin</th>
            <TH>nama_admin</TH>
            <TH>jk</TH>
            <th>alamat</th>
            <th>telp</th>
            <th>AKSI</th>
        </tr>
         @foreach($data_admin as $admin)
        <tr>
            <td>{{ $admin->id_admin}}</td>
            <td>{{ $admin->nama_admin}}</td>
            <td>{{ $admin->jk}}</td>
            <td>{{ $admin->alamat}}</td>
            <td>{{ $admin->telp}}</td>
            <td>
            <a href="/admin/{{$admin->id_admin}}/edit" class="btn btn-warning btn-sm">Edit</a>
            <a href="/admin/{{$admin->id_admin}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('Apakah anda yakin?')">Delete</a>
            
            </td>
        </tr>
        @endforeach
      </table>

        </div>
      </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="/admin/create" method="POST">
            {{csrf_field()}}
            

            <div class="form-group">
              <label for="exampleInputEmail1">nama_admin</label>
              <input name="nama_admin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_admin"  placeholder="nama_admin">
            </div>

             <div class="form-group">
              <label for="exampleInputEmail1">jk</label>
              <input name="jk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="jk"  placeholder="jk">
            </div>

             <div class="form-group">
              <label for="exampleInputEmail1">alamat</label>
              <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="alamat" placeholder="alamat" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">telp</label>
              <input name="telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="telp" placeholder="telp" >
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
