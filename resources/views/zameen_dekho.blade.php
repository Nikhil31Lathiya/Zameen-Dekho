<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zameen Dekho</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #e0f7fa, #b2ebf2);
            font-family: 'Arial', sans-serif;
        }

        .logo-container {
            text-align: center;
            margin-top: 60px;
        }

        .logo-container img {
            width: 180px;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .content-container {
            text-align: center;
            margin-top: 30px;
            background-color: #fff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .content-container h3 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #00796b;
            font-weight: bold;
        }

        .content-container a {
            margin: 10px;
            padding: 12px 25px;
            font-size: 1.1rem;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .content-container a.btn-primary {
            background-color: #00796b;
            border-color: #00796b;
        }

        .content-container a.btn-primary:hover {
            background-color: #004d40;
            border-color: #004d40;
            transform: translateY(-3px);
        }

        .content-container a.btn-dark {
            background-color: #37474f;
            border-color: #37474f;
        }

        .content-container a.btn-dark:hover {
            background-color: #263238;
            border-color: #263238;
            transform: translateY(-3px);
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Logo Section -->
        <div class="logo-container">
            <img src="zammen.png" alt="Zameen Dekho Logo">
        </div>
        <!-- Content Section -->
        <div class="content-container">
            <h3>ZameenDekho.com</h3>
            <a href="{{ route('new-user') }}" class="btn btn-primary">Register New User</a>
            <a href="{{ route('user-login') }}" class="btn btn-dark">Login</a>
        </div>
    </div>
</body>

</html>
