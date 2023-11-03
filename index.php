<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row content d-flex justify-content-center align-items-center">
      <div class="col-md-5">
        <div class="box shadow bg-white p-4">
          <h3 class="mb-4 text-center fs-1">Login Form</h3>
          <form action="" class="mb-3" method="post">
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-0" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-0" id="floatingPassword" placeholder="password">
              <label for="floatingPassword">Password</label>
            </div>
            <div class="form-check mb-3">
              <input type="checkbox" class="form-check-input" id="autoSizingCheck2">
              <label class="form-check-label" for="autoSizingCheck2">Remember me</label>
            </div>
            <div class="d-grid gap-2 mb-3">
              <button type="submit" class="btn btn-primary btn-lg border-0 rounded-0">Login</button>
            </div>
            <div class="forget-password-link mb-3 text-right">
              <a href="#" title="Forget Password" class="text-decoration-none">Forget Password ?</a>
            </div>
          </form>
          <div class="sign-up-accounts">
            <p class="text-center">Or Sign Up</p>
            <div class="social-accounts d-flex justify-content-center">
              <a href="#" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
              <a href="#" title="Google"><i class="fa-brands fa-google"></i></a>
              <a href="#" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
              <a href="#" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/c26b72ee7e.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>