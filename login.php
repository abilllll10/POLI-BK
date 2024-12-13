<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dokter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: 'Source Sans Pro', Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #007bff, #6c63ff);
            color: #495057;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            width: 100%;
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }

        .top-container {
            background: url('assets/images/udin.jpg') no-repeat center center/cover;
            height: 200px;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .top-container h1 {
            position: absolute;
            bottom: 10px;
            left: 20px;
            color: #fff;
            font-size: 1.8rem;
            z-index: 1;
        }

        .form-container {
            padding: 20px;
        }

        .login-form {
            width: 100%;
            margin: 0 auto;
        }

        .login-form h2 {
            font-size: 1.8rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group label {
            font-weight: 600;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ccc;
            padding: 12px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #007bff, #6c63ff);
            border: none;
            padding: 12px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #0056b3, #4b42c4);
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        .register-link a {
            color: #007bff;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="top-container">
            <div class="overlay"></div>
        </div>
        <div class="form-container">
            <div class="login-form">
                <h2>Login</h2>
                <form action="pages/login/checkLogin.php" method="post">
                    <div class="form-group">
                        <label for="username">Username :</label>
                        <input type="text" id="username" class="form-control" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Masuk
                    </button>
                </form>
                <div class="register-link mt-3">
                    <p>Pasien? <a href="loginUser.php">Klik di sini</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
