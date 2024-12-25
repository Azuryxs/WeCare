<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<header class="navbar">
    <div class="nav-left">
        <a href="{{ route('about') }}">ABOUT</a>
        <a href="{{ route('articles.index') }}">ARTIKEL</a>
    </div>
    <div class="nav-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    </div>
    <div class="nav-right">
        @auth
            <!-- Jika sudah login, tampilkan form logout -->
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="background:none; border:none; color:#007b74; font-size:20px; font-weight:bold; cursor:pointer;">LOGOUT</button>
            </form>
        @else
            <!-- Jika belum login, tampilkan link Login -->
            <a href="{{ route('login') }}">LOGIN</a>
        @endauth
        <a href="{{ route('appointments.index') }}">APPOINTMENT</a>
    </div>
</header>
<main>
    <section class="welcome-section">
        <div class="welcome-text">
            <h1 class="main-heading">Selamat Datang di WE CARE</h1>
            <p class="main-paragraph">
                Tempat di mana setiap cerita didengar, setiap perasaan dihargai, dan setiap hati diberikan ruang untuk berbicara.
                Apakah Anda sedang merasa sedih, bingung, bahagia, atau hanya ingin berbagi cerita tanpa takut dihakimi? 
                Di sini, Anda bebas mengekspresikan diri dengan aman dan nyaman. Kami hadir untuk menjadi teman yang mendengarkan
                tanpa prasangka dan memberikan dukungan saat Anda membutuhkannya. Jangan biarkan perasaan Anda terpendam sendiri.
                Bersama kita bisa menghadapi apa pun. Mari berbagi, mari saling menguatkan. Curhatlah, karena cerita Anda penting.
            </p>
            <div class="main-buttons">
                <a href="/register">DAFTAR</a>
                <a href="/appointments/create">APPOINTMENT</a>
            </div>
        </div>
        <div class="welcome-image">
            <img src="{{ asset('images/welcome-image.png') }}" alt="Mental Health" class="hero-image">
        </div>
    </section>
    <section class="secondary-section">
        <h2 class="secondary-heading">APA YANG SEDANG KAMU RASAKAN?</h2>
        <div class="card-container">
            <div class="card">
                <img src="{{ asset('images/burnout.jpg') }}" alt="Burnout">
                <div class="card-title">BURN OUT</div>
            </div>
            <div class="card">
                <img src="{{ asset('images/anxiety.jpg') }}" alt="Kecemasan">
                <div class="card-title">KECEMASAN</div>
            </div>
            <div class="card">
                <img src="{{ asset('images/stress.jpg') }}" alt="Stress">
                <div class="card-title">STRESS</div>
            </div>
            <div class="card">
                <img src="{{ asset('images/depression.jpg') }}" alt="Depresi">
                <div class="card-title">DEPRESI</div>
            </div>
            <div class="card">
                <img src="{{ asset('images/mood.jpg') }}" alt="Gangguan Mood">
                <div class="card-title">GANGGUAN MOOD</div>
            </div>
        </div>
        <div class="secondary-buttons">
            <a href="/appointments/create">MAKE APPOINTMENT</a>
        </div>
    </section>
</main>
</body>
</html>
