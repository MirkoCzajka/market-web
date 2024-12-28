<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIRLUS</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="vh-100 overflow-hidden">

    <nav class="navbar navbar-expand-lg bg-transparent">
        <!-- bg-body-tertiary -->
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">
                <img src="{{ asset('storage/Mirlus.png') }}" alt="Logo" style="height: 50px;">
            </a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header border-bottom">
                    <img src="{{ asset('storage/Mirlus.png') }}" alt="Logo" style="height: 50px;">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end fs-4 flex-grow-1 pe-3">
                        <li class="nav-item mx-lg-2">
                            <a class="nav-link active" aria-current="page" href="#">Tienda</a>
                        </li>
                        <li class="nav-item mx-lg-2">
                            <a class="nav-link" href="#">Aceca de Nosotros</a>
                        </li>
                        <li class="nav-item mx-lg-2">
                            <a class="nav-link" href="#">Preguntas Frecuentes</a>
                        </li>
                        <li class="nav-item mx-lg-2">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{$slot}}

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                Footer
            </div>
        </div>
    </footer>
</body>
</html>

<style>
    /* body{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    } */
    .navbar-toggler:focus, .btn-close:focus {
        outline: none;
    }
    .nav-link {
        color: #666777;
        font-weight: 500;
        position: relative;
    }
    .nav-link:hover, .nav-link.active {
        color: #000;
    }
    
    @media (min-width: 991px) {
        .nav-link:before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: #000;
            visibility: hidden;
            transition: 0.3s ease-in-out;
        }
        .nav-link:hover::before, .nav-link.active:before {
            width: 100%;
            visibility: visible;
        }
    }
    @media (max-width: 991px) {
        .sidebar {
            backdrop-filter: blur(10px);
        }
    }
</style>
