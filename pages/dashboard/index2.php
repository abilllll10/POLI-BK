<?php
require 'config/koneksi.php';
$id_poli = $_SESSION['id_poli'];

$query_poli = "SELECT nama_poli FROM poli WHERE id = $id_poli";
$result = mysqli_query($mysqli, $query_poli);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $nama_poli = $row['nama_poli'];
} else {
    $nama_poli = "Tidak dapat mendapatkan nama poli";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Dashboard</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .content-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
        }

        .info-box {
            background-color: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .info-box-icon {
            font-size: 2rem;
            color: #007bff;
        }

        .info-box-content h5 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .info-box-content p {
            font-size: 1rem;
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

    </style>
</head>

<body>
    <!-- Content Header (Page header) -->
    <div class="content-header text-center">
        <h1>Selamat Datang, <b>Dokter <?php echo $username ?></b></h1>
        <h4>Anda berada di <?php echo $nama_poli; ?></h4>
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
            <h2>Tugas Kami</h2>
            <ul class="service-list">
                <li>
                    <i class="fas fa-stethoscope"></i>
                    <span>Melayani Pasien Dengan Baik</span>
                </li>
                <li>
                    <i class="fas fa-user-md"></i>
                    <span>Memberikan Pengobatan Terbaik</span>
                </li>
                <li>
                    <i class="fas fa-comments"></i>
                    <span>Melayani Dengan Ramah Dan Interaktif</span>
                </li>
                </section>
                </div>

           
            <!-- /.row -->

            <!-- Custom Content Here (existing content) -->
            <div class="row">
                <!-- ... content remains the same ... -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Link to Bootstrap JS and other necessary scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
