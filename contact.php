<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="aos.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
    <script src="jquery-3.6.0.js"></script>
    <script src="aos.js"></script>
    <title>Contact</title>
</head>
<body>
    <?php include 'header.php'; ?>
<main>
    <h1 style="color:white; text-align:center">How Can We Help You?</h1>
    <div class="container contactform" data-aos="zoom-in" data-aos-anchor-placement="center-bottom" >
    
        <form action="#">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email..">

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject..">

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something.."></textarea>

            <input type="submit" id="submit" value="Submit">
        </form>
    </div>
    <div id="contact">
        <div class="contactlist container">
            <h1 id=contacts style="color:white">CONTACT</h1>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2" data-aos="zoom-in" data-aos-anchor-placement="center-bottom" id="admin1">
                    <a><h3><i class="fa fa-whatsapp"></i> Admin 1</h3></a>
                </div>
                <div class="col-lg-4" data-aos="zoom-in" data-aos-anchor-placement="center-bottom" id="admin2">
                    <a><h3><i class="fa fa-whatsapp"></i> Admin 2 </h3></a>
                </div>
            </div>
        </div>
    </div>
</main>
    <?php include 'footer.php'?>
</body>
<script src="Javascript.js"></script>
</html>