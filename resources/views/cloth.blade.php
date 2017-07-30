<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ramadan</title>
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
                        <a class="nav-link" id="#contact">CONTACT</a>
                    </li> 
                    
                </ul>
            </div>
        </div>
    </nav><br><br><br><br><br><b><br>



   <!-- Nav tabs -->
    <div class="container">
        <ul class="nav nav-tabs tabs-3 bg-inverse" role="tablist">
            <li class="nav-item" style="width: 50%;">
                <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"> Clothes</a>
            </li>
            <li class="nav-item" style="width: 50%;">
                <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"> Food</a>
            </li>
            
        </ul>
        <!-- Tab panels -->
        <div class="tab-content">
            <!--Panel 1-->
            <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
                <br>
                <!--Naked Form-->
                <div class="card-block">
                    <!--Header-->
                    <div class="text-center">
                        <h1>Clothes</h1>
                        <hr class="mt-2 mb-2">
                    </div>

                    <!--Body-->
                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="form2" class="form-control">
                        <label for="form2">Full Name</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form2" class="form-control">
                        <label for="form2">Your email</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-phone prefix"></i>
                        <input type="number" id="form4" class="form-control">
                        <label for="form4">Phone number</label>
                    </div>
                    <textarea name="textarea" class="form-control" rows="3" required="required" placeholder="Comments"></textarea>

                    <div class="text-center">
                        <button class="btn inverse">Donate</button>
                    </div>
                </div>
            </div>
                    <!--/.Panel 1-->
                    <!--Panel 2-->
            <div class="tab-pane fade active" id="panel6" role="tabpanel">
                        <br>
                 <!--Naked Form-->
                <div class="card-block">

                    <!--Header-->
                    <div class="text-center">
                        <h1> Food</h1>
                        <hr class="mt-2 mb-2">
                    </div>

                    <!--Body-->
                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="form2" class="form-control">
                        <label for="form2">Full Name</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form2" class="form-control">
                        <label for="form2">Your email</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-phone prefix"></i>
                        <input type="number" id="form4" class="form-control">
                        <label for="form4">Phone number</label>
                    </div>
                    <textarea name="textarea" id="input" class="form-control text" rows="3" required="required" placeholder="Comment"></textarea>

                    <div class="text-center">
                        <button class="btn inverse">Donate</button>
                    </div>

                </div>
            </div><!--/.Panel 2-->
        </div>
    </div>

    <footer>
        <div class="container-fluid foot text-center">
            © 2017 Copyright: <a href="#"> ramadanIslam.com </a>
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

        function myFunction() {
              var msg = document.getElementById("az1");
              msg.scrollIntoView();
            }
    </script>
</body>

</html>
