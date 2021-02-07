@extends('master.master')
@section('title', 'Input Data')
@section('content')
	<div class="container">
	 <form action="{{ route('updateData', $siswa->id) }}" method="POST">
	  @csrf
	  <div class="form-group">
	      <label for="nama">Nama</label>
	      <input value="{{ $siswa->nama }}" type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama">
	    </div>
	    <div class="form-group">
	      <label for="telepon">Telepon</label>
	      <input value="{{ $siswa->telepon }}" type="text" name="telepon" class="form-control" id="telepon" placeholder="Masukkan nomor telpon">
	    </div>
	    <div class="form-group">
	      <label for="alamat">Alamat</label>
	      <input value="{{ $siswa->alamat }}" type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan nomor alamat">
	    </div>    
	  <button type="submit" class="btn btn-primary">Submit</button>
	 </form>  
	</div>
@endsection