<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nórdico | @yield('title', 'Specialty Coffee & Artisanal Bakery')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="site-header">
        <div class="container">
            <div class="header-inner">
                <a href="{{ route('home') }}" class="logo">NÓRDICO</a>

                <nav class="nav-links">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Inicio</a>
                    <a href="{{ route('menu') }}" class="{{ request()->routeIs('menu') ? 'active' : '' }}">Nuestra Carta</a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contacto</a>
                </nav>

                <button class="nav-toggle" onclick="document.getElementById('mobile-menu').classList.toggle('open')" aria-label="Menú">
                    <svg width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="mobile-menu" id="mobile-menu">
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('menu') }}">Nuestra Carta</a>
            <a href="{{ route('contact') }}">Contacto</a>
        </div>
    </header>

    <main class="site-main">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <span class="logo-footer">NÓRDICO</span>
                    <p>Café de especialidad y obrador artesanal en el corazón de Madrid. Tostamos nuestros granos con pasión y horneamos con masa madre todos los días, respetando los tiempos y los procesos naturales.</p>
                </div>

                <div class="footer-col">
                    <h4>Enlaces Útiles</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('menu') }}">Nuestra Carta</a></li>
                        <li><a href="{{ route('contact') }}">Contacto</a></li>
                        <li><a href="https://sca.coffee/" target="_blank" rel="noopener noreferrer">Specialty Coffee Association</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Encuéntranos</h4>
                    <ul>
                        <li><a href="https://maps.google.com/?q=Calle+del+Pez+12+Madrid" target="_blank" rel="noopener">📍 Calle del Pez 12, Madrid</a></li>
                        <li><a href="tel:+34911234567">📞 +34 91 123 45 67</a></li>
                        <li><a href="https://instagram.com" target="_blank" rel="noopener">📷 Instagram</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                &copy; {{ date('Y') }} Nórdico Specialty Coffee. Todos los derechos reservados.
            </div>
        </div>
    </footer>

</body>
</html>
