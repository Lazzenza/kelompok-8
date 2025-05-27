<div class="container-fluid pt-4 px-4">
      <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Data Users</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                    
                                    <tr>
                                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($data->name); ?></td>
                                        <td><?php echo e($data->email); ?></td>
                                        <td><?php echo e($data->role); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                </tbody>
                            </table>
                            <button wire:click= "create" class="btn btn-primary">Tambah</button>
                            <!--[if BLOCK]><![endif]--><?php if($addPage == true): ?>
                                <?php echo $__env->make('user.create', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                
                        </div>
                    </div>
      </div>
   </div>
   
</div>
<?php /**PATH C:\Users\ACER\ren_car\resources\views/livewire/users-component.blade.php ENDPATH**/ ?>