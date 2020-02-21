<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">Jens's Guestbook</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto"></ul>
        </div>
    </div>
</nav>
<main>
    <section class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Contact Us</h2>
                    <p>Welcome, be free to leave sommething nice plz</p>
                </div>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $this->renderProcessedForm();
                }else {
                    $this->renderContactform();
                }
                ?>
            </div>
        </section>
    </section>
    <section class="page testimonials">
        <section class="clean-block clean-testimonials dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Testimonials</h2>
                    <p>Here you find the testimonials of my creation.</p>
                </div>
                <div class="row">
                    <?php
                    $json = new JSON;
                    $guestbook = new Guestbook($json->getFileData());
                    $guestbook->render();
                    ?>
                </div>
            </div>
            </div>
        </section>
    </section>
</main>
<footer class="page-footer dark">
    <div class="footer-copyright">
        <p>© 2020 Jens De Neef</p>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/smoothproducts.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>
