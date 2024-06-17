<?php
    session_start();
    if (isset($_SESSION['email'])) {
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Register</h1>

        <form class="w-75" method="POST" action="./register_process.php">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input required name="password" type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>

            <a class="btn btn-warning" href="./login.php">Login</a>
        </form>
    </div>
</body>
</html>