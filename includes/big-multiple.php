<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

#EDIT THE FOLLOWING:
$toAddress = "catherineblakesmith@gmail.com";  //place your/your client's email address here
$toName = "Catherine Blake Smith"; //place your client's name here
$website = "Growling Willow";  //place NAME of your client's website here
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; //if true, will send an email, otherwise just show user data.
$dateFeedback = true; //if true will show date/time with reCAPTCHA error - style a div with class of dateFeedback
include_once 'big-config.php'; #site keys go inside your config.php file
include 'contact-lib/contact_include.php'; #complex unsightly code moved here
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
    {#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
        handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             #Here we can enter the data sent into a database in a later version of this file
    ?>
    <!-- START HTML FEEDBACK -->
    <div class="contact-feedback">
        <h2>Thank you for submitting a request!</h2>
        <p>We look forward to working with you.</p>
        <p>We'll respond via email within 48 hours.</p>
    </div>    
    <!-- END HTML FEEDBACK -->        
    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA 
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback
 
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
    <div>	
		<fieldset>
			<legend>Tell Us About Your Project:</legend>
			<input type="checkbox" name="Interested_In[]" value="Rebranding" tabindex="40" /> Rebranding &#40;All new content, look and feel&#41; <br />
			<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Redesign and/or Restructure &#40;Keep the content but update the look and feel&#41; <br />
			<input type="checkbox" name="Interested_In[]" value="New Website NO Content" /> Entirely new website &#40;I have content&#41; <br />
			<input type="checkbox" name="Interested_In[]" value="New Website WITH Content" /> Entirely new website &#40;I don’t have content&#41; <br />
			<input type="checkbox" name="Interested_In[]" value="Logo" /> Logo Design <br />
			<input type="checkbox" name="Interested_In[]" value="Other Project" /> Other <br />
		</fieldset>
	</div>
    <div>	
		<fieldset>
			<legend>When you edit your website, do you want to:</legend>
			<input type="checkbox" name="Interested_In[]" value="Full Control" tabindex="40" /> have full control to be able to edit any content <br />
			<input type="checkbox" name="Interested_In[]" value="Infrequent Update" /> edit and create copy one time, and maybe edit/update it once or twice a year <br />
			<input type="checkbox" name="Interested_In[]" value="Frequent Update" /> be able to update my content regularly &#40;blog posts, event updates&#41; <br />
			<input type="checkbox" name="Interested_In[]" value="No Control" /> leave the content as it is and have someone else edit it when I give them directives <br />
			<input type="checkbox" name="Interested_In[]" value="Other Content" /> Other <br />
		</fieldset>
	</div>
    <div>
        <label>
            If you currently have a website, what do you like about it? <br /><textarea name="What_Do_You_Like?" cols="50" rows="4" placeholder="Example: logo, content, photos, user interface" tabindex="60"></textarea>
        </label> 
    </div>
    <div>
        <label>
            If you currently have a website, what do you wish you could change? <br /><textarea name="What_Would_You_Change?" cols="50" rows="4" placeholder="Example: logo, content, photos, user interface" tabindex="60"></textarea>
        </label> 
    </div>
    <div>
        <label>
            Identify two or three things that inspire you. <br /><textarea name="Inspiration" cols="50" rows="4" placeholder="Example: website, artist, design, political movement, quotation" tabindex="60"></textarea>
        </label>
    </div>
    <div>
        <label>
            Please describe your aesthetic in five words or less. <br /><textarea name="Aesthetic" cols="50" rows="4" placeholder="Example: minimalist, grays and blues, accessibility" tabindex="60"></textarea>
        </label>
    </div>
    <div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<div>	
		<fieldset>
			<legend>How Did You Hear About Us?</legend>
			<input type="radio" name="How_Did_You_Hear_About_Us?" value="Social Media" 
			required="required" title="How Did You Hear is required" tabindex="50"  
			/> Social Media <br />
			<input type="radio" name="How_Did_You_Hear_About_Us?" value="Friend" /> Friend <br />
			<input type="radio" name="How_Did_You_Hear_About_Us?" value="Recommendation" /> Recommendation <br />
			<input type="radio" name="How_Did_You_Hear_About_Us?" value="LinkedIn" /> LinkedIn <br />
		</fieldset>
	</div>
	<div>	
		<label>
			Additional Comments:<br /><textarea name="Comments" cols="50" rows="4" placeholder="Please include anything else we should know" tabindex="60"></textarea>
		</label>
	</div>	
	<div id="feedback"><?=$feedback?></div>
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
	<div>
		<input type="submit" value="Submit" id="button"/>
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
<?php
}
?>
