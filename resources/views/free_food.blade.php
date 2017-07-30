<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Freefood</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('ramadhan/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ramadhan/font/roboto/Roboto-Regular.woff2') }}">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('ramadhan/css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('ramadhan/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark inverse fixed-top">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">CONTACT</a>
                    </li> 
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid freefood">
        <div class="container jumbo">
        <div class="jum">
            <h1 class="text-center text-white">FREE FOOD</h1>
                <div class="row">
                    <div class="col-md-4 txt">
                        <input type="text" class="input-alternate" placeholder="search for lecture location">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="input-alternate" placeholder="Yaba, Nigeria">
                    </div>
                    <div class="col-md-3">
                        <select class="form-control">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                         <button type="button" class="btn btn-success">Search</button>

                    </div>
                </div>
            
            
            
           
        </div>
        </div>
    </div>
    <div class="container-fluid freefood2"><br><br><br><br><br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 colimg" style="height: 200px; width: 100%;">
                            <div class="view overlay hm-white-slight">
                                <img src="{{ asset('ramadhan/img/Unilag-gate.jpg') }}" class="img-fluid" style="height: 200px; width: 100%;">
                                <p>
                                    <div class="mask waves-effect waves-light"></div>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 white" style="height: 200px; width: 100%;">
                            <h3>UNILAG MOSQUE</h3>
                            <p>Free iftor to all muslims and sahur</p>
                            <p><i class="fa fa-location"></i>Univrsity road 10011 Akoka, Yaba </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 colimg2" style="height: 200px; width: 100%;">
                            <div class="view overlay hm-white-slight">
                                <img src="{{ asset('ramadhan/img/Unilag-gate.jpg') }}" class="img-fluid" style="height: 200px; width: 100%;">
                                <p>
                                    <div class="mask waves-effect waves-light"></div>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 white" style="height: 200px; width: 100%;">
                            <h3>UNILAG MOSQUE</h3>
                            <p>Free iftor to all muslims and sahur</p>
                            <p><i class="fa fa-location"></i>Univrsity road 10011 Akoka, Yaba </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 colimg" style="height: 200px; width: 100%;">
                            <div class="view overlay hm-white-slight">
                                <img src="{{ asset('ramadhan/img/Unilag-gate.jpg') }}" class="img-fluid" style="height: 200px; width: 100%;">
                                <p>
                                    <div class="mask waves-effect waves-light"></div>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 white" style="height: 200px; width: 100%;">
                            <h3>UNILAG MOSQUE</h3>
                            <p>Free iftor to all muslims and sahur</p>
                            <p><i class="fa fa-location"></i>Univrsity road 10011 Akoka, Yaba </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 colimg2" style="height: 200px; width: 100%;">
                            <div class="view overlay hm-white-slight">
                                <img src="{{ asset('ramadhan/img/Unilag-gate.jpg') }}" class="img-fluid" style="height: 200px; width: 100%;">
                                <p>
                                    <div class="mask waves-effect waves-light"></div>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 white" style="height: 200px; width: 100%;">
                            <h3>UNILAG MOSQUE</h3>
                            <p>Free iftor to all muslims and sahur</p>
                            <p><i class="fa fa-location"></i>Univrsity road 10011 Akoka, Yaba </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 colimg" style="height: 200px; width: 100%;">
                            <div class="view overlay hm-white-slight">
                                <img src="{{ asset('ramadhan/img/Unilag-gate.jpg') }}" class="img-fluid" style="height: 200px; width: 100%;">
                                <p>
                                    <div class="mask waves-effect waves-light"></div>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 white" style="height: 200px; width: 100%;">
                            <h3>UNILAG MOSQUE</h3>
                            <p>Free iftor to all muslims and sahur</p>
                            <p><i class="fa fa-location"></i>University road 10011 Akoka, Yaba </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 colimg2" style="height: 200px; width: 100%;">
                            <div class="view overlay hm-white-slight">
                                <img src="{{ asset('ramadhan/img/Unilag-gate.jpg') }}" class="img-fluid" style="height: 200px; width: 100%;">
                                <p>
                                    <div class="mask waves-effect waves-light"></div>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 white" style="height: 200px; width: 100%;">
                            <h3>UNILAG MOSQUE</h3>
                            <p>Free iftor to all muslims and sahur</p>
                            <p><i class="fa fa-location"></i>Univrsity road 10011 Akoka, Yaba </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <nav style="margin-left: 600px;">
      <ul class="pagination">
        <li class="page-item disabled">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item active">
          <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
    
    

    <footer>
        <div class="container-fluid foot text-center">
            © 2015 Copyright: <a href="#"> ramadanIslam.com </a>
        </div>
    </footer>
            

    

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('ramadhan/js/jquery-3.1.1.min.js') }}">
    
       
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
        });
    </script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('ramadhan/js/tether.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('ramadhan/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('ramadhan/js/mdb.min.js') }}"></script>
    <script type="text/javascript">
        $('#formcontact').click(function(){
        
          //prevent a form from submitting if no email
          if((document.getElementById("form30").value == "") && (document.getElementById("form31").value == "")){
            document.getElementById("errorMessage").innerHTML = "please provide email and password";
            //to STOP the form from submiting
            return false;
          }
          else{
            //reset and allow the form to submit
            document.getElementById("errorMessage").innerHTML = "";
            return true;
          }
       })
    </script>
</body>

</html>