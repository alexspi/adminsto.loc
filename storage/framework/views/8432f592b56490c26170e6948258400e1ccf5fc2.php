<script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
<!-- Bootstrap js-->

<script src="<?php echo e(asset('assets/js/bootstrap5/js/bootstrap.bundle.min.js')); ?>"></script>


<!-- feather icon js-->
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
<!-- scrollbar js-->
<script src="<?php echo e(asset('assets/js/scrollbar/simplebar.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/scrollbar/custom.js')); ?>"></script>
<!-- Sidebar jquery-->
<script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
<!-- Plugins JS start-->
<script src="<?php echo e(asset('assets/js/prism/prism.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/clipboard/clipboard.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
<script id="menu" src="<?php echo e(asset('assets/js/sidebar-menu.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom-card/custom-card.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/height-equal.js')); ?>"></script>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php echo view('livewire-powergrid::assets.scripts')->render(); ?>
<?php echo $__env->yieldContent('script'); ?>
<?php echo $__env->yieldContent('after_script'); ?>
<?php echo $__env->yieldPushContent('chart_script'); ?>
<?php if(Route::current()->getName() != 'popover'): ?> 
	<script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
<?php endif; ?>

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>



<?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/layouts/simple/script.blade.php ENDPATH**/ ?>