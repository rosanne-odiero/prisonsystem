<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('header.php');
?>

<div class="container">
<?php echo form_open('doctor/save', ['class'=>'form-horizontal']); ?>
<style>
body{
 
background-image:url("../doc1.jpg");
background-repeat: no-repeat;
    background-size:1500px 1000px;
    background-attachment: fixed;
}
</style>
  <fieldset>
    <legend>Add Patient</legend>
    
    <div class="form-group">
      <label for="name" class="col-md-2 control-label">Patient Name*</label>
      <div class="col-md-5">
      <?php echo form_input(['name'=>'patient_name', 'placeholder'=>'Patient Name','class'=>'form-control']);?>
      </div>
       <!-- div for displaying errors -->
    <div class="col-md-5">
    <?php echo form_error('patient_name', '<div class="text-danger">', '</div>');?>
    </div>
    </div>

    <div class="form-group">
      <label for="occupation" class="col-md-2 control-label">Patient Occupation</label>
      <select class="form-control" id="occupation" name="patient_occupation">
        <option></option>
        <option>Nurse</option>
        <option>Registrar</option>
        <option>Warden</option>
        <option>Doctor</option>
        <option>Prisoner</option>
      </select>
      <!-- div for displaying errors -->
    <div class="col-md-5">
    <?php echo form_error('patient_occupation', '<div class="text-danger">', '</div>');?>
    </div>
    </div>
    <div class="form-group">
      <label for="allergies" class="col-md-2 control-label">Patient Allergies</label>
      <div class="col-md-5">
      <?php echo form_input(['name'=>'allergies', 'placeholder'=>'Patient Allergies','class'=>'form-control']);?>
      </div>
      <!-- div for displaying errors -->
    <div class="col-md-5">
    <?php echo form_error('allergies', '<div class="text-danger">', '</div>');?>
    </div>
    </div>
    <div class="form-group">
      <label for="date" class="col-md-2 control-label">Date Visited</label>

      <input type="date" class="form-control" id="date" name="previous_visit" placeholder="Date Visited">
      <!-- div for displaying errors -->
    <div class="col-md-5">
    <?php echo form_error('previous_visit', '<div class="text-danger">', '</div>');?>
    </div>
    </div>
    <div class="form-group">
      <label for="diagnosis" class="col-md-2 control-label">Patient Diagnosis</label>
      <div class="col-md-5">
      <?php echo form_input(['name'=>'previous_diagnosis', 'placeholder'=>'Patient Diagnosis','class'=>'form-control']);?>
      </div>
      <!-- div for displaying errors -->
    <div class="col-md-5">
    <?php echo form_error('previous_diagnosis', '<div class="text-danger">', '</div>');?>
    </div>
    </div>
    <div class="form-group">
      <label for="weight" class="col-md-2 control-label">Patient Weight</label>
      <div class="col-md-5">
      <?php echo form_input(['name'=>'weight', 'placeholder'=>'Patient Weight','class'=>'form-control']);?>
      </div>
      <!-- div for displaying errors -->
    <div class="col-md-5">
    <?php echo form_error('weight', '<div class="text-danger">', '</div>');?>
    </div>
    </div>
    <div class="form-group">
      <label for="prescription" class="col-md-2 control-label">Patient Prescription</label>
      <div class="col-md-5">
      <?php echo form_input(['name'=>'previous_prescription', 'placeholder'=>'Patient Prescription','class'=>'form-control']);?>
      </div>
      <!-- div for displaying errors -->
    <div class="col-md-5">
    <?php echo form_error('previous_prescription', '<div class="text-danger">', '</div>');?>
    </div>
    </div>
    
    
    
    <!-- <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
    </div> -->
    
     
      
    <div class="form-group">
    <div class="col-md-10 col-md-offset-2">
    <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-default']);?>
    <?php echo anchor('doctor','Back',['class'=>'btn btn-default']);?>
    </div>
    </div>
   
  </fieldset>
<?php echo form_close(); ?>
</div>
