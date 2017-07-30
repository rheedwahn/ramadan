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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">HOME</span></a>
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
    </nav>

    <br><br><br>
    <div class="container">
        <div class="row">
    
            <div id="mdb-lightbox-ui"></div>

            

                <div class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(114).jpg" data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(114).jpg" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(42).jpg" data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(42).jpg" class="img-fluid" />
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(43).jpg" data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(43).jpg" class="img-fluid" />
                    </a>
                </div>
           
        </div>
    </div><br><br>
    <div class="container">
        <div class="row">
    
            <div id="mdb-lightbox-ui"></div>

                <div class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(114).jpg" data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(114).jpg" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(42).jpg" data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(42).jpg" class="img-fluid" />
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(43).jpg" data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(43).jpg" class="img-fluid" />
                    </a>
                </div>
           </div>
    </div><br>
    <footer>
        <div class="container-fluid foot text-center">
            © 2017 Copyright: <a href="#"> ramadanIslam.com </a>
        </div>
    </footer>
            

    
<script type="text/javascript">
    // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
        });
</script>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('ramadhan/js/jquery-3.1.1.min.js') }}">
    </script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('ramadhan/js/tether.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('ramadhan/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('ramadhan/js/mdb.min.js') }}"></script>
    <script type="text/javascript">
        /*$('#formcontact').click(function(){
        
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

            
        document.getElementById("demo").innerHTML = Date.parse(startdate).add(1).days();*/
    </script>
    <script type="text/javascript" src="{{ asset('ramadhan/js/jquery-2.2.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ramadhan/js/jquery.js') }}"></script>
</body>

</html>
