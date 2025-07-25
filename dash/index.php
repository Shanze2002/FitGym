<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Welcome to FitZone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Full screen background image */
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('anas.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            color: white;
        }

        /* Dark overlay to improve text visibility */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 400px;
            margin: auto;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            padding: 30px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.7);
        }

        h1 {
            font-weight: 700;
            margin-bottom: 30px;
        }

        .btn-custom {
            width: 100%;
            margin-bottom: 15px;
            font-weight: bold;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to FitZone</h1>
        <a href="http://localhost/FITGYM/loging/index.php" class="btn btn-primary btn-custom">Login</a>
        <a href="http://localhost/FITGYM/registration/index.php" class="btn btn-outline-light btn-custom">Register</a>
    </div>
</body>
</html>

