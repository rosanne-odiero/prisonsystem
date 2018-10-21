<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register Prisoner</title>
		<link rel="icon" type="image/png" href="<?php echo base_url();?>images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/util.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
<!-- <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css"> -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assests/css/style.css">
		<script src="http://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">Registrar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <!-- <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/main/registrar">Registrar Details<span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/registrar/prisonerdetails">Prisoner Details<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/registrar/registerprisoners">Register Prioners</a>
      </li>
      
    </ul>
    <li class="nav-item">
      <a href ='<?php echo base_url()."index.php/Main/logout"?>'>Logout</a>
      </li>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

			<div class="jumbotron">
			
<?php echo form_open_multipart('posts/create');?>
<h1>Register Prisoners</h1>
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
  <label>Added by</label>
  <select class="form-control selcls" name="addedby">
			<option>Registrar</option>
			<option>Supervisor</option>
		</select></div>
  <div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20">
  </div> 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php
 echo form_close();
 ?>
 </div>
		<script>
			CKEDITOR.replace('editor1');
		</script>
	</body>
</html>	
