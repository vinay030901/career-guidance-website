<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin page</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style2.css">
    <script src="js/script.js"></script>
</head>

<body>
    <video autoplay muted loop>
        <source src="images/background.mp4" type="video/mp4">
    </video>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-size: 40px;">CAREER GUIDE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" style="font-size: 20px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php" style="font-size: 20px;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php" style="font-size: 20px;">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="book.php" style="font-size: 20px;">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.php" style="font-size: 20px;">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <header class="viewport-header">
        <h1>
            Build Your Career! <br><br>
            Explore
            <span>THE EARTH</span>
        </h1>
    </header>
    <main>
        <form action="userinfo1.php" method="post" class="content">
            <h2>Get Your Details</h2>
            <h5>ENTER NAME AND EMAIL</h5>
            <div class="row">
                <label>Full Name</label>
                <input type="text" name="name">
                <div class="error" id="nameErr"></div>
            </div>
            <div class="row">
                <label>Email Address</label>
                <input type="text" name="email">
                <div class="error" id="emailErr"></div>
            </div>
            <div class="row">
                <input type="submit" value="PROCEED">
            </div>
        </form>

    </main>
</body>

</html>