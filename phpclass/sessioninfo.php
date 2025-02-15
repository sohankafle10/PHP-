<?php session_start();?>
<h2>Hello,  <?php echo $_SESSION['name']; ?></h2>

<a href="sessiondestroy.php">Good Bye</a>
