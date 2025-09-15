<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <section class="container-fluid">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h2 class="text-lg fw-bold">
                            Add Category Page
                        </h2>
                        <form action="<?php echo e(route('category.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category Name</label>
                                <input type="text" name="category" value="<?php echo e(old('category')); ?>"
                                    class="form-control <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="category">
                                <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="invalid-feedback"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="row">
                                <div class="col-6">

                                    <input type="submit" value="Add" class="btn btn-primary rounded-pill w-100">
                                </div>
                                <div class="col-6">
                                    <a href="<?php echo e(route('category.list')); ?>" class="btn btn-secondary rounded-pill w-100 text-center"
                                        >Back</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Ekrain\ekrain-laravel-pos\resources\views/admin/category/create.blade.php ENDPATH**/ ?>