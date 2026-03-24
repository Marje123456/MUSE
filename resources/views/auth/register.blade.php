@extends('layouts.app')

@section('title', 'Muse - Registro')

@section('content')
<div class="container min-vh-100 d-flex align-items-start justify-content-center py-5" style="padding-top: 180px !important;">
    <div class="row justify-content-center w-100">
        <div class="col-lg-6 col-xl-5">
            <div class="text-center mb-4">
                <h2 class="mb-3 display-4">Registro</h2>
                <p class="text-light">Selecciona el tipo de cuenta con el que quieres entrar en Muse.</p>
            </div>

            <div class="mb-4">
                <select id="accountType" class="form-control">
                    <option value="">Selecciona tipo de cuenta</option>
                    <option value="artist">Artista</option>
                    <option value="collector">Coleccionista</option>
                </select>
            </div>

            <form id="artistForm" method="POST" action="{{ route('register.artist') }}" style="display: none;">
    @csrf

    <div class="mb-3">
        <input type="text" name="full_name" placeholder="Nombre completo" class="form-control">
    </div>

    <div class="mb-3">
        <input type="email" name="email" placeholder="Correo electrónico" class="form-control">
    </div>

    <div class="d-flex gap-3 mb-3">
        <input type="password" name="password" placeholder="Contraseña" class="form-control">
        <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" class="form-control">
    </div>

    <div class="mb-3">
        <input type="date" name="birth_date" class="form-control">
    </div>

    <div class="mb-3">
        <input type="tel" name="phone" placeholder="Teléfono" class="form-control">
    </div>

    <div class="mb-3">
        <input type="text" name="address" placeholder="Dirección" class="form-control">
    </div>

    <div class="mb-3 position-relative">
        <label class="form-label text-light">Categorías</label>

        <div class="form-control d-flex justify-content-between align-items-center category-toggle" style="cursor: pointer;">
            <span class="category-placeholder">Selecciona una o varias categorías de interes</span>
            <span>▼</span>
        </div>

        <div class="bg-white rounded shadow p-3 mt-1 category-options" style="display: none; position: absolute; width: 100%; z-index: 1000;">
            <div class="form-check">
                <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="illustration" id="artist_cat1">
                <label class="form-check-label" for="artist_cat1">Ilustración digital</label>
            </div>

            <div class="form-check">
                <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="concept_art" id="artist_cat2">
                <label class="form-check-label" for="artist_cat2">Arte conceptual</label>
            </div>

            <div class="form-check">
                <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="photography" id="artist_cat3">
                <label class="form-check-label" for="artist_cat3">Fotografía artística</label>
            </div>

            <div class="form-check">
                <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="animation" id="artist_cat4">
                <label class="form-check-label" for="artist_cat4">Animación 2D</label>
            </div>

            <div class="form-check">
                <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="experimental" id="artist_cat5">
                <label class="form-check-label" for="artist_cat5">Arte experimental</label>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary w-100">Registrarme como artista</button>
</form>

            <form id="collectorForm" method="POST" action="{{ route('register.collector') }}" style="display: none;">
    @csrf

    <div class="mb-3">
        <input type="text" name="full_name" placeholder="Nombre completo" class="form-control">
    </div>

    <div class="mb-3">
        <input type="email" name="email" placeholder="Correo electrónico" class="form-control">
    </div>

    <div class="d-flex gap-3 mb-3">
        <input type="password" name="password" placeholder="Contraseña" class="form-control">
        <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" class="form-control">
    </div>

    <div class="mb-3">
        <input type="date" name="birth_date" class="form-control">
    </div>

    <div class="mb-3">
        <input type="tel" name="phone" placeholder="Teléfono" class="form-control">
    </div>

    <div class="mb-3">
        <input type="text" name="address" placeholder="Dirección" class="form-control">
    </div>

    <div class="mb-3 position-relative">
        <label class="form-label text-light">Categorías</label>

        <div class="form-control d-flex justify-content-between align-items-center category-toggle" style="cursor: pointer;">
            <span class="category-placeholder">Selecciona una o varias categorías</span>
            <span>▼</span>
        </div>

        <div class="bg-white rounded shadow p-3 mt-1 category-options" style="display: none; position: absolute; width: 100%; z-index: 1000;">
            <div class="form-check">
                <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="illustration" id="collector_cat1">
                <label class="form-check-label" for="collector_cat1">Ilustración digital</label>
            </div>

            <div class="form-check">
                <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="concept_art" id="collector_cat2">
                <label class="form-check-label" for="collector_cat2">Arte conceptual</label>
            </div>

            <div class="form-check">
                <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="photography" id="collector_cat3">
                <label class="form-check-label" for="collector_cat3">Fotografía artística</label>
            </div>

            <div class="form-check">
                <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="animation" id="collector_cat4">
                <label class="form-check-label" for="collector_cat4">Animación 2D</label>
            </div>

            <div class="form-check">
                <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="experimental" id="collector_cat5">
                <label class="form-check-label" for="collector_cat5">Arte experimental</label>
            </div>
        </div>
    </div>  

    <button type="submit" class="btn btn-primary w-100">Registrarme como coleccionista</button>
</form>
        </div>
    </div>
</div>
<style>
#artistForm .form-control,
#collectorForm .form-control,
#artistForm .form-control::placeholder,
#collectorForm .form-control::placeholder,
#artistForm .form-check-label,
#collectorForm .form-check-label,
#artistForm .category-placeholder,
#collectorForm .category-placeholder,
#accountType,
#accountType::placeholder {
    color: #000 !important;
}

#artistForm .form-control,
#collectorForm .form-control,
#accountType {
    background-color: #fff !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const accountType = document.getElementById('accountType');
    const artistForm = document.getElementById('artistForm');
    const collectorForm = document.getElementById('collectorForm');

    function toggleForms() {
        artistForm.style.display = 'none';
        collectorForm.style.display = 'none';

        if (accountType.value === 'artist') {
            artistForm.style.display = 'block';
        }

        if (accountType.value === 'collector') {
            collectorForm.style.display = 'block';
        }
    }

    if (accountType) {
        accountType.addEventListener('change', toggleForms);
        toggleForms();
    }

    const categoryGroups = document.querySelectorAll('.position-relative');

    categoryGroups.forEach(function (group) {
        const toggle = group.querySelector('.category-toggle');
        const options = group.querySelector('.category-options');
        const placeholder = group.querySelector('.category-placeholder');
        const checkboxes = group.querySelectorAll('.category-checkbox');

        if (!toggle || !options || !placeholder || !checkboxes.length) return;

        toggle.addEventListener('click', function () {
            const isVisible = options.style.display === 'block';

            document.querySelectorAll('.category-options').forEach(function (box) {
                box.style.display = 'none';
            });

            options.style.display = isVisible ? 'none' : 'block';
        });

        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                const selected = Array.from(checkboxes)
                    .filter(item => item.checked)
                    .map(item => item.nextElementSibling.textContent.trim());

                placeholder.textContent = selected.length
                    ? selected.join(', ')
                    : 'Selecciona una o varias categorías';
            });
        });
    });

    document.addEventListener('click', function (e) {
        document.querySelectorAll('.position-relative').forEach(function (group) {
            const toggle = group.querySelector('.category-toggle');
            const options = group.querySelector('.category-options');

            if (!toggle || !options) return;

            if (!group.contains(e.target)) {
                options.style.display = 'none';
            }
        });
    });
});
</script>
@endsection