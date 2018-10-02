<h2><?= $title?> </h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create');?>
  <div class="form-group">
    <label>Patient name</label>
    <input type="text" class="form-control" name="title" placeholder="Add Patient's Name">
  </div>
    
    <div class="form-group">
    <label >Medical Report</label>
   <textarea id="editor1" class="form-control" name="body" placeholder="Add Medical report (Height, Weight, Symptoms, Allergic reactions etc.)"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>