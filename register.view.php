<?php require('partials/head.php') ?>
<?php require('partials/navbar.php') ?>
<div class="container">
  <div class="row">
    <div class="col-6 offset-3">
      <form action="register.php" method="post">
        <input type="text" name="name" placeholder="Ime" class="form-control"><br>
        <input type="email" name="email" placeholder="Email" class="form-control"><br>
        <input type="password" name="password" placeholder="Password" class="form-control"><br>
        <button type="submit" class="btn btn-primary form-control">Register</button>
      </form>
    </div>
  </div>
</div>
<?php require('partials/footer.php') ?>
