<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <?php include 'control_page.php' ?>       

    <?php include 'reference_page.php' ?>

        <title id="title"><?php echo $page_name?> | Home Page</title>
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'page_settings.php'; ?>
        <?php $contentClass -> watch_lst() ?>
        <?php include 'footer.php' ?>
        <script src="js/landing_slide.js"></script>

    </body>
</html>