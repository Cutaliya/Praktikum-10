<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Form Login</h2>
<?php echo form_open("login/auth")?>
  <div class="form-group row">
    <label for="Username" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="username" name="username" placeholder="Masukkan Username Anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="password" name="password" placeholder="Masukkan Password Anda" type="password" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close()?>
