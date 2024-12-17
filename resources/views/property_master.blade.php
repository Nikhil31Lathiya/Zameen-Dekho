<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zameen Dekho - Property Master</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .card {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            border: none;
        }

        .card h3 {
            font-size: 1.8rem;
            color: #00796b;
            font-weight: bold;
        }

        .form-label {
            font-weight: 500;
            color: #555;
        }

        .btn-primary {
            background-color: #00796b;
            border-color: #00796b;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #004d40;
            border-color: #004d40;
            transform: translateY(-3px);
        }

        .btn-danger {
            background-color: #e74c3c;
            border-color: #e74c3c;
        }

        .btn-danger:hover {
            background-color: #c0392b;
            border-color: #c0392b;
        }

        .alert-danger {
            background-color: #ffebee;
            color: #d32f2f;
            border: 1px solid #d32f2f;
            border-radius: 5px;
        }

        .table-container {
            overflow-x: auto;
        }

        .table img {
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card my-3">
            <div class="card-body">
                <h3 class="text-center mb-4">Property Master</h3>
                <form action="{{ route('search_property') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="owner" class="col-sm-2 col-form-label">Owner Name:</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $owner ?? '' }}" name="owner" class="form-control" id="owner">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <button type="submit" class="btn btn-primary me-2">Search</button>
                        <a href="{{ route('all_properties') }}" class="btn btn-danger me-2">Reset Form</a>
                        <a href="{{ route('new_property') }}" class="btn btn-primary">New Property</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="text-center my-3">All Properties</h3>
                <div class="table-container">
                    <table class="table text-center table-bordered table-hover my-3">
                        <thead class="table-dark">
                            <tr>
                                <th>Sr.no</th>
                                <th>Image</th>
                                <th>Owner Name</th>
                                <th>Owner Contact</th>
                                <th>Address</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Action</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_properties as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ $p->image_url }}" style="width: 120px;" alt="Property Image">
                                    </td>
                                    <td>{{ $p->owner }}</td>
                                    <td>{{ $p->owner_contact }}</td>
                                    <td>{{ $p->address }}</td>
                                    <td>{{ $p->description }}</td>
                                    <td>{{ $p->amount }}</td>
                                    <td>
                                        <span style="color: {{ $p->action == 'sale' ? 'red' : 'green' }}; font-weight:bold;">
                                            {{ ucfirst($p->action) }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ url('update_property') }}/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('delete_property') }}/{{ $p->id }}" class="btn btn-danger">Remove</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
