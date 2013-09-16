<?php
session_name ("sar info page");
session_start ();

// Create sar results page
// Get hidden field value from input field

$brandName = strval ($_REQUEST["brand-name"]);

if ($brandName != "") {
	switch ($brandName) {
    	case "Apple":
        	include_once ("/home/fod/www/projects/isar/sar/direct/appleModelsArbiter.php");
        	$resultsArray = appleModelsArbiter($brandName);
        	break;
    	case "Doro":
        	include_once ("/home/fod/www/projects/isar/sar/direct/doroModelsArbiter.php");
        	$resultsArray = doroModelsArbiter($brandName);
        	break;
    	case "HTC":
        	include_once ("/home/fod/www/projects/isar/sar/direct/htcModelsArbiter.php");
        	$resultsArray = htcModelsArbiter($brandName);
        	break;
    	case "LG":
        	include_once ("/home/fod/www/projects/isar/sar/direct/lgModelsArbiter.php");
        	$resultsArray = lgModelsArbiter($brandName);
        	break;
    	case "Motorola":
        	include_once ("/home/fod/www/projects/isar/sar/direct/motorolaModelsArbiter.php");
        	$resultsArray = motorolaModelsArbiter($brandName);
        	break;
    	case "Nokia":
        	include_once ("/home/fod/www/projects/isar/sar/direct/nokiaModelsArbiter.php");
        	$resultsArray = nokiaModelsArbiter($brandName);
        	break;
    	case "Samsung":
        	include_once ("/home/fod/www/projects/isar/sar/direct/samsungModelsArbiter.php");
        	$resultsArray = samsungModelsArbiter($brandName);
        	break;
    	case "Sony Ericsson": 
        	include_once ("/home/fod/www/projects/isar/sar/direct/sonyericssonModelsArbiter.php");                           
        	$resultsArray = sonyericssonModelsArbiter($brandName);
        	break;
    	default:
        	include_once ("/home/fod/www/projects/isar/sar/direct/otherModelsArbiter.php");
    	    $resultsArray = otherModelsArbiter($brandName);   
	}
} else {
	header("Location: ../index.php");
}

list ($modelName, $modelCategory, $sar, $addInfo) = $resultsArray;

include_once ("/home/fod/www/projects/isar/sar/direct/concatModelName.php");

$model = concatModelName($brandName, $modelName, $modelCategory);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="">
        <title><?="&nbsp;".$model."&nbsp;&ndash;&nbsp;".$brandName."&reg;&nbsp;&ndash;&nbsp;SAR&nbsp;Result&nbsp;&ndash;&nbsp;iSAR!";?></title>
        <link rel="stylesheet" media="screen" href="./static/css/sar-layout.css" type="text/css">
        <link rel="stylesheet" media="screen" href="./static/css/sar-styles.css" type="text/css">
        <link rel="stylesheet" media="screen" href="./static/css/sar-content.css" type="text/css">
        <link rel="stylesheet" media="screen" href="./static/css/ticker-style.css" type="text/css">
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
                <div id="sar-ticker" class="wid pos">
                    <div id="s-ticker">
                            <!-- Ticker information on SAR -->
                        <div>
                            <ul class="js-hidden" id="js-news" type="none">
                                <li class="news-item">&raquo;&raquo;&raquo;&nbsp;What&nbsp;is&nbsp;SAR?</li>
                                <li class="news-item">&raquo;&nbsp;<em>Specific Absorption Rate</em> (SAR) is a measure of the rate at which energy is absorbed by the body when exposed to a <i>radio frequency</i> (RF); although, it can also refer to</li><li class="news-item">&raquo;&nbsp;absorption of other forms of energy by tissue, including ultrasound.</li>
                                <li class="news-item">&raquo;&nbsp;It is defined as the <i>power</i> absorbed per <i>mass</i> of <i>body tissue</i> and has the units of <em>watts</em> per <em>kilogram</em> (W/kg).</li>
                                <li class="news-item"></li>
                                <li class="news-item"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="sar-all-lim" class="wid pos">
                    <div class="limit fcc">
                        <div style="position: relative; top: 0px;">
                            <a href="http://www.fcc.gov/" target="_blank" style="color: inherit !important; text-decoration: none; cursor: pointer;">
                                <span title="Federal Communications Commission" style="text-decoration: underline; font-size: 20px;">
                                    FCC&nbsp;(USA)
                                </span>
                            </a>
                            <br>
                                <span style="font-size: 12px;">Allowable&nbsp;<a href="http://en.wikipedia.org/wiki/Specific_absorption_rate" title="Specific Absorption Rate" style="color: inherit !important; text-decoration: none;"><strong>SAR</strong></a>&nbsp;Limit:</span><br>
                                <span style="font-size: 30px;">
                                    1.6 <span title="Watts (units of Power)">W</span>/<span title="kilograms (units of Mass)">kg</span> 
                                </span>
                            <br>
                                <span style="font-size: 12px;">
                                    taken&nbsp;over&nbsp;a&nbsp;volume&nbsp;containing&nbsp;<br>a&nbsp;mass&nbsp;of&nbsp;<b>1&nbsp;gram</b> of tissue
                                </span>                                
                        </div>
                    </div>
                    <div class="limit cenelec">
                        <div style="position: relative; top: 10px;">
                            <a href="http://www.cenelec.eu/" target="_blank" style="color: inherit !important; text-decoration: none; cursor: pointer;">
                                <span title="European Committee for Electrotechnical Standardization" style="text-decoration: underline; font-size: 20px;">
                                    CENELEC&nbsp;(EU)
                                </span>
                            </a>
                            <br>
                                <span style="font-size: 12px;">Allowable&nbsp;<a href="http://en.wikipedia.org/wiki/Specific_absorption_rate" title="Specific Absorption Rate" style="color: inherit !important; text-decoration: none;"><strong>SAR</strong></a>&nbsp;Limit:</span><br>
                                <span style="font-size: 30px;">
                                    2.0&nbsp;<span title="Watts (units of Power)">W</span>/<span title="kilograms (units of Mass)">kg</span> 
                                </span>
                            <br>
                                <span style="font-size: 12px;">
                                    averaged&nbsp;over&nbsp;a&nbsp;mass&nbsp;of&nbsp;<b>10&nbsp;grams</b> of tissue
                                </span>                                
                        </div>
                    </div>
                </div>
                <div id="sar-area" class="wid pos">
                    <div id="first-column" class="ht"></div>
                    <div id="middle-column" class="ht">
                        <div id="brd-nm" class="cm direct-brd">
                            <div>
                               <?php
                                    if ($brandName == "Sony Ericsson") {
                                        print "<span style='font-size: 60px; position: relative; top: 47px; line-height: 50px;'>".$brandName.'<sup style="font-size: 25px;">&reg;</sup></span>';
                                    } else {
                                        print "<span style='font-size: 80px; position: relative; top: 37px; line-height: 70px;'>".$brandName.'<sup style="font-size: 25px;">&reg;</sup></span>';
                                    }
                                    ?>
                            </div>
                        </div>
                        <div id="md-nm" class="after-brd-pos cm direct-md">
                            <div>
                                <span>
                                    <?=$model;?>
                                </span>
                            </div>
                        </div>
                        <div id="add-info" class="after-brd-pos cm direct-add">
                            <div>
                                <span>
                                    <?php
                                        if (($addInfo == "") || ($addInfo == "None")) {
                                            print "<span style='font-size: 25px;'>No Additional Information!!!</span>";
                                        } else {
                                            print $addInfo;
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div id="sar" class="after-brd-pos cm direct-sar">
                            <div>
                                <span>
                                    <?php
                                        if ($sar != 0.000) {
                                            print "<span style='position: absolute; top: 7px; left: 15px;'>SAR:</span>".
                                                "<span class='s-pos' style='font-size: 80px;'>".
                                                $sar.
                                                "</span><span class='s-pos' style='left: 7px;'>W/kg</span>";
                                        } else {
                                            print "<span style='position: absolute; top: 10px; left: 15px;'>SAR:</span>".
                                                "<span class='s-pos' style='font-size: 40px;'>Not Available!!!</span>";
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div id="recom" class="after-brd-pos cm">
                            <div class="after-brd-pos">
                                <span style="position: relative; font-weight: bold;" class="recom">Recommendations</span>
                                <div id="r-sar" class="r-pos">
                                    <div>
                                        <span>Specific Absorption Rate</span><br>
                                        <span>Your <b>mobile device</b> is a radio transmitter and receiver. It is designed not to exceed
                                        the limits for exposure to radio waves recommended by international guidelines. These guidelines were developed by the
                                        independent scientific organisation <b title="International Committee for Non-Ionising Radiation Protection">ICNIRP</b> and include safety margins designed to assure the protection of all persons, regardless of age and health.
                                        <br><br>
                                        The exposure guidelines for mobile devices employ a unit of measurement known as the <strong title="SAR">Specific Absorption Rate</strong> or 
                                        <strong title="Specific Absorption Rate">SAR</strong>. The limit stated in the <b title="International Committee for Non-Ionising Radiation Protection">ICNIRP</b> guidelines is <b>2.0</b> watts/kilogram (W/kg) over <strong>10 grams</strong> of tissue.
                                        Tests for <b>SAR</b> are conducted using standard operating positions with the device transmitting at its highest certified
                                        power level in all tested frequency bands. The actual <b title="Specific Absorption Rate">SAR</b> level of an operating device can be below the maximum value because the
                                        device is designed to use only the power required to reach the network. That amount changes depending on a number of factors
                                        such as how close you are to a network base station. 
                                        <br><br>
                                        The highest <strong title="Specific Absorption Rate">SAR</strong> value under the <strong title="International Committee for Non-Ionising Radiation Protection">ICNIRP</strong> guidelines for use of this device at the ear is 
                                        <?php
                                            if ($sar == 0.000)
                                            {
                                                print "<strong>Unknown</strong> at the moment.";
                                            }
                                            else
                                            {
                                                print "<strong>".$sar."</strong> W/kg.";
                                            }
                                        ?> 
                                        <br><br>
                                        Use of device accessories may result in different <b>SAR</b> values. <b>SAR</b> values may vary depending on national reporting and testing requirements and the 
                                        network band.
                                        </span><br>
                                        <span>
                                            <a target="_self" title="More Info on Recommendations" href="./../help/info.php" style="color: inherit !important;">
                                                    <span style="font-size: 12px;">
                                                        <i>Click&nbsp;here&nbsp;for&nbsp;more&nbsp;info&nbsp;&raquo;&raquo;&raquo;</i>
                                                    </span>
                                            </a>    
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="last-column" class="ht"></div>
                </div>
                <div id="sar-fm" class="wid pos">
                    <form method="post" action="./../forms/forms.php" title="Fill&nbsp;SAR&nbsp;Form">
                                            <input
                        type="hidden"
                        name="forms"
                        value="sar"
                      >
                      <input type="hidden" name="brand" value="<?=$brandName.'&reg;';?>">
                      <input type="hidden" name="model" value="<?=($addInfo == ""||$addInfo == "None")?$model:$model.'&nbsp;'.$addInfo;?>">
                      <input
                        type="submit"
                        value="Click&nbsp;If&nbsp;<?=$brandName.'&nbsp;'.$model;?>&#39;s&nbsp;SAR&nbsp;Not&nbsp;Found?"
                        name="submit"
                      >
                    </form>
                </div>
                <div id="partners-area" class="wid pos">
                    <div id="partners">
                        <div class="partners" id="part-1">
                            <a href="http://www.lubuntu.net/" title="Go to Lubuntu&reg; site" target="_blank">
                                <img alt="Lubuntu&reg; logo" src="./static/img/logos/partners/lubuntu.jpg" title="Lubuntu&reg; logo" height="130" width="160">
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
        <script language="javascript" src="./../static/js/jquery/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="./../static/js/js.plugins/jquery.ticker.js" language="javascript"></script>
        <script type="text/javascript" language="javascript">
            $(
                function()
                {
                    $("#js-news").ticker(
                        {
                            titleText: '',
                            fadeInSpeed: 300,
                            fadeOutSpeed: 300,
							controls: false,
							speed: 0.08,
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
