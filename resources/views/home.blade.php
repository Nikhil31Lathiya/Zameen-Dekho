<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zameen Dekho - User Home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f8ff;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
            border: none;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            background-color: #ffffff;
            padding: 15px;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #2c3e50;
        }

        .property-details {
            font-size: 0.9rem;
            color: #555;
        }

        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        .btn-dark {
            background-color: #2ecc71;
            border-color: #2ecc71;
        }

        .btn-dark:hover {
            background-color: #27ae60;
            border-color: #27ae60;
        }

        .btn-success {
            background-color: #f39c12;
            border-color: #f39c12;
        }

        .btn-success:hover {
            background-color: #e67e22;
            border-color: #e67e22;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        <h3 class="mb-4">User Home - All Properties</h3>
        <a href="{{ route('wishlist') }}" class="btn btn-dark mb-3">Wishlist</a>
        <a href="{{ route('update-user') }}" class="btn btn-success mb-3">Update Profile</a>
        <div class="row mt-3">
            @foreach ($properties as $p)
                <div class="col-md-4 my-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ $p->image_url }}" alt="Property Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->owner }}</h5>
                            <p class="property-details"><b>Contact:</b> {{ $p->owner_contact }}</p>
                            <p class="property-details"><b>Address:</b> {{ $p->Address }}</p>
                            <p class="property-details"><b>Description:</b> {{ $p->description }}</p>
                            <p class="property-details"><b>Amount:</b> ₹{{ number_format($p->amount) }}</p>
                            <p class="property-details">
                                <b>Action:</b>
                                @if ($p->action == 'sale')
                                    <span style="color: #e74c3c; font-weight: bold;">{{ ucfirst($p->action) }}</span>
                                @else
                                    <span style="color: #2ecc71; font-weight: bold;">{{ ucfirst($p->action) }}</span>
                                @endif
                            </p>
                            <a href="{{ url('add_wishlist') }}/{{ $p->id }}" class="btn btn-primary mt-2">Interested</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
