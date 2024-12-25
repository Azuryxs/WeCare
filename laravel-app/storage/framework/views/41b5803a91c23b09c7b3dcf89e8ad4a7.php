

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Artikel</h1>
    <a href="<?php echo e(route('articles.create')); ?>" class="btn btn-primary mb-3">Buat Artikel Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($article->title); ?></td>
                <td><?php echo e($article->user->name); ?></td>
                <td>
                    <a href="<?php echo e(route('articles.edit', $article->id)); ?>" class="btn btn-warning">Edit</a>
                    <form action="<?php echo e(route('articles.destroy', $article->id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus artikel ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Software\XAMPP\htdocs\laravel-app\resources\views/articles/index.blade.php ENDPATH**/ ?>