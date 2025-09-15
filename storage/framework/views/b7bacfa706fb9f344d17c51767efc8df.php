<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section id="hero" class="d-flex align-items-center justify-content-center"
        style="background-image: url('<?php echo e(asset('user/images/coffee.png')); ?>');
               background-size: cover; background-position: center; height: 50vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-white fw-bold">Welcome to Coffee</h2>
                    <p class="text-white">Taste the best coffee in town with a warm atmosphere.</p>
                    <a href="#" class="btn btn-light mt-3">View Menu</a>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('user.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Ekrain\ekrain-laravel-pos\resources\views/user/home.blade.php ENDPATH**/ ?>