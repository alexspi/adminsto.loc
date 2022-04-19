<div class="dt--top-section">
    <div class="row">

        <div class="col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center">

            <?php echo $__env->make(powerGridThemeRoot().'.export', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php if ($__env->exists(powerGridThemeRoot().'.toggle-columns')) echo $__env->make(powerGridThemeRoot().'.toggle-columns', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make(powerGridThemeRoot().'.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <div class="col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3">

            <?php echo $__env->make(powerGridThemeRoot().'.filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>

    </div>
</div>

<?php echo $__env->make(powerGridThemeRoot().'.batch-exporting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make(powerGridThemeRoot().'.enabled-filters', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/vendor/livewire-powergrid/components/frameworks/bootstrap5/header.blade.php ENDPATH**/ ?>