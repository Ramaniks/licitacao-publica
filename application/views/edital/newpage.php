<?php defined('SYSPATH') or die('No direct script access.');

<?php echo $pagination->render(); ?>

<?php foreach ($pagination->result() as $user): ?>
    Username: <?php echo $user->username; ?><br />
    Email: <?php echo $user->email; ?><br />
    <br />
<?php endforeach; ?>

<?php echo $pagination->render(); ?>