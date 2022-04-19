<div>
    <div>
        <div class="col-md-12">
            <?php echo $__env->make($theme->layout->header, [
                    'enabledFilters' => $enabledFilters
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php if ($__env->exists($theme->layout->message)) echo $__env->make($theme->layout->message, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="table-responsive col-md-12" style="margin: 10px 0 10px;">
            <?php echo $__env->make($table, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="row">
            <div class="col-12 overflow-auto">
                <?php echo $__env->make($theme->footer->view, ['theme' => $theme], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/vendor/livewire-powergrid/components/frameworks/bootstrap5/table-base.blade.php ENDPATH**/ ?>