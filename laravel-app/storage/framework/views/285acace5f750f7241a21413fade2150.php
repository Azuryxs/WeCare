<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styleLogin.css')); ?>">
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h2>Selamat Datang!</h2>
    </div>

    <!-- Main Login Form -->
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <!-- Email Input -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
            </div>

            <!-- Password Input -->
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <!-- Login Button -->
            <button type="submit" class="btn btn-primary">Login</button>

            <!-- Additional Links -->
            <a href="register">Create an Account</a>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Software\XAMPP\htdocs\laravel-app\resources\views/auth/login.blade.php ENDPATH**/ ?>