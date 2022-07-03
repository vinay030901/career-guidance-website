<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking page</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style2.css">
    <script src="js/script.js"></script>
    <script src="js/validator.js"></script>
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
    <header class="viewport-header">
        <h1>
            Build Your Career! <br><br>
            Explore
            <span>THE EARTH</span>
        </h1>
    </header>
    <main>
        <form name="contactForm" onsubmit="return validateForm()" action="userinfo.php" method="post" class="content">
            <h2>Register With Us</h2>
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
                <label>Mobile Number</label>
                <input type="text" name="mobile" maxlength="10">
                <div class="error" id="mobileErr"></div>
            </div>
            <div class="row">
                <label>Location</label>
                <select name="destination">
                    <option>Select</option>
                    <option>India</option>
                    <option>USA</option>
                    <option>Australia</option>
                    <option>Canada</option>
                    <option>Nepal</option>
                    <option>Bangladesh</option>
                    <option>Indonesia</option>
                </select>
                <div class="error" id="destinationErr"></div>
            </div>
            <div class="row">
                <label>Gender</label>
                <div class="form-inline">
                    <label><input type="radio" name="gender" value="male"> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                </div>
                <div class="error" id="genderErr"></div>
            </div>
            <div class="row">
                <label>Date of Birth</label>
                <input type="date" name="date">
                <div class="error" id="dateErr"></div>
            </div>
            <div class="row">
                <label>Choose Services <i>(Optional)</i></label>
                <div class="form-inline">
                    <label><input type="checkbox" name="services[]" value="sports">Exam Preparation</label>
                    <label><input type="checkbox" name="services[]" value="movies">Free Class</label>
                    <label><input type="checkbox" name="services[]" value="music">Personalised Training</label>
                    <label><input type="checkbox" name="services[]" value="music">Get Success Stories</label>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="PROCEED">
            </div>
        </form>

    </main>
</body>

</html>