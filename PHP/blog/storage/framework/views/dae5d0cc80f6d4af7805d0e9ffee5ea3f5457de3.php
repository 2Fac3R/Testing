<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>Title: <?php echo e($post->title); ?></p>
    <p>Message: <?php echo e($post->body); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/genr/Documents/Projects/blog/resources/views/posts/index.blade.php ENDPATH**/ ?>