<?php include_once('header.php'); ?>
<style>
body{
 
background-image:url("../doc1.jpg");
background-repeat: no-repeat;
    background-size:1500px 1000px;
    background-attachment: fixed;
}
</style>
<div class="container">
<h3><?php echo $post->id; ?></h3>
<table>

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
      <th>PREVIOUS PRESCR</th>
    </tr>
  </thead>
  <tbody>
  <tr class="table-active">
  <td><?= $post->id; ?></td>
    <td><?= $post->patient_name; ?></td>
    <td><?= $post->patient_occupation; ?></td>
    <td><?= $post->allergies; ?></td>
    <td><?= $post->previous_visit; ?></td>
    <td><?= $post->previous_diagnosis; ?></td>
    <td><?= $post->weight; ?></td>
    <td><?= $post->previous_prescription; ?></td>
    </tr>
    <tbody>
    </table>
    <?php echo anchor('doctor','Back',['class'=>'btn btn-default']);?>
</div>
