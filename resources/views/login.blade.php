@extends('master.master')
@section('title', 'Login')
@section('content')
  <div class="container">
  <form action="{{ route('postLogin') }}" method="POST">
  @csrf
  <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="password" placeholder="Masukkan email">
      @error('email')
        <div class="text-danger small">Email harus diisi.</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password">
      @error('password')
        <div class="text-danger small">Password harus diisi.</div>
      @enderror
    </div>    
  <button type="submit" class="btn btn-primary">Login</button>
 </form>  
</div>
@endsection