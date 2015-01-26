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

      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
    <link rel="STYLESHEET" type="text/css" href="contact.css" />
    <script type='text/javascript'>


    var frmvalidator  = new Validator("contact");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");
</script>

<div class="container">
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
<div id="wrapper">
      <!-- Form Code Start -->
      <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
  <fieldset>
      <legend>Contact us</legend>
        <input type='hidden' name='submitted' id='submitted' value='1'/>
        <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
        <div>
          <span class='error'><?php echo $formproc->GetErrorMessage(); ?></span>
        </div>
        <div class='container'>
          <input type='text' name='name' id='name' placeholder="Full Name" value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
          <span id='contactus_name_errorloc' class='error'></span>
        </div>

        <div class='container'>
            <input type='text' name='email' id='email' placeholder='Email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
            <span id='contactus_email_errorloc' class='error'></span>
        </div>

        <div class='container'>
            <span id='contactus_message_errorloc' class='error'></span>
            <textarea rows="10" cols="50" name='message' placeholder="Say Hello.." id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
        </div>
        <div class='container'>
            <input type='submit' id="button" name='Submit' value='Submit' />
        </div>
        <div>
        </div>
    </fieldset>
</form>
</div>
<!--
      <div class="container">
          <div class="row-fluid">
              <div id="image-contact">
                <div class="row-fluid">
                   <div class="span3">
                        <img src="images/image003.jpg">
                   </div>
                   <div class="span3">
                         <img src="images/image003.jpg">
                    </div>     
                   <div class="span3">
                         <img src="images/image003.jpg">
                    </div> 
                </div>
                </div>
             </div>
          </div>
      </div>-->

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->
<script type='text/javascript'>
    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");
</script>


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
