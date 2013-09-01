<?php
session_start();


include_once ("/home/fod/www/projects/isar/sar/direct/globalvars.php");
include_once ("/home/fod/www/projects/isar/sar/direct/brandIDlocater.php");
include_once ("/home/fod/www/projects/isar/sar/direct/modelsDB.php");
include_once ("/home/fod/www/projects/isar/sar/direct/modelsDropDownMenu.php");
include_once ("/home/fod/www/projects/isar/sar/direct/submitButton.php");

// Get option from brands page;

global $submit, $selectBrand;

$chosenBrand = $_GET[$selectBrand];
$brandName = base64_decode ($chosenBrand);

$bid = brandIDlocater ($brandName); // Get brand_id from brandIDlocater
$models_db = models_db ($brandName, $bid); // Get Array from models_db

# No arguments for Height Alter functions

function appHeightAlter1 ()
{
    // Alter height style for "Apple" Models
    $heightStyle = <<<EOF
    <style type="text/css">
        body {
            height: 1810px !important;
        }
        #body {
            height: 1810px !important;
        }
        #upper-body {
            height: 1772px !important;
        }
        #models-area {
            height: 1160px !important;
        }
        #m-area {
            height: 1140px !important;
        }
        #md-area {
            height: 940px !important;
        }
    </style>
EOF;
    return $heightStyle;
}

function doroHeightAlter ()
{
    // Alter height style for "Apple" Models
    $heightStyle = <<<EOF
    <style type="text/css">
        body {
            height: 2210px !important;
        }
        #body {
            height: 2210px !important;
        }
        #upper-body {
            height: 2172px !important;
        }
        #models-area {
            height: 1560px !important;
        }
        #m-area {
            height: 1540px !important;
        }
        #md-area {
            height: 1340px !important;
        }
    </style>
EOF;
    return $heightStyle;
}

function appHeightAlter2()
{
    // Alter height style for "Apple" Models
    $heightStyle = <<<EOF
    <style type="text/css">
        body {
            height: 2160px !important;
        }
        #body {
            height: 2160px !important;
        }
        #upper-body {
            height: 2122px !important;
        }
        #models-area {
            height: 1510px !important;
        }
        #m-area {
            height: 1490px !important;
        }
        #md-area {
            height: 1290px !important;
        }
    </style>
EOF;
    return $heightStyle;
}

function motorolaHeightAlter ()
{
    $heightStyle = <<<EOF
    <style type="text/css">
        body {
            height: 1970px !important;
        }
        #body {
            height: 1970px !important;
        }
        #upper-body {
            height: 1932px !important;
        }
        #models-area {
            height: 1320px !important;
        }
        #m-area {
            height: 1300px !important;
        }
        #md-area {
            height: 1100px !important;
        }
    </style>
EOF;
    return $heightStyle;
}

if (isset ($brandName)) {
	switch ($brandName) {
    	case "Doro":
        	$style = doroHeightAlter ();
        	break;
    	case "Motorola":
        	$style = motorolaHeightAlter ();
        	break;
    	default:
        	if (preg_match ("/(BlackBerry)|(Sonim)|(Apple)/", $brandName)) {
            	$style = appHeightAlter1 ();
        	} else if (preg_match ("/(HTC)|(LG)|(Sony Ericsson)/", $brandName)) {
            	$style = appHeightAlter2 ();
        	} else {
            	$style = null;
        }
	}
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="">
        <title><?=$brandName."&reg;&nbsp;&ndash;&nbsp;Models&nbsp;Page&nbsp;&ndash;&nbsp;iSAR!";?></title>
        <link rel="stylesheet" media="screen" href="./static/css/models-layout.css" type="text/css">
        <link rel="stylesheet" media="screen" href="./static/css/models-styles.css" type="text/css">
        <link rel="stylesheet" media="screen" href="./static/css/models-content.css" type="text/css">
        <link rel="stylesheet" media="screen" href="./static/css/ticker-style.css" type="text/css">
        <link rel="stylesheet" media="screen" href="./static/css/app.css" type="text/css">        
        <?=$style."\n";?>
        <link rel="stylesheet" type="text/css" href="./../static/css/twitter-bootstrap/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="./../static/css/twitter-bootstrap/bootstrap-responsive.min.css">
		<noscript>
			<meta http-equiv="Refresh" content="0; url='./../noscript.html'">
		</noscript>
    </head>
    <body dir="ltr">
        <div id="body">
            <div id="upper-body">
                <div id="nav-area" class="wid">
                    <div id="nav">
                        <!--<div id="nav-features">
                            <div class="nav-features"><a href="./" target="_self" title="Apple&reg;"><span>Apple&reg;</span></a></div>
                            <div class="nav-features"><a href="./" target="_self" title="HTC&reg;"><span>HTC&reg;</span></a></div>
                            <div class="nav-features"><a href="./" target="_self" title="LG&reg;"><span>LG&reg;</span></a></div>
                            <div class="nav-features"><a href="./" target="_self" title="Nokia&reg;"><span>Nokia&reg;</span></a></div>
                            <div class="nav-features"><a href="./" target="_self" title="Samsung&reg;"><span>Samsung&reg;</span></a></div>
                            <div class="nav-features sony"><a href="./" target="_self" title="Sony Ericsson&reg;"><span>Sony Ericsson&reg;</span></a></div>
                        </div>-->
                        <div id="act-nav">
                            <div class="act-nav act-home"><a href="./../" target="_self" title="Home"><span>Home</span></a></div>
                            <div class="act-nav act-sar"><a href="./direct.php" target="_self" title="Specific Absorption Rate"><span>SAR</span></a></div>
                            <div class="act-nav act-about"><a href="./../about/" target="_self" title="About"><span>About</span></a></div>
                        </div>
                    </div>
                </div>
                <div id="logo-area" class="wid pos">
                    <!--<div id="logo">
                        <div>
                            <img alt="company logo" src="./static/img/logos/scaledLogo.gif" title="iSAR logo" style="">
                        </div>
                    </div>-->
                    <div id="app-logo">
                        <div>
                            <img alt="app logo" src="./static/img/logos/app-logo.gif" title="Direct logo" style="">
                        </div>
                    </div>
                </div>
                <div id="models-ticker" class="wid pos">
                    <div id="m-ticker">
                        <!--<div>
                            <ul id="js-news" class="js-hidden">
                                <li class="news-item"></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
                <div id="sel-model" class="wid pos">
                    <div title="Select Device Model">
                        <span>
                            select&nbsp;your&nbsp;device's&nbsp;model
                        </span>
                    </div>
                </div>
                <div id="models-area" class="wid pos">
                    <div id="ad-1"></div>
                    <div id="m-area">
                        <div id="brd-nm-area">
                            <div id="brd-name">
                                <span><?=$brandName."<sup style='font-size: 30px;'>&reg;</sup>";?></span>
                            </div>
                        </div>
                        <div id="sel-md-area">
                            <div id="sel-md">
                            <?php
                                switch ($brandName)
                                {
                                    case "Apple":
                                        print "<span style='left: 185px;'>know&nbsp;your&nbsp;device's&nbsp;SAR</span>";
                                        break;
                                    case "BlackBerry":
                                        print "<span style='left: 185px;'>know&nbsp;your&nbsp;device's&nbsp;SAR</span>";
                                        break;
                                    case "Doro":
                                        print "<span style='left: 185px;'>know&nbsp;your&nbsp;device's&nbsp;SAR</span>";
                                        break;
                                    case "Sonim":
                                        print "<span style='left: 185px;'>know&nbsp;your&nbsp;device's&nbsp;SAR</span>";
                                        break;
                                    default:
                                        print "<span style='left: 125px;'>click&nbsp;label&nbsp;below&nbsp;to&nbsp;view&nbsp;content</span>";               
                                }
                            ?>                                
                            </div>
                        </div>
                        <form method="post" action="./sar.php">
                            <?php
                                // get exclusive brand names
                                // PHP code goes here
                                
                                if (($brandName === "Samsung") || ($brandName === "Nokia"))
                                {
                                    print '<div id="md-area" style="overflow-y: scroll; overflow-x: hidden;">';
                                }
                                else
                                {
                                    print '<div id="md-area" style="">';
                                }
                                
                                switch ($brandName)
                                {
                                    case "Apple":
                                        print "<div id=''>";
                                        break;
                                    case "BlackBerry":
                                        print "<div id=''>";
                                        break;
                                    case "Doro":
                                        print "<div id=''>";
                                        break;
                                    case "Sonim":
                                        print "<div id=''>";
                                        break;
                                    default:
                                        print "<div id='accordion'>";               
                                }
                                
                            ?>
                              <?=modelsDropDownMenu($brandName, $models_db);?>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div id="ad-2"></div>
                </div>
                <div id="md-fm" class="wid pos">
                            <form method="post" action="./../forms/forms.php" title="Fill&nbsp;<?=$brandName?>&nbsp;Model&nbsp;Form" target="_self">
                                <input
                                    type="submit"
                                    value="<?='click&nbsp;if&nbsp;'.$brandName.'&reg;&nbsp;device&nbsp;not&nbsp;found?';?>"
                                    name="submit"
                                >
                                <input
                                    type="hidden"
                                    name="devices"
                                >
                            </form>
                </div>
                <div id="partners-area" class="wid pos">
                    <div id="partners">
                        <div class="partners" id="part-1">
                            <a href="http://www.lubuntu.net/" title="Go to Lubuntu&reg; site" target="_blank">
                                <img alt="Lubuntu&reg; logo" src="./static/img/logos/partners/lubuntu.jpg" title="Linux&reg; logo" height="130" width="160">
                            </a>
                        </div>
                        <div class="partners" id="part-2">
                            <a href="http://www.php.net/" title="Go to PHP&reg; site" target="_blank">
                                <img alt="PHP&reg; logo" src="./static/img/logos/partners/php.png" title="PHP&reg; logo" height="90" width="160">
                            </a>
                        </div>
                        <div class="partners" id="part-3">
                            <a href="http://www.mysql.com/" title="Go to MySQL&reg; site" target="_blank">
                                <img alt="MySQL&reg; logo" src="./static/img/logos/partners/mysql.png" title="MySQL&reg; logo" height="130" width="160">
                            </a>
                        </div>
                        <div class="partners" id="part-4">
                            <a href="http://www.python.org/" title="Go to Python&reg; site" target="_blank">
                                <img alt="Python&reg; logo" src="./static/img/logos/partners/python.png" title="Python&reg; logo" height="130" width="160">
                            </a>
                        </div>
                        <div class="partners" id="part-5">
                            <a href="http://www.jquery.com/" title="Go to jQuery&reg; site" target="_blank">
                                <img alt="jQuery&reg; logo" src="./static/img/logos/partners/jquery.png" title="jQuery&reg; logo" height="90" width="160">
                            </a>
                        </div>
                        <div class="partners" id="part-6">
                            <a href="http://www.knust.edu.gh/" title="Go to KNUST site" target="_blank">
                                <img alt="KNUST logo" src="./static/img/logos/partners/Knust.jpg" title="KNUST logo" height="130" width="120">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="lower-body">
                <div>
                    <div class="copyright">
                        <span>&copy;<?=date("Y");?></span>&nbsp;
                        <span>The iSAR Project</span>
                    </div>
                    <div id="site-map">
                        <div>
                            <div class="site-map home"><a href="./../" target="_self" title="Home">Home</a></div>
                            <div class="site-map sar"><a href="./direct.php" target="_self" title="Go to SAR page">SAR</a></div>
                            <div class="site-map about"><a href="./../about/" target="_self" title="About">About</a></div>
                            <div class="site-map help"><a href="#" target="_self" title="Explains some acronyms">Help</a></div>                        
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <!-- js: for faster webpage loading -->
        <script language="javascript" type="text/javascript" src="./static/js/jquery/jquery-1.7.1.min.js"></script>
        <script language="javascript" type="text/javascript" src="./static/js/jquery.ui/jquery.ui.core.min.js"></script>
        <script language="javascript" type="text/javascript" src="./static/js/jquery.ui/jquery.ui.widget.min.js"></script>
        <script language="javascript" type="text/javascript" src="./static/js/jquery.ui/jquery.ui.accordion.min.js"></script>
        <script language="javascript" type="text/javascript" src="./static/js/js.plugins/jquery.ticker.js"></script>
        <script language="javascript" type="text/javascript">
            $(
                function() {
                    $("#js-news").ticker(
                        {
                            titleText: '',
                            speed: 0.12,
                            fadeInSpeed: 300,
                            fadeOutSpeed: 300,
                            controls: false,
                        }
                    );
                    $("#accordion").accordion(
                        {
                            collapsible : true,
                        }
                    );
                }
            );
		</script>
        <script type="text/javascript" src="./../static/js/twitter-bootstrap/bootstrap.min.js"></script>
        <!-- Bootstrap js plugins -->
        <script type="text/javascript" src="./../static/js/prettify/prettify.min.js"></script>
    </body>
</html>
