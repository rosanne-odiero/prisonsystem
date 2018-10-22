<h2><?php echo $post['title']; ?></h2>
<br><br>
    <small class="post_date">Patient Records Updated on: <?php echo $post['created_at']; ?> </small>
<br><br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>
<?php echo form_open('/posts/delete'.$post['id']); ?>
    <input type="submit" value="delete" class="btn btn-danger">
</form>
<a  class="btn btn-default "href="posts/edit/<?php echo $post['slug']; ?>">Edit</a>