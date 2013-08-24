<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="">
        <title>Fill&nbsp;Models&nbsp;Form&nbsp;&ndash;&nbsp;iSAR!</title>
        <link rel="stylesheet" href="./../static/css/layout.css" type="text/css" media="screen">
        <link rel="stylesheet" href="./../static/css/styles.css" type="text/css" media="screen">
        <link rel="stylesheet" href="./../static/css/content.css" type="text/css" media="screen">
        <link rel="stylesheet" href="./../sar/static/css/ticker-style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="./../static/css/default/default.css" type="text/css" media="screen">
        <link rel="stylesheet" href="./../static/css/nivo-slider.css" type="text/css" media="screen">
        <script language="javascript" src="./../static/js/jquery/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="./../static/js/js.plugins/jquery.ticker.js" language="javascript"></script>
        <script type="text/javascript" src="./../static/js/js.plugins/jquery.nivo.slider.pack.js" language="javascript"></script>
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
                    $("#slider").nivoSlider(
                        {
                            startSlide: 2,
                            pauseTime: 3500,                
                        }
                    );
                }
            );           
        </script>
        <noscript>
            <meta http-equiv="Refresh" content="0; url='./../noscript.html'">
		</noscript>
		<style type="text/css">
			.img-border {
					border-width: 0;
				}
		</style>
    </head>
    <body dir="ltr">
        <div id="body">
            <div id="upper-body">
                <div id="ac-nav-area" class="pos_f">
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
                            <div class="act-nav act-home"><a href="./" target="_self" title="Home"><span>Home</span></a></div>
                            <div class="act-nav act-sar"><a href="./sar/direct.php" target="_self" title="Specific Absorption Rate"><span>SAR</span></a></div>
                            <div class="act-nav act-about"><a href="./about/" target="_self" title="About"><span>About</span></a></div>
                        </div>
                    </div>
                </div>
                <div id="logo-area" class="i-pos">
                    <div id="logo">
                        <div style="text-align: center;">
                            <img style="position: relative; top: 7px;" src="./../static/img/logos/isarLogo.gif" alt="company logo" title="iSAR logo" >
                        </div>
                    </div>
                </div>
                <div id="ticker-area" class="i-pos">
                    <div id="ticker">
                        <div>
                            <!--Ticker Information on iSAR goes here-->
                            <ul id="js-news" type="none" class="js-hidden">
                                <li class="news-item">&raquo;&raquo;&raquo;&nbsp;What is iSAR?</li>
                                <li class="news-item">&raquo;&nbsp;A project that seeks to create a centralized database system that keeps the <a href="http://en.wikipedia.org/wiki/Specific_absorption_rate" style="text-decoration: underline; color: inherit !important;" target="_blank">Specific Absorption Rate</a> (SAR) levels of wireless mobile devices</li>
                                <li class="news-item">&raquo;&nbsp;especially mobile handsets irrespective of a particular device brand such as Samsung&reg; and Nokia&reg;.</li>
                                <li class="news-item">&raquo;&nbsp;This is essential because not all wireless devices' (mobile handsets) users are privy to this technical information which relates to their health.</li>
                                <li class="news-item">&raquo;&raquo;&raquo;&nbsp;What does iSAR need?</li>
                                <li class="news-item">&raquo;&nbsp;The user of the electronic device humbly needs to provide the model information which can be located at the back or inside the battery compart&ndash;</li>
                                <li class="news-item">&raquo;&nbsp;ment of the device. Example of model information is International Mobile Equipment Identity (IMEI) number. Dial *#06# to see this unique number.</li>
                                <li class="news-item">&raquo;&raquo;&raquo;&nbsp;What would iSAR do with this information?</li>
                                <li class="news-item">&raquo;&nbsp;The model information of the device is indexed and mapped to its SAR level such that the moment the user provides the requisite information,</li>
                                <li class="news-item">&raquo;&nbsp;the SAR level of the device and provided recommendations would be output to the user.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="img-area" class="i-pos theme-default">
                    
                </div>
                <div id="nav-area" class="i-pos">
                    
                </div>
                <div id="partners-area" class="i-pos">
                    <div id="partners">
                        <div id="part-1" class="partners">
                            <div>
                                <a href="http://www.apache.org/" title="Go to Apache&reg; site" target="_blank">
                                    <img src="./../static/img/logos/partners/apache.jpg" alt="Apache&reg; logo" title="Apache&reg; logo" height="40" width="120" />
                                </a>
                            </div>
                        </div>
                        <div id="part-2" class="partners">
                            <div>
                                <a href="http://www.php.net/" title="Go to PHP&reg; site" target="_blank">
                                    <img src="./../static/img/logos/partners/php.png" alt="php logo" title="PHP&reg; logo" height="40" width="120">
                                </a>
                            </div>
                        </div>
                        <div id="part-3" class="partners">
                            <div>
                                <a href="http://www.mysql.com/" title="Go to MySQL&reg; site" target="_blank">
                                    <img src="./../static/img/logos/partners/mysql.png" alt="MySQL&reg; logo" title="" height="40" width="120">
                                </a>
                            </div>
                        </div>
                        <div id="part-4" class="partners">
                            <div>
                                <a href="http://www.python.org/" title="Go to Python&reg; site" target="_blank">
                                    <img src="./../static/img/logos/partners/python.png" alt="Python&reg; logo" title="Python&reg; logo" height="40" width="120">
                                </a>
                            </div>
                        </div>
                        <div id="part-5" class="partners">
                            <div>
                                <a href="http://www.jquery.com/" title="Go to jQuery&reg; site" target="_blank">
                                    <img src="./../static/img/logos/partners/jquery.png" alt="jQuery&reg; logo" title="jQuery&reg; logo" height="40" width="120">
                                </a>
                            </div>
                        </div>
                        <div id="part-6" class="partners">
                            <div>
                                <a href="http://www.nivacity.com/" target="_blank" title="Go to nivacity.com">
                                    <img src="./../static/img/logos/partners/worldhost.jpeg" alt="Web Hosting" width="120" height="40" border="0" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="lower-body">
                <div>
                    <div class="copyright">
                        <span>&copy;2012</span>&nbsp;
                        <span>The iSAR Project</span>
                    </div>
                    <div id="site-map">
                        <div>
                                <div class="site-map home"><a href="./" target="_self" title="Home">Home</a></div>
                                <div class="site-map sar"><a href="./sar/direct.php" target="_self" title="Go to SAR page">SAR</a></div>
                                <div class="site-map about"><a href="./about/" target="_self" title="About">About</a></div>
                                <div class="site-map help"><a href="#" target="_self" title="Explains some acronyms">Help</a></div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
