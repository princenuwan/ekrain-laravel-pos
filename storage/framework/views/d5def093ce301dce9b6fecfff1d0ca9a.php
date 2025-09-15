<?php $__env->startSection('content'); ?>
    <section class="container-fluid">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-md-12">
                <form action="<?php echo e(url('admin/profile/update/' . auth()->user()->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <div class="card shadow-lg rounded-4">
                                <div class="card-body p-4">
                                    <h2 class="text-center text-dark fw-bold mb-4">Update Account Information</h2>

                                    <div class="row">
                                        <!--  Profile Picture -->
                                        <div class="col-md-4 mb-4">
                                            <label for="image" class="form-label text-muted">Profile</label>
                                            <input type="hidden" name="oldImage" value="<?php echo e(auth()->user()->profile); ?>">
                                            <div class="d-flex justify-content-center mb-3">
                                                <?php if(auth()->user()->profile == null): ?>
                                                    <img class="img-profile img-thumbnail rounded-circle"
                                                         id="output" src="<?php echo e(asset('admin/images/undraw_profile.svg')); ?>" style="width: 150px;">
                                                <?php else: ?>
                                                    <img class="img-profile img-thumbnail rounded-circle"
                                                         id="output" src="<?php echo e(asset('adminProfile/' . auth()->user()->profile)); ?>" style="width: 150px;">
                                                <?php endif; ?>
                                            </div>
                                            <input type="file" name="image" class="form-control mt-2 <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" onchange="loadFile(event)">
                                            <?php $__errorArgs = ['image'];
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

                                        <!-- Name, Phone, Update button -->
                                        <div class="col-md-4 mb-4">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" name="name"
                                                       <?php if(auth()->user()->provider != 'simple'): ?> disabled <?php endif; ?>
                                                       class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                       id="name" placeholder="Enter your name"
                                                       value="<?php echo e(old('name', auth()->user()->name ?? auth()->user()->nickname)); ?>">
                                                <?php $__errorArgs = ['name'];
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
                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="text" name="phone"
                                                       class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                       id="phone" placeholder="09xxxxxxxx"
                                                       value="<?php echo e(old('phone', auth()->user()->phone)); ?>">
                                                <?php $__errorArgs = ['phone'];
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
                                            <input type="submit" value="Update" class="btn btn-primary w-100 mt-3 rounded-pill">
                                        </div>

                                        <!--Email, Role, Links -->
                                        <div class="col-md-4 mb-4">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email"
                                                       <?php if(auth()->user()->provider != 'simple'): ?> disabled <?php endif; ?>
                                                       class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                       id="email" placeholder="Email Address"
                                                       value="<?php echo e(auth()->user()->email); ?>">
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
                                                <label for="role" class="form-label">Role</label>
                                                <input type="text" name="role"
                                                       class="form-control <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                       id="role" placeholder="User Role"
                                                       value="<?php echo e(old('role', auth()->user()->role)); ?>">
                                                <?php $__errorArgs = ['role'];
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

                                            <div class="d-grid gap-2">
                                                <a href="<?php echo e(route('profile.overview')); ?>" class="btn btn-outline-secondary w-100 mt-3 rounded-pill">
                                                    Profile Overview
                                                </a>
                                                <a href="<?php echo e(route('passwordpage')); ?>" class="btn btn-outline-secondary w-100 mt-2 rounded-pill">
                                                    Change Password
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Ekrain\ekrain-laravel-pos\resources\views/admin/profile/adminProfile.blade.php ENDPATH**/ ?>