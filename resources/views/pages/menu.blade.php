@extends('layouts.app')

@section('title', 'Nuestra Carta')

@section('content')

<div class="menu-header">
    <div class="container">
        <h1 class="section-title light center">Nuestra Carta</h1>
        <p>Especialidades elaboradas a diario con los mejores ingredientes de temporada y café de orígenes rotatorios.</p>
    </div>
</div>

<div class="container section">

    {{-- Cafés --}}
    <div class="menu-section">
        <div class="category-heading">
            <h2 class="section-title" style="margin:0; white-space:nowrap;">Cafés de Especialidad</h2>
            <div class="category-line"></div>
        </div>
        <div class="grid-2">
            <div class="img-card">
                <img src="{{ asset('images/coffee_beans.png') }}" alt="Granos de Café Especialidad">
            </div>
            <div>
                <div class="menu-card">
                    <div class="menu-card-header">
                        <h3>Filtro Batch Brew — Etiopía Yirgacheffe</h3>
                        <span class="menu-price">3.50€</span>
                    </div>
                    <p class="menu-desc">Proceso lavado. Notas florales, bergamota y té negro. Tueste ligero.</p>
                    <span class="badge">Vegano</span>
                </div>
                <div class="menu-card">
                    <div class="menu-card-header">
                        <h3>Flat White — Blend Casa</h3>
                        <span class="menu-price">3.20€</span>
                    </div>
                    <p class="menu-desc">Doble espresso de Brasil & Colombia con fina capa de leche cremada.</p>
                    <span class="badge">Opción avena +0.30€</span>
                </div>
                <p style="font-size:0.85rem; color:#999; font-style:italic; margin-top:1rem;">
                    Café verde avalado por la <a href="https://sca.coffee/" target="_blank" style="color:var(--secondary);">Specialty Coffee Association</a>.
                </p>
            </div>
        </div>
    </div>

    {{-- Brunch --}}
    <div class="menu-section">
        <div class="category-heading">
            <div class="category-line"></div>
            <h2 class="section-title" style="margin:0; white-space:nowrap;">Brunch & Tostadas</h2>
        </div>
        <div class="grid-2">
            <div>
                <div class="menu-card">
                    <div class="menu-card-header">
                        <h3>Tostada de Aguacate y Poché</h3>
                        <span class="menu-price">8.50€</span>
                    </div>
                    <p class="menu-desc">Pan de masa madre, aguacate con lima, huevo poché ecológico y brotes tiernos.</p>
                    <ul style="margin-top:.6rem; font-size:.82rem; color:#aaa; padding-left:1.1rem;">
                        <li>Contiene gluten</li>
                        <li>Contiene huevo</li>
                    </ul>
                </div>
                <div class="menu-card">
                    <div class="menu-card-header">
                        <h3>Tostada Dulce de Ricotta</h3>
                        <span class="menu-price">6.50€</span>
                    </div>
                    <p class="menu-desc">Pan brioche, ricotta con vainilla, higos frescos y nueces pecanas tostadas.</p>
                </div>
            </div>
            <div class="img-card">
                <img src="{{ asset('images/brunch_toast.png') }}" alt="Tostada de Aguacate">
            </div>
        </div>
    </div>

    {{-- Panadería --}}
    <div class="menu-section">
        <div class="category-heading">
            <h2 class="section-title" style="margin:0; white-space:nowrap;">Panadería Masa Madre</h2>
            <div class="category-line"></div>
        </div>
        <div class="grid-2">
            <div class="img-card">
                <img src="{{ asset('images/artisan_bread.png') }}" alt="Panes artesanales">
            </div>
            <div>
                <div class="menu-card">
                    <div class="menu-card-header">
                        <h3>Hogaza de Campaña</h3>
                        <span class="menu-price">5.00€</span>
                    </div>
                    <p class="menu-desc">Nuestro pan de diario. Harina blanca con 20% integral, corteza oscura y crujiente.</p>
                </div>
                <div class="menu-card">
                    <div class="menu-card-header">
                        <h3>Roll de Canela Sueco (Kanelbulle)</h3>
                        <span class="menu-price">3.50€</span>
                    </div>
                    <p class="menu-desc">Masa enriquecida, canela de Ceilán y cardamomo recién molido.</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
