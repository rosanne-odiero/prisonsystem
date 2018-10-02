<?php include('header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <?php echo anchor("doctorhome/create", 'Create', ['class'=>'btn btn-primary']); ?> 
</div>
</div>
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
  <?php if(count($records)): ?>
      <?php foreach($records as $record){ ?>
    <tr>
     
      <td ><?php echo $record->id; ?></td>
      <td ><?php echo $record->patient_name; ?></td>
      <td ><?php echo $record->patient_occupation; ?></td>
      <td ><?php echo $record->allergies;?></td>
      <td ><?php echo $record->previous_visit; ?></td>
      <td><?php echo $record->previous_diagnosis; ?></td>
      <td ><?php echo $record->weight; ?></td>
      <td ><?php echo $record->previous_prescription; ?></td>
      <td><?php echo anchor("view_doctor/edit", 'Update', ['class'=>'btn btn-success']); ?> </td>
      <td><?php echo anchor("view_doctor/delete", 'Delete', ['class'=>'btn btn-danger']); ?> </td>
    </tr>
      <?php } ?>
      <?php else: ?>
<tr>No Records Found</tr>

<?php endif; ?>
    
    
  </tbody>
</table> 
</div>
<?php include('footer.php'); ?>
