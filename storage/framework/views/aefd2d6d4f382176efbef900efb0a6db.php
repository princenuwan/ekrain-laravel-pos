<?php $__env->startSection('content'); ?>
    <section class="container-fluid">
        <div class="row justify-content-center align-items-center mt-3">
            <div class="col-lg-12">
                <div class="card shadow-lg mb-4" >
                    <div class="card-header py-3 justify-content-between">
                        <h3 class="fw-bold text-center mb-3">Manage Categories</h3>
                        <a href="<?php echo e(route('category.create')); ?>" class="btn btn-primary">Add New Category</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <?php if(session('success')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(session('success')); ?>

                                </div>
                            <?php endif; ?>

                            <?php if(session('error')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(session('error')); ?>

                                </div>
                            <?php endif; ?>

                            
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Created Date</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($loop->iteration); ?></td><!-- Auto-incremented number  -->
                                            <td class="text-center"><?php echo e($category->name); ?></td>
                                            <td class="text-center"><?php echo e($category->created_at->format('j-F-Y')); ?>

                                            </td>
                                            <td class="text-center">
                                                <div class="justify-content-center d-flex">
                                                    <div class="col-auto">
                                                        <form action="<?php echo e(route('category.edit', $category->id)); ?>"
                                                            method="get">
                                                            <?php echo csrf_field(); ?>
                                                            <button type="submit"
                                                                class="btn btn-outline-secondary rounded-pill btn-sm me-1">Edit..</button>
                                                        </form>
                                                    </div>




                                                    <div class="col-auto">
                                                    <form action="<?php echo e(route('category.delete', $category->id)); ?>" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this category?')">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                        <button type="submit"
                                                                class="btn btn-outline-danger rounded-pill btn-sm">Delete
                                                        </button>
                                                    </form>


                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>




            <div class="d-flex justify-content-end">
            <?php echo e($categories->links()); ?>

            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Ekrain\ekrain-laravel-pos\resources\views/admin/category/list.blade.php ENDPATH**/ ?>