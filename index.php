<?php 
    require_once("phpMail/PHPMailerAutoload.php");
    if (isset($_REQUEST['form-submit'])) {
        
        $mail = new PHPMailer;

        $mail->Host="smtp.gmail.com";
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure="tls";
        $mail->Username="hasibahmed885@gmail.com";
        $mail->Password="ahmedhasib970556";

        $mail->setFrom($_REQUEST['name'],$_REQUEST['email']);
        $mail->addAddress("hasibahmed885@gmail.com");
        $mail->addReplyTo($_REQUEST['name'],$_REQUEST['email']);

        $mail->isHTML(true);
        $mail->Subject="From Submission: ".$_REQUEST['subject'];
        $mail->Body='<h2>Name: '.$_REQUEST['name'].'<br>Email: '.$_REQUEST['email'].'<br>Phone: '.$_REQUEST['phone'].'<br>Message: '.$_REQUEST['message'].'</h2>' ;

        if ($mail->send()==true) {
            header("location: index.php?mailSendSuccessfull");
            exit();
        }
        else{
            header("location: index.php?mailSendFailed");
            exit();
        }

    }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Balt-cargo</title>
    <!-- javascript -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <!-- AOS -->
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <!-- Extarnal stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    
</head>
<body id="page-top" data-spy="scroll" data-target="#navbar-scroll"> 
 
<!--    html writing area     -->

<div class="container-fluid bg-info" style="height: 5px;"></div>

<div id="actionbar" class="d-none d-lg-block">
    <div class="container p-0 pt-1">
        <div class="row">
            <div class="col-lg-3">
                <p><span class="text-muted">Tel. Numeris: </span>+37060753595</p>
            </div>
            <div class="col-lg-3">
                <p><span class="text-muted">El. Paštas: </span>info@logerma.lt</p>
            </div>
            <div class="col-lg-3"></div>

            <div class="col-lg-3 text-right">
                <a href="#" class="text-dark mr-2"><img style="width:20px;height:20px" src="img/lithuania.png" alt=""></a>
                <a href="#" class="text-dark mr-2"><img style="width:20px;height:20px" src="img/germany.png" alt=""></a>
                <a href="#" class="text-dark mr-2"><img style="width:20px;height:20px" src="img/Netherland.png" alt=""></a>
                <a href="#" class="text-dark mr-2"><img style="width:20px;height:20px" src="img/usa.png" alt=""></a>        
            </div>

        </div>
    </div>
</div>

<!-- navigation bar -->

<div class="navigation sticky-top bg-light">
<div class="container ">
    <nav id="navbar-scroll" class="navbar navbar-light navbar-expand-lg">
        <a class="navbar-brand" href="index.html"><img src="img/logo2.png" alt="" class="img-fluid"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#submenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="submenu">

        <div id="actionbar" class="d-block d-lg-none">
                <div class="container p-0 pt-1">
                    <div class="row">
                        <div class="col-lg-3">
                            <p><span class="text-muted">Tel. Numeris: </span>+37060753595</p>
                        </div>
                        <div class="col-lg-3">
                            <p><span class="text-muted">El. Paštas: </span>info@logerma.lt</p>
                        </div>
                        <div class="col-lg-3"></div>

                        <div class="col-lg-3 text-right">
                            <a href="#" class="text-dark mr-2"><img style="width:20px;height:20px" src="img/lithuania.png" alt=""></a>
                            <a href="#" class="text-dark mr-2"><img style="width:20px;height:20px" src="img/germany.png" alt=""></a>
                            <a href="#" class="text-dark mr-2"><img style="width:20px;height:20px" src="img/Netherland.png" alt=""></a>
                            <a href="#" class="text-dark mr-2"><img style="width:20px;height:20px" src="img/usa.png" alt=""></a>        
                        </div>

                    </div>
                </div>
            </div>





            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link text-dark active" href="#page-top"><strong>PRADŽIA</strong></a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#about"><strong>APIE MUS</strong></a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#service"><strong>PASLAUGOS</strong></a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="#contact"><strong>KONTAKTAI</strong></a></li>

            </ul>
        </div>
    </nav>
</div>
</div>

<!-- Slider section -->

<section id="s6" class="mb-5 " >
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="img/img1.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                          <img src="img/img2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="img/img3.jpg" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>


            </div>
        </div>
    </div>
</section>

<!-- Section 2 -->

<section id="about">
    <div class="container" >
        <div class="row">
            
            <div class="col-12 col-lg-4">
                <h4 class="text-muted">LOGERMA</h4>
                <h1><strong>Apie mus</strong></h1>
            </div>

            <div class="col-12 col-lg-8">
                <p>
                    UAB „Logerma“ – krovinių gabenimas oru ir žeme, aptarnavimas ir saugojimas, muitinės tarpininko paslaugos, pavojingų krovinių paruošimas transportavimui oru.
                    <br> <br>
                    Terminalas aptarnauja tokius vežėjus kaip Finnair, Turkish Airlines, LOT Polish Airlines, Aeroflot, Kales Airline Services, EAT, Air China, China Cargo Airlines, Singapore Airlines, Emirates, Qatar Airways, Norwegian Air Shuttle, Leisure Cargo.
                    <br>
                    <p class="text-dark">
                        <strong>Reguliuojamo agento numeris LT/RA/00001-01</strong>
                    </p>
                </p>
            </div>


        </div>
    </div>
</section>

<!-- Section 3  -->

<section>
    <div class="container-fluid">


    <div class="row justify-content-center">
    <!-- card 1 -->

            <div class="col-12 col-md-6 col-lg-3 p-md-4 m-4 rounded about-card" data-aos="fade-up" >
                <div class="mb-4 mt-1">
                    <span class="text-muted" style="font-size:28px"><i class="fas fa-home"></i></span>
                </div>
                <h4>The terminal</h4>
                <p class=" mt-3">
                    At Vilnius Airport we are one of the most versatile cargo service terminals. Working together, we offer you the support you need and the services you can trust.
                </p>
            </div>

    <!-- card 2 -->

            <div class="col-12 col-md-6 col-lg-3 p-md-4 m-4 rounded about-card" data-aos="fade-up">
                <div class="mb-4 mt-1">
                    <span class="text-muted" style="font-size:28px"><i class="fas fa-tags"></i></span>
                </div>
                <h4>Packaging and labeling</h4>
                <p class=" mt-3">
                    We will take care of your cargo! We provide the preparation of dangerous goods for transportation by air. Properly packed cargo will ensure safe and quick transportation. Delicate handling to the last detail.
                </p>
            </div>

    <!-- card 3 -->
            <div class="col-12 col-md-6 col-lg-3 p-md-4 m-4 rounded about-card" data-aos="fade-up">
                <div class="mb-4 mt-1">
                    <span class="text-muted" style="font-size:28px"><i class="fas fa-snowflake"></i></span>
                </div>
                <h4>Temperature loads</h4>
                <p class=" mt-3">
                    For perishable goods, we offer 200 m³ refrigerators (temp +2 + 8 ° C) with a control and monitoring system that ensures long-term maintenance of the required temperature.
                </p>
            </div>

        </div>


<div id="service" ></div>
<!-- second row -->

    <div class="row justify-content-center">
    <!-- card 1 -->
        <!-- <div class="col-1"></div> -->
            <div class="col-12 col-md-6 col-lg-3 p-md-4 m-4 rounded about-card" data-aos="fade-up">
                <div class="mb-4 mt-1">
                    <span class="text-muted" style="font-size:28px"><i class="fas fa-box"></i></span>
                </div>
                <h4>Consolidation and breakdown</h4>
                <p class=" mt-3">
                    We pay special attention to each of your consolidated shipments. We sort, store and manage your consolidated cargo according to its individual needs.
                </p>
            </div>

    <!-- card 2 -->
            <div class="col-12 col-md-6 col-lg-3 p-md-4 m-4 rounded about-card" data-aos="fade-up">
                <div class="mb-4 mt-1">
                    <span class="text-muted" style="font-size:28px"><i class="fas fa-toolbox"></i></span>
                </div>
                <h4>Storage of dangerous and valuable goods</h4>
                <p class=" mt-3">
                    We protect your cargo! The warehouse is equipped with advanced security systems that work together to secure, control and protect your cargo, even if it is radioactive.
                </p>
            </div>

    <!-- card 3 -->
            <div class="col-12 col-md-6 col-lg-3 p-md-4 m-4 rounded about-card" data-aos="fade-up">
                <div class="mb-4 mt-1">
                    <span class="text-muted" style="font-size:28px"><i class="fas fa-plane"></i></span>
                </div>
                <h4>Customs procedures</h4>
                <p class=" mt-3">
                    As a customs warehouse, our experience and knowledge in the field of air cargo handling is deep. Export, import and transit are procedures that receive special attention. Simplified procedures ensure not only fast but also high quality customs clearance.
                </p>
            </div>
    

        </div>
    </div>
</section>


<!-- Section 4  -->

<section>
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6">
                <h1><b>Our services</b></h1>
                <div class="our-service rounded" data-aos="fade-right">
                    <div class="p-4 mt-4 ">
                        <h4>Customs brokerage services</h4>
                        <ul>
                            <li>Customs clearance of <b>T1, IM, EX</b> customs procedures;</li>
                            <li>Registration of cargo and accompanying documents;</li>
                            <li>Representation of clients in customs;</li>
                            <li>Consulting clients on customs clearance;</li>
                            <li>Provision of guarantees for import and transit procedures.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- form -->

    <div class="col-12 col-lg-6">
                <h1><b>&nbsp;</b></h1>
                <div class="our-service rounded" data-aos="fade-right">
                    <div class="p-4 mt-4 ">
                        <h4>write to us</h4>
                        <form action="index.php" method="POST">
                            <input type="text" name="name" class="form-control" placeholder="vardas...">
                            <input type="email" name="email" class="form-control" placeholder="Jusu E-mail'as..." required>
                            <input type="number" name="phone" class="form-control" placeholder="Telefono numeris...">
                            <textarea  name="message" id="" cols="15" rows="3" placeholder="Message..." class="form-control"></textarea>
                            <input type="submit" name="form-submit" value="Send" class="btn btn-primary btn-sm">
                            <br>
                            <?php 
                                if (isset($_REQUEST['mailSendSuccessfull'])) {
                                    echo "<h5 class='text-success'>Thank you for contact with us! We will inform you as soon as possible.</h5>";
                                }

                             ?>
                        </form>
                    </div>
                </div>
            </div>

    </div>
</section>

<!-- Map -->

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12">
            <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19545.0294674287!2d-0.9194209975428532!3d52.24104625841027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48770ef79936a34b%3A0x14d19a0e4379082b!2sGlasgow%20St%2C%20Northampton%20NN5%205BL%2C%20UK!5e0!3m2!1sen!2sbd!4v1579202226806!5m2!1sen!2sbd" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

        </div>
    </div>
    
</div>


<!-- Information -->

<div class="container-fluid py-5 text-light" style="background: #136fa4">
    
    <div class="container">
        <div class="row">

        <div class="col-12 col-md-6 col-lg-3">
            <h5>GET IN TOUCH</h5>
            <br>
            <p>
                J. Dobkevičiaus str. 8, LT-02189 Vilnius, Lithuania
            </p>
            <br>
            <p><span><i class="fas fa-phone"></i> </span>8 5 232 92 69</p>
            <p><span><i class="fas fa-envelope"></i> </span>info@logerma.lt</p>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <h5>ACCOUNTANT</h5>
            <br>

            <p><span><i class="fas fa-phone"></i> </span>8 5 232 92 69</p>
            <p><span><i class="fas fa-envelope"></i> </span>info@logerma.lt</p>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <h5>THE MANAGER</h5>
            <br>

            <p><span><i class="fas fa-phone"></i> </span>8 5 232 92 69</p>
            <p><span><i class="fas fa-envelope"></i> </span>info@logerma.lt</p>
        </div>


    </div>
    </div>
</div>

<footer id="contact">
    <div class="container py-4">
        <div class="row justify-content-between">
            
            <div class="col-12 col-md-3">
                <span>Copyright © 2019</span><br>
                <span>Web Designer Synergy Effect</span>
            </div>

            <div class="col-12 col-md-3 text-right">
                <a href="#" class="text-light">privacy policy</a>
            </div>
        
        </div>
    </div>
</footer>

<!--    html writing area     -->
    
    <script type="text/javascript" src="js/jquery-slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>  
    <script type="text/javascript" src="js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="js/aos.js"></script>  
    <script>
        $('.carousel').carousel({
            interval : 4000
        });
        AOS.init({
            duration:1000
        });
        
    </script>
    
</body>
</html>