@extends('layouts.app')

@section('title', 'Friends')

@section('content')

<form action="/friends" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="nama"  name="nama" ria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Telpon</label>
    <input type="text" class="form-control" id="no_tlp" name="no_tlp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection