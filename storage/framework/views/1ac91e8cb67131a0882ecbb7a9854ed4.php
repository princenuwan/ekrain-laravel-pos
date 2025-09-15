<?php $__env->startSection('content'); ?>

<section class="container-fluid py-4 modern-tax-section">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 ">
            <div class="card p-3 shadow-sm">
                <h3 class="text-dark fw-bold mb-4 text-center">Add Delivery Info</h3>

                <!-- Existing Locations Dropdown -->
                <div class="mb-2">
                    <label for="location_name" class="form-label fw-semibold">Check Existing Location</label>
                    <select name="location_name" class="form-select <?php $__errorArgs = ['location_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="location_name">
                        <option value="">Choose existing location...</option>
                        <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->location_name); ?>" data-fee="<?php echo e($item->fees); ?>"
                                <?php if(old('location_name') == $item->location_name): ?> selected <?php endif; ?>>
                                <?php echo e($item->location_name); ?> - <?php echo e($item->fees); ?> Ks
                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                </div>

                <hr>

                <!-- Delivery Info Form -->
                <small class="fw-semibold mb-2">Add New or Update</small>
                <form action="<?php echo e(route('addDeliFees')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="form-floating mb-4">
                        <input type="text" name="location" id="location"
                            class="form-control <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            placeholder="Enter new location...">
                        <label for="location">Location</label>
                        <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="number" name="deli_fees" id="deli_fees"
                            class="form-control <?php $__errorArgs = ['deli_fees'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            placeholder="Enter delivery fees">
                        <label for="deli_fees">Delivery Fees</label>
                        <?php $__errorArgs = ['deli_fees'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button type="submit" value="add" name="action"
                                class="btn btn-primary w-100 shadow-sm rounded-pill">
                                <i class="fas fa-plus-circle me-1"></i> Save
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="submit" name="action" value="update"
                                class="btn btn-dark w-100 shadow-sm rounded-pill">
                                <i class="fas fa-sync-alt me-1"></i> Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const select = document.getElementById('location_name');
        const locationInput = document.getElementById('location');
        const feeInput = document.getElementById('deli_fees');

        select.addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            const location = selectedOption.value;
            const fee = selectedOption.getAttribute('data-fee');

            if (location) {
                locationInput.value = location;
                feeInput.value = fee;
            } else {
                locationInput.value = '';
                feeInput.value = '';
            }
        });
    });
</script>

<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Ekrain\ekrain-laravel-pos\resources\views/admin/Profile/adddelivery.blade.php ENDPATH**/ ?>