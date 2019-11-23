<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Magazinul Perfect de Legume si nu numa</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Paper CSS -->
  <!-- <link rel="stylesheet" href="https://unpkg.com/papercss@1.6.1/dist/paper.min.css"> -->

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
      <a class="navbar-brand" href="#">TITLU UNKNOWN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown link
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="mx-2 my-auto d-inline" style="width:75% !important">
            <div class="input-group">
                <input type="text" class="form-control border border-right-0" placeholder="Search...">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary border border-left-0" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- IF USER IS NOT AUTHENTIFICATED -->
        <!-- <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LogIn</a>
          </li>
        </ul> -->

        <!-- IF USER IS AUTHENTIFICATED -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link " href="#"><img src="img/cart.png" style="width:40px"> </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="profiledropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><img src="img/user.png" style="width:40px"> </a>
            <div class="dropdown-menu" aria-labelledby="profiledropdown">
              <a class="dropdown-item" href="#">haha1</a>
              <a class="dropdown-item" href="#">haha1 action</a>
              <a class="dropdown-item" href="#">haha1 here</a>
            </div>
          </li>
        </ul>
      </div>
  </nav>

  <header class="market-header text-white">
        <div class="row">
          <div class="col-lg-2 category-box" style="background-image:url('img/categories/01.jpg'); background-size:cover;">
            <ul id="market-category-list">
              <li><h2>Legume</h2></li>
              <li><img src="img/VEG.png"></li>
            </ul>
          </div>
          <div class="col-lg-2 category-box" style="background-image:url('img/categories/02.jpg'); background-size:cover;">
            <ul id="market-category-list">
              <li><h2>Fructe</h2></li>
                <li><img src="img/FRU.png"></li>
            </ul>
          </div>
          <div class="col-lg-2 category-box" style="background-image:url('img/categories/03.jpg'); background-size:cover;">
            <ul id="market-category-list">
              <li><h2>Carne</h2></li>
                <li><img src="img/MEA.png"></li>
            </ul>
          </div>
          <div class="col-lg-2 category-box" style="background-image:url('img/categories/04.jpg'); background-size:cover;">
            <ul id="market-category-list">
              <li><h2>Miere</h2></li>
              <li><img src="img/HON.png"></li>
            </ul>
          </div>
          <div class="col-lg-2 category-box" style="background-image:url('img/categories/05.jpg'); background-size:cover;">
            <ul id="market-category-list">
              <li><h2>HAndMade</h2></li>
              <li><img src="img/HAN.png"></li>
            </ul>
          </div>
          <div class="col-lg-2 category-box" style="background-image:url('img/categories/06.jpg'); background-size:cover;">
            <ul id="market-category-list">
              <li><h2>Other</h2></li>
              <li><img src="img/PLU.png"></li>
            </ul>
          </div>
        </div>
    <!-- <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div> -->
  </header>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <nav style="width:100%">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active view-type" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><h5>Grid View</h5></a>
            <a class="nav-item nav-link view-type" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><h5>List View</h5></a>
            <a class="nav-item nav-link view-type" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><h5>Map View</h5></a>
          </div>
        </nav>
      </div>
      <br>
      <div class="row">
        <div class="tab-content" id="nav-tabContent" style="width:100%">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-grid-tab">
            <div class="row">
              <!-- GRID ROW -->
              <div class="card-deck">
                <div class="card">
                  <img class="card-img-top" src="img/tmb.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title<small class="text-muted"> Posted by <b>CIOKN</b></small></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button class="btn btn-info">INFO</button>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="img/tmb.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title<small class="text-muted"> Posted by <b>CIOKN</b></small></h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <button class="btn btn-info">INFO</button>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="img/tmb.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Vand Rosii albastre la vrac</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <button class="btn btn-info">INFO</button>
                  </div>
                </div>
              </div>
            </div>
              <!-- GRID ROW END -->
              <br>
              <!-- GRID ROW -->
            <div class="row">
              <div class="card-deck">
                <div class="card">
                  <img class="card-img-top" src="img/tmb.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title<small class="text-muted"> Posted by <b>CIOKN</b></small></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button class="btn btn-info">INFO</button>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="img/tmb.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title<small class="text-muted"> Posted by <b>CIOKN</b></small></h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <button class="btn btn-info">INFO</button>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="img/tmb.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Vand Rosii albastre la vrac<small class="text-muted"> Posted by <b>CIOKN</b></small></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
                    <button class="btn btn-info">INFO</button>
                  </div>
                </div>
              </div>
              <!-- GRID ROW END -->
            </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-list-tab">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Cras justo odio
                <span class="badge badge-primary badge-pill">14 <small>RON/KG</small></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #fffbe4">
                Dapibus ac facilisis in
                <span class="badge badge-primary badge-pill">2 <small>RON/KG</small></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Morbi leo risus
                <span class="badge badge-primary badge-pill">1 <small>RON/KG</small></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center"  style="background-color: #fffbe4">
                Morbi leo risus
                <span class="badge badge-primary badge-pill">1 <small>RON/KG</small></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Morbi leo risus
                <span class="badge badge-primary badge-pill">1 <small>RON/KG</small></span>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-map-tab">
            <div id="map" style="width: 100px;"></div>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANhILrWgqKfpB7ZurCUun4Dlxl9hzP2pU&callback=initMap" type="text/javascript"></script>
            <script>
              var map;
              function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                  center: {lat: -34.397, lng: 150.644},
                  zoom: 8
                });
              }
            </script>

          </div>
        </div>
      </div>
      <br>
      <div class="row align-items-center">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </section>
  <br>

  <!-- <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/03.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Let there be rock!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
