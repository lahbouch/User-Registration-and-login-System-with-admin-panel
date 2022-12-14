<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include __DIR__ . "/includes.php" ?>
    <title>Document</title>
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
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "..\\views\\login" ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= "..\\views\\signup" ?>">Signup</a>
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
    <div class="container mt-4">
        <form action="" class="h-100 d-flex flex-column justify-content-center">
            <div class="d-flex flex-column justify-content-center gap-2">
                <div class="row">
                    <div class="col-6">
                        <label class="form-label" for="">First name</label>
                        <input class="form-control" type="text" name="firstName" id="firstName">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="">Last name</label>
                        <input class="form-control" type="text" name="lastName" id="lastName">
                    </div>
                </div>

                <div>
                    <label class="form-label" for="">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
                <div>
                    <label class="form-label" for="">Mobile phone</label>
                    <input class="form-control" type="tel" name="mobile" id="mobile">
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="form-label" for="">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="">Confirm password</label>
                        <input class="form-control" type="password" name="rePassword" id="rePassword">
                    </div>
                </div>

                <button class="btn btn-primary mt-2">Sign up</button>
            </div>
        </form>
    </div>
</body>

</html>