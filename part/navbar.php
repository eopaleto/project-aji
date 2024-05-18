<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/icon_remove.png" style="border-radius: 15px;" height="65px" width="65px" alt="logo"/> GAME
            </a>
            <button class="navbar-toggler navbar-light" type="btn-custom" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'profile.php') echo 'active'; ?>">
                        <a class="nav-link" href="#profile" onclick="navigateToProfile();">Profile</a>
                    </li>
                    <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'layanan.php') echo 'active'; ?>">
                        <a class="nav-link" href="#layanan" onclick="navigateToProfile();">Layanan</a>
                    </li>
                    <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'informasi.php') echo 'active'; ?>">
                        <a class="nav-link" href="informasi.php">Informasi Publik</a>
                    </li>
                    <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'berita.php') echo 'active'; ?>">
                        <a class="nav-link" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'kontak.php') echo 'active'; ?>">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-custom" href="auth/index.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        function navigateToProfile() {
            window.location.href = 'index.php#profile';
        }
    </script>
</header>