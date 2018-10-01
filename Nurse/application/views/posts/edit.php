<h2><?= $title?> </h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update');?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <label>Patient name</label>
    <input type="text" class="form-control" name="title" placeholder="Add Patient's Name" value ="<?php echo $post['title']; ?>">
  </div>
    
    <div class="form-group">
    <label >Medical Report</label>
   <textarea   id="editor1" class="form-control" name="body" placeholder="Add Medical report (Height, Weight, Symptoms, Allergic reactions etc.)"><?php echo $post['title']; ?></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>