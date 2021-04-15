@extends('layout.master')
<div class="container">
@if(session('success'))
<div class="alert alert-danger" role="alert">
{{session('success')}}
</div>
@endif
<div class="row">
@section('konten')
 <div class="col-6">
      <h1>Data siswa</h1>
 </div>
 <div class="col-6 float-right">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
tambah data
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
    <form action = "/siswa/create" method ="POST">
    {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">nama</label>
    <input name = "nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">jenis kelamin</label>
    <select name = "jenis_kelamin"  class="form-control" id="exampleFormControlSelect1">
      <option value="Laki-laki">Laki-laki</option>
      <option Value="Perempuan">Perempuan</option>
    </select >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">alamat</label>
    <textarea name = "alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="alamat"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">agama</label>
    <input name = "agama" type="text" class="form-control" id="exampleInputEmail1" placeholder="agama" aria-describedby="emailHelp">
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
 </div>
<table class="table table-striped table-hover">
<thead>
    <tr>
    <th scope="col"></th>
    <th scope="col">nama </th>
    <th scope="col">jenis kelamin</th>
    <th scope="col">alamat</th>
    <th scope="col">agama</th>
    <th scope="col">action</th>
    
    
    </tr>
</thead>
@foreach($data_siswa as $siswa)
<tbody>
    <tr>
    <th scope="row"></th>
    <td>{{$siswa->nama}}</td>
    <td>{{$siswa->jenis_kelamin}}</td>
    <td>{{$siswa->alamat}}</td>
    <td>{{$siswa->agama}}</td>
    <td><a href="/siswa/{{$siswa->id }}/edit" class= "btn btn-warning btn-sm">Edit</a></td>
    <td> 
     <a href="/siswa/{{$siswa-> id }}/delete"class="btn btn-danger btn-sm">DELETE</a>
    </td>
    <td>
    </td>
     </tr>
</tbody>
@endforeach
</table>
</div>
</div>
@endsection