<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kesehatan Udinus</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }
        .content-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }

        .floating-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            background-color: #007bff;
            color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }

        .floating-container img {
            max-width: 200px;
            margin-right: 20px;
            border-radius: 10px;
        }

        .floating-container div {
            max-width: 600px;
        }

        .floating-container h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .floating-container p {
            font-size: 1rem;
            margin: 10px 0;
        }
        .bg-marquee {
            background-image: url('assets/images/udin.jpg');
            background-size: cover;
            height: 200px;
            position: relative;
        }

        .marquee-text {
            position: absolute;
            bottom: 0;
            background-color: rgba(0,0,0,0.5);
            color: white;
            width: 100%;
            padding: 10px;
        }

        .list-section {
            margin: 20px 0;
        }

        .list-section h2 {
            text-align: center;
            color: #007bff;
        }

        .service-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            padding: 0;
            list-style: none;
        }

        .service-list li {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 15px 20px;
            text-align: center;
            width: 200px;
        }

        .service-list li i {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
        }

        .service-list li span {
            display: block;
            font-size: 1.1rem;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .service-list li {
                width: 100%;
            }

            .floating-container {
                flex-direction: column;
                text-align: center;
            }

            .floating-container img {
                margin: 0 auto 20px;
            }
        }
    </style>
</head>

<body>
         <!-- Content Header (Page header) -->
    <div class="content-header text-center">
        <h1>Selamat Datang, <b><?php echo $username ?></b></h1>
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
     <section class="content mt-5">
        <div class="container-fluid">

            <!-- Bagian baru untuk gambar dan running text -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-marquee">
                    </div>
                </div>
            </div>

        <!-- List Section -->
        <section class="list-section">
            <h2>Layanan Kami</h2>
            <ul class="service-list">
                <li>
                    <i class="fas fa-stethoscope"></i>
                    <span>Layanan Medis Umum</span>
                </li>
                <li>
                    <i class="fas fa-user-md"></i>
                    <span>Pemeriksaan Spesialis</span>
                </li>
                <li>
                    <i class="fas fa-hospital"></i>
                    <span>Fasilitas Kesehatan Modern</span>
                </li>
                <li>
                    <i class="fas fa-comments"></i>
                    <span>Konsultasi Kesehatan</span>
                </li>
            </ul>
        </section>
    </div>

    <!-- FontAwesome untuk ikon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
