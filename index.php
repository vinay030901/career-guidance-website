<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>

    <link rel="stylesheet" href="css/style1.css">
</head>

<body>

    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
    <!-- NAV BAR -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
                <li data-target="#demo" data-slide-to="5"></li>
                <li data-target="#demo" data-slide-to="6"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/businessman.jpg" alt="Los Angeles" width="1100" height="500">
                    <div class="carousel-caption">
                        <h2>Businessman</h2>
                        <p>I need to sell my product</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/coder.jpg" alt="Chicago" width="1100" height="500">
                    <div class="carousel-caption">
                        <h2>Software Engineer</h2>
                        <p>Plan! Code! Deploy! Repeat!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/doctor.jpg" alt="Paris" width="1100" height="500">
                    <div class="carousel-caption">
                        <h2>Doctor</h2>
                        <p>Treat my patients</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/painter.jpg" alt="Paris" width="1100" height="500">
                    <div class="carousel-caption">
                        <h2>Painter</h2>
                        <p>I'm creative! So is this world</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/police.jpg" alt="Paris" width="1100" height="500">
                    <div class="carousel-caption">
                        <h2>Police</h2>
                        <p>Law and order should be maintained</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/professor.jpg" alt="Paris" width="1100" height="500">
                    <div class="carousel-caption">
                        <h2>Professor</h2>
                        <p>Building the new future</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/scientist.jpg" alt="Paris" width="1100" height="500">
                    <div class="carousel-caption">
                        <h2>Scientist</h2>
                        <p>Building the future</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <br><br>
    <section>
        <div>
            <h3 class="text-center" style="font-size: 60px;">About Us</h3>
        </div>
        <div class="container">
            <div class="item" id="item1">
                <img src="images/aboutUs.jpg" width="600px" height="400px" alt="About Us">
            </div>
            <div class="item col--lg-6 col-md-6 com-12" id="item2">
                <h2 class="display-4">Career Guidance</h2>
                <p class="py-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatum similique ipsa recusandae fugit, quae illum delectus cum quaerat? Possimus fugiat ullam debitis maxime. Tempore, totam blanditiis. Vitae, rerum ea?
                    Cumque voluptates minus maxime sint magni qui, velit similique. Corrupti debitis in ipsam vel totam? At sunt facere voluptates officiis consequatur dolorum aliquid, ea deleniti! Dolorem quod possimus eum nam.
                    Nisi quasi in magnam repudiandae quas ex repellendus assumenda adipisci. Dolor, deleniti dolorem dignissimos nemo perspiciatis quae in quam ipsum. Iusto libero beatae explicabo facilis veritatis quod expedita id eos?
                </p>
                <a href="about.php" class="btn btn-success">Read More</a>
            </div>
        </div>
    </section>

    <br><br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <section>
        <h2 id="flip">SERVICES</h2>
        <div class="row" id="panel">
            <div class="column">
                <a href="exams.php" style="color:black;"><img src="images/examPreparation.jpg" alt="Exam Preparation" style="width:100%;height:400px;" class="exam">
                <p style="text-align: center;" class="exam">Exam Preparation</p></a>
            </div>
            <div class="column">
                <img src="images/counsellor.jpg" alt="Book Counsellor" style="width:100%;height:400px;">
                <p style="text-align: center;">Book Counsellor</p>
            </div>
            <div class="column">
                <img src="images/quiz.jpg" alt="Quiz" style="width:100%;height:400px;">
                <p style="text-align: center;">Quiz</p>
            </div>
            <div class="column">
                <img src="images/syllabus.jpg" alt="Syllabus" style="width:100%;height:400px;">
                <p style="text-align: center;">Syllabus</p>
            </div>
            <div class="column">
                <img src="images/successStories.jpg" alt="Success Stories" style="width:100%;height:400px;">
                <p style="text-align: center;">Success Stories</p>
            </div>
            <div class="column">
                <img src="images/career.jpg" alt="Careers" style="width:100%;height:400px;">
                <p style="text-align: center;">Careers</p>
            </div>
        </div>
    </section>
    <br><br>
    <center>
        <section>
            <div class="txtcenter">
                <h1>Upto 50% On your first Call</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
                <a href="book.php" class="btn1">Call now</a>
            </div>
        </section>
    </center>
    <br><br>
    <section style="background-image: url('images/footer1.jpg');background-repeat: no-repeat;" class="img-fluid aboutImg">

        <div class="container1" style="color: white;">

            <div class="box" id="item1">
                <h3 style="color: white;">QUICK LINKS</h3>
                <div><a href="index.php" style="color: white;">home</a></div>
                <div><a href="about.php" style="color: white;">about us</a></div>
                <div><a href="services.php" style="color: white;">services</a></div>
                <div><a href="book.php" style="color: white;">book</a></div>
            </div>

            <div class="box" id="item2"> 
                <h3 style="color: white;" style="color: white;">CONTACT INFO</h3>
                <div><a href="#" style="color: white;">+91-8088-6077-32</a></div>
                <div><a href="#" style="color: white;">+91-8088-6077-33</a></div>
                <div><a href="#" style="color: white;">abc@gmail.com </a></div>
                <div><a href="#" style="color: white;">dehradun, india -248001 </a></div>
            </div>

            <div class="box" id="item3">
                <h3 style="color: white;">FOLLOW US</h3>
                <div><a href="#" style="color: white;">facebook </a></div>
                <div><a href="#" style="color: white;"> twitter </a></div>
                <div><a href="#" style="color: white;">instagram </a></div>
                <div> <a href="#" style="color: white;">linkedin </a></div>
            </div>

        </div>

        <center>
            <div class="credit" style="color:white;"> created by <span>ABC</span> | all rights reserved! </div>
        </center>
    </section>

</body>

</html>