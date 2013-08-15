<?php
// Include paths to iSARDirect web application

include_once ("/home/fod/www/projects/isar/sar/direct/globalvars.php");
include_once ("/home/fod/www/projects/isar/sar/direct/brandsForm.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="" content="">
        <title>Welcome&nbsp;to&nbsp;iSAR&nbsp;Direct&nbsp;&ndash;&nbsp;iSAR!</title>
        <link rel="stylesheet" href="./static/css/direct-layout.css" type="text/css" media="screen">
        <link rel="stylesheet" href="./static/css/direct-styles.css" type="text/css" media="screen">
        <link rel="stylesheet" href="./static/css/direct-content.css" type="text/css" media="screen">
        <link rel="stylesheet" media="screen" type="text/css" href="./static/css/ticker-style.css">
        <link rel="stylesheet" href="./static/css/app.css" type="text/css" media="screen">
        <script language="javascript" type="text/javascript" src="./static/js/jquery/jquery-1.7.1.min.js"></script>
        <script language="javascript" type="text/javascript" src="./static/js/js.plugins/jquery.ticker.js"></script>
        <script type="text/javascript" language="javascript">
            $(
                function()
                {
                    $("#js-news").ticker(
                        {
                            titleText: '',
                            speed: 0.08,
                            fadeInSpeed: 300,
                            fadeOutSpeed: 300,
                            controls: false,
                        }
                    );
                }
            );
		</script>
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
                <div id="brands-ticker" class="wid pos">
                    <div id="b-ticker">
                        <div>
                            <!--Ticker information on Brands -->
		                    <ul id="js-news" type="none" class="js-hidden">
		                    <!--<li class="news-item">&raquo;&raquo;&raquo;&nbsp;What is Brand?</li>
                                <li class="news-item">&raquo;&nbsp;The <span style="text-decoration: underline;">American Marketing Association</span> defines a <em>brand</em> as a &quot;Name, term, design, symbol, or any other feature that identifies one seller's good or service as</li>
                                <li class="news-item">&raquo;&nbsp;distinct from those of other sellers.&quot; A <em>brand</em> is thus a product or service whose dimensions differentiate it in some ways from other products or services</li>
                                <li class="news-item">&raquo;&nbsp;designed to satisfy the same need. A brand can take many forms, including a <em>name</em>, <em>sign</em>, <em>symbol</em>, <em>color combination</em>&nbsp;or&nbsp;<em>slogan.</em></li>
                                <li class="news-item">&raquo;&nbsp;The word <em>brand</em> has continued to evolve to encompass identity&mdash;it affects the personality of a product, company or service. It is defined by a perception, good or bad, that</li>
                                <li class="news-item">&raquo;&nbsp;your customers or prospects have about you.</li>
                                <li class="news-item">&raquo;&nbsp;<a style="color: inherit !important;" href="http://en.wikipedia.org/wiki/Brand" target="_blank" title="Read more"><em>Click this link to read more&nbsp;&raquo;&raquo;&raquo;</em></a></li>
                           -->
			                    <li class="news-item">&raquo;&raquo;&raquo;&nbsp;What&nbsp;is&nbsp;iSAR&nbsp;Direct&trade;?</li>
			                    <li class="news-item">&raquo;&nbsp;A simple and interactive standalone database application that wireless mobile devices' users can access/use to know and monitor the dynamic <a style="color: inherit !important;" href="http://en.wikipedia.org/wiki/Specific_absorption_rate"><b><em>Specific Absorption Rate</em></b></a></li>
			                    <li class="news-item">&raquo;&nbsp; (SAR) levels of their electronic devices anywhere and at any time.</li>
		                    </ul>
                        </div>
                    </div>
                </div>
                <div id="sel-brd" class="wid pos">
                    <div title="Select device brand">
                        <span>
                            select&nbsp;your&nbsp;device's&nbsp;brand
                        </span>
                    </div>
                </div>
                <div id="brands-area" class="wid pos">
                    <div id="brd">
                        <fieldset class="fieldset">
                            <?=brandsForm();?>
                        </fieldset>
                    </div>
                </div>
                <div id="dd-fm" class="wid pos">
                    <div>
                        <div>
                            <a href="./../forms/brands-form.php" title="Fill Brands Form">
                                <span>
                                    device&nbsp;brand&nbsp;not&nbsp;found?
                                </span>
                            </a>
                        </div>    
                    </div>
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
    </body>
</html>
