<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom dark mode CSS -->
    <style>
        body.dark-mode {
            background-color: #1a1a1a; /* Darker background color */
            color: #fff; /* Dark mode text color */
        }
        .card {
            background-color: #2a2a2a; /* Darker card background color */
            color: #fff; /* Card text color */
        }
        .input-group-text {
            background-color: #333; /* Darker input group background color */
            color: #ced4da; /* Dark mode input group text color */
        }
        .btn-primary {
            background-color: #004dff !important; /* Darker button background color */
            border-color: #004dff !important; /* Darker button border color */
        }
        .btn-primary:hover {
            background-color: #0039e6 !important; /* Darker button hover background color */
            border-color: #0039e6 !important; /* Darker button hover border color */
        }
        .btn-link {
            color: #fff !important; /* Dark mode button link color */
        }
    </style>
</head>
<body class="dark-mode">
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="container mt-5">
        <h1 class="row justify-content-center"x>CyberHub</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-5">Login</h2>
                            <form method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputUsername" class="form-label">Username or Email</label>
                                    <input type="text" class="input-group-text form-control" id="inputUsername" name="email" aria-describedby="usernameHelp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="password" class="input-group-text form-control" id="inputPassword" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </form>
                            <!-- Validation Errors -->
                            @if ($errors->any())
                                <div class="alert alert-danger mt-3">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="text-center mt-3">
                                <a href="{{ route('register') }}" class="btn btn-link">Register</a> |
                                <a href="{{ route('forgot_password') }}" class="btn btn-link">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, if you need Bootstrap JavaScript components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
