<?php $__env->startSection('content'); ?>
    <center><article>
            <a class="example-image-link" href="<?php echo e($post->img); ?>" data-lightbox="example-set" data-title="<?php echo e($post->title); ?>">
	     
	<img class="example-image" src="<?php echo e(public_upload_url($post->min_img)); ?>" alt=""/></a>
            <div class="content-item">

                <h3 class="title-item"><a href="#"><?php echo e($post->title); ?></a></h3>
                <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-eye"></i><?php echo e($post->view); ?></a></li>
                    <li style="float: right"><a href="#"><i class="fa fa-calendar"></i> <?php echo e($post->created_at); ?></a></li>
                </ul>


                <?php if( $post->type == \App\Model\Post::TYPE_IMG): ?>
                    <?php $__currentLoopData = json_decode($post->content); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="info">
                    <a class="example-image-link" href="<?php echo e(public_upload_url($img)); ?>" data-lightbox="example-set" data-title="让我康康">
                    <img class="example-image" src="<?php echo e(public_upload_url($img)); ?>" alt=""/>
                    </a>
                </p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div class="bottom-item">
<!--
                <a href="#" class="btn btn-share share"><i class="fa fa-share-alt"></i> Share</a>
-->
                <?php if($post->source_url != ''): ?>
                <span class="user f-right">来源于: <a href="<?php echo e($post->source_url); ?>"><?php echo e($post->source_url); ?></a></span>
                <?php endif; ?>
            </div>
        </article></center>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/code/bughello/resources/views/post/show.blade.php ENDPATH**/ ?>