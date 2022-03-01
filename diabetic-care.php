<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Dianova Lab</title>
    <!-- Style css -->
    <?php include('header/head.php'); ?>
</head>

<body class="homepage-1">

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fa fa-angle-up"></i>
    </div>

    <div class="main">
        <!-- ***** Header Start ***** -->
        <?php include('header/header.php'); ?>

        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-left">
                        <div class="bread-head">
                            <h1>Diabetic Care Packages</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ***** Inner Health Package Details Area Start ***** -->
        <section class="inner-package section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row package-inner-box align-items-center">
                            <div class="col-lg-6 p-0">
                                <div class="img">
                                    <img src="assets/img/package-inner/4.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pg-content">
                                    <h3>Diabetic Care Package(41 tests)</h3>
                                    <div class="star">
                                        <img src="assets/img/stras.png" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quia in voluptatem ea at quo omnis corporis temporibus velit odio.</p>
                                    <div class="rate">
                                        <p class="org">MRP: 1790/-</p>
                                        <p class="package-price">Package Price - 1250/- <span>(Savings 540/-)</span></p> 
                                    </div>
                                    <div class="btn-package">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal0">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** package FAQ Area Start ***** -->
        <section class="package-faq section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="head">
                            <h2>Package Details</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="faq-content">
                            <div class="accordion" id="dianova-accordion">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne">
                                                            Blood Sugar(Fasting) (1)
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseOne" class="collapse show" data-parent="#dianova-accordion">
                                                    <div class="card-body">
                                                        <p>Average Blood Glucose (Abg)</p>
                                                        <p>Hba1c</p>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                                            Blood Sugar After Food (3)
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-parent="#dianova-accordion">
                                                    <div class="card-body">
                                                        <p>Total Cholesterol</p>
                                                        <p>Hdl Cholesterol - Direct</p>
                                                        <p>Ldl Cholesterol - Direct</p>
                                                        <p>Ldl / Hdl Ratio</p>
                                                        <p>Non-hdl Cholesterol</p>
                                                        <p>Tc/ Hdl Cholesterol Ratio</p>
                                                        <p>Triglycerides</p>
                                                        <p>Vldl Cholestero</p>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree">
                                                            Lipid Profile (7)
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-parent="#dianova-accordion">
                                                    <div class="card-body">
                                                        <p>Serum Cholesterol</p>
                                                        <p>Serum Triglycerides</p>
                                                        <p>HDL Cholesterol</p>
                                                        <p>LDL Cholesterol</p>
                                                        <p>VLDL Cholesterol</p>
                                                        <p>CHOL / HDL Ratio</p>
                                                        <p>LDL / HDL Ratio</p>
                                                    </div>
                                                </div>
                                        </div>   

                                        <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTen">
                                                          Liver Function
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTen" class="collapse" data-parent="#dianova-accordion">
                                                    <div class="card-body"> 
                                                        <p>Urinary Bilirubin</p>
                                                        <p>Urine Blood</p>
                                                        <p>Urobilinogen	</p>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour">
                                                           Urea - Kidney (1)
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseFour" class="collapse" data-parent="#dianova-accordion">
                                                    <div class="card-body"> 
                                                        <p>Urinary Bilirubin</p>
                                                        <p>Urine Blood</p>
                                                        <p>Urobilinogen	</p>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFive">
                                                          Creatine - Kidney Function (4)
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseFive" class="collapse" data-parent="#dianova-accordion">
                                                    <div class="card-body"> 
                                                        <p>Lorem ipsum simple</p>
                                                        <p>Lorem ipsum simple</p>
                                                        <p>Lorem ipsum simple</p>
                                                        <p>Lorem ipsum simple</p>
                                                        <p>Lorem ipsum simple</p>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseSix">
                                                          HbA1c -  (24)
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseSix" class="collapse" data-parent="#dianova-accordion">
                                                    <div class="card-body"> 
                                                        <p>Lorem ipsum simple</p>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven">
                                                          Urine Microalbumin (1)
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseSeven" class="collapse" data-parent="#dianova-accordion">
                                                    <div class="card-body"> 
                                                        <p>Lorem ipsum simple</p>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="card my-2">
                                                <div class="card-header">
                                                    <h2>
                                                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseEight">
                                                          CBC
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseEight" class="collapse" data-parent="#dianova-accordion">
                                                    <div class="card-body"> 
                                                        <p>Lorem ipsum simple</p>
                                                    </div>
                                                </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="more-btn">
                            <a href="test-doc/test-2.pdf" download>Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Contact Banner Area Start ***** -->
        <?php include('footer/contact-footer2.php'); ?>

        <!--====== Footer Area Start ======-->
        <?php include('footer/footer.php'); ?>

    </div>  

    <!-- ***** All jQuery Plugins ***** -->

    <?php include('footer/script.php'); ?>

</body>

</html>