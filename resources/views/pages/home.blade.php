@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

{{-- Hero --}}
<section class="hero">
    <div class="hero-bg">
        <img src="{{ asset('images/hero_coffee.png') }}" alt="Interior de Nórdico">
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title">El Arte del Café de Especialidad</h1>
        <p class="hero-sub">Tueste artesanal y masa madre, cultivando el sabor en cada detalle.</p>
        <a href="{{ route('menu') }}" class="btn btn-gold">Ver Nuestra Carta</a>
    </div>
</section>

{{-- Filosofía --}}
<section class="section">
    <div class="container">
        <div class="grid-2">
            <div>
                <h2 class="section-title" style="margin-bottom: 1.5rem;">Nuestra Filosofía</h2>
                <p style="font-size:1.05rem; color:#555; font-weight:300; margin-bottom:1rem;">
                    En Nórdico, creemos que cada taza cuenta una historia. Seleccionamos rigurosamente granos de origen único, trabajando mano a mano con pequeños productores para garantizar prácticas de comercio justo y calidad excepcional.
                </p>
                <p style="font-size:1.05rem; color:#555; font-weight:300;">
                    Nuestro obrador nace de la misma pasión por el tiempo y la paciencia. Trabajamos exclusivamente con masa madre de cultivo propio, largas fermentaciones y harinas ecológicas molidas a la piedra.
                </p>
            </div>
            <div class="img-pair">
                <div class="img-card">
                    <img src="{{ asset('images/coffee_beans.png') }}" alt="Granos de café de especialidad">
                </div>
                <div class="img-card">
                    <img src="{{ asset('images/artisan_bread.png') }}" alt="Pan de masa madre recién horneado">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Pilares --}}
<section class="section section-dark">
    <div class="container">
        <h2 class="section-title light center" style="margin-bottom: 3.5rem;">Nuestros Pilares</h2>
        <div class="grid-3">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="30" height="30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/></svg>
                </div>
                <h3>Tueste Semanal</h3>
                <p>Tostamos en pequeños lotes cada semana para ofrecer perfiles de sabor frescos y vibrantes.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="30" height="30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                </div>
                <h3>Masa Madre Viva</h3>
                <p>Todas nuestras elaboraciones emplean masas madre con más de 24 horas de fermentación controlada.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="30" height="30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3>Comercio Transparente</h3>
                <p>Pagamos precios justos que superan el mercado para dignificar el trabajo de los caficultores.</p>
            </div>
        </div>
    </div>
</section>

@endsection
