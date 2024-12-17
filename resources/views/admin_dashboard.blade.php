<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zameen Dekho - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        .header {
            background-color: #00796b;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }

        .dashboard-card {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 30px;
        }

        .dashboard-card h3 {
            font-size: 1.8rem;
            color: #00796b;
            font-weight: bold;
        }

        .btn-custom {
            width: 150px;
            margin: 10px;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Header Section -->
    <div class="header d-flex align-items-center justify-content-center">
    
        <h2 class="mb-0">Zameen Dekho</h2>
    </div>

    <!-- Dashboard Content -->
    <div class="container d-flex justify-content-center my-5">
        <div class="w-75">
            <div class="card dashboard-card">
                <div class="card-body text-center">
                    <h3>Admin Dashboard</h3>
                    <br>
                    <a href="{{ route('new_property') }}" class="btn btn-primary btn-custom">New Property</a>
                    <a href="{{ route('all_properties') }}" class="btn btn-danger btn-custom">Property Master</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
