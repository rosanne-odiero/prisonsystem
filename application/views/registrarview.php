<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registrar Page</title>
	 <script type="text/javascript" src="jquery331.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
</head>
<body>
 <h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('registrar/create');?>
  <div class="form-group">
    <label>Firstname</label>
    <input type="text" class="form-control" name="firstname" placeholder="Firstname">
  </div> 
  <div class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control" name="lastname" placeholder="Lastname">
  </div> 
   <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
  </div> 
  <div class="form-group">
    <label>National ID</label>
    <input type="text" class="form-control" name="nationalid" placeholder="National ID">
  </div> 
  <div class="form-group">
    <label>Charges</label>
    <textarea  id="editor1" class="form-control" name="charges" placeholder="Charges"></textarea>
  </div> 
  <div class="form-group">
    <label>Phone number</label>
    <input type="text" class="form-control" name="number" placeholder="Phone Number">
  </div> 
  <div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20">
  </div> 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php
 echo form_close();
 ?>
<a href ='<?php echo base_url()."index.php/Main/logout"?>'>Logout</a>
</body>
</html>