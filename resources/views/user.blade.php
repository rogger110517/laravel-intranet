@include('template/header')
<main class="main event-live" style="z-index: 10;position: relative;">
    <section>
        <div class="profile-circle">
            <div class="profile-circle-photo">

            </div>
        </div>
    </section>
    <section class="register">
        <div class="register_content">
            <div class="register_content_grid">
                <input type="text" class="" placeholder="Ingrese su nombre completo">
                <input type="text" class="" placeholder="Ingrese su Apellido completo">
                <input type="text" class="" placeholder="Ingrese su correo electrónico">
                <input type="text" class="" placeholder="País">
                <input type="text" class="" placeholder="Cargo">
                <input type="text" class="" placeholder="Empresa">
                <input type="text" class="" placeholder="Teléfono">
            </div>
            <div class="register_content_button">
                <button>Guardar</button>
            </div>
        </div>
    </section>
</main>
@include('template/footer')