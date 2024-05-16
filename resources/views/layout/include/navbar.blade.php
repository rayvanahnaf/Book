<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="#">Ray's Book</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
                    <i class="bi bi-house-door-fill"></i> Home</a>
                <a class="nav-link" href="{{ route('category.index') }}">
                    <i class="bi bi-grid-3x3-gap-fill"></i> Category</a>
                <a class="nav-link" href="{{ route('place.index') }}">
                    <i class="bi bi-geo-alt-fill"></i> Place</a>
                <a class="nav-link" href="{{ route('book.index') }}">
                    <i class="bi bi-journal-plus"></i> Book</a>
            </div>
        </div>
    </div>
</nav>
