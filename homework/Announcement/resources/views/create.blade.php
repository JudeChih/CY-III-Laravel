<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Announcement Detail</title>

  <!-- Bootstrap core CSS -->
  <link href="/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/ann">Anns</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              @if(!isset($_COOKIE['userdata']))
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              @else
              <li class="nav-item active">
                <a class="nav-link" href="/ann">Hey！{{json_decode($_COOKIE['userdata'])->ud_name}}
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/logout">Logout</a>
                </li>
              @endif
            </ul>
          </div>
        </div>
      </nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <form class="col-lg-12" action="/ann" method="POST" style="margin-bottom:20px;">
            @csrf
            <h2 style="margin-top:20px;">New Announcement</h2>
            <div class="form-group">
                <label for="title">Title：</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title">
            </div>
            <div class="form-group">
                <label for="image">Image：</label>
                <select class="form-control" name="image" id="image">
                    <option value="image01.png">image01.png</option>
                    <option value="image02.jpg">image02.jpg</option>
                    <option value="image03.jpg">image03.jpg</option>
                    <option value="image04.png">image04.png</option>
                    <option value="image05.jpg">image05.jpg</option>
                    <option value="image06.jpg">image06.jpg</option>
                    <option value="image07.png">image07.png</option>
                </select>
            </div>
            <div class="form-group">
                <label for="content">Content：</label>
                <textarea class="form-control" id="content" name="content" rows="3" placeholder="content"></textarea>
            </div>
            <button type="button" class="btn btn-primary btn_submit">Submit</button>
        </form>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright By Toby &copy; 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="/js/jquery/jquery.min.js"></script>
  <script src="/js/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/js/create.js"></script>

</body>

</html>
