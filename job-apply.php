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
                            <h1>Job Apply</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- *****Careers Area Start ***** -->
        <section class="careers-area section ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="apply-head text-center">
                            <h2>Apply Now</h2>
                            <p>Please upload your resume and fill in the fields below to apply for your desired position.</p>
                        </div>
                        <div class="job-apply-area">
                            <form class="dianova-form-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-input-wrap">
                                            <input type="text" class="single-input" placeholder="First Name">
                                            <!-- <label class="">First Name</label> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input-wrap">
                                            <input type="email" class="single-input" placeholder="E-mail">
                                            <!-- <label>E-mail</label> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input-wrap">
                                            <input type="text" class="single-input" placeholder="Phone">
                                            <!-- <label>Phone</label> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input-wrap">
                                            <input type="text" class="single-input" placeholder="Applying for the of">
                                            <!-- <label>Applying for the of</label> -->
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input-wrap">
                                            <textarea class="single-input" cols="20" placeholder="Portfolio Link"></textarea>
                                            <!-- <label>Portfolio Link</label> -->
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input-wrap">
                                            <textarea class="single-input" cols="20" placeholder="Write Your Message"></textarea>
                                            <!-- <label>Write Your Message</label> -->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="custom-file dianova-file-input-wrap">
                                            <input type="file" class="dianova-file-input" id="sb-file-input">
                                            <label class="custom-file-label" for="sb-file-input">Upload Your Resume</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a class="btn btn-blue" href="#">Submit</a>
                                    </div> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Footer Area Start ======-->
        <?php include('footer/footer.php'); ?>

    </div>  

    <!-- ***** All jQuery Plugins ***** -->

    <?php include('footer/script.php'); ?>

</body>

</html>