<?php $attributes = $attributes->exceptProps([
    'theme' => null,
    'checkbox' => null,
    'ruleHide'=> false,
    'ruleDisable' => false,
    'ruleSetAttribute' => null,
    'attribute' => null
]); ?>
<?php foreach (array_filter(([
    'theme' => null,
    'checkbox' => null,
    'ruleHide'=> false,
    'ruleDisable' => false,
    'ruleSetAttribute' => null,
    'attribute' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if($checkbox): ?>
    <?php if($ruleHide): ?>
        <td class="<?php echo e($theme->thClass); ?>"
            style="<?php echo e($theme->thStyle); ?>">
            <div class="<?php echo e($theme->divClass); ?>">
            </div>
        </td>
    <?php elseif($ruleDisable): ?>
        <td class="<?php echo e($theme->thClass); ?>" style="<?php echo e($theme->thStyle); ?>">
            <div class="<?php echo e($theme->divClass); ?>">
                <label class="<?php echo e($theme->labelClass); ?>">
                    <input <?php if(isset($ruleSetAttribute['attribute'])): ?>
                           <?php echo e($attributes->merge([$ruleSetAttribute['attribute'] => $ruleSetAttribute['value']])->class($theme->inputClass)); ?>

                           <?php else: ?>
                           class="<?php echo e($theme->inputClass); ?>"
                           <?php endif; ?>
                           disabled
                           type="checkbox">
                </label>
            </div>
        </td>
    <?php else: ?>
        <td class="<?php echo e($theme->thClass); ?>"
            style="<?php echo e($theme->thStyle); ?>">
            <div class="<?php echo e($theme->divClass); ?>">
                <label class="<?php echo e($theme->labelClass); ?>">
                    <input <?php if(isset($ruleSetAttribute['attribute'])): ?>
                           <?php echo e($attributes->merge([$ruleSetAttribute['attribute'] => $ruleSetAttribute['value']])->class($theme->inputClass)); ?>

                           <?php else: ?>
                           class="<?php echo e($theme->inputClass); ?>"
                           <?php endif; ?>
                           type="checkbox"
                           wire:model.defer="checkboxValues"
                           value="<?php echo e($attribute); ?>">
                </label>
            </div>
        </td>
    <?php endif; ?>
    <?php endif; ?>
<?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/vendor/livewire-powergrid/components/checkbox-row.blade.php ENDPATH**/ ?>