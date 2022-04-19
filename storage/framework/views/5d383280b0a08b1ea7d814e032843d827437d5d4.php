<?php if(filled(config('livewire-powergrid.plugins.flat_piker.css'))): ?>
<link rel="stylesheet" href="<?php echo e(config('livewire-powergrid.plugins.flat_piker.css')); ?>">
<?php endif; ?>

<?php if(isBootstrap5() && filled(config('livewire-powergrid.plugins.bootstrap-select.css'))): ?>
    <link rel="stylesheet" href="<?php echo e(config('livewire-powergrid.plugins.bootstrap-select.css')); ?>" crossorigin="anonymous"/>
<?php endif; ?>

<?php if(isset($cssPath)): ?>
    <style><?php echo file_get_contents($cssPath); ?></style>
<?php endif; ?>

<?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/vendor/livewire-powergrid/assets/styles.blade.php ENDPATH**/ ?>