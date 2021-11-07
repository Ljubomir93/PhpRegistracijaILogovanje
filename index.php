<?php session_start(); ?>
<?php require('partials/head.php') ?>
<?php require('partials/navbar.php') ?>
<div class="container">
  <div class="row">
    <div class="col-6 offset-3">
      <?php if (isset($_SESSION['id'])): ?>
        <?php echo "<h1>Dobrodosli na nasu aplikaciju.</h1>"; ?>
      <?php else: echo "<h1>Login or Regiser</h1>";?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php require('partials/footer.php') ?>
