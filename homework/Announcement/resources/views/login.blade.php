<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Bootstrap core CSS -->
  <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-login.css" rel="stylesheet">

</head>

<body>
    <form class="form-signin" action="/login" method="POST">
      @csrf
        <img class="mb-4" src="image/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        @if(isset($result))
            <h6 class="red">{{$result}}</h6>
        @endif
        <label for="inputAccount" class="sr-only">Account</label>
        <input type="text" id="inputAccount" name="account" class="form-control" placeholder="Account" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
        <div class="checkbox mb-3" title="假的">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <a href="/user/create" class="btn btn-sm btn-secondary btn-block">Sign up</a>
        <p class="mt-5 mb-3 text-muted">Copyright By Toby &copy; 2019</p>
      </form>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
