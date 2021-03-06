<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Form edit Matakuliah</h2>
<?php echo form_open("matakuliah/save")?>
<div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukkan nama matakuliah" type="text"  value="<?php echo $obj_matakuliah->nama?>" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="sks" class="col-4 col-form-label">Sks</label> 
    <div class="col-8">
      <input id="sks" name="sks" placeholder="Masukkan sks" type="text" value="<?php echo $obj_matakuliah->sks?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-code"></i>
          </div>
        </div> 
        <input id="kode" name="kode" placeholder="Masukkan kode" type="text" value="<?php echo $obj_matakuliah->kode?>" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>
</div>