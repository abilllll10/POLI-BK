<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 140vh;
            margin: 0;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            width: 600px; /* Lebarkan card ke samping */
        }

        .card-body {
            padding: 30px;
        }

        .card-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #4CAF50;
        }

        .btn {
            color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }


        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        .register-link a {
            color: #4CAF50;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">Registrasi</h2>
                <p class="text-center">Isi data diri Anda</p>
                <form action="pages/register/checkRegister.php" method="post">
                    <div class="form-group">
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="no_ktp">Nomor KTP :</label>
                        <input type="number" class="form-control" name="no_ktp" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat :</label>
                        <input class="form-control" id="alamat" name="alamat" required></input>
                    </div>

                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="no_hp">Nomor Handphone :</label>
                        <input type="number" class="form-control" name="no_hp" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Buat Akun
                    </button>
                </form>
            </div>
            <div class="card-footer text-center">
                <p>Sudah punya akun?</p>
                <a href="loginUser.php">Login</a>
            </div>
        </div>
    </div>
</body>

</html>
