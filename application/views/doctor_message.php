<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('header.php');
?>

<!-- table -->
<style>
body{
 
background-image:url("../doc1.jpg");
background-repeat: no-repeat;
    background-size:1500px 1000px;
    background-attachment: fixed;
}
  </style>
<div class="container">
<h3>Patient Information</h3>
<?php if($msg= $this->session->flashdata('msg')): ?>
<?php echo $msg;?>
<?php endif; ?>
<?php echo anchor('doctor/create', 'Add Patient', ['class'=>'btn btn-primary']); ?> 
<table class="table table-hover">
  <thead>
    <tr>
	<th>ID</th>
      <th>PATIENT NAME</th>
      <th>PATIENT OCCUPATION</th>
      <th>ALLERGIES</th>
      <th>PREVIOUS VISIT</th>
      <th>PREVIOUS DIAGNOSIS</th>
      <th>WEIGHT</th>
      <th>PREVIOUS PRESCRIPTION</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($posts)): ?>
      <?php foreach($posts as $post){ ?>
    <tr class="table-active">
      
      <td ><?php echo $post->id; ?></td>
      <td ><?php echo $post->patient_name; ?></td>
      <td ><?php echo $post->patient_occupation; ?></td>
      <td ><?php echo $post->allergies;?></td>
      <td ><?php echo $post->previous_visit; ?></td>
      <td><?php echo $post->previous_diagnosis; ?></td>
      <td ><?php echo $post->weight; ?></td>
      <td ><?php echo $post->previous_prescription; ?></td>
	  <td>
	  <?php echo anchor("doctor/view/{$post->id}", 'View', ['class'=>'btn btn-primary']); ?>
	  <?php echo anchor("doctor/update/{$post->id}", 'Update', ['class'=>'btn btn-success']); ?>
	  <?php echo anchor("doctor/delete/{$post->id}", 'Delete', ['class'=>'btn btn-danger']); ?>
	  </td>
    </tr>
	<?php } ?>
      <?php else: ?>
<tr>No Records Found</tr>

<?php endif; ?>
  </tbody>
</table> 
</div>

