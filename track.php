<title>Track Order | <?=$title;?></title>
<?php include __DIR__."/header.php"; 

$today = strtotime(date('Y-m-d'));
if (isset($_GET["id"])) {
    $trackIDs    = explode("\n", $_GET["id"]);
    //debug($trackIDs);
    foreach ($trackIDs as $track) {
        $id      = trim($track);
        $info    = $db->get("track_IDs", "*", ["TrackingID" => $id]);
        if (empty($info)) {
        	$xx .= sprintf(
                '<div class="trackerror alert-danger"><span class="label label-danger  label-transparent">Invalid Tracking ID: %s</span></div>',
                $id
            );
        } 
        else {
        	$table = TRUE;
        	$design .= sprintf("<tr>
        				<td></td>
        				<td><b>Tracking FOR ID:</td>
        				<td>%s</b></td>
        				<td></td>
        			</tr>",$id);
        	for ($i = 1; $i < 16; $i++) {
                if (strtotime($info["time" . $i]) < $today) {
                    if(empty($info["time" . $i]) || is_null($info["time" . $i])) break;
                    $alert   = $info["text" . $i];
                    $design  .= sprintf("<tr>
                    						<td>%s</td>
                    						<td>%s</td>
                    						<td>%s</td>
                    						<td>%s</td>
                    					</tr>",
                    					$id,
                    					date("M d, Y", strtotime($info["time" . $i])),
                    					date("h:i A", strtotime($info["time" . $i])),
                    					$alert
                    				);
                }
            }
        }
        $design .= "<tr>
        				<td></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>";
   	}
}
?>

<body data-spy="scroll" data-target=".navbar-collapse" data-new-gr-c-s-check-loaded="14.1014.0"
    data-gr-ext-installed="">
    <style>
        .table thead {
            background-color: #006db7 !important;
        }

        .table thead tr th {
            color: #fff !important;
        }

        .table tr {
            border: 2px solid #333333;
        }

        .trackerror {
            text-align: center;
            margin-bottom: 15px;
        }

        .trackerror .label {
            font-size: 20px;
        }

        .alert-danger {
            background: #f52020;
            padding: 10px;
        }

        .alert-danger span {
            color: #fff;
            font-weight: 900;
        }
    </style>

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

                        <ul class="nav navbar-nav navbar-right text-uppercase" data-in="fadeInDown"
                            data-out="fadeOutUp">
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

            <section id="mission" class="mission sections">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_mission home2_main_mission text-center">
                            <div class="col-md-4 no-padding">
                                <div class="single_mission single_mission_1 textwhite">
                                    <i class="fa fa-send"></i>
                                    <h6>Our Services</h6>
                                    <p>
                                        <ul>
                                            <li>
                                                <i class="fa fa-li fa-long-arrow-right"></i>
                                                Overland transportation
                                            </li>

                                            <li>
                                                <i class="fa fa-li fa-long-arrow-right"></i>
                                                Ocean freight
                                            </li>

                                            <li>
                                                <i class="fa fa-li fa-long-arrow-right"></i>
                                                Air freight
                                            </li>

                                            <li>
                                                <i class="fa fa-li fa-long-arrow-right"></i>
                                                Consulting services
                                            </li>

                                            <li>
                                                <i class="fa fa-li fa-long-arrow-right"></i>
                                                Contract logistics
                                            </li>

                                            <li>
                                                <i class="fa fa-li fa-long-arrow-right"></i>
                                                End-to-end solutions
                                            </li>
                                        </ul>
                                    </p>
                                    <a href="" class="h22 btn btn-default">Learn More</a>
                                </div>
                            </div>
                            <div class="col-md-4 no-padding">
                                <div class="single_mission single_mission_2 textwhite">
                                    <div class="home-overlay"></div>
                                    <div class="single_mission_video">
                                        <a href="assets/images/video/ocean.mp4" class="video-link"><i
                                                class="fa fa-play"></i></a>
                                        <p>Play Video</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 no-padding">
                                <div class="single_mission single_mission_3 textwhite">
                                    <i class="fa fa-folder-o"></i>
                                    <h6>Track Your Load</h6>
                                    <p>
                                        Already have a shipping number? Please insert it below.
                                    </p>
                                    <form class="form-inline margin-top-40">
                                        <div class="form-group">
                                            <input type="text" name="id" class="form-control" placeholder="#PACKAGE ID">
                                            <button type="submit" class=""><span class="icon icon-Mail"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-md-4">
                            <div class="main_service home2_service p_t__b textwhite">
                                <div class="head_title text-center textblack">
                                    <h2>Our Services</h2>
                                </div>
                            </div>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    <a href="#">Overland transportation</a>
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    <a href="#">Ocean freight</a>
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    <a href="#">Air freight</a>
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    <a href="#">Consulting services</a>
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    <a href="#">Contract logistics</a>
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    <a href="#">End-to-end solutions</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <div class="main_service home2_service p_t__b textwhite">
                                <div class="head_title text-center textblack">
                                    <h2>Our Locations</h2>
                                </div>
                            </div>

                            <p>
                                SHIPMENT TRACKING covers over 150 locations all over the
                                globe plus numerous logistic partner companies from
                                different areas of supply chain.
                            </p>
                        </div>

                        <div class="col-md-4">
                            <div class="main_service home2_service p_t__b textwhite">
                                <div class="head_title text-center textblack">
                                    <h2>Track Your Load</h2>
                                </div>
                            </div>

                            <p>
                                Already have a shipping number? Please insert it below.
                            </p>

                            <form class="tracking">
                                <input class="package-id" name="id" type="text" placeholder="#PACKAGE ID">
                                <input type="submit" class="submit" value="">
                            </form>
                        </div> -->
                    </div>

                    <p>
                        <h6 style="color:green"><b>Kindly note due to COVID-19 and limited logistics routes availability
                                globally, some instances may take a while to update due to overload and extensive
                                screening as
                                packages are shipped from overseas, please be patient.</b>
                    </p>

                    <div class="row">
                        <!-- Tracking History -->
                        <div class="block-content">
                            <?=$xx;?>
                            <? if($table) { ?>
                            <div class="table-responsive">
                                <table class="table table-clean-paddings margin-bottom-0">
                                    <thead>
                                        <tr>
                                            <th>Tracking ID</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?=$design;?>
                                    </tbody>
                                </table>
                            </div>
                            <? } ?>
                        </div>
                        <!-- Tracking History End -->
                    </div>
                </div>
            </section>
        </div>

        <?php include __DIR__."/footer.php"; ?>
    </div>
</body>

</html>