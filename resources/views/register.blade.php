<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom dark mode CSS -->
    <style>
        body.dark-mode {
            background-color: #1a1a1a; /* Darker background color */
            color: #fff; /* Dark mode text color */
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #2a2a2a; /* Darker container background color */
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #fff; /* Dark mode heading color */
        }
        label {
            color: #fff; /* Dark mode label color */
        }
        input[type="text"], input[type="email"], input[type="password"], button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #333; /* Dark mode input background color */
            color: #fff; /* Dark mode input text color */
        }
        button {
            background-color: #004dff !important; /* Darker button background color */
            border-color: #004dff !important; /* Darker button border color */
        }
        button:hover {
            background-color: #0039e6 !important; /* Darker button hover background color */
            border-color: #0039e6 !important; /* Darker button hover border color */
        }
        .btn-link {
            color: #fff !important; /* Dark mode button link color */
        }
    </style>
</head>
<body class="dark-mode">
    <div class="container">
        <h2>Register</h2>
        <form method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <div class="text-center mt-3">
            <a href="{{ route('login') }}" class="btn btn-link">Already have an account?</a>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, if you need Bootstrap JavaScript components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
