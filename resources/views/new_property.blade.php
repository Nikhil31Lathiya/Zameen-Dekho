<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zameen Dekho - New Property Entry</title>
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
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            border: none;
        }

        .card h3 {
            font-size: 1.8rem;
            color: #00796b;
            font-weight: bold;
            margin-bottom: 20px;
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

        .alert-danger {
            background-color: #ffebee;
            color: #d32f2f;
            border: 1px solid #d32f2f;
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
        <div class="card my-5 p-4">
            <div class="card-body">
                <h3 class="text-center">New Property Entry</h3>
                <form action="{{ route('save_new_property') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="owner" class="col-sm-2 col-form-label">Owner Name:</label>
                        <div class="col-sm-10">
                            <input type="text" name="owner" class="form-control" id="owner" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="owner_contact" class="col-sm-2 col-form-label">Owner Contact:</label>
                        <div class="col-sm-10">
                            <input type="text" name="owner_contact" class="form-control" id="owner_contact" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="address" class="col-sm-2 col-form-label">Address:</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control" id="address" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="image_url" class="col-sm-2 col-form-label">Image URL:</label>
                        <div class="col-sm-10">
                            <input type="text" name="image_url" class="form-control" id="image_url" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description:</label>
                        <div class="col-sm-10">
                            <input type="text" name="description" class="form-control" id="description" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="amount" class="col-sm-2 col-form-label">Amount:</label>
                        <div class="col-sm-10">
                            <input type="text" name="amount" class="form-control" id="amount" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="action" class="col-sm-2 col-form-label">Action:</label>
                        <div class="col-sm-10">
                            <select name="action" class="form-select" id="action" required>
                                <option value="">Select Action</option>
                                <option value="rent">Rent</option>
                                <option value="sale">Sell</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
