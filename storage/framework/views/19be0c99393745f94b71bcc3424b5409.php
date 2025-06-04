<div>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <!--[if BLOCK]><![endif]--><?php if(session()->has('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <h6 class="mb-4">Data Mobil</h6>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">No Polisi</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Jenis</th>
                                <th>Harga</th>
                                <th>Foto</th>
                                <th>
                                    Proses
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $mobil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                                    <td><?php echo e($data->nopolisi); ?></td>
                                    <td><?php echo e($data->merk); ?></td>
                                    <td><?php echo e($data->jenis); ?></td>
                                    <td><?php echo e($data->harga); ?></td>
                                    <td>
                                        <img src="<?php echo e(asset('storage/mobil/' . $data->foto)); ?>" style="width: 150px;"
                                            alt="<?php echo e($data->merk); ?>">
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('sewamobil', $data->id)); ?>" class="btn btn-sm btn-primary">Sewa</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6">Data Mobil Belum Ada!</td>
                                </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                    <?php echo e($mobil->links()); ?>


                </div>
            </div>
        </div>
    </div>
    <!--[if BLOCK]><![endif]--><?php if($addPage): ?>
        <?php echo $__env->make('mobil.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if($editPage): ?>
        <?php echo $__env->make('mobil.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\Users\User\Downloads\panjul\panjul\resources\views/livewire/mobil-component-pelanggan.blade.php ENDPATH**/ ?>