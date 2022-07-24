<!DOCTYPE html>

<?php 
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != '') {

        if( filter_var($_POST['name'], FILTER_VALIDATE_EMAIL) ){

            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
    
            $to = "rogutaphoenix@gmail.com";
            $body = "";
    
            $body .="From: ".$name. "\r\n";
            $body .="Email: ".$email. "\r\n";
            $body .="Message: ".$message. "\r\n";
    
            //mail($to,$subject,$body);

            $message_sent = true;
        }
        else {
            $invalid_class_name = "form-invalid";
        }
    }
?>

<html>

<head>
    <title>Aurora - Dating</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type="javascript" src="js/menu.js"></script>
    <script type="javascript" src="js/gallery.js"></script>
</head>

<body>

<div class="logo">
    aurora
</div>

<!--Menu Bar-->
<div id="menubar">
    <a href="index.html">Home</a> 
    <a href="aboutus.html" >About Us</a>
    <a href="legal.html" >Legal</a> 
    <a href="contactus.html" class="active">Contact Us</a>
</div>
<!--Menu Bar End-->


<!--Home Content-->
<div class="content">
    <h5>Contact Us</h5>
    <p class="contact-info">
        Feel free to contact us for information, assistance and any query's. 
        <br>
        Please fill in the details below.
    </p>

    <br><br>

 <?php 
    if($message_sent);
?>

<h6>Your Message has been sent. We will be in touch soon.</h6>

<?php
    else:
?>

    <form id="contact-form" method="POST" action="sendmessage.php">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-input <?= $invalid_class_name ?? "" ?>" id="name" name="name" placeholder="Full Name" required>
        <br><br>

        <label for="email" class="form-label">Email Address:</label>
        <input type="email" class="form-input" id="email" name="email" placeholder="Email Address" required>
        <br><br>

        <label for="subject" class="form-label">Subject:</label>
        <input type="text" lass="form-input" id="subject" name="subject" placeholder="Subject" required>
        <br><br>

        <label for="message" class="form-label">Message:</label>
        <textarea rows="5" cols="50" id="message" name="message" placeholder="Enter your message...."></textarea>
        <br><br>



        <button type="submit" class="btn">Send Message!</button>

    </form>
      </div> 
      <?php
        endif;
      ?>

<!--Home Content End-->
</body>

</html>