<h2><?= $title?> </h2>
<?php foreach($posts as $post) : ?>

    <h3><?php echo $post['title']; ?></h3>
    <?php echo $post['body']; ?>
    <br><br>
    <p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>"> More Details</a></p>
    <small class="post_date">Patient Records Updated on: <?php echo $post['created_at']; ?> </small><br><br>
    

<?php endforeach; ?>