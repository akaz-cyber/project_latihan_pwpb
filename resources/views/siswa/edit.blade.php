<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  <h1>Edit data siswa</h1>
@if(session('success'))
<div class="alert alert-success" role="alert">
{{session('success')}}
</div>
@endif
<div class="row">
<div class="col-lg-12">
<form action = "/siswa/{{$siswa->id}}/update" method ="POST">
    {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">nama</label>
    <input name = "nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    placeholder="Nama" value="{{$siswa->nama}}">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">jenis kelamin</label>
    <select name = "jenis_kelamin"  class="form-control" id="exampleFormControlSelect1">
      <option value="Laki-laki"@if($siswa->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
      <option Value="Perempuan"@if($siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
    </select >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">alamat</label>
    <textarea name = "alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">agama</label>
    <input name = "agama" type="text" class="form-control" id="exampleInputEmail1"
     placeholder="agama"value="{{$siswa->agama}}" aria-describedby="emailHelp">
  </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">UPDATE</button>  
</form>
</div>
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>