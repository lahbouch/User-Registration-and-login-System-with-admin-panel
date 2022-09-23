<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include __DIR__ . "/views/includes.php" ?>
    <title>User Management System</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">User Managment System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ".\\views\\login" ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ".\\views\\signup" ?>">Signup</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container p-3 ">
        <h2 class="text-center">
            User Registration & Login and User Management System With admin panel
        </h2>
    </div>
    <div class="container">
        <div class="card text-white bg-primary mb-3">
            <div class="card-header">Login</div>
            <div class="card-body">
                <p class="card-text">To login into your Account if you are a user or an admin.</p>
            </div>
            <div class="card-footer bg-transparent border-success">
                <a class="text-decoration-none text-white" href="<?= ".\\views\\login" ?>">
                    Click Here.
                </a>
            </div>
        </div>
        <div class="card text-white bg-dark mb-3">
            <div class="card-header">Sign Up</div>
            <div class="card-body">
                <p class="card-text">To create an account if you are not registred yet.</p>
            </div>
            <div class="card-footer bg-transparent border-secondary">
                <a class="text-decoration-none text-white" href="<?= ".\\views\\signup" ?>">Click here.</a>
            </div>
        </div>
</body>

</html>