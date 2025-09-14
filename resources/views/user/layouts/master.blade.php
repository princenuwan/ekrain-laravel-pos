<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- No Laravel meta tags or tokens -->
    <link rel="stylesheet" href="{{ asset('user/CSS/style.css') }}">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

    <!-- MDB UI Kit CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Coffee Shop</title>
</head>

<body>

    <!-- Header -->
    <header class="text-center py-3" style="background-color: #42280e;">
        <div>
                       <h1 class="text-white">Coffee</h1>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <img src="" height="70" class="rounded-circle" alt="Coffee Shop Logo"
                style="margin-right: 15px;">
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #42280e;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Review</a>
                    </li>
                    <li class="nav-item">
                         <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link text-white ">Logout</button>
                            </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

       <!-- Optional Placeholder -->
    @yield('content')
    <!-- Footer -->
    <footer class="text-center py-3" style="background-color: #42280e;">
        <p class="text-white mb-0">Copyright © 2024-2025 Coffee. All Rights Reserved.</p>
    </footer>

</body>

</html>
