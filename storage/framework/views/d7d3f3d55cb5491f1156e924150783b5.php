<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid py-4 px-4 px-md-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h3 class="text-dark fw-bold mb-4 text-center">Change User Profile</h3>
                <div class="d-flex justify-content-between">
                    <div class="row">
                        <div class="col-md-10">
                            <form action="<?php echo e(route('changeProfilePage')); ?>" method="get">
                                <div class="input-group mb-3">
                                    <input type="text" name="searchKey" class="form-control " placeholder="Search..."
                                        value="">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center text-white">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Actions</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center text-white">
                                    <td class="font-weight-bold"><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td><?php echo e($item->phone); ?></td>
                                    <td>
                                    <form action="<?php echo e(route('updateField', $item->id )); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="field" value="status">
                                        <select name="value" onchange="this.form.submit()" class="form-select">
                                            <option value="active"
                                                <?php echo e(strtolower($item->status) === 'active' ? 'selected' : ''); ?>>
                                                Active
                                            </option>
                                            <option value="inactive"
                                                <?php echo e(strtolower($item->status) === 'inactive' ? 'selected' : ''); ?>>
                                                Inactive
                                            </option>
                                        </select>
                                    </form>

                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('updateField', $item->id )); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="field" value="role">
                                            <select name="value" id="role" onchange="this.form.submit()" class="form-select">
                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($role); ?>" <?php echo e($item->role === $role ? 'selected' : ''); ?>>
                                                        <?php echo e(ucfirst($role)); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                    <span class="d-flex justify-content-end"></span>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Ekrain\ekrain-laravel-pos\resources\views/admin/profile/changeprofile.blade.php ENDPATH**/ ?>