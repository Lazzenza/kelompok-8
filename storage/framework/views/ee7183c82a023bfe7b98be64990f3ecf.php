<?php $__env->startSection('title','Home - Rent Car'); ?>

<?php $__env->startSection('content'); ?>
  <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('UsersComponent');

$__html = app('livewire')->mount($__name, $__params, 'lw-2127962887-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ACER\ren_car\resources\views/users/index.blade.php ENDPATH**/ ?>