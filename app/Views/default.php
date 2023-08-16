<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $this->renderSection('pageTitle') ?></title>
    <?= link_tag('static/css/custom_style.css') ?>
    <?= link_tag('static/vendor/aos/aos.css') ?>
    <?= link_tag('static/vendor/bootstrap-icons/bootstrap-icons.css') ?>
    <?= link_tag('static/vendor/glightbox/css/glightbox.min.css') ?>
    <?= link_tag('static/vendor/remixicon/remixicon.css') ?>
    <?= link_tag('static/vendor/swiper/swiper-bundle.min.css') ?>

    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>
<!--Header-->
<?= $this->include('menubar'); ?>
<!--content data is inserted here-->
<?= $this->renderSection("content") ?>


<!-- Vendor JS Files -->
<script src="static/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="static/vendor/aos/aos.js"></script>

<script src="static/vendor/glightbox/js/glightbox.min.js"></script>
<script src="static/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="static/vendor/swiper/swiper-bundle.min.js"></script>
<script src="static/vendor/php-email-form/validate.js"></script>
<script>
    AOS.init();
</script>

 <script src="<?= base_url('static/js/main.js') ?>">
</script>
</body>
</html>