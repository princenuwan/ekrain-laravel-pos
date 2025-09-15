<?php $__env->startSection('content'); ?>
<section class="container-fluid py-4">
    <h4 class="mb-3">Add Sizes & Prices for <strong><?php echo e($product->name); ?></strong></h4>

    <form action="<?php echo e(route('prodsizestore', $product->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div id="sizePriceContainer">
            <div class="row mb-2 size-price-row">
                <div class="col-md-5">
                    <input type="text" name="sizes[]" class="form-control" placeholder="Size (e.g. Small)" required>

                </div>

                <div class="col-md-5">
                    <input type="number" name="prices[]" class="form-control" step="10" placeholder="Price (MMK)" required>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger w-100 remove-size-price">Remove</button>
                </div>
            </div>
        </div>

        <small class="text-muted">Only allowed: Small, Medium, Large</small><hr>

        <button type="button" id="addSizePrice" class="btn btn-primary btn-sm">+ Add Size & Price</button>

        <div class="mt-4">
            <button type="submit" id="submitButton" class="btn btn-success">Save Sizes</button>
            <a href="<?php echo e(route('product.prodlist')); ?>" class="btn btn-secondary">Back to List</a>
        </div>
    </form>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>

    const allowedSizes = ['Small', 'Medium', 'Large'];

    function validateSizes() {
        const inputs = document.querySelectorAll('input[name="sizes[]"]');
        const submitBtn = document.getElementById('submitButton');
        let allValid = true;

        inputs.forEach(input => {
            const value = input.value.trim();
            if (!allowedSizes.includes(value)) {
                allValid = false;
            }
        });

        submitBtn.disabled = !allValid;
    }

    // Initial validation
    validateSizes();

    // Validate when typing
    document.addEventListener('input', function (e) {
        if (e.target.name === "sizes[]") {
            validateSizes();
        }
    });

    // Revalidate when adding a new row
    document.getElementById('addSizePrice').addEventListener('click', function () {
        const container = document.getElementById('sizePriceContainer');
        const row = document.createElement('div');
        row.classList.add('row', 'mb-2', 'size-price-row');

        row.innerHTML = `
            <div class="col-md-5">
                <input type="text" name="sizes[]" class="form-control" placeholder="Size (e.g. Medium)" required>
            </div>
            <div class="col-md-5">
                <input type="number" name="prices[]" class="form-control" step="0.01" placeholder="Price (MMK)" required>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger w-100 remove-size-price">Remove</button>
            </div>
        `;
        container.appendChild(row);

        // Validate new input field
        validateSizes();
    });

    // Remove row and revalidate
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-size-price')) {
            e.target.closest('.size-price-row').remove();
            validateSizes();
        }
    });

</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Ekrain\ekrain-laravel-pos\resources\views/admin/product/productsize.blade.php ENDPATH**/ ?>