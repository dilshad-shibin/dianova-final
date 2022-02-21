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
                            <h1>Covid Test Booking</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ***** Covid Test Area Start ***** -->
        <section class="appointment-area section">
                <div class="container">
                    <div class="appointment-form-two">
                        <div class="appointment-image" style="background-image:url(assets/img/test/covid.jpg)"></div>
                        <div class="form-wrap">
                            <div class="section-heading">
                                <span class="tagline">Covid Test Booking</span>
                                <h2 class="title">Fill up the form to get your seat</h2>
                            </div>
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-field">
                                            <input type="text" name="" id="" placeholder="Your Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">  
                                        <div class="input-field">
                                            <input type="text" name="" id="" placeholder="Your Age" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field">
                                            <input type="text" name="" id="" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="" id="" class="form-control">
                                            <option value="">Test Type</option>
                                            <option value="">RT-PCR Test</option>
                                            <option value="">Antigen Test</option>
                                            <option value="">Antibody Test</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="input-field">
                                            <button type="submit" class="apt-btn">Submit </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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