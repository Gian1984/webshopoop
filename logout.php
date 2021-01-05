<?php session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
<body>

<section class="row main-image">
<div class="container">
<div class="card text-center mt-5 mx-auto" style="max-width:40rem;">
  <div class="card-header">
    Thank you to visit us!
  </div>
  <div class="card-body">
    <h5 class="card-title">Session ended correctly!</h5>
    <p class="card-text">If you arrive here, you can go to the login page or subscribe!</p>
    <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-outline-dark" href="checkout.php" role="button">Subcribe or Log in</a>
            <a class="btn btn-outline-dark" href="index.php" role="button">Home page</a>   
            
        </div>
  </div>
  <div class="card-footer text-muted">
    See you next time!
  </div>
</div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>