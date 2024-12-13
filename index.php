<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
        }

        .carousel-item {
            height: 400px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .carousel-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .carousel-item h1,
        .carousel-item h5 {
            z-index: 2;
            position: relative;
        }

        .testimonial-card {
            display: flex;
            flex-direction: row;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 20px 0;
        }

        .testimonial-card .img-box img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }

        .testimonial-card:hover {
            transform: scale(1.03);
            transition: all 0.3s ease;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        }

        .btn {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            color: #fff;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
        }

        .btn-success:hover {
            background-color: #1e7e34;
            color: #fff;
        }

        @media (max-width: 768px) {
            .carousel-item {
                height: 300px;
            }

            .testimonial-card {
                flex-direction: column;
                text-align: center;
            }

            .card {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Carousel -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
            <li data-target="#carouselExample" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('assets/images/gedung1.jpg');">
                <div class="d-flex flex-column justify-content-center align-items-center text-white h-100">
                    <h1 class="font-weight-bold">Poliklinik Udinus</h1>
                    <h5>Sistem Temu Janji Pasien Dan Dokter</h5>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/images/udin.jpg');">
                <div class="d-flex flex-column justify-content-center align-items-center text-white h-100">
                    <h1 class="font-weight-bold">Poliklinik Udinus</h1>
                    <h5>Sistem Temu Janji Pasien Dan Dokter</h5>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/images/gedung2.jpg');">
                <div class="d-flex flex-column justify-content-center align-items-center text-white h-100">
                    <h1 class="font-weight-bold">Poliklinik Udinus</h1>
                    <h5>Sistem Temu Janji Pasien Dan Dokter</h5>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/images/udin1.jpeg');">
                <div class="d-flex flex-column justify-content-center align-items-center text-white h-100">
                    <h1 class="font-weight-bold">Poliklinik Udinus</h1>
                    <h5>Sistem Temu Janji Pasien Dan Dokter</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Cards -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-hospital-user fa-3x text-primary mb-3"></i>
                        <h3>Pasien</h3>
                        <p>Login untuk mendapatkan layanan kesehatan.</p>
                        <a href="loginUser.php" class="btn btn-primary">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-user-md fa-3x text-success mb-3"></i>
                        <h3>Dokter</h3>
                        <p>Login untuk mulai melayani pasien.</p>
                        <a href="login.php" class="btn btn-success">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Footer -->
    <footer class="footer bg-light text-black py-4">
        <div class="container">
            <div class="row">
                <!-- Logo dan Deskripsi -->
                <div class="col-md-4">
                    <h5 class="mb-3">Poliklinik Udinus</h5>
                    <p>Memberikan layanan kesehatan terbaik dengan teknologi modern dan profesionalisme yang tinggi.</p>
                </div>

                <!-- Alamat -->
                <div class="col-md-4">
                    <h5 class="mb-3">Alamat</h5>
                    <ul class="list-unstyled">
                        <li>Jl. Nakula No. 5, Semarang</li>
                        <li>Telp: (024) 123-4567</li>
                        <li>Email: info@poliklinikudinus.ac.id</li>
                    </ul>
                </div>

                <!-- Media Sosial -->
                <div class="col-md-4 d-flex justify-content-between align-items-start">
                    <div>
                        <h5 class="mb-3">Ikuti Kami</h5>
                        <div class="d-flex">
                            <a href="#" class="text-black me-3" style="font-size: 1.5rem;"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-black me-3" style="font-size: 1.5rem;"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-black me-3" style="font-size: 1.5rem;"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-black" style="font-size: 1.5rem;"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div>
                        <img src="assets/images/logoudin.png" alt="Logo Poliklinik Udinus" style="max-width: 100px;">
                    </div>
                </div>
            </div>

            <hr class="my-3">
            <div class="text-center">
                <p class="mb-0">&copy; 2024 Poliklinik Udinus. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
