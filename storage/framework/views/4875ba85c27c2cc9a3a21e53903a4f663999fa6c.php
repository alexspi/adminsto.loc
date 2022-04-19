<?php $attributes = $attributes->exceptProps([
    'theme' => '',
    'enabledFilters' => [],
    'column' => null,
    'inline' => null,
    'inputText' => null,
    'inputTextOptions' => [],
]); ?>
<?php foreach (array_filter(([
    'theme' => '',
    'enabledFilters' => [],
    'column' => null,
    'inline' => null,
    'inputText' => null,
    'inputTextOptions' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div wire:ignore.self
    style="min-width: 9.5rem">
    <?php
        $field = data_get($inputText, 'dataField') ?? data_get($inputText, 'field');
    ?>
    <?php if(filled($inputText)): ?>
        <div class="<?php if(!$inline): ?> pt-2 p-2 <?php endif; ?>">
            <?php if(!$inline): ?>
                <label class="text-gray-700 dark:text-gray-300"><?php echo e(data_get($inputText, 'label')); ?></label>
            <?php endif; ?>
            <div class="<?php if($inline): ?> flex flex-col <?php else: ?> flex flex-row justify-between <?php endif; ?>">
                <div class="<?php if(!$inline): ?> pl-0 pt-1 pr-3 <?php endif; ?>">
                    <div class="relative">
                        <select id="input_text_options"
                                class="power_grid <?php echo e($theme->selectClass); ?> <?php echo e(data_get($column, 'headerClass')); ?>"
                                style="<?php echo e(data_get($column, 'headerStyle')); ?>"
                                wire:model.defer="filters.input_option_text.<?php echo e($field); ?>"
                                wire:input.defer="filterInputTextOptions('<?php echo e($field); ?>', $event.target.value, '<?php echo e(data_get($inputText, 'label')); ?>')">
                            <?php $__currentLoopData = $inputTextOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>"><?php echo e(trans($value)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="<?php echo e($theme->relativeDivClass); ?>">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-powergrid::components.icons.down','data' => ['class' => 'w-4 h-4 dark:text-gray-300']]); ?>
<?php $component->withName('livewire-powergrid::icons.down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 dark:text-gray-300']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="mt-1">
                    <input
                        data-id="<?php echo e($field); ?>"
                        <?php if(isset($enabledFilters[$field]['disabled']) && boolval($enabledFilters[$field]['disabled']) === true): ?> disabled <?php else: ?>
                        wire:model.debounce.800ms="filters.input_text.<?php echo e($field); ?>"
                        wire:input.debounce.800ms="filterInputText('<?php echo e($field); ?>', $event.target.value, '<?php echo e(data_get($inputText, 'label')); ?>')"
                        <?php endif; ?>
                        type="text"
                        class="power_grid <?php echo e($theme->inputClass); ?>"
                        placeholder="<?php echo e(empty($column)?data_get($inputText, 'label'):($column->placeholder?:$column->title)); ?>">
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/vendor/livewire-powergrid/components/filters/input-text.blade.php ENDPATH**/ ?>