<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Codepanda</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base-2.css">
    <link rel="stylesheet" href="css/vendor-2.css">
    <link rel="stylesheet" href="css/main-2.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/faviconCircle.png" type="image/x-icon">
    <link rel="icon" href="images/faviconCircle.png" type="image/x-icon">

    <!-- Auto Clear Cache
    ================================================== -->
    <meta http-equiv="cache-control" content="no-cache">

</head>
<body id="top">
    <header class="s-header">
        <div class="header-logo">
            <a class="site-logo logo-icon" href="{{route('index')}}">
                <img class="panda-logo" src="images/LogoPanda.png" alt="Homepage">
            </a>
        </div>
    </header> <!-- end s-header -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/bamboo-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h1>
                    Terima Kasih
                </h1>
                <h3>Telah mengirimkan pesan pada kami.</h3>
                <h3>Pesan anda akan segera kami baca</h3>
                <h3>dalam waktu 3x24 jam.</h3>

                <div class="home-content__buttons">
                    <a href="{{route('index')}}" class="btn btn--stroke">
                        < Kembali
                    </a>
                </div>
            </div>
        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="mailto:codepanda.id@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i><Span>Email</Span></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/13668039/"><i class="fa fa-linkedin" aria-hidden="true"></i><span>Linkedin</span></a>
            </li>
            <li>
                <a href="https://www.instagram.com/codepanda/"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCAaiGwTB8Ma-GZU68vXbfPg"><i class="fa fa-youtube" aria-hidden="true"></i><span>Youtube</span></a>
            </li>
        </ul>
        <!-- end home-social -->

    </section> <!-- end s-home -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
