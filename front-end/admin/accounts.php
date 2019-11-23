<!DOCTYPE html>
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
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <!-- <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">PROJECT NAME - Admin </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Confirm Accounts</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Statistics</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Action3</a>
      </div>
    </div> -->
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">ADMIN</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Log Out</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">VALIDATE</h1>
        <p>This page holds all the new accounts which are on hold for verification.</p>
        <p>Admin's role is tu check each individual account and Validate it or Decline the request.</p>
        <div class="row" style="margin-left:1em; margin-right: 1em;">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Location</th>
                <th scope="col">Accept / Decline</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>test@gmail.com</td>
                <td>07666777888</td>
                <td>Strada Bulevard</td>
                <td><button type="button" class="btn btn-success">Accept</button>  <button type="button" class="btn btn-danger">Decline</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>test@gmail.com</td>
                <td>07666777888</td>
                <td>Strada Bulevard</td>
                <td><button type="button" class="btn btn-success">Accept</button>  <button type="button" class="btn btn-danger">Decline</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>test@gmail.com</td>
                <td>07666777888</td>
                <td>Strada Bulevard</td>
                <td><button type="button" class="btn btn-success">Accept</button>  <button type="button" class="btn btn-danger">Decline</button></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>test@gmail.com</td>
                <td>07666777888</td>
                <td>Strada Bulevard</td>
                <td><button type="button" class="btn btn-success">Accept</button>  <button type="button" class="btn btn-danger">Decline</button></td>
              </tr>
            </tbody>
          </table>
        </div>
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
