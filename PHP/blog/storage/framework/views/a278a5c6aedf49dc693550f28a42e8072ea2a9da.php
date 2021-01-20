<form method="POST" action=" <?php echo e(route('posts.store')); ?>">
    <?php echo csrf_field(); ?>

    Title: <input type="text" name="title"> <br>
    Body:  <input type="textarea" name="body"> <br>

    <input type="submit" name="submit" value="Submit!">
</form><?php /**PATH /home/genr/Documents/Projects/blog/resources/views/posts/create.blade.php ENDPATH**/ ?>