@extends('layouts.app')
@section('content')
<div class="welcome-hero fade-in">
    <h1>📚 MangaStore Admin</h1>
    <p>Tu plataforma completa para gestionar lectores y pedidos de manga</p>
    <div class="d-flex justify-content-between align-items-center gap-3" style="max-width: 400px; margin: 0 auto;">
        <a href="{{ route('clientes.index') }}" class="btn btn-primary">Gestionar Lectores</a>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Ver Pedidos</a>
    </div>
</div>

<div class="container">
    <div class="welcome-features">
        <div class="feature-card fade-in">
            <div class="icon">👥</div>
            <h3>Gestión de Lectores</h3>
            <p>Administra todos tus lectores registrados con facilidad. Crea, edita y elimina perfiles de lectores.</p>
        </div>

        <div class="feature-card fade-in">
            <div class="icon">📦</div>
            <h3>Control de Pedidos</h3>
            <p>Gestiona pedidos con diferentes estados: pendiente, en proceso, completado o cancelado.</p>
        </div>

        <div class="feature-card fade-in">
            <div class="icon">📊</div>
            <h3>Estadísticas en Tiempo Real</h3>
            <p>Visualiza estadísticas importantes como el número total de lectores y pedidos activos.</p>
        </div>
    </div>
</div>
@endsection
                    </svg>
                </div>
            </div>

            <!-- Main Title -->
            <h1 class="main-title">
                <span class="gradient-text">Manga Store</span>
            </h1>

            <!-- Subtitle -->
            <p class="subtitle">
                Tu destino definitivo para manga y anime.
                Gestiona clientes y pedidos con estilo y eficiencia.
            </p>

            <!-- Features Grid -->
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg class="icon-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Gestión de Clientes</h3>
                    <p class="feature-description">Administra tu base de clientes de manera eficiente y organizada.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg class="icon-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Sistema de Pedidos</h3>
                    <p class="feature-description">Controla todos tus pedidos con un sistema intuitivo y moderno.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg class="icon-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Interfaz Moderna</h3>
                    <p class="feature-description">Disfruta de una experiencia de usuario fluida y responsiva.</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <a href="{{ route('clientes.index') }}" class="btn btn-primary">
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                    Gestionar Clientes
                </a>

                <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Gestionar Pedidos
                </a>
            </div>

            <!-- Footer -->
            <div class="footer">
                <p>&copy; 2026 Manga Store. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>

    <style>
        /* CSS Estilos modernos para la página de welcome */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Figtree', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .welcome-container {
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .background-animation {
            position: absolute;
            inset: 0;
            overflow: hidden;
        }

        .bg-circle {
            position: absolute;
            border-radius: 50%;
            filter: blur(40px);
            opacity: 0.2;
            animation: pulse 4s infinite;
        }

        .bg-circle-1 {
            top: 25%;
            left: 25%;
            width: 18rem;
            height: 18rem;
            background: #8b5cf6;
            animation-delay: 0s;
        }

        .bg-circle-2 {
            top: 33%;
            right: 25%;
            width: 18rem;
            height: 18rem;
            background: #eab308;
            animation-delay: 2s;
        }

        .bg-circle-3 {
            bottom: 25%;
            left: 33%;
            width: 18rem;
            height: 18rem;
            background: #ec4899;
            animation-delay: 4s;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.2;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.3;
            }
        }

        .main-content {
            position: relative;
            z-index: 10;
            max-width: 64rem;
            margin: 0 auto;
            text-align: center;
        }

        .logo-section {
            margin-bottom: 2rem;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 6rem;
            height: 6rem;
            background: white;
            border-radius: 50%;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            margin-bottom: 1.5rem;
        }

        .logo-icon {
            width: 3rem;
            height: 3rem;
            color: #8b5cf6;
        }

        .main-title {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .gradient-text {
            background: linear-gradient(135deg, #fbbf24 0%, #ec4899 50%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .subtitle {
            font-size: 1.25rem;
            color: #e2e8f0;
            margin-bottom: 3rem;
            max-width: 32rem;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 0.75rem;
            padding: 1.5rem;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .feature-icon {
            width: 3rem;
            height: 3rem;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .feature-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: white;
            margin-bottom: 0.5rem;
        }

        .feature-description {
            color: #cbd5e1;
            font-size: 0.875rem;
        }

        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            justify-content: center;
            align-items: center;
            margin-bottom: 4rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 2rem;
            border-radius: 0.75rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: white;
        }

        .btn-primary:hover {
            box-shadow: 0 20px 25px -5px rgba(59, 130, 246, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
        }

        .btn-secondary:hover {
            box-shadow: 0 20px 25px -5px rgba(16, 185, 129, 0.4);
        }

        .btn-icon {
            width: 1.25rem;
            height: 1.25rem;
        }

        .footer {
            color: #94a3b8;
            font-size: 0.875rem;
        }

        /* Responsive Design */
        @media (min-width: 640px) {
            .action-buttons {
                flex-direction: row;
            }

            .main-title {
                font-size: 4rem;
            }

            .subtitle {
                font-size: 1.5rem;
            }
        }

        @media (min-width: 768px) {
            .features-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</body>
</html>
