<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">
  <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
  <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>
  <link href="{{asset('css/user.css')}}" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{('css/simple-sidebar.css')}}" rel="stylesheet">

</head>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-success border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">User Profile </div>
      <div class=" list-group ">
     <div id="accordion">
     <div class="card">
       <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
         Dashboard
      </a>
    </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
            <a href="{{route('country')}}" class="list-group-item list-group-item-dark">Country</a>
          <a href="{{route('country')}}" class="list-group-item list-group-item-action">City</a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
           Address
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
          <a href="{{route('country')}}" class="list-group-item list-group-item-dark">Country</a>
          <a href="{{route('country')}}" class="list-group-item list-group-item-action">City</a>
      </div>
    </div>
  </div>
  <a href="{{route('Category.view')}}" class="list-group-item list-group-item-action active">Category</a>
        <a href="{{route('userList')}}" class="list-group-item list-group-item-warning">User List</a>
        <a href="{{route('ownerList')}}" class="list-group-item list-group-item-action active">Owner List</a>
      <a href="#" class="list-group-item list-group-item-dark">Message</a>
        <a href="#" class="list-group-item list-group-item-warning ">CV Filer</a>
        <a href="#" class="list-group-item list-group-item-dark">Qusetion</a>
        <a href="#" class="list-group-item list-group-item-action active">Online Exam</a>
        <a href="#" class="list-group-item list-group-item-dark">Mark</a>
        <a href="{{route('adminLogout')}}" class="list-group-item list-group-item-dark">Logout</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg  bg-dark navbar-dark">
        <button class="btn bg-dark text-white" id="menu-toggle">
          <span class="navbar-toggler-icon"></span>
        </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('admin.index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid data-spy="scroll">

      @yield('contain')

      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
