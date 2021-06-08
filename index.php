<?php include __DIR__."/header.php"; ?>

<body data-spy="scroll" data-target=".navbar-collapse" data-new-gr-c-s-check-loaded="14.1014.0"
    data-gr-ext-installed="">
    <div class="wrapper">
        <div class="preloader" style="display: none;">
            <div class="loaded atebits-loader" style="display: none;">&nbsp;</div>
        </div>

        <div class="culmn home2">
            <nav class="navbar home2_menu navbar-default navbar-fixed navbar-mobile bootsnav on">
                <div class="container">

                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand"><img src="/img/h2logo.png" class="logo" alt=""></a>
                    </div>


                    <div class="collapse navbar-collapse" id="navbar-menu">

                        <ul class="nav navbar-nav navbar-right text-uppercase" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#service">Service</a></li>
                            <li><a href="#portfolio">Fleet</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#footer_weidget">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section id="home" class="home home2banner">
                <div class="home-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_home main_home2 padding-top-90 padding-bottom-90">
                                <div class="home_slider_area home2_slider_area">
                                    <div class="single_home_slider">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="request_quot_area margin-top-80">
                                                    <div class="heading_request">
                                                        <div class="row">
                                                            <div class="col-xs-2">
                                                                <i class="fa fa-file-o"></i>
                                                            </div>
                                                            <div class="col-xs-10">
                                                                <h4>Request a quote</h4>
                                                                <span>Feel Free To Ask</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-form">
                                                        <div class="col-sm-12">
                                                            <div id="quote-error"></div>
                                                        </div>

                                                        <?php 
                                                            if(isset($_POST["email"])){
                                                                $mail = $_POST["email"];
                                                                $content = sprintf("
                                                                Query: %s\n
                                                                User Details:
                                                                Name: %s
                                                                Subject: %s
                                                                Email ID: %s\n
                                                                ", $_POST["message"], $_POST["name"], $_POST["subject"],$mail);

                                                                mail("admin@overlandshipping", 'Tracking Site Query', $content);
                                                                $success = sprintf('<div class="notice">Thankyou for your message, we will try our best to respond to your inquiry.</div>');
                                                            }
                                                        ?>

                                                        <!-- <?php if($myinfo) : ?>
                                                        <div class="row">
                                                            <address>
                                                                <?= $address; ?>
                                                            </address>

                                                            <span class="text-big colored">
                                                                <?= $number; ?>
                                                            </span>
                                                            <br>

                                                            <a href="mailto:"><?=$email;?></a>
                                                        </div>
                                                        <?php endif; ?> -->

                                                        <form method="post"
                                                            class="contact-form" id="quoteform">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <input type="text" id="name" name="name"
                                                                            class="form-control input-sm" placeholder="Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <select class="form-control input-sm" name="shipform"
                                                                            id="shipform" required="">
                                                                            <option>Ship From </option>
                                                                            <option>Ship From 1</option>
                                                                            <option>Ship From 2</option>
                                                                            <option>Ship From 3</option>
                                                                            <option>Ship From 4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <select class="form-control input-sm" name="shipto"
                                                                            id="shipto" required="">
                                                                            <option>Ship To</option>
                                                                            <option>Ship To 1</option>
                                                                            <option>Ship To 2</option>
                                                                            <option>Ship To 3</option>
                                                                            <option>Ship To 4</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <input type="email" class="form-control input-sm"
                                                                            name="email" id="email" placeholder="Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <textarea class="form-control input-sm" id="message"
                                                                            name="message" rows="3"
                                                                            placeholder="Message (if any)"
                                                                            data-loading-text="Loading..."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 margin-top-20 text-center">
                                                                    <input type="submit" id="submit" value="Send message"
                                                                        class="btn btn-lg">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="slider_home2 padding-top-80 padding-bottom-80 slick-slider">
                                                    <div class="home_slider_text margin-top-80 textwhite" data-slick-index="0"
                                                        aria-hidden="true" tabindex="-1" role="option"
                                                        aria-describedby="slick-slide00" style="width: 576px;">
                                                        <h1>World Class Logistics</h1>
                                                        <p class="margin-bottom-40">The mate was a mighty
                                                            sailing man the skipper brave and sure five
                                                            passengers set sail that day for a three hour tour a
                                                            three hour tour thank you for being a friend up
                                                            through the ground came
                                                            a bubbling
                                                            crude oil that is got kind of distribution in the
                                                            sea shore of perth
                                                            unpacking</p>
                                                        <a href="" class="h22 btn btn-default m-r-15" tabindex="-1">Purchase</a>
                                                        <a href="" class="h22 btn btn-default" tabindex="-1">Learn
                                                            More</a>
                                                    </div>
                                                    <div class="home_slider_text margin-top-80 textwhite" data-slick-index="1"
                                                        aria-hidden="false" tabindex="-1" role="option"
                                                        aria-describedby="slick-slide01" style="width: 576px;">
                                                        <h1>World Class Logistics</h1>
                                                        <p class="margin-bottom-40">The mate was a mighty
                                                            sailing man the skipper brave and sure five
                                                            passengers set sail that day for a three hour tour a
                                                            three hour tour thank you for being a friend up
                                                            through the ground came
                                                            a bubbling
                                                            crude oil that is got kind of distribution in the
                                                            sea shore of perth
                                                            unpacking</p>
                                                        <a href="" class="h22 btn btn-default m-r-15" tabindex="0">Purchase</a>
                                                        <a href="" class="h22 btn btn-default" tabindex="0">Learn
                                                            More</a>
                                                    </div>
                                                    <div class="home_slider_text margin-top-80 textwhite" data-slick-index="2"
                                                        aria-hidden="true" tabindex="-1" role="option"
                                                        aria-describedby="slick-slide02" style="width: 576px;">
                                                        <h1>World Class Logistics</h1>
                                                        <p class="margin-bottom-40">The mate was a mighty
                                                            sailing man the skipper brave and sure five
                                                            passengers set sail that day for a three hour tour a
                                                            three hour tour thank you for being a friend up
                                                            through the ground came
                                                            a bubbling
                                                            crude oil that is got kind of distribution in the
                                                            sea shore of perth
                                                            unpacking</p>
                                                        <a href="" class="h22 btn btn-default m-r-15" tabindex="-1">Purchase</a>
                                                        <a href="" class="h22 btn btn-default" tabindex="-1">Learn
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="main_service home2_service p_t__b textwhite">
                            <div class="head_title text-center textblack">
                                <h2>Reasons To Choose Us</h2>
                                <p>Michael Knight a young loner on a crusade to champion the cause of the innocent the
                                    helpless the powerless in
                                    a world of criminals who operate above the law</p>
                                <div class="blackdividerauto"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single_service margin-top-40">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <div class="single_text_icon text-center">
                                                <img src="/img/s1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-10">
                                            <div class="single_service_text_right textblack">
                                                <h6>Safety Packaging</h6>
                                                <p>I have always wanted to have a neighbor just like you. I've always
                                                    wanted to live in
                                                    a neighborhood with you thank you for being a friend <a href="">
                                                        Read more...</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single_service margin-top-40">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <div class="single_text_icon text-center">
                                                <img src="/img/s2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-10">
                                            <div class="single_service_text_right textblack">
                                                <h6>Safety Packaging</h6>
                                                <p>I have always wanted to have a neighbor just like you. I've always
                                                    wanted to live in
                                                    a neighborhood with you thank you for being a friend <a href="">
                                                        Read more...</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single_service margin-top-40">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <div class="single_text_icon text-center">
                                                <img src="/img/s3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-10">
                                            <div class="single_service_text_right textblack">
                                                <h6>Safety Packaging</h6>
                                                <p>I have always wanted to have a neighbor just like you. I've always
                                                    wanted to live in
                                                    a neighborhood with you thank you for being a friend <a href="">
                                                        Read more...</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single_service margin-top-40">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <div class="single_text_icon text-center">
                                                <img src="/img/s4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-10">
                                            <div class="single_service_text_right textblack">
                                                <h6>Safety Packaging</h6>
                                                <p>I have always wanted to have a neighbor just like you. I've always
                                                    wanted to live in
                                                    a neighborhood with you thank you for being a friend <a href="">
                                                        Read more...</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="counter" class="counter counter_home1">
                <div class="home-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_counter_area home2_main_counter sections textwhite">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="single_count_icon text-center margin-top-20">
                                                    <img src="/img/c1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="single_counter_item">
                                                    <h2 class="statistic-counter wow fadeInDown"
                                                        style="visibility: hidden; animation-name: none;">10258</h2>
                                                    <p class="wow fadeInUp text-uppercase wow fadeInUp"
                                                        style="visibility: hidden; animation-name: none;">Projects Done
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="single_count_icon text-center margin-top-20">
                                                    <img src="/img/c2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="single_counter_item">
                                                    <h2 class="statistic-counter wow fadeInDown"
                                                        style="visibility: hidden; animation-name: none;">218</h2>
                                                    <p class="wow fadeInUp text-uppercase wow fadeInUp"
                                                        style="visibility: hidden; animation-name: none;">Official
                                                        Branches</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="single_count_icon text-center margin-top-20">
                                                    <img src="/img/c3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="single_counter_item">
                                                    <h2 class="statistic-counter wow fadeInDown"
                                                        style="visibility: hidden; animation-name: none;">193</h2>
                                                    <p class="wow fadeInUp text-uppercase wow fadeInUp"
                                                        style="visibility: hidden; animation-name: none;">Countries
                                                        Covered</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="single_count_icon text-center margin-top-20">
                                                    <img src="/img/c4.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="single_counter_item">
                                                    <h2 class="statistic-counter wow fadeInDown"
                                                        style="visibility: hidden; animation-name: none;">9807</h2>
                                                    <p class="wow fadeInUp text-uppercase wow fadeInUp"
                                                        style="visibility: hidden; animation-name: none;">Satisfied
                                                        Clients</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portfolio" class="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="main_mix_content home2_main_mix_content sections">
                            <div class="head_title text-center textblack">
                                <h2>Our vehicle Fleet</h2>
                                <p>Michael Knight a young loner on a crusade to champion the cause of the innocent the
                                    helpless the powerless in
                                    a world of criminals who operate above the law</p>
                                <div class="blackdividerauto"></div>
                            </div>
                            <div class="col-sm-12">
                                <div class="main_mix_menu textwhite text-center text-uppercase">
                                    <ul class="fleet_mix_skew_menu">
                                        <li class="filter active" data-filter="all"><span class="filter_text">All</span>
                                        </li>
                                        <li class="filter" data-filter=".cat1"><span class="filter_text">Road
                                                Ways</span></li>
                                        <li class="filter" data-filter=".cat2"><span class="filter_text">Air
                                                Freight</span></li>
                                        <li class="filter" data-filter=".cat3"><span class="filter_text">Ocean
                                                Cargo</span></li>
                                        <li class="filter" data-filter=".cat4"><span class="filter_text">Other
                                                Shifting</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div id="mixcontent"
                                        class="mixcontent home1_mix_content text-center text-uppercase wow slideInUp"
                                        data-wow-dowration="700ms" style="visibility: hidden; animation-name: none;">
                                        <div class="col-sm-4 mix cat2 cat3" data-bound="" style="display: inline-block;">
                                            <div class="single_mixi_portfolio">
                                                <img src="/img/folio01.jpg" alt="">
                                                <span class="port_overfolio">
                                                    <span class="s_team_overlay_border">
                                                        <span class="caption_icon"><a href="/img/folio12.jpg"
                                                                class="portfolio-img"><i class="fa fa-eye"></i></a></span>
                                                        <span class="caption_icon"><a href="fleet-details.html"><i
                                                                    class="fa fa-link"></i></a></span>
                                                        <span class="caption">Ocean Freight</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mix cat1 cat2" style="display: inline-block;" data-bound="">
                                            <div class="single_mixi_portfolio">
                                                <img src="/img/folio02.jpg" alt="">
                                                <span class="port_overfolio">
                                                    <span class="s_team_overlay_border">
                                                        <span class="caption_icon"><a href="/img/folio12.jpg"
                                                                class="portfolio-img"><i class="fa fa-eye"></i></a></span>
                                                        <span class="caption_icon"><a href="fleet-details.html"><i
                                                                    class="fa fa-link"></i></a></span>
                                                        <span class="caption">Ocean Freight</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mix cat1 cat3" data-bound="" style="display: inline-block;">
                                            <div class="single_mixi_portfolio">
                                                <img src="/img/folio03.jpg" alt="">
                                                <span class="port_overfolio">
                                                    <span class="s_team_overlay_border">
                                                        <span class="caption_icon"><a href="/img/folio12.jpg"
                                                                class="portfolio-img"><i class="fa fa-eye"></i></a></span>
                                                        <span class="caption_icon"><a href="fleet-details.html"><i
                                                                    class="fa fa-link"></i></a></span>
                                                        <span class="caption">Ocean Freight</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mix cat2 cat1" style="display: inline-block;" data-bound="">
                                            <div class="single_mixi_portfolio">
                                                <img src="/img/folio04.jpg" alt="">
                                                <span class="port_overfolio">
                                                    <span class="s_team_overlay_border">
                                                        <span class="caption_icon"><a href="/img/folio12.jpg"
                                                                class="portfolio-img"><i class="fa fa-eye"></i></a></span>
                                                        <span class="caption_icon"><a href="fleet-details.html"><i
                                                                    class="fa fa-link"></i></a></span>
                                                        <span class="caption">Ocean Freight</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mix cat1 cat2 cat4" data-bound="" style="display: inline-block;">
                                            <div class="single_mixi_portfolio">
                                                <img src="/img/folio05.jpg" alt="">
                                                <span class="port_overfolio">
                                                    <span class="s_team_overlay_border">
                                                        <span class="caption_icon"><a href="/img/folio12.jpg"
                                                                class="portfolio-img"><i class="fa fa-eye"></i></a></span>
                                                        <span class="caption_icon"><a href="fleet-details.html"><i
                                                                    class="fa fa-link"></i></a></span>
                                                        <span class="caption">Ocean Freight</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mix cat2 cat3" style="display: inline-block;" data-bound="">
                                            <div class="single_mixi_portfolio">
                                                <img src="/img/folio06.jpg" alt="">
                                                <span class="port_overfolio">
                                                    <span class="s_team_overlay_border">
                                                        <span class="caption_icon"><a href="/img/folio12.jpg"
                                                                class="portfolio-img"><i class="fa fa-eye"></i></a></span>
                                                        <span class="caption_icon"><a href="fleet-details.html"><i
                                                                    class="fa fa-link"></i></a></span>
                                                        <span class="caption">Ocean Freight</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mixitup_btn_area text-center">
                                            <a href="" class="h22 btn btn-default btn-default-black">Load More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="mission" class="mission sections">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_mission home2_main_mission text-center">
                            <div class="col-md-4 no-padding">
                                <div class="single_mission single_mission_1 textwhite">
                                    <i class="fa fa-send"></i>
                                    <h6>Our Mission</h6>
                                    <p>fateful trip that started my way to where the air is sweet can you tell me
                                        how to get how to get to sesame street the movie star the professor</p>
                                    <a href="" class="h22 btn btn-default">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-4 no-padding">
                                <div class="single_mission single_mission_2 textwhite">
                                    <div class="home-overlay"></div>
                                    <div class="single_mission_video">
                                        <a href="/img/video/ocean.mp4" class="video-link"><i class="fa fa-play"></i></a>
                                        <p>Play Video</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 no-padding">
                                <div class="single_mission single_mission_3 textwhite">
                                    <i class="fa fa-folder-o"></i>
                                    <h6>Get NewsLetter</h6>
                                    <p>away fateful trip that started my way to where the air is sweet can you tell me
                                        how to get sea</p>
                                    <form class="form-inline margin-top-40">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your E-mail Address">
                                            <button type="submit" class=""><span class="icon icon-Mail"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="pricing" class="pricing">
                <div class="container">
                    <div class="row">
                        <div class="main_pricing_area home2_main_pricing_area sections">
                            <div class="head_title text-center">
                                <h2>OUR PRICING</h2>

                                <p>Michael Knight a young loner on a crusade to champion the cause of the innocent the
                                    helpless the powerless in a world of criminals who operate above the law</p>

                                <div class="blackdividerauto"></div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single_pricing">
                                    <div class="pricing_head">
                                        <div class="overlay_skew"></div>
                                        <h3>Basic Plan</h3>
                                        <div class="pricing_border">
                                            <div class="pricing_price">
                                                <div class="p_r text-center"><span>$</span> 79</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing_body">
                                        <div class="pricing_body_border hidden-sm-down"></div>
                                        <ul>
                                            <li>Packaging</li>
                                            <li>Safety Warehousing</li>
                                            <li>Road Transport</li>
                                            <li>Delivery</li>
                                            <li>Customer Help Line</li>
                                        </ul>
                                        <a href="" class="h22 btn btn-default btn-default-black btn-raund">Purchase</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single_pricing pricing_business">
                                    <div class="pricing_head ">
                                        <div class="overlay_skew"></div>
                                        <h3>Standard Plan</h3>
                                        <div class="pricing_border">
                                            <div class="pricing_price">
                                                <div class="p_r text-center"><span>$</span> 89</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing_body">
                                        <div class="pricing_body_border hidden-sm-down"></div>
                                        <ul>
                                            <li>Packaging</li>
                                            <li>Safety Warehousing</li>
                                            <li>Road Transport</li>
                                            <li>Delivery</li>
                                            <li>Customer Help Line</li>
                                        </ul>
                                        <a href="" class="h22 btn btn-md btn-raund">Purchase</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-sm-pull-3 col-md-pull-0 col-xs-12">
                                <div class="single_pricing">
                                    <div class="pricing_head">
                                        <div class="overlay_skew"></div>
                                        <h3>Business Plan</h3>
                                        <div class="pricing_border">
                                            <div class="pricing_price">
                                                <div class="p_r text-center"><span>$</span> 99</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing_body">
                                        <div class="pricing_body_border hidden-sm-down"></div>
                                        <ul>
                                            <li>Packaging</li>
                                            <li>Safety Warehousing</li>
                                            <li>Road Transport</li>
                                            <li>Delivery</li>
                                            <li>Customer Help Line</li>
                                        </ul>
                                        <a href="" class="h22 btn btn-default btn-default-black btn-raund">Purchase</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="team" class="team home2_team">
                <div class="home-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_team_area home2_main_team_area textwhite wow fadeInUp text-center margin-top-80"
                                style="visibility: hidden; animation-name: none;">
                                <div class="col-md-3">
                                    <div class="head_title text-center">
                                        <p class="head_top">The Talented People</p>
                                        <h2>Our Team</h2>
                                    </div>
                                </div>
                                <div class="main_team_slider2 slick-slider">
                                    <div class="col-md-3" data-slick-index="0" aria-hidden="false" tabindex="-1"
                                        role="option" aria-describedby="slick-slide10" style="width: 240px;">
                                        <div class="single_team margin-bottom-40">
                                            <div class="single_team_img">
                                                <img src="/img/team1.jpg" alt="">
                                                <div class="single_team_overlay">
                                                    <div class="team_socail margin-bottom-20">
                                                        <a href="" tabindex="0"><i class="fa fa-facebook"></i></a>
                                                        <a href="" tabindex="0"><i class="fa fa-google-plus"></i></a>
                                                        <a href="" tabindex="0"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                    <p>Transporting Manager</p>
                                                </div>
                                            </div>
                                            <div class="single_team_text">
                                                <h6>Albert Smith</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" data-slick-index="1" aria-hidden="false" tabindex="-1"
                                        role="option" aria-describedby="slick-slide11" style="width: 240px;">
                                        <div class="single_team margin-bottom-40">
                                            <div class="single_team_img">
                                                <img src="/img/team2.jpg" alt="">
                                                <div class="single_team_overlay">
                                                    <div class="team_socail margin-bottom-20">
                                                        <a href="" tabindex="0"><i class="fa fa-facebook"></i></a>
                                                        <a href="" tabindex="0"><i class="fa fa-google-plus"></i></a>
                                                        <a href="" tabindex="0"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                    <p>Transporting Manager</p>
                                                </div>
                                            </div>
                                            <div class="single_team_text">
                                                <h6>John Abraham</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" data-slick-index="2" aria-hidden="false" tabindex="-1"
                                        role="option" aria-describedby="slick-slide12" style="width: 240px;">
                                        <div class="single_team margin-bottom-40">
                                            <div class="single_team_img">
                                                <img src="/img/team3.jpg" alt="">
                                                <div class="single_team_overlay">
                                                    <div class="team_socail margin-bottom-20">
                                                        <a href="" tabindex="0"><i class="fa fa-facebook"></i></a>
                                                        <a href="" tabindex="0"><i class="fa fa-google-plus"></i></a>
                                                        <a href="" tabindex="0"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                    <p>Transporting Manager</p>
                                                </div>
                                            </div>
                                            <div class="single_team_text">
                                                <h6>William Sharles</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" data-slick-index="3" aria-hidden="true" tabindex="-1"
                                        role="option" aria-describedby="slick-slide13" style="width: 240px;">
                                        <div class="single_team margin-bottom-40">
                                            <div class="single_team_img">
                                                <img src="/img/team1.jpg" alt="">
                                                <div class="single_team_overlay">
                                                    <div class="team_socail margin-bottom-20">
                                                        <a href="" tabindex="-1"><i class="fa fa-facebook"></i></a>
                                                        <a href="" tabindex="-1"><i class="fa fa-google-plus"></i></a>
                                                        <a href="" tabindex="-1"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                    <p>Transporting Manager</p>
                                                </div>
                                            </div>
                                            <div class="single_team_text">
                                                <h6>William Sharles</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" data-slick-index="4" aria-hidden="true" tabindex="-1"
                                        role="option" aria-describedby="slick-slide14" style="width: 240px;">
                                        <div class="single_team margin-bottom-40">
                                            <div class="single_team_img">
                                                <img src="/img/team2.jpg" alt="">
                                                <div class="single_team_overlay">
                                                    <div class="team_socail margin-bottom-20">
                                                        <a href="" tabindex="-1"><i class="fa fa-facebook"></i></a>
                                                        <a href="" tabindex="-1"><i class="fa fa-google-plus"></i></a>
                                                        <a href="" tabindex="-1"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                    <p>Transporting Manager</p>
                                                </div>
                                            </div>
                                            <div class="single_team_text">
                                                <h6>William Sharles</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" data-slick-index="5" aria-hidden="true" tabindex="-1"
                                        role="option" aria-describedby="slick-slide15" style="width: 240px;">
                                        <div class="single_team margin-bottom-40">
                                            <div class="single_team_img">
                                                <img src="/img/team3.jpg" alt="">
                                                <div class="single_team_overlay">
                                                    <div class="team_socail margin-bottom-20">
                                                        <a href="" tabindex="-1"><i class="fa fa-facebook"></i></a>
                                                        <a href="" tabindex="-1"><i class="fa fa-google-plus"></i></a>
                                                        <a href="" tabindex="-1"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                    <p>Transporting Manager</p>
                                                </div>
                                            </div>
                                            <div class="single_team_text">
                                                <h6>William Sharles</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="testimonial" class="testimonial home2_testimonial sections">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_testimonial home2_main_testimonial">
                            <header class="head_title text-center">
                                <h2>What People Says</h2>
                                <p>Michael Knight a young loner on a crusade to champion the cause of the innocent the
                                    helpless
                                    the powerless in a world of criminals who operate above the law</p>
                                <div class="blackdividerauto"></div>
                            </header>
                            <div class="col-sm-12 no-padding" data-wow-delay="0.2s">
                                <div class="carousel slide" data-ride="carousel" id="quote-carousel">

                                    <ol class="carousel-indicators">
                                        <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                            <img class="img-responsive " src="/img/clogo1.png" alt="">

                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="1" class="">
                                            <img class="img-responsive" src="/img/clogo2.png" alt="">

                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="2" class="">
                                            <img class="img-responsive" src="/img/clogo3.png" alt="">
                                            <div class="hover_border"></div>
                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="3" class="">
                                            <img class="img-responsive" src="/img/clogo4.png" alt="">

                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="4" class="">
                                            <img class="img-responsive" src="/img/clogo5.png" alt="">

                                        </li>
                                        <li data-target="#quote-carousel" data-slide-to="5" class="">
                                            <img class="img-responsive" src="/img/clogo6.png" alt="">

                                        </li>
                                    </ol>

                                    <div class="carousel-inner text-center margin-top-30">

                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <p class="author"><strong>Leo Martin,</strong> CEO - Aoc Ltd.,</p>
                                                    <p>“Typi non habent claritatem insitam; est usus legentis in iis qui
                                                        facit eorum claritatem.
                                                        Investigationes demonstraverunt lectores legere me lius quod ii
                                                        legunt saepius. Claritas est etiam processus
                                                        dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                                        est notare quam littera gothica, quam nunc putamus
                                                        parum claram, anteposuerit litterarum formas humanitatis per
                                                        seacula quarta decima et quinta decima. ”
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <p class="author"><strong>Leo Martin,</strong> CEO - Aoc Ltd.,</p>
                                                    <p>“Typi non habent claritatem insitam; est usus legentis in iis qui
                                                        facit eorum claritatem.
                                                        Investigationes demonstraverunt lectores legere me lius quod ii
                                                        legunt saepius. Claritas est etiam processus
                                                        dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                                        est notare quam littera gothica, quam nunc putamus
                                                        parum claram, anteposuerit litterarum formas humanitatis per
                                                        seacula quarta decima et quinta decima. ”
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <p class="author"><strong>Leo Martin,</strong> CEO - Aoc Ltd.,</p>
                                                    <p>“Typi non habent claritatem insitam; est usus legentis in iis qui
                                                        facit eorum claritatem.
                                                        Investigationes demonstraverunt lectores legere me lius quod ii
                                                        legunt saepius. Claritas est etiam processus
                                                        dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                                        est notare quam littera gothica, quam nunc putamus
                                                        parum claram, anteposuerit litterarum formas humanitatis per
                                                        seacula quarta decima et quinta decima. ”
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <p class="author"><strong>Leo Martin,</strong> CEO - Aoc Ltd.,</p>
                                                    <p>“Typi non habent claritatem insitam; est usus legentis in iis qui
                                                        facit eorum claritatem.
                                                        Investigationes demonstraverunt lectores legere me lius quod ii
                                                        legunt saepius. Claritas est etiam processus
                                                        dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                                        est notare quam littera gothica, quam nunc putamus
                                                        parum claram, anteposuerit litterarum formas humanitatis per
                                                        seacula quarta decima et quinta decima. ”
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <p class="author"><strong>Leo Martin,</strong> CEO - Aoc Ltd.,</p>
                                                    <p>“Typi non habent claritatem insitam; est usus legentis in iis qui
                                                        facit eorum claritatem.
                                                        Investigationes demonstraverunt lectores legere me lius quod ii
                                                        legunt saepius. Claritas est etiam processus
                                                        dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                                        est notare quam littera gothica, quam nunc putamus
                                                        parum claram, anteposuerit litterarum formas humanitatis per
                                                        seacula quarta decima et quinta decima. ”
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="row">
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <p class="author"><strong>Leo Martin,</strong> CEO - Aoc Ltd.,</p>
                                                    <p>“Typi non habent claritatem insitam; est usus legentis in iis qui
                                                        facit eorum claritatem.
                                                        Investigationes demonstraverunt lectores legere me lius quod ii
                                                        legunt saepius. Claritas est etiam processus
                                                        dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                                        est notare quam littera gothica, quam nunc putamus
                                                        parum claram, anteposuerit litterarum formas humanitatis per
                                                        seacula quarta decima et quinta decima. ”
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="left carousel-control" href="#quote-carousel" role="button" data-slide="prev">
                                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#quote-carousel" role="button" data-slide="next">
                                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="footer_weidget" class="footer_weidget padding-bottom-80">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_f_weidget">
                                <div class="row">
                                    <div class="main_contact_info main_contact_info_home2">
                                        <div class="contact_info_content padding-top-90 padding-bottom-60 p_l_r">
                                            <div class="col-md-4">
                                                <div class="single_contact_info margin-top-40">
                                                    <div class="row">
                                                        <div class="col-xs-2">
                                                            <span class="icon icon-Pointer"></span>
                                                        </div>
                                                        <div class="col-xs-10">
                                                            <div class="single_info_text">
                                                                <h6>Our Location</h6>
                                                                <p>12, Design Street,</p>
                                                                <p>Melbourne - Australia 208</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="single_contact_info margin-top-40">
                                                    <div class="row">
                                                        <div class="col-xs-2">
                                                            <span class="icon icon-Phone2 "></span>
                                                        </div>
                                                        <div class="col-xs-10">
                                                            <div class="single_info_text">
                                                                <h6>Call Us On</h6>
                                                                <p>(01) 98 - 765 432 10,</p>
                                                                <p>(01) 90 - 123 456 78</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="single_contact_info margin-top-40">
                                                    <div class="row">
                                                        <div class="col-xs-2">
                                                            <span class="icon icon-Mail"></span>
                                                        </div>
                                                        <div class="col-xs-10">
                                                            <div class="single_info_text">
                                                                <h6>Send a Message</h6>
                                                                <p>admin@domain.com,</p>
                                                                <p>info@domain.com</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="main_weidget main_weidget_home2 margin-top-80 margin-bottom-80">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single_weidget margin-top-40">
                                                <h5>About Us</h5>
                                                <p>Above the law sunny days sweeping the clouds away fateful trip</p>
                                                <p>That started my way to where the air is sweet can you tell me how to
                                                    get how to get to sesame street.</p>
                                                <div class="wwidget_socail">
                                                    <a href=""><i class="fa fa-facebook"></i></a>
                                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                                    <a href=""><i class="fa fa-twitter"></i></a>
                                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single_weidget margin-top-40">
                                                <h5>Categories</h5>
                                                <ul>
                                                    <li><a href=""><i class="fa fa-life-bouy"></i> Road Transport
                                                            Services</a></li>
                                                    <li><a href=""><i class="fa fa-life-bouy"></i> Packaging Options</a>
                                                    </li>
                                                    <li><a href=""><i class="fa fa-life-bouy"></i> Safest Seaways
                                                            Cargo</a></li>
                                                    <li><a href=""><i class="fa fa-life-bouy"></i> Contract
                                                            Logistics</a></li>
                                                    <li><a href=""><i class="fa fa-life-bouy"></i> Field Experts
                                                            Support</a></li>
                                                    <li><a href=""><i class="fa fa-life-bouy"></i> Airways
                                                            Transportation</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single_weidget margin-top-40">
                                                <h5>Recent Posts</h5>
                                                <div class="single_widget_blog">
                                                    <div class="row">
                                                        <div class="col-xs-3 no-padding">
                                                            <div class="single_widget_img">
                                                                <img src="/img/recentpostimg1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-9">
                                                            <div class="single_widget_content">
                                                                <p>The movie star the professor and ann here</p>
                                                                <a href="">Mar 12 - 2016</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_widget_blog">
                                                    <div class="row">
                                                        <div class="col-xs-3 no-padding">
                                                            <div class="single_widget_img">
                                                                <img src="/img/recentpostimg2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-9">
                                                            <div class="single_widget_content">
                                                                <p>The movie star the professor and ann here</p>
                                                                <a href="">Mar 12 - 2016</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single_widget_blog">
                                                    <div class="row">
                                                        <div class="col-xs-3 no-padding">
                                                            <div class="single_widget_img">
                                                                <img src="/img/recentpostimg3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-9">
                                                            <div class="single_widget_content">
                                                                <p>The movie star the professor and ann here</p>
                                                                <a href="">Mar 12 - 2016</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="single_weidget s_wdt_time margin-top-40">
                                                <h5>Business Time</h5>
                                                <ul>
                                                    <li><a href="">Monday - Friday <span>09:00 am - 08:00pm</span></a>
                                                    </li>
                                                    <li><a href="">Saturday <span>09:00 am - 05:00pm</span></a></li>
                                                    <li><a href="">Vacations<span>All Sundays</span> <span>All Official
                                                                Holydays</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="footer">
                <div class="scrollup">
                    <a href="#"><i class="fa fa-chevron-up"></i></a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="copyright_text text-center">
                                            <p class=" wow fadeInRight" data-wow-duration="1s"
                                                style="visibility: hidden; animation-duration: 1s; animation-name: none;">
                                                © Copyright 2016. All Rights Reserved</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>


        <?php include __DIR__."/footer.php"; ?>
    </div>
</body>
</html>