{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Website Saya')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #2c3e50;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 1.5rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #3498db;
        }

        .active {
            color: #3498db !important;
            border-bottom: 2px solid #3498db;
            padding-bottom: 3px;
        }

        /* Content Styles */
        .content {
            flex: 1;
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        /* Footer Styles */
        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 1.5rem 2rem;
            text-align: center;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        .footer-logo {
            font-size: 1.3rem;
            font-weight: bold;
        }

        .footer-links {
            display: flex;
            list-style: none;
        }

        .footer-links li {
            margin-left: 1rem;
        }

        .footer-links a {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #3498db;
        }

        .copyright {
            width: 100%;
            margin-top: 1rem;
            color: #bdc3c7;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                gap: 1rem;
            }

            .navbar {
                flex-direction: column;
                text-align: center;
            }

            .nav-links {
                margin-top: 1rem;
            }

            .nav-links li {
                margin: 0 0.75rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Website Saya</div>
        <ul class="nav-links">
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ url('/layanan') }}" class="{{ request()->is('layanan') ? 'active' : '' }}">Layanan</a></li>
            <li><a href="{{ url('/kontak') }}" class="{{ request()->is('kontak') ? 'active' : '' }}">Kontak</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">Website Saya</div>
            <ul class="footer-links">
                <li><a href="{{ url('/kebijakan-privasi') }}">Kebijakan Privasi</a></li>
                <li><a href="{{ url('/syarat-ketentuan') }}">Syarat & Ketentuan</a></li>
                <li><a href="{{ url('/faq') }}">FAQ</a></li>
            </ul>
        </div>
        <div class="copyright">
            &copy; 2025 Website Saya. Seluruh hak cipta dilindungi.
        </div>
    </footer>

    <script>
        // Anda bisa menambahkan JavaScript di sini
    </script>
</body>

</html>
