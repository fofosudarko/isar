<?php
// Banners

function brand_banner ()
{
	$BANNER=<<<EOF
	<section id="banner">
		<div id="container" style="width: 1000px; margin: 0 auto; top: 10px; height: 80px;">
			<div class="span12" style="width: inherit; text-align: center;">
				<span id="banner" class="pos_r banner">
					fill&nbsp;device&nbsp;brand&nbsp;form
				</span>
		</div>
	</section>
EOF;

	print $BANNER;
	return;
}

function models_banner ($value="Brand")
{
  	$BANNER=<<<EOF
	<section id="banner">
		<div id="container" style="width: 1000px; margin: 0 auto; top: 10px; height: 80px;">
			<div class="span12" style="width: inherit; text-align: center;">
				<span id="banner" class="pos_r banner">
					fill&nbsp;$value&nbsp;model&nbsp;form
				</span>
		</div>
	</section>
EOF;

	print $BANNER;
	return;
}

function sar_banner ($value="Brand")
{
    	$BANNER=<<<EOF
	<section id="banner">
		<div id="container" style="width: 1000px; margin: 0 auto; top: 10px; height: 80px;">
			<div class="span12" style="width: inherit; text-align: center;">
				<span id="banner" class="pos_r banner">
					fill&nbsp;$value&nbsp;model&nbsp;SAR&nbsp;form
				</span>
		</div>
	</section>
EOF;

	print $BANNER;
	return;
}
?>
