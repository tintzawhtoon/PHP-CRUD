<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center" style="max-width:600px">
        <h1 class="h4 mt-4">Register</h1>
        <form action="_actions/create.php" method="post">
            <input type="text" class="form-control mb-2" placeholder="Name" name="name" required>
            <input type="email" class="form-control mb-2" placeholder="Email" name="email" required>
            <input type="text" class="form-control mb-2" placeholder="Phone" name="phone" required>
            <textarea name="address" class="form-control mb-2" placeholder="Address" required></textarea>
            <input type="password" class="form-control mb-2" placeholder="Password" name="password" required>
            <button class="btn btn-primary w-100 mb-3">Register</button>
            <a href="index.php">Login</a>
        </form>
        
    </div>
</body>
</html>