<?php require('partials/head.php') ?>
<?php require('partials/navbar.php') ?>
<div class="container">
  <div class="row">
    <div class="col-6 offset-3">
      <form action="login.php" method="post">
        <input type="email" name="email" placeholder="Email" class="form-control"><br>
        <input type="password" name="password" placeholder="Password" class="form-control"><hr>
        <button type="submit" class="btn btn-success form-control">Prijavi se</button>
      </form>
    </div>
  </div>
</div>
<?php require('partials/footer.php') ?>
