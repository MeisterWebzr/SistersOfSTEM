  <?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/php-contact-form-tutorial.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('free.rosas@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('Uh4ipNNG89tzVx6');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>
<<<<<<< HEAD
=======

>>>>>>> d5e28a2300fffa92b26a935aaaceddaeadffd236
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Free Rosas" content="STEM-related website">
    <link rel="icon" href="../../favicon.ico">

    <title>Sister of STEM | Contact Us</title>

    <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
  </head>
<!-- Contact Form
================================================== -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Contact us</title>
<<<<<<< HEAD
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<div class="container">

=======
      <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<div class="container">
>>>>>>> d5e28a2300fffa92b26a935aaaceddaeadffd236
        <a href="index.html">
        <img id ="logo" src="images/logo.png" alt=""></a>
            <ul class="nav nav-pills">
              <li id="pink"><a href="about.html">About Us</a></li>
              <li id="green"><a href="edusource.html">EduSource</a></li>
              <li id="purple"><a href="events.html">STEM Events</a></li>
              <li id="pink"><a href="diy.html">DIY Experiments</a></li>
              <li id="green"><a href="contact.php">Contact Us</a></li>
            </ul>
<body>
<<<<<<< HEAD
<div id="wrapper">
<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Contact us</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <!-- <label for='name' >Your Full Name: </label><br/> -->
    <input type='text' name='name' placeholder="Full Name" id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <!--<label for='email' >Email Address:</label><br/> -->
    <input type='text' name='email' id='email' placeholder="Email Address" value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
=======

<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Contact us</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
>>>>>>> d5e28a2300fffa92b26a935aaaceddaeadffd236
    <span id='contactus_email_errorloc' class='error'></span>
</div>

<div class='container'>
<<<<<<< HEAD
    <!-- <label for='message' >Message:</label><br/> -->
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' placeholder="Say Hello.." id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
=======
    <label for='message' >Message:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
>>>>>>> d5e28a2300fffa92b26a935aaaceddaeadffd236
</div>


<div class='container'>
<<<<<<< HEAD
    <input type='submit' id="button" name='Submit' value='Submit' />
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

// ]]>
</script>
<div></div>
</div>
=======
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

// ]]>
</script>
>>>>>>> d5e28a2300fffa92b26a935aaaceddaeadffd236

     <!-- FOOTER -->
      <footer>
      <a href="www.facebook.com"class="fa fa-facebook fa-2x" id="sm"></a>
      <a href="www.twitter.com" class="fa fa-twitter fa-2x" id="sm"></a>
      <a href="www.instagram.com" class="fa fa-instagram fa-2x" id="sm"></a>
      
      <p class="pull-left">&copy; 2014 Pink Pineapple, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

</html>
