<nav class="navbar navbar-expand-md navbar-dark bg-info shadow">
    <div class="container">
        <a class="navbar-brand h1" href="{{ route('home') }}">
            <img src="/Bahan/images/icon-hotel.jpeg" width="30" height="30" class="d-inline-block align-top img-circle"
                alt="Logo">
            Hotel Hebat
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <x-nav-item-tamu label="Home" :link="route('home')" />
                <x-nav-item-tamu label="Kamar" :link="route('kamar')" />
            </ul>
        </div>
    </div>
</nav>