<x-app-layout>

    <section class="portada-section">
        <img class="portada-logo" src="{{ asset('storage\Mirlus-Logo-Blanco.PNG') }}" alt="Logo Portada Mirlus">
    </section>
    <div class="container">
        <div class=".bg-secondary.bg-gradient">
            <h1>Hola Mundoo!</h1>
        </div>
    </div>

</x-app-layout>

<style>
    .portada-section {
        height: 300px;
        background-image: url('/storage/portada.JPG');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .portada-logo {
        position: 0;
        bottom: 0;
        right: 0;
    }
    @media (min-width: 991px) {
        .portada-section {
            height: 700px;
        }
    }
</style>
