<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-lg-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link"><i class="bi bi-house-door-fill"></i> Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('barang.index') }}" class="nav-link"><i class="bi bi-archive-fill"></i> List Barang</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('satuan.index') }}" class="nav-link"><i class="bi bi-ui-checks-grid"></i> List Satuan</a></li>
            </ul>

            <hr class="d-lg-none text-white-50">

            <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

        navLinks.forEach(function(navLink) {
            navLink.addEventListener("click", function() {
                navLinks.forEach(function(link) {
                    link.classList.remove("active");
                });
                this.classList.add("active");
            });

            // aktif navbar pas ndek route saat ini
            if (window.location.href === navLink.href) {
                navLink.classList.add("active");
            }
        });
    });
</script>
