<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Bootstrap core CSS -->
  <link href="/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/blog-login.css" rel="stylesheet">

</head>

<body>
    <form class="form-signin" method="POST" action="/user">
        @csrf
        <img class="mb-4" src="image/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
        @if(isset($result))
            <h6 class="red">{{$result}}</h6>
        @endif
        <label for="inputName" class="sr-only">Name</label>
        <input type="text" id="inputName" name="name" class="form-control" placeholder="Name" required="" autofocus="">
        <label for="inputAccount" class="sr-only">Account</label>
        <input type="text" id="inputAccount" name="account" class="form-control" placeholder="Account" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
        <button class="btn_submit btn btn-lg btn-primary btn-block" type="button">Confirm</button>
        <p class="mt-5 mb-3 text-muted">Copyright By Toby &copy; 2019</p>
      </form>

  <!-- Bootstrap core JavaScript -->
  <script src="/js/jquery/jquery.min.js"></script>
  <script src="/js/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/js/register.js"></script>

  
</body>

</html>
