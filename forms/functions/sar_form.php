<?php
include_once ("/home/fod/www/projects/isar/sar/direct/globalvars.php");

function fill_sar_form ($brand="Brand", $model="Model")
{
    $SAR_FORM=<<<EOF
    <section>
      <!-- fill sar form -->
      <div class="container">
        <div class="row">
          <div id="sar" class="span12 fm sar">
            <fieldset>
              <form class="well pos_r" method="post" action="#">
                <table>
                  <tr>
                <td class="span4 form-height"><label for="description">Description&colon;&nbsp;</label></td>
                <td class="span5 form-height"><input type="text" class="span5" name="description" value="Mobile Handset" disabled></td>
              </tr>
                  <tr>
                    <td class="span4 form-height">
                      <label for="brand">Brand&colon;&nbsp;</label>
                    </td>
                    <td class="span5 form-height">
                      <input class="span5" value="$brand" name="brand" type="text" disabled>
                    </td>
                  </tr>
                  <tr><td class="span4 form-height"><label for="model">Model&colon;&nbsp;</label></td>
                  <td class="span5 form-height">
                  <input class="span5" value="$model" name="model" type="text" disabled></td></tr>
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

  print $SAR_FORM;
}
?>
