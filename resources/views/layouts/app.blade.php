<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MangaStore Admin</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="/">📚 MangaStore</a>
            <ul class="navbar-nav">
                <li><a class="nav-link" href="/">Inicio</a></li>
                <li><a class="nav-link" href="{{ route('clientes.index') }}">Lectores</a></li>
                <li><a class="nav-link" href="{{ route('pedidos.index') }}">Pedidos</a></li>
            </ul>
        </div>
    </nav>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @yield('content')
</body>
</html>

<style>
/* Navbar Styles */
.navbar {
    background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.nav-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 4rem;
}

.nav-brand {
    font-size: 1.5rem;
    font-weight: bold;
    color: white;
    text-decoration: none;
    background: linear-gradient(135deg, #fbbf24 0%, #ec4899 50%, #8b5cf6 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.nav-links {
    display: flex;
    gap: 2rem;
}

.nav-link {
    color: #e2e8f0;
    text-decoration: none;
    font-weight: 500;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    transition: all 0.2s ease;
}

.nav-link:hover {
    color: white;
    background: rgba(255, 255, 255, 0.1);
}

/* Alert Styles */
.alert {
    padding: 1rem;
    margin: 1rem auto;
    max-width: 1200px;
    border-radius: 0.5rem;
    font-weight: 500;
}

.alert-success {
    background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
    color: #065f46;
    border: 1px solid #10b981;
}

/* Responsive */
@media (max-width: 768px) {
    .nav-container {
        padding: 0 1rem;
    }

    .nav-links {
        gap: 1rem;
    }

    .nav-link {
        padding: 0.375rem 0.75rem;
        font-size: 0.875rem;
    }
}
</style>
