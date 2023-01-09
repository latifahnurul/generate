<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generator User Hotspot </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <br><br>

                    <h2>Data Hasil generator</h2>
                    <br>
                </div>
               
            </div>
        </div>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jumlah User</th>
                    <th>Kode Enkripsi</th>
                    <th>Masa Berlaku</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $generates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $generate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($generate->id); ?></td>
                        <td><?php echo e($generate->jumlah_user); ?></td>
                        <td><?php echo e($generate->kode_enkripsi); ?></td>
                        <td><?php echo e($generate->masa_berlaku); ?></td>
                        <td>
                            <form action="<?php echo e(route('companies.destroy',$generate->id)); ?>" method="Post">
                                <a class="btn btn-primary" href="<?php echo e(route('companies.edit',$generate->id)); ?>">Edit</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo $generates->links(); ?>

    </div>
</body>
</html><?php /**PATH D:\generate-user-hotspot\laravel_generate\resources\views/Generates/index.blade.php ENDPATH**/ ?>