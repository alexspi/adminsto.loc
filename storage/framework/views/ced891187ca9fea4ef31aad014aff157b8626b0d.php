<?php if(!is_array($data)): ?>
    <footer class="mt-50 pb-1 w-100 align-items-end px-1 d-flex flex-wrap justify-content-sm-center justify-content-md-between">
        <div class="col-auto overflow-auto my-sm-2 my-md-0 ms-sm-0">
            <?php if($perPageInput): ?>
                <div class="d-flex flex-lg-row align-items-center">
                    <label class="w-auto">
                        <select wire:model="perPage" class="form-select">
                            <?php $__currentLoopData = $perPageValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value); ?>">
                                    <?php if($value == 0): ?>
                                        <?php echo e(trans('livewire-powergrid::datatable.labels.all')); ?>

                                    <?php else: ?> <?php echo e($value); ?>

                                    <?php endif; ?>
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </label>
                    <small class="ms-2 text-muted">
                        <?php echo e(trans('livewire-powergrid::datatable.labels.results_per_page')); ?>

                    </small>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-auto overflow-auto mt-2 mt-sm-0">
            <?php if(method_exists($data, 'links')): ?>
                <?php echo $data->links(powerGridThemeRoot().'.pagination', ['recordCount' => $recordCount]); ?>

            <?php endif; ?>
        </div>
    </footer>
<?php endif; ?>
<?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/vendor/livewire-powergrid/components/frameworks/bootstrap5/footer.blade.php ENDPATH**/ ?>