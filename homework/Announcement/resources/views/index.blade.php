<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Announcement List</title>

  <!-- Bootstrap core CSS -->
  <link href="/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/blog-home.css" rel="stylesheet">

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

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 style="display: inline-block;margin-right:10px;" class="my-4">Announcement</h1>
        <h6 style="display: inline-block;">very important thing , you should know</h6>
        <a href="/ann/create" class="btn btn-success btn_create">Create +</a>
        <!-- Blog Post -->
        @foreach ($ann_data as $ann)
          <div class="card mb-4">
            <img class="card-img-top" src="/image/{{$ann->ann_image}}" alt="{{$ann->ann_title}}">
            <div class="card-body toby-body">
              <h2 class="card-title">{{$ann->ann_title}}</h2>
              <a href="/ann/{{$ann->ann_id}}" class="btn btn-primary btn_detail">Detail &rarr;</a>
            </div>
            <div class="card-footer text-muted toby_footer">
              Posted on {{$ann->created_at}} by Toby
              @if(isset($_COOKIE['userdata']))
                @if(json_decode($_COOKIE['userdata'])->ud_admin == 1)
                  <a href="/ann/{{$ann->ann_id}}/delete" class="btn btn-danger btn_delete">Delete X</a>
                  <a href="/ann/{{$ann->ann_id}}/edit" class="btn btn-warning btn_modify">Modify &rarr;</a>
                @endif
              @endif
            </div>
          </div>
        @endforeach

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">List</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                  @foreach ($ann_data as $ann)
                    <li>
                      <a href="/ann/{{$ann->ann_id}}">{{$ann->ann_title}}</a>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

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

</body>

</html>
