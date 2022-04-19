<?php if($searchInput): ?>
    <div class="flex flex-row mt-2 md:mt-0 w-full flex justify-start sm:justify-center md:justify-end">

        <div class="relative w-full md:w-4/12 float-end float-right md:w-full lg:w-1/2">
              <span class="absolute inset-y-0 left-0 flex items-center pl-1">
                 <span class="p-1 -mt-1 focus:outline-none focus:shadow-outline">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-powergrid::components.icons.search','data' => ['class' => 'text-gray-300 dark:text-gray-200']]); ?>
<?php $component->withName('livewire-powergrid::icons.search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-gray-300 dark:text-gray-200']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                 </span>
              </span>
            <input wire:model.debounce.600ms="search" type="text"
                   style="padding-left: 36px !important;"
                   class="block w-full float-right bg-gray-50 text-gray-700 border border-gray-300 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 pl-10 dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 dark:border-gray-500"
                   placeholder="<?php echo e(trans('livewire-powergrid::datatable.placeholders.search')); ?>">
        </div>

    </div>
<?php endif; ?>
<?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/vendor/livewire-powergrid/components/frameworks/tailwind/search.blade.php ENDPATH**/ ?>