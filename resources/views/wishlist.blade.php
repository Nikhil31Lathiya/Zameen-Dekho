<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zameen Dekho - Wishlist</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
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
            padding: 20px;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .property-details {
            font-size: 0.95rem;
            color: #555;
            margin-bottom: 8px;
        }

        .property-details b {
            color: #333;
            font-weight: 600;
        }

        .property-details span {
            display: inline-block;
            margin-left: 5px;
            color: #777;
        }

        .btn-danger {
            background-color: #e74c3c;
            border-color: #e74c3c;
        }

        .btn-danger:hover {
            background-color: #c0392b;
            border-color: #c0392b;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        <h3 class="mb-4">Wishlist</h3>
        <div class="row mt-3">
            @foreach ($wishlist as $p)
                <div class="col-md-4 my-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ $p->image_url }}" alt="Property Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->owner }}</h5>
                            <p class="property-details"><b>Contact:</b><span>{{ $p->owner_contact }}</span></p>
                            <p class="property-details"><b>Address:</b><span>{{ $p->Address }}</span></p>
                            <p class="property-details"><b>Description:</b><span>{{ $p->description }}</span></p>
                            <p class="property-details"><b>Amount:</b><span>₹{{ number_format($p->amount) }}</span></p>
                            <p class="property-details">
                                <b>Action:</b>
                                @if ($p->action == 'sale')
                                    <span style="color: #e74c3c; font-weight: bold;">{{ ucfirst($p->action) }}</span>
                                @else
                                    <span style="color: #2ecc71; font-weight: bold;">{{ ucfirst($p->action) }}</span>
                                @endif
                            </p>
                            <a href="{{ url('remove_wishlist') }}/{{ $p->id }}" class="btn btn-danger mt-3">Remove</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
