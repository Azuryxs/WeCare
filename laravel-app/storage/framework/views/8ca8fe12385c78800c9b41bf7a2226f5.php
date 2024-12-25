

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Buat Artikel Baru</h1>

    <form action="<?php echo e(route('articles.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan judul artikel" required>
        </div>
        <div class="form-group mt-3">
            <label for="content">Konten</label>
            <textarea name="content" id="content" class="form-control" rows="5" placeholder="Masukkan isi artikel" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Software\XAMPP\htdocs\laravel-app\resources\views/articles/create.blade.php ENDPATH**/ ?>