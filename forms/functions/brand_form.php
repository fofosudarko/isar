<?php
include_once ("/home/fod/www/projects/isar/sar/direct/globalvars.php");

// displays brand form to fill
function fill_brands_form ()
{
    global $PATH;    
    include_once ($PATH."forms/functions/device_description_menu.php");
    
    $STARTFORM=<<<EOF
    <section>
      <!-- fill device brand form -->
		<div class="container">
		<div class="row">
		<div id="brd" class="span12 fm brd">
		<fieldset class="control-group">
		<form class="well pos_r" action="#" method="post">
		<table>
		<tr><td class="span4 form-height">
		<!-- Type your device's brand e.g HTC -->
		<label for="brand-name">Enter device's brand name&colon;&nbsp;</label></td>
			<td class="span5 form-height"><input class="span5" placeholder="type device's brand name..." pattern="^[A-Z][A-Za-z]+$" type="text" name="brand" required></td>
		</tr><tr><td class="span4 form-height">
		<!-- Select your device's description -->
		<label for="device-description">Which best describes your device?: </label></td>
		<td class="span5 form-height">
EOF;

    $ENDFORM=<<<EOF
    </td>
			</tr>
			<tr><td class="span4 form-height">
		<!-- Fill if device description is not in list -->
		<label for="provide-device-description">If&nbsp;other&nbsp;description&colon;&nbsp;</label></td>
		<td class="span5 form-height"><input type="text" name="new-device-description" class="span5" pattern="[A-Za-z ]+$" placeholder="type new device description..."></td>
		</tr><tr><td class="span4 form-height">
		<!-- Type device's model name -->
		<label for="model-name">Enter device's model: </label></td>
		<td class="span5 form-height"><input type="text" name="model" class="span5" placeholder="type device's model..." pattern="[A-Za-z0-9 ]+$" spellcheck="false" required></td>
		</tr><tr><td class="span4 form-height">
		<!-- Type device's IMEI help-text: type *#06# to view it -->
		<label for="imei">Enter device's IMEI: </label></td>
		<td class="span5 form-height"><input placeholder="type device's imei..." type="text" class="span5" name="imei" pattern="\d{15}" required>
		</td>
		</tr>
		<tr>
		<td class="span4 form-height"></td>
		<td class="span5 form-height">
		<span class="help-inline">NB&colon;&nbsp;Type *#06# to view device's IMEI (International Mobile Equipment Identity).</span>
		</td></tr>
		<tr><td class="span4 form-height">
		<!-- Type device's SAR value if available -->
		<label for="ask-sar-question">Do you know your device's SAR value?: </label></td>
		<td class="span5 form-height">
		<select class="span2" name="yesno" required>
			<option>Yes</option>
			<option selected="yes">No</option>
		</select>
		</td>
		</tr><tr>
		<td class="span4 form-height">
		<!-- Type device's SAR value if available -->
		<label for="sar">Enter SAR value: </label></td>
		<td class="span5 form-height"><input type="text" name="sar" class="span5" placeholder="type sar value..." disabled><br></td>
		</tr><tr>
		<td class="span4 form-height"><!-- Select country of origin -->
		<label for="country">Select country of origin: </label>
		</td>
		<td class="span5 form-height"><select name="country" class="span5" required><option>Ghana</option></select></td>
		</tr>
		<tr>
		<td class="span4 form-height">
			<!-- provide zip code: -->
			<label for="zip">Enter&nbsp;zip&nbsp;code&colon;</label>
		</td>
		<td class="span5 form-height">
			<input name="zip-code" placeholder="zip code here..." pattern="(\+\d+)|(0{2}\d+)" class="span5" required>
		</td>
		</tr>
		<tr>
		<td class="span4 form-height">
		<!-- Enter phone number help-text: notify you if we find device's sar value or new models are available -->
		<label for="contact-number">Enter contact number&colon;&nbsp;</label>
		</td>
		<td class="span5 form-height">
			<input type="text" class="span5" name="contact-number" placeholder="type contact number..." pattern="(\d{9,10})|(\d{2,3}[ ]\-[ ]\d{3}[ ]\-[ ]\d{4})" required></td>
		</tr>
		<tr>
		<td class="span4 form-height"></td>
			<td class="span5 form-height">
			<span class="help-inline">NB: We shall notify you when we find your device's SAR value or new models are available!</span>
			<span></span>
		</td></tr><tr>
		<td class="span4 form-height">
		<!-- Type your alias e.g. initials of your fullname -->
		<label for="alias">Enter your alias&colon;&nbsp;</label>
		</td><td class="span5 form-height">
			<input class="span5" type="text" placeholder="type your alias" required>
		</td>
		</tr>
		<tr><td class="span4 form-height"></td>
		<td class="span5 form-height">
			<span class="help-inline">NB: Type your alias e.g. initials of your fullname.</span>
		</td></tr>
		<tr><td colspan="2" class="span9" style="text-align: center; height: 50px;">
			<input style="width: 150px;" type="submit" class="btn btn-primary btn-large" value="Submit" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;
			<input style="width: 150px;" type="reset" class="btn btn-large" value="Cancel" name="cancel">
		</td></tr>
		</table>
		</form>
		</fieldset>
		</div>
		</div>
		</div>
		</section>
EOF;

  print $STARTFORM;
  show_device_description_menu ($class="span5", $name="device-description");
  print $ENDFORM;
}
?>
