<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/jquery.datetimepicker.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-6">
                  <h3>Order Here</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h4>Order Your Test k</h4>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">Product Name</span>
                    </div>
                    <input type="text" class="form-control" name="address" required >
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">Address</span>
                    </div>
                    <input type="text" class="form-control" name="address" required >
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">
                          Phone
                          <img src="{{asset('frontend/img/flags/bd.png')}}" alt="BD" class="" style="    height: 24px; margin-left: 20px;">+88</span>
                    </div>
                    <input type="number" class="form-control" name="address" required >
                  </div>
                  <div class="form-group my-3">
                    <div class="row">
                      <div class="col-md-6 ml-auto">
                        <button type="submit" class="btn btn-success btn-block"> Submit
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <h4>Order Your Test M</h4>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">Medicine Name</span>    
                    </div>
                    <textarea class="form-control" name="" id="" cols="" rows="1"></textarea>
                  </div>
                  <div class="input-group mb-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                      <label class="custom-file-label" for="inputGroupFile01">Upload Prescription</label>
                    </div>
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">Address</span>
                    </div>
                    <input type="text" class="form-control" name="address" required >
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">
                          Phone
                          <img src="{{asset('frontend/img/flags/bd.png')}}" alt="BD" class="" style="    height: 24px; margin-left: 20px;">+88</span>
                    </div>
                    <input type="number" class="form-control" name="address" required >
                  </div>
                  <div class="form-group my-3">
                    <div class="row">
                      <div class="col-md-6 ml-auto">
                        <button type="submit" class="btn btn-success btn-block"> Submit
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                  <h4>Order Your Test F/P</h4>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">Resturant Name & Address</span>
                    </div>
                    <input type="text" class="form-control" name="address" required >
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">Food Name</span>
                    </div>
                    <input type="text" class="form-control" name="address" required >
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required"> Your Address</span>
                    </div>
                    <input type="text" class="form-control" name="address" required >
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">
                          Phone
                          <img src="{{asset('frontend/img/flags/bd.png')}}" alt="BD" class="" style="    height: 24px; margin-left: 20px;">+88</span>
                    </div>
                    <input type="number" class="form-control" name="address" required >
                  </div>
                  <div class="form-group my-3">
                    <div class="row">
                      <div class="col-md-6 ml-auto">
                        <button type="submit" class="btn btn-success btn-block"> Submit
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <h4>Order Your Test L</h4>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">Pick Up Date</span>
                    </div>
                    <input type="text" class="form-control datetime" name="pick_up_date" required>
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">Delivery Date</span>
                    </div>
                    <input type="text" class="form-control datetime" name="pick_up_date" required>
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">Address</span>
                    </div>
                    <input type="text" class="form-control" name="address" required >
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text required">
                          Phone
                          <img src="{{asset('frontend/img/flags/bd.png')}}" alt="BD" class="" style="    height: 24px; margin-left: 20px;">+88</span>
                    </div>
                    <input type="number" class="form-control" name="address" required >
                  </div>
                  <div class="form-group my-3">
                    <div class="row">
                      <div class="col-md-6 ml-auto">
                        <button type="submit" class="btn btn-success btn-block"> Submit
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{asset('frontend/js/jquery.datetimepicker.full.min.js')}}"></script>

    <script>
      $('.datetime').datetimepicker({
        formatTime:'g:i A'
      });
    </script>
  </body>
</html>
