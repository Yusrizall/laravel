<div class="container">
  <form action="/data" method="POST">
  @csrf
  <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama">
      @error('nama')
        <div class="text-danger small">Nama harus diisi.</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="telpon">Telpon</label>
      <input type="text" name="telepon" class="form-control" id="telpon" placeholder="Masukkan nomor telpon">
      @error('telepon')
        <div class="text-danger small">Telepon harus diisi.</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan nomor alamat">
      @error('alamat')
        <div class="text-danger small">Alamat harus diisi.</div>
      @enderror
    </div>    
  <button type="submit" class="btn btn-primary">Submit</button>
 </form>  
</div>
