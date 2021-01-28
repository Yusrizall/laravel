<div class="container">
 <form action="/data" method="POST">
  @csrf
  <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama">
    </div>
    <div class="form-group">
      <label for="telpon">Telpon</label>
      <input type="text" name="telepon" class="form-control" id="telpon" placeholder="Masukkan nomor telpon">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan nomor alamat">
    </div>    
  <button type="submit" class="btn btn-primary">Submit</button>
 </form>  
</div>
