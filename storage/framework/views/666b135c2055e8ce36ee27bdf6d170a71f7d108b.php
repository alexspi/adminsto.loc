<?php $__env->startSection('title', 'Sample Page'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Sample Page</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Pages</li>
<li class="breadcrumb-item active">Sample Page</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Sample Card</h5>
               <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
            </div>
            <div class="card-body">
               <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('lead-table', [])->html();
} elseif ($_instance->childHasBeenRendered('oojbzIy')) {
    $componentId = $_instance->getRenderedChildComponentId('oojbzIy');
    $componentTag = $_instance->getRenderedChildComponentTagName('oojbzIy');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oojbzIy');
} else {
    $response = \Livewire\Livewire::mount('lead-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('oojbzIy', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/Lead/index.blade.php ENDPATH**/ ?>