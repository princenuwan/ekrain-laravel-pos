<?php $__env->startSection('content'); ?>
<section class="d-flex align-items-center justify-content-center mt-4">
    <div class="login-wrapper d-flex flex-row overflow-hidden rounded-4 shadow-lg"
        style="max-width: 900px; background-color: rgba(69, 46, 31, 0.9);">
        <!-- Left: Image -->
        <div class="d-none d-md-block" style="width: 50%;">
            <img src="<?php echo e(asset('admin/images/coffee cup.jpg')); ?>" alt="Coffee Cup"
                 class="img-fluid h-100" style="object-fit: cover; opacity: 0.6;">
        </div>
        <div class="col-12 text-center d-md-none mb-4">
            <img src="<?php echo e(asset('admin/images/coffee cup.jpg')); ?>" alt="Coffee Cup" style="width: 80px; opacity: 0.6;">
        </div>

        <!-- Right: Login Form -->
        <div class="p-5 text-white" style="width: 50%;">
            <h3 class="fw-bold text-center mb-4">Login</h3>

            <!-- Social Login -->
            <div class="d-flex justify-content-center mb-3">
                <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                <a href="<?php echo e(url('/auth/google/redirect')); ?>" class="btn btn-light btn-sm mx-1">
                    <i class="fab fa-google"></i>
                </a>
                <a href="<?php echo e(url('/auth/facebook/redirect')); ?>" class="btn btn-primary btn-sm mx-1">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
            <?php if(session('alert')): ?>
                <div class="text-danger text-center alert alert-<?php echo e(session('alert.type')); ?>">
                    <?php echo e(session('alert.message')); ?>

                </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="email" class="form-label text-white">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               value="<?php echo e(old('email')); ?>" placeholder="Enter your email" required>
                    </div>
                    <?php $__errorArgs = ['email'];
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

                <div class="mb-3">
                    <label for="password" class="form-label text-white">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="Enter your password" required>
                    </div>
                    <?php $__errorArgs = ['password'];
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

                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-light rounded-pill fw-bold shadow" id="loginBtn">
                        Login
                    </button>
                </div>

                <p class="small text-center mt-3">Don't have an account?
                    <a href="<?php echo e(route('userRegister')); ?>" class="text-warning fw-bold">Register</a>
                </p>
            </form>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('Authentication.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Ekrain\ekrain-laravel-pos\resources\views/Authentication/login.blade.php ENDPATH**/ ?>