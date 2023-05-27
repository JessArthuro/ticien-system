<nav class="navbar navbar-expand-lg bg-dark-subtle">
    <div class="container">
        <a class="navbar-brand" href="{{ route('invoices.index') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" height="24" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <a href="/logout" class="btn btn-danger ms-auto"><i class='bx bx-log-out'></i> Cerrar sesion</a>
        </div>
    </div>
</nav>
