<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Nilai - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-dark text-white" style="width: 250px; min-height: 100vh;">
        <div class="p-3 text-center fs-4 fw-bold border-bottom">📊 NILAI SISWA</div>
        <ul class="nav flex-column p-3">
            <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link text-white"><i class="fas fa-home"></i> Dashboard</a></li>
            <li class="nav-item"><a href="{{ route('kelas.index') }}" class="nav-link text-white"><i class="fas fa-school"></i> Kelas</a></li>
            <li class="nav-item"><a href="{{ route('siswa.index') }}" class="nav-link text-white"><i class="fas fa-users"></i> Siswa</a></li>
            <li class="nav-item"><a href="{{ route('mapel.index') }}" class="nav-link text-white"><i class="fas fa-book"></i> Mapel</a></li>
            <li class="nav-item"><a href="{{ route('guru.index') }}" class="nav-link text-white"><i class="fas fa-chalkboard-teacher"></i> Guru</a></li>
            <li class="nav-item"><a href="{{ route('guru-kelas.index') }}" class="nav-link text-white"><i class="fas fa-link"></i> Guru Kelas</a></li>
            <li class="nav-item"><a href="{{ route('guru-mapel.index') }}" class="nav-link text-white"><i class="fas fa-link"></i> Guru Mapel</a></li>
            <li class="nav-item"><a href="{{ route('nilai.index') }}" class="nav-link text-white"><i class="fas fa-chart-bar"></i> Input Nilai</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="flex-grow-1">
        <nav class="navbar navbar-light bg-light px-4 border-bottom">
            <span class="navbar-brand">Selamat datang, {{ Auth::user()->name ?? 'Admin' }}</span>
            <a href="{{ route('logout') }}" class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </nav>
        <div class="p-4">
            @yield('content')
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>