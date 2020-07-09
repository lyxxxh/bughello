<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('particles.heade', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('particles.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('particles.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('particles.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<meta name="baidu_union_verify" content="bbe58d05d87c8a65969b042bc1f6c608">
<?php echo $__env->yieldContent('paginate'); ?>

<?php echo $__env->make('particles.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html>
<?php /**PATH /app/code/bughello/resources/views/layouts/app.blade.php ENDPATH**/ ?>