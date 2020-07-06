<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="item">
        <a class="example-image-link" href="<?php echo e($post->img); ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
            <img class="example-image" src="<?php echo e(public_upload_url($post->min_img)); ?>" alt=""/></a>
        <div class="content-item">

            <h3 class="title-item"><a href="/post/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
            <p class="info"><?php echo e($post->descrption); ?></p>
            <ul class="list-inline">
                <li><a href="#"><i class="fa fa-eye"></i><?php echo e($post->view); ?></a></li>
                <li style="float: right"><a href="#"><i class="fa fa-calendar"></i> <?php echo e($post->created_at); ?></a></li>
            </ul>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->startSection('paginate'); ?>
<div style="width: 100%;">
<ul class="pagination" style="display: table;text-align: center;margin: 0 auto">
    <li><a href="<?php echo e($posts->previousPageUrl()); ?>">&laquo;</a></li>
    <?php for($i = 1; $i <= $posts->total() / $posts->perPage();$i++): ?>
        <li class="<?php echo e($i == $posts->currentPage() ? 'active': ''); ?>"><a href="?page=<?php echo e($i); ?>"><?php echo e($i); ?></a></li>
    <?php endfor; ?>
    <li><a href="<?php echo e($posts->nextPageUrl()); ?>">&raquo;</a></li>
</ul>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/bughello/resources/views/index.blade.php ENDPATH**/ ?>