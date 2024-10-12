<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?= $title ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex me-auto" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="authors">Authors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="genre">Genre</a>
                        </li>
                        <li class="nav-item">
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Login/out
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Login</a></li>
                                <li><a class="dropdown-item" href="#">Registration</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content qismi -->
        <?= $content ?>

        <div class="row mt-3">
            <div class="col-12">
                <footer class="bg-body-tertiary text-center">
                    <!-- Grid container -->
                    <div class="container p-4 pb-0">
                        <!-- Section: Social media -->
                        <section class="mb-4">
                            <!-- Facebook -->
                            <a
                                data-mdb-ripple-init
                                class="btn text-white btn-floating m-1"
                                style="background-color: #3b5998;"
                                href="#!"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a
                                data-mdb-ripple-init
                                class="btn text-white btn-floating m-1"
                                style="background-color: #55acee;"
                                href="#!"
                                role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a
                                data-mdb-ripple-init
                                class="btn text-white btn-floating m-1"
                                style="background-color: #dd4b39;"
                                href="#!"
                                role="button"><i class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a
                                data-mdb-ripple-init
                                class="btn text-white btn-floating m-1"
                                style="background-color: #ac2bac;"
                                href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a
                                data-mdb-ripple-init
                                class="btn text-white btn-floating m-1"
                                style="background-color: #0082ca;"
                                href="#!"
                                role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Github -->
                            <a
                                data-mdb-ripple-init
                                class="btn text-white btn-floating m-1"
                                style="background-color: #333333;"
                                href="#!"
                                role="button"><i class="fab fa-github"></i></a>
                        </section>
                        <!-- Section: Social media -->
                    </div>
                    <!-- Grid container -->

                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                        © 2020 Copyright:
                        <!-- <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a> -->
                    </div>
                    <!-- Copyright -->
                </footer>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>