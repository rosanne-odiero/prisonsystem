 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>prisonerdetails</title>
		<link rel="icon" type="image/png" href="<?php echo base_url();?>images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/util.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

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
<div class="table-responsive">
<table class="table table-boardered">
<tr>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>National Id</th>
<th>Phone Number</th>
<th>Charges</th>
</tr>
 <?php
if($fetch_data->num_rows()>0)
{
  foreach($fetch_data->result() as $row)
  {
?>
<tr>
  <td><?php echo $row->id;?></td>
  <td><?php echo $row->firstname;?></td>
  <td><?php echo $row->lastname;?></td>
  <td><?php echo $row->email;?></td>
  <td><?php echo $row->nationalid;?></td>
  <td><?php echo $row->number;?></td>
  <td><?php echo $row->charges;?></td>
</tr>
    

<?php
}
}else{?>
<tr>
  <td colspan="3">No Data Found</td>
</tr>  
<?php
}?>
</table>
</div>
</body>
</html>
 
