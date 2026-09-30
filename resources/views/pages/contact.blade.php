@extends('layouts.app')

@section('title', 'Contacto y Ubicación')

@section('content')

<div class="contact-header">
    <div class="container">
        <h1 class="section-title center">Contacto</h1>
        <p>¿Tienes dudas sobre nuestros orígenes de café? ¿Quieres encargar pan? Escríbenos o ven a visitarnos.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="grid-2" style="align-items: start;">

            {{-- Info y horario --}}
            <div>
                <div class="img-card" style="height:240px; margin-bottom:2rem;">
                    <img src="{{ asset('images/cafe_interior.png') }}" alt="Interior de la cafetería">
                </div>

                <h2 class="section-title" style="font-size:1.7rem; margin-bottom:1.25rem;">Nuestra Casa</h2>

                <div class="info-block">
                    <div class="info-item">
                        <svg class="info-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <div>
                            <strong>Calle del Pez 12</strong><br>
                            28004, Malasaña, Madrid<br>
                            <a href="https://maps.google.com/?q=Calle+del+Pez+12+Madrid" target="_blank" rel="noopener" style="color:var(--secondary); font-size:0.88rem;">Ver en Google Maps &rarr;</a>
                        </div>
                    </div>
                    <div class="info-item">
                        <svg class="info-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span>+34 91 123 45 67</span>
                    </div>
                    <div class="info-item">
                        <svg class="info-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span>hola@nordicocoffee.com</span>
                    </div>
                </div>

                <div class="schedule-box">
                    <h3 style="font-family:var(--font-serif); font-size:1.3rem; margin-bottom:1rem;">Horario de Apertura</h3>
                    <div class="schedule-row">
                        <strong>Lunes — Viernes</strong><span>08:00 – 19:00</span>
                    </div>
                    <div class="schedule-row">
                        <strong>Sábado</strong><span>09:00 – 20:00</span>
                    </div>
                    <div class="schedule-row">
                        <strong>Domingo</strong><span>09:00 – 15:00</span>
                    </div>
                </div>
            </div>

            {{-- Formulario --}}
            <div class="form-card">
                <h2 class="section-title" style="font-size:1.7rem; margin-bottom:1.5rem;">Envíanos un Mensaje</h2>

                @if(session('success'))
                    <div class="alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nombre completo</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Ej. Ana Pérez">
                        @error('name') <span class="error-msg">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="ana@ejemplo.com">
                        @error('email') <span class="error-msg">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <select id="subject" name="subject">
                            <option value="duda">Duda general</option>
                            <option value="encargo">Encargo de panadería</option>
                            <option value="trabajo">Trabaja con nosotros</option>
                            <option value="proveedores">Proveedores</option>
                        </select>
                        @error('subject') <span class="error-msg">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" name="message" placeholder="Escribe aquí tu mensaje...">{{ old('message') }}</textarea>
                        @error('message') <span class="error-msg">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-dark" style="margin-top:.5rem;">Enviar Mensaje</button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
