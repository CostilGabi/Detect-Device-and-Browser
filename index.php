
<!-- include detect.php in page ( recommended is to include it in header.php ) -->
<?php require_once 'detect.php';

// Get variables
$user_os        = getOS();
$user_browser   = getBrowser();


?>

<!-- Usage -->

<?php if ( $user_browser == 'Safari' ) { ?>

        <h1>You are using Safari</h1>

<?php } else { ?>

        <h1>You are not using Safari</h1>

<?php } ?>



<?php if ( $user_os == 'iPhone' || $user_os == 'iPad' ) { ?>

        <h1>You are using an iPhone or iPad</h1>

<?php } else { ?>

        <h1>You are not using an iPhone or iPad</h1>

<?php } ?>
