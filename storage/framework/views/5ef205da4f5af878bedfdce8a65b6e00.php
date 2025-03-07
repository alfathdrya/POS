
​
<?php $__env->startSection('title'); ?>
    <title>Manajemen Kategori</title>
<?php $__env->stopSection(); ?>
​
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manajemen Kategori</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kategori</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
​
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        @card
                            <?php $__env->slot('title'); ?>
                            Tambah
                            <?php $__env->endSlot(); ?>
                            
                            <?php if(session('error')): ?>
                                @alert(['type' => 'danger'])
                                    <?php echo session('error'); ?>

                                @endalert
                            <?php endif; ?>
​
                            <form role="form" action="<?php echo e(route('kategori.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="name">Kategori</label>
                                    <input type="text" 
                                    name="name"
                                    class="form-control <?php echo e($errors->has('name') ? 'is-invalid':''); ?>" id="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="description" cols="5" rows="5" class="form-control <?php echo e($errors->has('description') ? 'is-invalid':''); ?>"></textarea>
                                </div>
                            <?php $__env->slot('footer'); ?>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                            <?php $__env->endSlot(); ?>
                        @endcard
                    </div>
                    <div class="col-md-8">
                        @card
                            <?php $__env->slot('title'); ?>
                            List Kategori
                            <?php $__env->endSlot(); ?>
                            
                            <?php if(session('success')): ?>
                                @alert(['type' => 'success'])
                                    <?php echo session('success'); ?>

                                @endalert
                            <?php endif; ?>
                            
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>Kategori</td>
                                            <td>Deskripsi</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($no++); ?></td>
                                            <td><?php echo e($row->name); ?></td>
                                            <td><?php echo e($row->description); ?></td>
                                            <td>
                                                <form action="<?php echo e(route('kategori.destroy', $row->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <a href="<?php echo e(route('kategori.edit', $row->id)); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="4" class="text-center">Tidak ada data</td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php $__env->slot('footer'); ?>
​
                            <?php $__env->endSlot(); ?>
                        @endcard
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pos\resources\views/categories/index.blade.php ENDPATH**/ ?>