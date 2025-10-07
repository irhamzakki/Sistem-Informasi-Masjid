<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Log in</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="tema/img/logo-1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="sys/bootstrap/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* Styling tambahan */
        * {
            font-family: 'Poppins', sans-serif;
        }

        /* Background dengan gambar dan transparansi */
        body {
            background: url('tema/img/masjid-5.JPG') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }

        /* Overlay untuk efek blur */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3); /* Transparan gelap */
            backdrop-filter: blur(3px);
        }

        .login-box {
            background: rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(20px);
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
            position: relative;
            z-index: 1;
        }

        .login-logo a {
            color: #fff;
            font-size: 28px;
            font-weight: 600;
        }

        .login-box-body {
            background: rgba(255, 255, 255, 0.3);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            color: #333;
        }

        .form-control {
            height: 45px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            padding-left: 15px;
            transition: 0.3s;
        }

        .form-group {
            position: relative;
        }

        .form-group input:focus {
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5);
        }

        .form-control-feedback {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            font-size: 18px;
            color: #007bff;
        }

        .btn-primary {
            background: linear-gradient(90deg, #667eea, #764ba2);
            border: none;
            transition: 0.3s;
            border-radius: 10px;
            padding: 10px;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg,rgb(85, 62, 109), #667eea);
            transform: scale(1.05);
        }

        .login-msg {
            color: red;
            font-weight: bold;
        }

        /* Responsif */
        @media (max-width: 400px) {
            .login-box {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>LOGIN</b> ADMIN</a>
        </div>

        <div class="login-box-body">
            <?php 
            if (isset($_GET['salah']) && $_GET['salah'] == 'salah') {
                echo "<p class='login-msg text-center'>Maaf, login salah!</p>";
            } else {
                echo "<p class='text-center'>Masukkan Username dan Password</p>";
            }
            ?>

            <form action="log-member.php" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="user" placeholder="Masukkan Username" required>
                    <span class="fa fa-user form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="pass" placeholder="Masukkan Password" required>
                    <span class="fa fa-lock form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- jQuery -->
    <script src="sys/bootstrap/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap -->
    <script src="sys/bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
