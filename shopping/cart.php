<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5c5946fe44.js" crossorigin="anonymous"></script>
    <title>Bookstore</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark" >
    <div class="container" style="margin-top: none">
        <a class="navbar-brand  text-white" href="#">Bookstore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active  text-white" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link  text-white" href="http://localhost/bookstore/contact.php">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active  text-white" aria-current="page" href="http://localhost/bookstore/shopping/cart.php"><i class="fas fa-shopping-cart"></i>(2)</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active  text-white" aria-current="page" href="http://localhost/bookstore/categories/index.php">Categories</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Username
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-white" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-white" href="#">Register</a>
            </li>
        </ul>
       
        </div>
    </div>
    </nav>

    <div class="container">   
    <div class="row d-flex justify-content-center align-items-center h-100 mt-5 mt-5">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                    <h6 class="mb-0 text-muted">2 items</h6>
                  </div>


                  <table class="table" height="190" >
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col"><a href="#" class="btn btn-danger text-white">Clear</a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="mb-4">
                        <th scope="row">1</th>
                        <td><img width="100" height="100"
                        src="../images/django.png"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </td>
                        <td>Django Book</td>
                        <td>$20</td>
                        <td><input id="form1" min="1" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" /></td>
                        <td>$120</td>
                        <td><a href="#" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i> </a></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td><img width="100" height="100"
                        src="../images/node.png"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </td>
                        <td>Node Book</td>
                        <td>$20</td>
                        <td><input id="form1" min="1" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" /></td>
                        <td>$120</td>
                        <td><a href="#" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i> </a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td><img width="100" height="100"
                        src="../images/html5.jpg"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </td>
                        <td>HTML5 Book</td>
                        <td>$20</td>
                        <td><input id="form1" min="1" name="quantity" value="1" type="number"
                        class="form-control form-control-sm" /></td>
                        <td>$120</td>
                        <td><a href="#" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i> </a></td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="#" class="btn btn-success text-white"><i class="fas fa-arrow-left"></i>  Continue Shopping</a>
                </div>
              </div>
              <div class="col-lg-4 bg-grey">
                <div class="p-5">
                  <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                  <hr class="my-4">

                  

                  <div class="d-flex justify-content-between mb-5">
                    <h5 class="text-uppercase">Total price</h5>
                    <h5>€ 137.00</h5>
                  </div>

                  <button type="button" class="btn btn-dark btn-block btn-lg"
                    data-mdb-ripple-color="dark">Checkout</button>

                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>

    </div>
  </div>  

    <footer class="bg-dark text-white text-center text-lg-start" style="margin-top: 40px">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Footer Content</h5>

                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                voluptatem veniam, est atque cumque eum delectus sint!
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled mb-0">
                <li>
                    <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                    <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                    <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                    <a href="#!" class="text-white">Link 4</a>
                </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Links</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                    <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                    <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                    <a href="#!" class="text-white">Link 4</a>
                </li>
                </ul>
            </div>
            <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
  </body>
 
</html>